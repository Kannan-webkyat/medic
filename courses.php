<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<main id="swup" class="transition-fade">
    <div data-swup-name="courses"></div>
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

    <header>
        <div class="container">
            <a href="http://localhost/medic/index" class="logo">
                <img src="http://localhost/medic/assets/images/logo.png" alt="medic guidence logo">
            </a>
            <nav>
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
            </nav>
            <a href="http://localhost/medic/book-now" class="booknow-btn desktop-cta">Book Now</a>

            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="sidemenu">
                <ul>
                    <li><a href="http://localhost/medic/about">About</a></li>
                    <li><a href="http://localhost/medic/contact-us">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="http://localhost/medic/news">News / Articles</a></li>

                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://localhost/medic/src/App.js"></script>
</body>

</html>