<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colleges - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<main id="swup" class="transition-fade">
    <div data-swup-name="colleges"></div>
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
                <a href="http://localhost/medic/courses"><img src="http://localhost/medic/assets/icons/course.png" />Courses</a>
            </li>
            <li>
                <a href="http://localhost/medic/colleges" class="active"><img src="http://localhost/medic/assets/icons/college.png" />Colleges</a>
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
                        <a href="http://localhost/medic/courses"><img src="http://localhost/medic/assets/icons/course.png" />Courses</a>
                    </li>
                    <li>
                        <a href="http://localhost/medic/colleges" class="active"><img src="http://localhost/medic/assets/icons/college.png" />Colleges</a>
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

    <?php
    include './_class/dbConfig.php';
    include './action/locations.php';
    include './action/allCourses.php';
    $conn = (new dbConfig)->getConnection();
    $locations = getAllLocations($conn);
    $courses = fetchAllCourses($conn);
    ?>

    <!-- main section -->
    <div class="container">
        <div class="body-bg">
            <div id="college-section">
                <!-- tab  -->
                <div class="tab">
                    <ul>
                        <li><a href="">All</a></li>
                        <?php foreach ($courses as $course) : ?>
                            <li><a href=""><?php echo $course['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- end of tab -->
                <div class="head">
                    <div class="heading">
                        <h2>Explore the Leading Nursing Colleges</h2>
                    </div>
                    <div class="filter">
                        <form action="" method="POST">
                            <div class="input select-holder">
                                <select id="filter-field" name="type" required>
                                    <option value="location">Location</option>
                                    <option value="course">Course</option>
                                </select>
                            </div>
                            <div class="input select-holder ">
                                <select class="activer" id="filter-field" name="type-data" required>
                                    <option value="">Select</option>
                                    <?php foreach ($locations as $location) : ?>
                                        <option value="<?php echo $location['id']; ?>"><?php echo $location['title']; ?></option>
                                    <?php endforeach; ?>
                                    <!-- Add more approval as needed -->
                                </select>
                            </div>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <?php
                include './action/allColleges.php';
                $filter1 = isset($_GET['filter1']) ? $_GET['filter1'] : '';
                $filter2 = isset($_GET['filter2']) ? $_GET['filter2'] : '';
                $courseFilter = '';
                $colleges = fetchAllColleges($conn, $filter1, $filter2);
                ?>
                <div class="card-wrapper">
                    <?php if (count($colleges)) : ?>
                        <?php foreach ($colleges as $college) : ?>
                            <a href="college-details/<?= $college['slug']; ?>" class="cards">
                                <img src="http://localhost/medic/admin/action/college/docs/<?php echo $college['images'][0]['image'] ?>" alt="<?php echo $college['title']; ?>">
                                <div class="content">
                                    <h4><?php echo $college['title']; ?></h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5><?php echo $college['location']; ?></h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5></h5>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <h1>No Colleges Found.</h1>
                    <?php endif; ?>
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