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
        $conn = (new dbConfig)->getConnection();
        $locations = getAllLocations($conn);
        include './ui/Header.php';
        pageHeader();
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
        <a href="http://localhost/medic/book-now" class="booknow-btn-ph">Book Now</a>




        <!-- main section -->
        <div class="container">
            <div class="body-bg">
                <div class="banner" style="display: none;">
                    <h1>Find your dream college in just One click</h1>
                    <div class="search">
                        <div class="input-holder">
                            <div class="icon">
                                <img src="http://localhost/medic/assets/icons/search-icon.png" alt="">
                            </div>
                            <input type="text" placeholder="Search College or  Course ...">
                        </div>
                        <button class="search-cta">search</button>
                        <button class="res-search">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                        <div class="suggestions suggestions-active">
                            <ul>
                                <li>
                                    <a href="#">Chaithanya Nursing College</a>
                                </li>
                                <li>
                                    <a href="#">Chaithanya Nursing College</a>
                                </li>
                                <li>
                                    <a href="#">Chaithanya Nursing College</a>
                                </li>
                                <li>
                                    <a href="#">Chaithanya Nursing College</a>
                                </li>
                                <li>
                                    <a href="#">Chaithanya Nursing College</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <?php
                include './action/allLocations.php';
                $locations = fetchAllLocations($conn);
                ?>
                <div id="location">
                    <h2>Explore by Locations</h2>
                    <div class="destination">
                        <?php foreach ($locations as $location) : ?>
                            <a href="http://localhost/medic/colleges/location:<?php echo $location['slug']; ?>" class="location-image">
                                <img class="thumbnail" src="http://localhost/medic/admin/action/location/docs/<?php echo $location['image'] ?>" alt="location img">
                                <div class="no-of-college">
                                    <h4><?php echo $location['total_colleges']; ?> Colleges</h4>
                                </div>
                                <div class="place">
                                    <div class="icon"><img src="http://localhost/medic/assets/icons/white-location.png" alt=""></div>
                                    <h3><?php echo $location['title']; ?></h3>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- end of locations -->
                <div class="bg">
                    <div id="colleges">
                        <div class="heading">
                            <h2>Explore the Leading Nursing Colleges</h2>
                            <a href="http://localhost/medic/colleges">View All</a>
                        </div>
                        <div class="card-wrapper slides splide">
                            <div class="splide__track">
                                <div class="splide__list">


                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- footersection  -->
                    <div id="footer">
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
                                    <li> <a href="#"><img class="icon" src="http://localhost/medic/assets/icons/facebook.png" alt=""></a>
                                    </li>
                                    <li> <a href="#"><img class="icon" src="http://localhost/medic/assets/icons/instagram.png" alt=""></a>
                                    </li>
                                    <li> <a href="#"><img class="icon" src="http://localhost/medic/assets/icons/twitter.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end of footer section -->
                </div>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/swup@4"></script>
    <script src="https://unpkg.com/@swup/progress-plugin@3"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://localhost/medic/src/splide.min.js"></script>
    <script src="http://localhost/medic/src/App.js"></script>

    <script>

    </script>
</body>

</html>