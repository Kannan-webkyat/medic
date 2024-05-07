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
                basic();
            }
            break;
        case "college-details":
            {
                basic();
            }
            break;
        case "courses":
            {
                basic();
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
    // trigger sidebar

    const sidebar = document.querySelector(".side-bar");
    const shimmer = document.querySelector(".shimmer");

    sidebar.classList.add("side-bar-active");
    shimmer.style.display = "block";

    // close
    const closeSidebar = sidebar.querySelector(".close");
    closeSidebar.addEventListener("click", function () {
        sidebar.classList.remove("side-bar-active");
        shimmer.style.display = "none";
    });
}
swup.hooks.on("page:view", (event) => {
    namespaceManager();
});
