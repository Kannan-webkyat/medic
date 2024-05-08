<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Edit College</title>
    <!-- main style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="libs/css/style.css" />



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="colleges">


        <div data-swup-name="edit-college"></div>
        <div class="page-header">
            <h1 class="page-title">Edit College</h1>
        </div>
        <?php
        include '../_class/dbConfig.php';
        $conn = (new dbConfig)->getConnection();
        $collgeId = $_GET['id'];

        include './action/college/CollegeManager.php';
        $collegeManager = new CollegeManager($conn);
        $college = $collegeManager->fetchEdit($collgeId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
            $about = filter_var($_POST['about'], FILTER_SANITIZE_SPECIAL_CHARS);
            $youtubeLink = filter_var($_POST['youtube-link'], FILTER_SANITIZE_SPECIAL_CHARS);
            $facility = $_POST['facility'] ?? [];
            $courses = $_POST['courses'] ?? [];
            $isDirectCollege = isset($_POST['direct-college']) ? 1 : 0;
            $isFeatured = isset($_POST['featured']) ? 1 : 0;
            $location = $_POST['location'];
            $collegeImages = $_FILES['images'] ?? [];


            $datas = compact('collgeId', 'title', 'about', 'youtubeLink', 'facility', 'courses', 'isDirectCollege', 'isFeatured', 'location', 'collegeImages');

            if ($collegeManager->edit($datas)) {
                header('Location: list-college.php');
            } else {
                echo 'error';
            }
        }
        ?>
        <section class="details">
            <div class="box-section">
                <div class="form-feild">
                    <form action="" method="POST" enctype="multipart/form-data" id="add-college">
                        <div class="flex form-group">

                            <div class="input-holder split-4">
                                <label for="">Title</label>
                                <input id="title" value="<?php echo $college['title'] ?>" required name="title" />
                            </div>

                            <div class="input-holder split-4">
                                <label for="">College Images</label>
                                <input id="images" name="images[]" multiple type="file" accept="image/*" />
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
                                        <option <?php echo $college['location_id'] === $location['id'] ? 'selected' : '' ?> value="<?php echo $location['id']; ?>"><?php echo $location['title']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="input-holder" style="width: 100%;">
                                <label for="">About College</label>
                                <textarea name="about" class="tiny" id="about"> <?php echo $college['about'] ?></textarea>
                            </div>

                            <div class="input-holder" style="width: 100%;">
                                <label for="">Youtube Link</label>
                                <textarea name="youtube-link" id="youtube-link"><?php echo $college['yt_url'] ?></textarea>
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
                                        <option <?php echo in_array($facility['id'], array_column($college['facilities'], 'facility_id')) ? 'selected' : '' ?> value="<?php echo $facility['id']; ?>"><?php echo $facility['title']; ?></option>
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
                                        <option <?php echo in_array($course['id'], array_column($college['courses'], 'course_id')) ? 'selected' : '' ?> value="<?php echo $course['id']; ?>"><?php echo $course['title']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="input-holder split-4">
                                <label for="">is Direct College?</label>
                                <input id="direct-college" <?php echo $college['direct'] ? 'checked' : '' ?> name="direct-college" type="checkbox" />
                            </div>

                            <div class="input-holder split-4">
                                <label for="">Featured </label>
                                <input id="featured" <?php echo $college['featured'] ? 'checked' : '' ?> name="featured" type="checkbox" />
                            </div>

                            <div class="input-holder" style="width: 100%;">
                                <label for="">College Images</label>
                                <?php
                                foreach ($college['images'] as $image) : ?>
                                    <div class="image-holder">
                                        <img width="250" src="./action/college/docs/<?php echo $image['image']; ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
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