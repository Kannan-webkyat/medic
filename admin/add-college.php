<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Add College</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="colleges">

        <?php
        include '../_class/dbConfig.php';
        $conn = (new dbConfig)->getConnection();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
            $about = filter_var($_POST['about'], FILTER_SANITIZE_SPECIAL_CHARS);
            $youtubeLink = filter_var($_POST['youtube-link'], FILTER_SANITIZE_SPECIAL_CHARS);
            $facility = isset($_POST['facility']) ? $_POST['facility'] : array();
            $courses = isset($_POST['courses']) ? $_POST['courses'] : array();
            $isDirectCollege = isset($_POST['direct-college']) ? 1 : 0;
            $isFeatured = isset($_POST['featured']) ? 1 : 0;
            $location = $_POST['location'];
            $collegeImages = isset($_FILES['images']) ? $_FILES['images'] : array();

            $datas = [
                'title' => $title,
                'about' => $about,
                'youtubeLink' => $youtubeLink,
                'facility' => $facility,
                'courses' => $courses,
                'isDirectCollege' => $isDirectCollege,
                'isFeatured' => $isFeatured,
                'location' => $location,
                'collegeImages' => $collegeImages,
            ];

            include './action/college/CollegeManager.php';
            $collegeManager = new CollegeManager($conn);
            if ($collegeManager->add($datas)) {
                header('Location: list-college.php');
            } else {
                echo 'error';
            }
        }
        ?>
        <div data-swup-name="add-college"></div>
        <div class="page-header">
            <h1 class="page-title">Add College</h1>
        </div>

        <section class="details">
            <div class="box-section">
                <form action="" method="POST" enctype="multipart/form-data" id="add-college">
                    <div class="flex">

                        <div class="input-holder split-4">
                            <label for="">Title</label>
                            <input id="title" required name="title" />

                        </div>
                        <div class="input-holder split-4">
                            <label for="">College Images</label>
                            <input id="images" required name="images[]" multiple type="file" accept="image/*" />
                        </div>
                        <!-- fetching locations -->
                        <?php
                        include './action/location/LocationManager.php';
                        $locationObj = new LocationManager($conn);
                        $loactions = $locationObj->list();
                        ?>
                        <div class="input-holder split-4">
                            <label for="">Location</label>
                            <select name="location" id="location" required>
                                <option value="">Select Location</option>
                                <?php foreach ($loactions as $location) : ?>
                                    <option value="<?php echo $location['id']; ?>"><?php echo $location['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="input-holder" style="width: 100%;">
                            <label for="">About College</label>
                            <textarea name="about" class="tiny" id="about"></textarea>
                        </div>

                        <div class="input-holder" style="width: 100%;">
                            <label for="">Youtube Link</label>
                            <textarea name="youtube-link" id="youtube-link"></textarea>
                        </div>

                        <div class="input-holder split-4">
                            <label for="">Choose facility </label>
                            <select name="facility[]" id="facility" multiple required>
                                <option value="">Select Facility</option>
                                <?php
                                include './action/facility/FacilityManager.php';
                                $facilityManager = new FacilityManager($conn);
                                $facilities = $facilityManager->list();
                                foreach ($facilities as $facility) : ?>
                                    <option value="<?php echo $facility['id']; ?>"><?php echo $facility['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="input-holder split-4">
                            <label for="">Pick Courses Provided by the college </label>
                            <select name="courses[]" id="courses" multiple required>
                                <option value="">Select Course</option>
                                <?php
                                include './action/course/CourseManager.php';
                                $courseManager = new CourseManager($conn);
                                $courses = $courseManager->list();
                                foreach ($courses as $course) : ?>
                                    <option value="<?php echo $course['id']; ?>"><?php echo $course['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="input-holder split-4">
                            <label for="">is Direct College?</label>
                            <input id="direct-college" name="direct-college" type="checkbox" />
                        </div>

                        <div class="input-holder split-4">
                            <label for="">Featured </label>
                            <input id="featured" name="featured" type="checkbox" />
                        </div>
                    </div>
                    <button id="save_btn" type="submit">Create &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
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