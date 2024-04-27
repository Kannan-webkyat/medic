<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Add Course Collection</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="course-collection">


        <div data-swup-name="add-course-collection"></div>
        <div class="page-header">
            <h1 class="page-title">Add Course Collection</h1>
        </div>

        <section class="details">
            <div class="box-section">
                <form action="" method="POST" enctype="multipart/form-data" id="add-course-collection">
                    <div class="flex">

                        <div class="input-holder split-4">
                            <label for="">Title</label>
                            <input id="title" required name="title" />

                        </div>

                        <div class="input-holder split-4">
                            <label for="">Select Courses</label>
                            <select required id="courses" name="courses[]" multiple>
                                <?php
                                include '../_class/dbConfig.php';
                                include './action/course/CourseManager.php';
                                $conn = (new dbConfig)->getConnection();
                                $courseManager = new CourseManager($conn);
                                $courses = $courseManager->list();
                                foreach ($courses as $course) : ?>
                                    <option value="<?php echo $course['id']; ?>"><?php echo $course['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <button id="save_btn" type="submit">Create &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
                </form>
            </div>
        </section>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
            $courses = isset($_POST['courses']) ? $_POST['courses'] : array();
            $datas = [
                'title' => $title,
                'courses' => $courses,
            ];
            include './action/course-collection/CourseCollectionManager.php';
            $courseCollectionManager = new CourseCollectionManager($conn);
            if ($courseCollectionManager->add($datas)) {
                header('Location: list-course-collection.php');
            } else {
                echo 'error';
            }
        }
        ?>
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