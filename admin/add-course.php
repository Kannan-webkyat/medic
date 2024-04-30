<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Add Course</title>
    <!-- main style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="libs/css/style.css" />



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="course">
        <div data-swup-name="add-course"></div>
        <div class="page-header">
            <h1 class="page-title">Add Course</h1>
        </div>

        <section class="details">
            <div class="box-section">
                <div class="form-feild">
                    <form action="" method="POST" enctype="multipart/form-data" id="add-course">
                        <div class="flex form-group">
                            <!-- title -->
                            <div class="input-holder split-4">
                                <label for="">Title</label>
                                <input id="title" name="title" required />
                            </div>

                            <!-- main banner image -->
                            <div class="input-holder split-4">
                                <label for="">Main Banner Image</label>
                                <input id="banner-image" name="banner-image" required type="file" />
                            </div>
                            <!-- end of main banner image -->

                            <!-- fetching locations -->
                            <?php
                            include '../_class/dbConfig.php';
                            include './action/course-category/courseCategoryManager.php';

                            $conn = (new dbConfig)->getConnection();
                            $categoryObj = new CouresCategoryManager($conn);
                            $categories = $categoryObj->list();
                            ?>
                            <div class="input-holder split-4">
                                <label for="">Course Category</label>
                                <select name="category" id="category" required>
                                    <option value="">Select category</option>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- about course -->
                            <div class="input-holder" style="width: 100%;">
                                <label for="">About Course</label>
                                <textarea name="about" class="tiny" id="about"></textarea>
                            </div>
                            <!--end of about course -->

                            <!-- duration -->
                            <div class="input-holder split-4">
                                <label for="">Duration</label>
                                <input type="text" required id="duration" name="duration" />
                            </div>
                            <!-- end of duration -->

                            <!-- duration -->
                            <div class="input-holder split-4" style="width: 100%;">
                                <label for=""> Elegibitliy</label>
                                <input type="text" required id="elegibitliy" name="elegibitliy" />
                            </div>
                            <!-- end of duration -->

                            <!-- Minimum age -->
                            <div class="input-holder split-4">
                                <label for="">Minimum Age</label>
                                <input type="text" required id="minimum-age" name="minimum-age" />
                            </div>
                            <!-- end of Minimum age -->

                            <!-- Minimum Percentage -->
                            <div class="input-holder split-4">
                                <label for="">Minimum Percentage</label>
                                <input type="text" required id="minimum-percentage" name="minimum-percentage" />
                            </div>
                            <!-- end of Minimum Percentage -->

                            <!-- Job Opertunity -->
                            <div class="input-holder split-4">
                                <label for="">Job Opertunity </label>
                                <input type="text" required id="job-opertunity" name="job-opertunity" />
                            </div>
                            <!-- end of Job Opertunity -->
                        </div>
                        <button id="save_btn" type="submit">Create &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
                    </form>
                </div>
            </div>
        </section>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
            $about = filter_var($_POST['about'], FILTER_SANITIZE_SPECIAL_CHARS);
            $duration = filter_var($_POST['duration'], FILTER_SANITIZE_SPECIAL_CHARS);
            $elegibitliy = filter_var($_POST['elegibitliy'], FILTER_SANITIZE_SPECIAL_CHARS);
            $minimumAge = filter_var($_POST['minimum-age'], FILTER_SANITIZE_SPECIAL_CHARS);
            $minimumPercentage = filter_var($_POST['minimum-percentage'], FILTER_SANITIZE_SPECIAL_CHARS);
            $jobOpertunity = filter_var($_POST['job-opertunity'], FILTER_SANITIZE_SPECIAL_CHARS);
            $bannerImage = $_FILES['banner-image'];
            $category = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);

            $data = [
                'title' => $title,
                'about' => $about,
                'duration' => $duration,
                'elegibitliy' => $elegibitliy,
                'minimumAge' => $minimumAge,
                'minimumPercentage' => $minimumPercentage,
                'jobOpertunity' => $jobOpertunity,
                'bannerImage' => $bannerImage,
                'categoryId' => $category
            ];

            include './action/course/CourseManager.php';
            $obj = new CourseManager($conn);
            if ($obj->add($data)) {
                echo "<script>window.location = 'list-course.php';</script>";
                exit();
            } else {
                echo "Course could not be added. Please try again.";
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="src/app.js"></script>

</html>