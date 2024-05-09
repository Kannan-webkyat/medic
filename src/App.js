// hideloader

const swup = new Swup({
    plugins: [new SwupProgressPlugin()],
});

const namespaceManager = () => {
    const parentDiv = document.getElementById("swup");
    const innerDiv = parentDiv.querySelector("div");
    const currentNamespace = innerDiv.getAttribute("data-swup-name");

    switch (currentNamespace) {
        case "home":
            {
                const goalTrigger = document.querySelector(".goal-trigger");
                goalTrigger.addEventListener("click", function () {
                    const element = document.querySelector("#goal");
                    const elementPosition = element.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - 100;
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth",
                    });
                });
                const apply = document.querySelectorAll(".apply-trigger");
                apply.forEach((button) => {
                    button.addEventListener("click", function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        showPopup("apply");
                        return false;
                    });
                });

                let splides = document.querySelectorAll(".splide");
                splides.forEach((splide) => {
                    new Splide(splide, {
                        type: "loop",
                        perPage: 4,
                        gap: 10,
                        nav: false,
                        pagination: false,
                    }).mount();
                });

                basic();
            }
            break;
        case "about":
            {
                basic();
            }

            break;
        case "colleges":
            {
                courseBar();
                const apply = document.querySelectorAll(".apply-trigger");
                apply.forEach((button) => {
                    button.addEventListener("click", function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        showPopup("apply");
                        return false;
                    });
                });
                basic();
            }
            break;
        case "college-details":
            {
                new Splide(".splide", {
                    type: "loop",
                    perPage: 3,
                    gap: 10,
                    nav: false,
                    pagination: false,
                }).mount();

                // while window on scroll form fixed
                const form = document.querySelector(".form");

                window.addEventListener("scroll", function () {
                    const scrolled = window.scrollY; // Use window.scrollY for broader compatibility

                    if (scrolled > 350) {
                        form.classList.add("form-active");
                    } else {
                        form.classList.remove("form-active");
                    }
                });

                basic();
            }
            break;
        case "courses":
            {
                basic();
                // when click apply now show popup
            }
            break;
        case "course-details":
            {
                basic();
            }
            break;
        case "news":
            {
                basic();
            }
            break;
        case "contact":
            {
                basic();
            }
            break;
        case "book-now":
            {
                basic();
            }
            break;
    }
};

// Call the function
namespaceManager();

function basic() {
    const header = document.querySelector("header");
    const mega = header.querySelector(".mega-menu");
    const lists = mega.querySelectorAll(".left ul li");
    const subContainer = mega.querySelector(".right");

    lists.forEach((list) => {
        list.addEventListener("click", function () {
            if (this.classList.contains("has-sub")) {
                lists.forEach((list) => list.classList.remove("li-active"));
                this.classList.add("li-active");
            }
        });
    });
}

swup.hooks.on("page:view", (event) => {
    namespaceManager();
});

// show popup
function showPopup(prop) {
    const popup = document.querySelector(".popup");
    popup.style.display = "flex";

    // close
    popup.querySelector(".close").addEventListener("click", function () {
        popup.style.display = "none";
    });
}

function courseBar() {
    const changeTrigger = document.querySelectorAll(".change-course-trigger");
    const sidebar = document.querySelector(".side-bar-container");
    const searchCourse = sidebar.querySelector(".search-course");
    changeTrigger.forEach((button) => {
        button.addEventListener("click", function () {
            sidebar.classList.add("side-bar-active");
        });
    });
    const closeSidebar = sidebar.querySelector(".close");
    closeSidebar.addEventListener("click", function () {
        sidebar.classList.remove("side-bar-active");
        shimmer.style.display = "none";
    });

    console.log(searchCourse);
    // search
    searchCourse.addEventListener("input", function () {
        var filter = this.value.toLowerCase();
        var list = sidebar.querySelector("ul");
        var items = list.querySelectorAll("li");
        Array.from(items).forEach(function (item) {
            var text = item.textContent.toLowerCase();
            if (text.includes(filter)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
}
