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
                let collections = document.querySelectorAll(".collections");
                collections.forEach((collection) => {
                    new Splide(collection, {
                        type: "loop",
                        perPage: 4,
                        gap: 10,
                        nav: false,
                        pagination: false,
                        breakpoints: {
                            1200: {
                                perPage: 3,
                            },
                            900: {
                                perPage: 2,
                                nav: false,
                                padding: "1rem",
                                arrows: false,
                            },
                            768: {
                                destroy: true,
                            },
                        },
                    }).mount();
                });

                const destination = document.querySelector(".destination");
                new Splide(destination, {
                    type: "loop",
                    perPage: 6,
                    gap: 10,
                    nav: false,
                    pagination: false,
                    breakpoints: {
                        900: {
                            perPage: 4,
                        },
                        500: {
                            perPage: 2,
                            nav: false,
                            padding: "1rem",
                            arrows: false,
                        },
                    },
                }).mount();

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

                // filters

                // const filter = document.querySelector(".filter");
                // // clear filter
                // const clear = filter.querySelector(".clear");
                // clear.addEventListener("click", function () {
                //     location.href = "http://localhost/medic/colleges";
                // });
                // // on location change
                // const location = filter.querySelector("#location-select");
                // location.addEventListener("change", function () {
                //     const value = this.value;
                //     if (value != "") {
                //         window.location.href = `http://localhost/medic/colleges/location:${value}`;
                //     }
                // });

                class Filter {
                    constructor() {
                        this.filter = null;
                    }
                    clear() { }
                    recommended() { }
                    location() { }
                    redirect() { }
                    events() { }
                }

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
                    autoplay: true,
                    interval: 1000,
                    pauseOnHover: true,
                    pauseOnFocus: true,
                    breakpoints: {
                        768: {
                            perPage: 1,
                            padding: "2rem",
                            arrows: false,
                        },
                    },
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
    const dropTrigger = document.querySelectorAll(".drop-trigger");
    const mega = header.querySelector(".mega-menu-container");
    const lists = mega.querySelectorAll(".left ul li");
    const subContainer = mega.querySelector(".right");
    const close = mega.querySelector(".close");
    close.addEventListener("click", function () {
        mega.classList.remove("mega-menu-active");
    });
    dropTrigger.forEach((trigger) => {
        trigger.addEventListener("click", function (e) {
            e.preventDefault();
            mega.classList.add("mega-menu-active");
        });
    });

    lists.forEach((list) => {
        list.addEventListener("mouseenter", function () {
            if (this.classList.contains("has-sub")) {
                lists.forEach((list) => list.classList.remove("li-active"));
                this.classList.add("li-active");
            }
        });
    });

    const apply = document.querySelectorAll(".apply-trigger");
    apply.forEach((button) => {
        console.log(button);
        button.addEventListener("click", function (e) {
            e.stopPropagation();
            e.preventDefault();
            if (this.closest(".cards")) {
                const card = this.closest(".cards");
                const h4 = card.querySelector("h4");

                showPopup("apply", h4.textContent);
            } else {
                showPopup("book");
            }
            return false;
        });
    });
}

swup.hooks.on("page:view", (event) => {
    namespaceManager();
});

// show popup
function showPopup(prop, title) {
    let template = "";
    if (prop == "apply") {
        template = `Looking for admission at the <span><b>${title}.</b></span> Give us your details and we will help you`;
    } else if (prop == "book") {
        template = "Get a Free Consultation from Medic Guidance Experts";
    }

    // set headline
    const popup = document.querySelector(".popup");
    popup.querySelector("h3").innerHTML = "";
    popup.querySelector("h3").insertAdjacentHTML("beforeend", template);
    popup.style.display = "flex";

    // close
    popup.querySelector(".close").addEventListener("click", function () {
        popup.style.display = "none";
    });

    // form submission
    document.querySelector(".pop-up-form").addEventListener("submit", function (e) {
        e.preventDefault();

        let fd = new FormData();
        fd.append("name", popup.querySelector("#name").value);
        fd.append("email", popup.querySelector("#email").value);
        fd.append("phone", popup.querySelector("#phone").value);
        fd.append("for", popup.querySelector("h3 span b").textContent);
        fd.append("whatsapp-noti", popup.querySelector("#whatsapp-noti") ? (popup.querySelector("#whatsapp-noti").checked ? 1 : 0) : 0);

        // ajax to submit this value
        fetch("http://localhost/medic/action/submitForm.php", {
            method: "POST",
            body: fd,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.status) {
                    console.log(data.message)
                    // add success alert here
                } else {
                    console.log(data.message)
                }
            })
            .catch((error) => console.error("Error:", error));
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

function triggerCourseBar(prop) {
    if (prop == "show") {
    } else {
    }
}
