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
        // alert();
        basic();
        $(".slides").owlCarousel({
          loop: true,
          margin: 13,
          responsiveClass: true,
          nav: false,
          dots: false,
          stagePadding: 20,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 3,
            },
            1000: {
              items: 4,
            },
          },
        });
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
  }
};

// Call the function
namespaceManager();

function basic() {
  $(".loader-container").fadeOut(1000);

  $("html, body").scrollTop(0);
}
swup.hooks.on("page:view", (event) => {
  namespaceManager();
});
