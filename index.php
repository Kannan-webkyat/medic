<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="http://localhost/medic/src/splide.min.css">
</head>

<body>
    <main id="swup" class="transition-fade">
        <div data-swup-name="home"></div>

        <?php
        include './_class/dbConfig.php';
        include './action/locations.php';
        include './ui/Popup.php';
        $conn = (new dbConfig)->getConnection();
        $locations = getAllLocations($conn);
        include './ui/Header.php';
        pageHeader($conn);
        ?>

        <!-- choose your goal fixed -->
        <button class="choose-goal-fixed drop-trigger"> <ion-icon name="apps-outline"></ion-icon> &nbsp; Choose Your Goal</button>

        <!-- popup -->


        <!-- loader -->
        <div class="loader-container">
            <div class="loader">

            </div>
        </div>
        <!-- header -->
        <div id="fixed-menu">
            <ul>
                <li>
                    <a href="index" class="active"><img src="http://localhost/medic/assets/icons/home.png" />Home</a>
                </li>
                <li>
                    <a href="http://localhost/medic/courses"><img src="http://localhost/medic/assets/icons/course.png" />Courses</a>
                </li>
                <li>
                    <a href="http://localhost/medic/colleges"><img src="http://localhost/medic/assets/icons/college.png" />Colleges</a>
                </li>
            </ul>
        </div>
        <!-- sticky cta -->

        <div class="banner">
            <div class="container">
                <div class="left">
                    <h1>The <span>easiest way</span> to <ion-icon name="search-outline"></ion-icon> find your dream college</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis minus quod aliquid incidunt!</p>
                    <div class="button-holder">
                        <button class="drop-trigger">
                            <ion-icon name="apps-outline"></ion-icon> &nbsp; Choose Your Goal
                        </button>
                        <button class="apply-trigger">Book Admission &nbsp;
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>
                <div class="right">
                    <img src="https://www.creativefabrica.com/wp-content/uploads/2022/05/10/Happy-students-jumping-illustration-Graphics-30297058-1-580x386.png" alt="">
                </div>
            </div>
        </div>


        <div class="container">
            <section id="goal">
                <h2 class="section-heading">Choose by desitination</h2>
                <div class="goal-container splide destination">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php foreach ($locations as $location) {
                            ?>
                                <a href="http://localhost/medic/colleges/location=<?php echo $location['slug'] ?>" class="goal-card splide__slide">
                                    <div class="icon">
                                        <img src="http://localhost/medic/admin/action/location/docs/<?php echo $location['image']; ?>" alt="<?php echo $location['title'] ?>">
                                    </div>
                                    <div class="content">
                                        <h3><?php echo $location['title'] ?></h3>
                                        <span><?php echo $location['college_count'] ?> College</span>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- main section -->
        <div class="container">
            <div class="body-bg">
                <?php
                include './action/collegeCollections.php';
                $collections = fetchAllCollegeCollections($conn);

                ?>
                <!-- end of locations -->
                <div class="bg">

                    <?php foreach ($collections as $collection) : ?>
                        <div class="collection">
                            <div class="heading">
                                <h2 class="section-heading"><?php echo $collection['title']; ?></h2>

                            </div>
                            <div class="card-wrapper splide collections">
                                <div class="splide__track">
                                    <div class="splide__list">
                                        <?php
                                        $colleges = $collection['colleges'];
                                        $colleges = array_slice($colleges, 0, 8);
                                        foreach ($colleges as $college) : ?>
                                            <a href="http://localhost/medic/college-details/<?= $college['slug']; ?>" class="cards splide__slide">
                                                <div class="thumbnail">
                                                    <img src="http://localhost/medic/admin/action/college/docs/<?php echo $college['images'][0]['image'] ?>" alt="<?php echo $college['title']; ?>">
                                                    <div class="college-logo">
                                                        <img src="./admin/action/college/logos/<?= $college['logo'] ?>" alt="">
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
                                                        <span><?= $college['location']; ?></span>
                                                        <span><?= $college['under'] === 'pvt' ? 'Privet' : 'Government' ?></span>
                                                    </div>
                                                    <h4><?php echo $college['title']; ?></h4>
                                                    <?php
                                                    if (!empty($college['approved'])) {
                                                    ?>
                                                        <div class="approval">
                                                            <div><ion-icon name="checkmark-circle-sharp"></ion-icon> &nbsp; Approved by <?php echo $college['approved']; ?></div>
                                                        </div>
                                                    <?php } ?>

                                                    <div class="buttons">
                                                        <button class="apply-trigger">Apply Now</button>
                                                        <button class="couselling-trigger">Get Free Counselling</button>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                    <!-- footer section  -->
                    <!-- end of footer section -->
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="logo">
                        <img src="http://localhost/medic/assets/images/logo.png" alt="">
                    </div>
                    <div class="footer-about">
                        <h4>At Medic Guidance, we understand that choosing the right college and course is a
                            crucial
                            step in shaping your future. </h4>
                    </div>
                </div>
                <div class="line"></div>
                <div class="footer-links-section">
                    <div class="links">
                        <h3>Top Colleges</h3>
                        <ul>
                            <li>
                                <a href="#">Nursing Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                            <li>
                                <a href="#">Nursing Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                            <li>
                                <a href="#">Nursing Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                        </ul>
                    </div>

                    <div class="links">
                        <h3>Top Courses</h3>
                        <ul>
                            <li>
                                <a href="#">Nursing Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                            <li>
                                <a href="#">Nursing Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                            <li>
                                <a href="#">Nursing Colleges</a>
                            </li>
                            <li>
                                <a href="#">Engineering Colleges</a>
                            </li>
                        </ul>
                    </div>

                    <div class="links">
                        <h3>Other Links</h3>
                        <ul>
                            <li>
                                <a href="http://localhost/medic/courses">Courses</a>
                            </li>
                            <li>
                                <a href="http://localhost/medic/colleges">Colleges</a>
                            </li>
                            <li>
                                <a href="http://localhost/medic/about">About</a>
                            </li>
                            <li>
                                <a href="http://localhost/medic/news">News / Articles</a>
                            </li>
                            <li>
                                <a href="http://localhost/medic/contact-us">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="links">
                        <h3>Connect Us</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    13rd Floor, Perimbilly Building, Mahatma Gandhi Rd, Shenoys,
                                    Ernakulam</a>
                            </li>
                            <li>
                                <a href="tel:9632587412">9632587412, </a>
                                <a href="tel:8965745213">8965745213</a>
                            </li>
                            <li>
                                <a href="mailto:mediguidance@gmail.com">mediguidance@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="copyright">
                    <div class="content">
                        <h4>Copyright © 2024 Medic Guidance | All Rights Reserved | Designed & Developed by <a href="https://webkyat.com/">webkyat</a></h4>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><img class="icon" src="http://localhost/medic/assets/icons/facebook.png" alt=""></a>
                            </li>
                            <li><a href="#"><img class="icon" src="http://localhost/medic/assets/icons/instagram.png" alt=""></a>
                            </li>
                            <li><a href="#"><img class="icon" src="http://localhost/medic/assets/icons/twitter.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://unpkg.com/swup@4"></script>
    <script src="https://unpkg.com/@swup/progress-plugin@3"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://localhost/medic/src/splide.min.js"></script>
    <script src="http://localhost/medic/src/App.js"></script>
</body>

</html>