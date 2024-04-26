<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>All Locations</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="Location">
        <div data-swup-name="list-location"></div>
        <div class="page-header">
            <h1 class="page-title">Locations</h1>
        </div>
        <div class="table-options">
            <div class="option">
                <a href="add-location.php"><button class="assign_button">Add location<ion-icon name="add-outline">
                        </ion-icon></button></a>
            </div>
            <!-- <div class="option">
                <input id="searchFilter" type="text" placeholder="Search Students">
            </div> -->
        </div>
        <div class="content">
            <div class="table-container">
                <table id="list-location">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Course</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <ul id="pagination-demo" class="pagination-sm"></ul>
        </div>
    </main>
</body>

<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- global jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- app js -->
<!-- tiny editor -->
<script src="https://cdn.tiny.cloud/1/43aunf39f890dvkf0odugutyswrwof33rftvvs52jrl27zli/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script type="module" src="src/app.js"></script>

</html>