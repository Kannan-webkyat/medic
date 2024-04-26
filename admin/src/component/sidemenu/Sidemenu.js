{
    /* <li><a link-ref="temp_category" href="template-category.html"><i class="fas fa-boxes"></i> &nbsp; Template Category</a></li>
    < li > <a link-ref="templates" href="template-list.html"><i class="fas fa-folder-plus"></i> &nbsp; Templates</a></> */
}

class Sidemenu {
    constructor() {
        this.isRendered = false;
    }

    render() {
        if (!this.isRendered) {
            let template = `
            <nav class="sidemenu">
                <div class="header">
                <div class="logo" style="width:100px; display:flex; align-items:center; justify-content:center;">
                        <img style="width:100%;" src="../assets/images/logo/logo.png" alt="">
                    </div>
                </div>
                <div class="navigation">
                    <ul>
                        <li><a link-ref="course" href="list-course.php"><i class="fas fa-user-tie"></i> &nbsp; Courses</a></li>
                        <li><a link-ref="colleges" href="list-college.php"><i class="fas fa-user-tie"></i> &nbsp; Colleges</a></li>     
                    </ul>
                </div>
            </nav>`;
            $("body").prepend(template);
            this.#setup();
        }
    }

    #setup() {
        // active class
        const links = $(".navigation ul li a");
        links.click((e) => {
            e.preventDefault();
            links.removeClass("active");
            $(e.target).addClass("active");
        });
    }

    active(para) {
        if (!this.isRendered) {
            const links = $(".navigation ul li a");
            links.each(function () {
                const link = $(this).attr("link-ref");
                if (para == link) {
                    links.removeClass("active");
                    $(this).addClass("active");
                }
            });
            this.isRendered = true;
        }
    }

    hint(para) {
        const { target, content } = para;
        let template = `<div class="hint">${content}</div>`;
        const links = $(".navigation ul li a");
        links.each(function () {
            const link = $(this).attr("link-ref");
            if (target == link) {
                $(this).append(template);
            }
        });
    }

    current() {
        const links = $(".navigation ul li .active");
        return links;
    }
}
export default Sidemenu;
