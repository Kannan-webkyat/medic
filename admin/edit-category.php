<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Edit Category</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="category">
        <div data-swup-name="edit-category"></div>
        <div class="page-header">
            <h1 class="page-title">Edit Category</h1>
        </div>

        <?php
        $categoryId = isset($_GET['id']) ? $_GET['id'] : null;
        include './action/course-category/courseCategoryManager.php';
        include '../_class/dbConfig.php';

        $conn = (new dbConfig)->getConnection();
        $courseCategoryManager = new CouresCategoryManager($conn);

        $categoryData = null;
        if ($categoryId) {
            $categoryData = $courseCategoryManager->fetchEdit($categoryId);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
            $image = $_FILES['category-image'];

            $data = [
                'id' => $categoryId,
                'title' => $title,
                'image' => $image
            ];

            $result = $courseCategoryManager->edit($data);
            if ($result) {
                header('Location: list-category.php');
            } else {
                echo '<p class="error">Error updating category</p>';
            }
        }
        ?>

        <section class="details">
            <div class="box-section">
                <form action="" method="POST" enctype="multipart/form-data" id="edit-category">
                    <div class="flex">
                        <div class="input-holder split-4">
                            <label for="">Title</label>
                            <input id="title" name="title" value="<?php echo $categoryData['title'] ?>" />
                        </div>

                        <div class="input-holder split-4">
                            <label for="">Category Image</label>
                            <input id="category-image" name="category-image" type="file" />
                        </div>

                        <!-- Display current category image -->
                        <div class="input-holder split-4">
                            <label for="">Current Image</label>
                            <img width="250" src="./action/course-category/docs/<?php echo $categoryData['image']; ?>" alt="Current Image">
                        </div>

                    </div>
                    <button id="save_btn" type="submit">Save &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
                </form>
            </div>
        </section>
    </main>
</body>
<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<!-- global jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- tiny editor -->
<script src="https://cdn.tiny.cloud/1/43aunf39f890dvkf0odugutyswrwof33rftvvs52jrl27zli/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<!-- app js -->
<script type="module" src="src/app.js"></script>

</html>