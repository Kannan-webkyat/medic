<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Edit Course</title>
    <!-- main style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="libs/css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
<main id="swup" class="transition-fade" page-ref="course">
    <div data-swup-name="edit-course"></div>
    <div class="page-header">
        <h1 class="page-title">Edit Course</h1>
    </div>

    <section class="details">
        <div class="box-section">
            <?php
            if (isset($_GET['id'])) {
                include '../_class/dbConfig.php';
                include './action/course/CourseManager.php';
                $conn          = (new dbConfig)->getConnection();
                $courseId      = $_GET['id'];
                $courseManager = new CourseManager($conn);
                $course        = $courseManager->fetchEdit($courseId);
            }


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'id'                => $courseId,
                    'title'             => filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS),
                    'about'             => filter_var($_POST['about'], FILTER_SANITIZE_SPECIAL_CHARS),
                    'duration'          => filter_var($_POST['duration'], FILTER_SANITIZE_SPECIAL_CHARS),
                    'elegibitliy'       => filter_var($_POST['elegibitliy'], FILTER_SANITIZE_SPECIAL_CHARS),
                    'minimumAge'        => filter_var($_POST['minimum-age'], FILTER_SANITIZE_SPECIAL_CHARS),
                    'minimumPercentage' => filter_var($_POST['minimum-percentage'], FILTER_SANITIZE_SPECIAL_CHARS),
                    'jobOpertunity'     => filter_var($_POST['job-opertunity'], FILTER_SANITIZE_SPECIAL_CHARS),
                    'bannerImage'       => $_FILES['image'],
                    'categoryId'        => filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT)
                ];

                $result = $courseManager->edit($data);
                if ($result) {
                    header('Location: list-course.php');
                } else {
                    echo '<p class="error">Error updating course</p>';
                }
            }
            ?>
            <div class="form-feild">
                <form action="" method="POST" enctype="multipart/form-data" id="edit-course">
                    <div class="flex form-group">
                        <!-- title -->
                        <div class="input-holder split-4">
                            <label for="">Title</label>
                            <input id="title" name="title" value="<?php echo $course['title']; ?>"/>
                        </div>

                        <!-- main banner image -->
                        <div class="input-holder split-4">
                            <label for="">Main Banner Image</label>
                            <input id="image" name="image" type="file"/>
                        </div>
                        <!-- end of main banner image -->

                        <?php
                        include './action/course-category/courseCategoryManager.php';
                        $categoryObj = new CouresCategoryManager($conn);
                        $categories  = $categoryObj->list();
                        ?>
                        <div class="input-holder split-4">
                            <label for="">Course Category</label>
                            <select name="category" id="category" required>
                                <option value="">Select category</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option <?php echo $course['category_id'] === $category['id'] ? "selected" : "" ?> value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- about course -->
                        <div class="input-holder" style="width: 100%;">
                            <label for="">About Course</label>
                            <textarea name="about" class="tiny" id="about-course"><?php echo $course['about']; ?></textarea>
                        </div>
                        <!--end of about course -->

                        <!-- duration -->
                        <div class="input-holder split-4">
                            <label for="">Duration</label>
                            <input type="text" id="duration" name="duration" value="<?php echo $course['duration']; ?>"/>
                        </div>
                        <!-- end of duration -->

                        <!-- duration -->
                        <div class="input-holder split-4" style="width: 100%;">
                            <label for=""> Elegibitliy</label>
                            <input type="text" id="elegibitliy" name="elegibitliy" value="<?php echo $course['eligibility']; ?>"/>
                        </div>
                        <!-- end of duration -->


                        <!-- Minimum age -->
                        <div class="input-holder split-4">
                            <label for="">Minimum Age</label>
                            <input type="text" id="minimum-age" name="minimum-age" value="<?php echo $course['minimum_age']; ?>"/>
                        </div>
                        <!-- end of Minimum age -->

                        <!-- Minimum Percentage -->
                        <div class="input-holder split-4">
                            <label for="">Minimum Percentage</label>
                            <input type="text" id="minimum-percentage" name="minimum-percentage" value="<?php echo $course['minimum_percentage']; ?>"/>
                        </div>
                        <!-- end of Minimum Percentage -->

                        <!-- Job Opertunity -->
                        <div class="input-holder split-4">
                            <label for="">Job Opertunity </label>
                            <input type="text" id="job-opertunity " name="job-opertunity" value="<?php echo $course['job_opportunity']; ?>"/>
                        </div>

                        <!-- Display current banner image -->
                        <div class="input-holder split-4">
                            <label for="">Current Banner Image</label>
                            <img width="250" src="./action/course/docs/<?php echo $course['banner_image']; ?>" alt="Current Banner Image">
                        </div>

                    </div>
                    <button id="save_btn" type="submit">Save &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
                </form>
            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="src/app.js"></script>

</html>