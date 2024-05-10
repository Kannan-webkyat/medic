<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="http://localhost/medic/src/splide.min.css">


</head>

<main id="swup" class="transition-fade">
    <div data-swup-name="courses"></div>
    <!-- header -->
    <?php
    include './ui/Header.php';
    include './ui/Popup.php';
    pageHeader($conn);
    ?>
    <!-- loader -->
    <div class="loader-container">
        <div class="loader">

        </div>
    </div>
    <!-- header -->
    <div id="fixed-menu">
        <ul>
            <li>
                <a href="index"><img src="http://localhost/medic/assets/icons/home.png" />Home</a>
            </li>
            <li>
                <a href="http://localhost/medic/courses" class="active"><img src="http://localhost/medic/assets/icons/course.png" />Courses</a>
            </li>
            <li>
                <a href="http://localhost/medic/colleges"><img src="http://localhost/medic/assets/icons/college.png" />Colleges</a>
            </li>
        </ul>
    </div>

    <!-- sticky cta -->
    <a href="http://localhost/medic/book-now" class="booknow-btn-ph">Book Now</a>


    <!-- main section -->
    <div class="container">
        <div class="body-bg">
            <div id="courses">
                <h3>Courses</h3>
                <?php
                include './_class/dbConfig.php';
                include './action/allCourses.php';
                $conn = (new dbConfig)->getConnection();
                $courses = fetchAllCourses($conn);
                ?>
                <div class="card-wrapper ">
                    <?php foreach ($courses as $course) : ?>
                        <a href="http://localhost/medic/course-details/<?php echo $course['slug'] ?>" class="card">
                            <img src="./admin/action/course/docs/<?php echo $course['banner_image'] ?>" alt="">
                            <div class="content">
                                <h4><?php echo $course['title']; ?></h4>
                                <div class="sub-content">
                                    <div class="years">
                                        <h5><?php echo $course['duration']; ?></h5>
                                    </div>
                                    <div class="circle"></div>
                                    <div class="approve">
                                        <h5>NEET</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- end of main section -->
<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://localhost/medic/src/splide.min.js"></script>
<script src="http://localhost/medic/src/App.js"></script>
</body>

</html>