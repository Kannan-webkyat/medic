<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colleges - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="http://localhost/medic/src/splide.min.css">
</head>

<main id="swup" class="transition-fade">
    <div data-swup-name="colleges"></div>
    <!-- header -->
    <?php
    include './_class/dbConfig.php';
    include './action/locations.php';
    include './action/allCourses.php';
    include './ui/Popup.php';
    $conn      = (new dbConfig)->getConnection();
    $courses   = fetchAllCourses($conn);
    $locations = getAllLocations($conn);
    include './ui/Header.php';
    pageHeader($conn);
    ?>
    <!-- loader -->
    <div class="loader-container">
        <div class="loader">
        </div>
    </div>

    <!-- filter -->


    <div class="side-bar-container">
        <div class="side-bar">
            <div class="header">
                <div class="heading">
                    <h3>
                        <ion-icon name="search"></ion-icon> &nbsp; All Courses
                    </h3>
                    <div class="close">
                        <ion-icon name="close-outline"></ion-icon>
                    </div>
                </div>
                <div class="search">
                    <input type="text" class="search-course" placeholder="Search Course">
                </div>
            </div>
            <ul>
                <li>
                    <a href="http://localhost/medic/colleges">All</a>
                </li>
                <?php foreach ($courses as $course) : ?>
                    <li>
                        <a href="http://localhost/medic/colleges/course=<?php echo $course['slug'] ?>"><?php echo $course['title']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- popup -->
    <div class="popup">
        <form action="">
            <div class="close">
                <ion-icon name="close-outline"></ion-icon>
            </div>
            <h3>Looking for admission at the college. Give us your details and we will help you </h3>
            <div class="input-holder">
                <input required type="text" placeholder="Name">
            </div>
            <div class="input-holder">
                <input requiredtype="email" placeholder="Email">
            </div>
            <div class="input-holder number-holder">
                <input type="text" disabled value="+91">
                <input required type="number" placeholder="Enter you 10 digit phone number">
            </div>
            <div class="toggle">
                <span class="switch">
                    <input id="switch-rounded" checked type="checkbox" />
                    <label for="switch-rounded"></label>
                </span>
                <div class="text">
                    Enable update and important notication on whatsapp
                </div>
            </div>
            <button>
                Apply Now
            </button>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus </p> -->
        </form>

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
    <!-- end of header -->

    <!-- main section -->
    <div class="container">
        <div class="body-bg">
            <?php
            include './action/allColleges.php';
            $course       = isset($_GET['course']) ? $_GET['course'] : '';
            $location     = isset($_GET['location']) ? $_GET['location'] : '';
            $recommended  = isset($_GET['recommended']) ? $_GET['recommended'] : '';
            $courseFilter = '';
            $colleges     = fetchAllColleges($conn, $course, $location, $recommended);
            ?>
            <div id="college-section">
                <!-- tab  -->
                <!-- <div class="tab">
                    <ul>
                        <li><a href="">All</a></li>
                        <?php // foreach ($courses as $course) : ?>
                            <li><a href=""><?php // echo $course['title']; ?></a></li>
                        <?php // endforeach; ?>
                    </ul>
                </div> -->
                <!-- end of tab -->
                <div class="head">
                    <?php if (!empty($colleges[0]['course_names'])) {
                    ?>
                        <div class="heading">
                            <!-- <?php echo $colleges[0]['course_names'] ?> -->
                            <h1>Explore Colleges</h1>
                        </div>
                        <span class="result"><?php echo count($colleges) ?> Colleges Found</span>
                    <?php } ?>

                    <div class="filter">
                        <form action="" method="POST">
                            <div class="input select-holder">
                                <div class="triggers trigger-active change-course-trigger">
                                    <ion-icon name="book-sharp"></ion-icon> &nbsp; Change Course
                                </div>
                            </div>
                            <div class="input select-holder">
                                <div class="triggers">
                                    <ion-icon name="star-sharp"></ion-icon> &nbsp; Recommended
                                </div>
                            </div>
                            <div class="input select-holder ">
                                <select class="activer" id="location-select" name="type-data" required>
                                    <option value="">Select Location</option>
                                    <?php foreach ($locations as $location) : ?>
                                        <option value="<?php echo $location['slug']; ?>"><?php echo $location['title']; ?></option>
                                        <?php endforeach; ?>s

                                </select>


                            </div>
                            <div class="input select-holder">
                                <div class="triggers clear">
                                    <ion-icon name="close-sharp"></ion-icon> &nbsp; Clear
                                </div>
                            </div>
                            <!-- <div class="more-filter">See More Filter <ion-icon name="filter-outline"></ion-icon></div> -->
                        </form>
                    </div>
                </div>

                <div class="card-wrapper college-wrapper">
                    <?php if (count($colleges)) : ?>
                        <?php foreach ($colleges as $college) : ?>
                            <a href="http://localhost/medic/college-details/<?= $college['slug']; ?>" class="cards">
                                <div class="thumbnail">
                                    <img src="http://localhost/medic/admin/action/college/docs/<?php echo $college['images'][0]['image'] ?>" alt="<?php echo $college['title']; ?>">
                                    <div class="college-logo">
                                        <img src="https://png.pngtree.com/png-clipart/20230403/original/pngtree-education-and-college-logo-design-template-png-image_9022986.png" alt="">
                                    </div>
                                    <?php
                                    if ($college['direct'] == 1) {
                                    ?>
                                        <div class="direct-college">
                                            <ion-icon name="shield-checkmark"></ion-icon> &nbsp; Direct Admission
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="content">
                                    <div class="location">
                                        <span><?php echo $college['location']; ?></span>
                                        <span><?= $college['under'] === 'pvt' ? 'Privet' : 'Government' ?></span>
                                    </div>
                                    <h4><?php echo $college['title']; ?></h4>
                                    <?php
                                    if (!empty($college['approved'])) {
                                    ?>
                                        <div class="approval">
                                            <div>
                                                <ion-icon name="checkmark-circle-sharp"></ion-icon> &nbsp; Approved by <?php echo $college['approved']; ?>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <div class="buttons">
                                        <button class="apply-trigger">Apply Now</button>
                                        <button class="couselling-trigger">Get Free Counselling</button>
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
<script src="http://localhost/medic/src/splide.min.js"></script>
<script src="http://localhost/medic/src/App.js"></script>
</body>

</html>