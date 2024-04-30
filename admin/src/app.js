import Button from "./component/button/button.js";
import Header from "./component/header/Header.js";
import Loader from "./component/loader/Loader.js";
import Shimmer from "./component/shimmer/shimmer.js";
import Sidemenu from "./component/sidemenu/Sidemenu.js";
import Table from "./component/table/Table.js";
import Toaster from "./component/toaster/toaster.js";
import Assignmenu from "./component/assing-menu/Assign-menu.js";
import Remark from "./component/remark/Remark.js";

// sidemenu
const sidemenu = new Sidemenu();
sidemenu.render();
sidemenu.hint({
    target: "admission",
    content: `new`,
});

// header
const header = new Header();
header.render();

// shimmer
const shimmer = new Shimmer();
shimmer.render();

// Toster
const toaster = new Toaster();

// Loader
const loader = new Loader();

// barba.init({
//     debug: true,
//     views: [
//         {
//             namespace: "list-course",
//             beforeEnter() {
//                 // logCheck();
//                 // logout();
//                 loader.load();
//                 sidemenu.active("course");
//                 header.update("course", sidemenu.current().find("i")[0].outerHTML);
//                 loader.stop();
//                 return;
//                 const crued = import("http://localhost/medic/server/CRUED.js");
//                 let table = new Table($("#list_category")[0]);

//                 // get cateogyr
//                 fetch("./action/get-category.php")
//                     .then((x) => x.json())
//                     .then((y) => {
//                         const data = y.data;
//                         if (data.length) {
//                             loader.stop();
//                             let slno = 0;
//                             data.map((row) => {
//                                 slno++;

//                                 const { id, category } = row;
//                                 const rowContent = [slno, category];
//                                 table.addRow(rowContent, id, null);
//                                 table.actions({
//                                     edit: `http://localhost/medic/edit-category.html?id=${id}`,
//                                     delete: async (id) => {
//                                         const data = {
//                                             category_id: id,
//                                         };
//                                         crued.then((option) => {
//                                             option._del_block("action/delete-category.php", data).then((response) => {
//                                                 console.log(response);
//                                                 if (table.rowCount() == 0) {
//                                                     table.empty();
//                                                 }
//                                                 toaster.trigger({
//                                                     content: "You have blocked this promoter",
//                                                     timeout: 2000,
//                                                     type: "success",
//                                                 });
//                                             });
//                                         });
//                                     },
//                                 });
//                             });
//                         } else {
//                             table.empty();
//                             loader.stop();
//                         }
//                     });
//             },
//         },

//         {
//             namespace: "add-course",
//             beforeEnter() {
//                 // logCheck();
//                 // logout();
//                 loader.load();
//                 sidemenu.active("course");
//                 header.update("course", sidemenu.current().find("i")[0].outerHTML);
//                 loader.stop();
//                 initTiny();
//             },
//         },
//         {
//             namespace: "list-college",
//             beforeEnter() {
//                 // logCheck();
//                 // logout();
//                 loader.load();
//                 sidemenu.active("colleges");
//                 header.update("colleges", sidemenu.current().find("i")[0].outerHTML);
//                 loader.stop();
//             },
//         },
//         {
//             namespace: "add-college",
//             beforeEnter() {
//                 // logCheck();
//                 // logout();
//                 loader.load();
//                 sidemenu.active("course");
//                 header.update("course", sidemenu.current().find("i")[0].outerHTML);
//                 loader.stop();
//                 initTiny();
//             },
//         },
//     ],
// });

// function logCheck() {
//   fetch("action/checkLoginAdmin.php")
//     .then((response) => response.json())
//     .then((data) => {
//       // console.log(data);
//       if (data[0]["info"] != "true") {
//         location.replace("http://localhost/medic/index");
//       }
//     });
// }

// function logout() {
//   $(".logout").click((x) => {
//     x.preventDefault();

//     fetch("action/logout.php")
//       .then((response) => response.json())
//       .then((data) => {
//         if (data == 1) {
//           location.href = "http://localhost/medic/index";
//         }
//       });
//   });
// }

function initTiny() {
    tinymce.init({
        selector: "textarea.tiny",
        plugins:
            "anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown",
        toolbar:
            "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat",
        tinycomments_mode: "embedded",
        tinycomments_author: "Author name",
        mergetags_list: [
            { value: "First.Name", title: "First Name" },
            { value: "Email", title: "Email" },
        ],
        ai_request: (request, respondWith) =>
            respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
}

// hideloader
const swup = new Swup({
    plugins: [new SwupProgressPlugin()],
});

const namespaceManager = () => {
    const parentDiv = document.getElementById("swup");
    const innerDiv = parentDiv.querySelector("div");
    const currentNamespace = innerDiv.getAttribute("data-swup-name");

    switch (currentNamespace) {
        case "list-course":
            {
                loader.load();
                sidemenu.active("course");
                header.update("course", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "add-course":
            {
                loader.load();
                sidemenu.active("course");
                header.update("course", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "edit-course":
            {
                loader.load();
                sidemenu.active("course");
                header.update("course", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "list-college":
            {
                loader.load();
                sidemenu.active("colleges");
                header.update("colleges", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "add-college":
            {
                loader.load();
                sidemenu.active("colleges");
                header.update("colleges", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "edit-college":
            {
                loader.load();
                sidemenu.active("colleges");
                header.update("colleges", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "list-category":
            {
                loader.load();
                sidemenu.active("category");
                header.update("category", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "add-category":
            {
                loader.load();
                sidemenu.active("category");
                header.update("category", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "edit-category":
            {
                loader.load();
                sidemenu.active("category");
                header.update("category", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "list-location":
            {
                loader.load();
                sidemenu.active("location");
                header.update("location", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "add-location":
            {
                loader.load();
                sidemenu.active("location");
                header.update("location", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "edit-location":
            {
                loader.load();
                sidemenu.active("location");
                header.update("location", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "list-facility":
            {
                loader.load();
                sidemenu.active("facility");
                header.update("facility", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "add-facility":
            {
                loader.load();
                sidemenu.active("facility");
                header.update("facility", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "edit-facility": {
            loader.load();
            sidemenu.active("facility");
            header.update("facility", sidemenu.current().find("i")[0].outerHTML);
            loader.stop();
        }
        case "list-course-collection":
            {
                loader.load();
                sidemenu.active("course-collection");
                header.update("course-collection", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "add-course-collection":
            {
                loader.load();
                sidemenu.active("course-collection");
                header.update("course-collection", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "edit-course-collection":
            {
                loader.load();
                sidemenu.active("course-collection");
                header.update("course-collection", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "list-college-collection":
            {
                loader.load();
                sidemenu.active("college-collection");
                header.update("college-collection", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
        case "add-college-collection":
            {
                loader.load();
                sidemenu.active("college-collection");
                header.update("college-collection", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
                initTiny();
            }
            break;
        case "edit-college-collection":
            {
                loader.load();
                sidemenu.active("college-collection");
                header.update("college-collection", sidemenu.current().find("i")[0].outerHTML);
                loader.stop();
            }
            break;
    }
};

// Call the function
namespaceManager();

swup.hooks.on("page:view", (event) => {
    namespaceManager();
});