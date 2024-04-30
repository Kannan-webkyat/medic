<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main id="swup" class="transition-fade">
        <div data-swup-name="home"></div>
        <?php
        include './_class/dbConfig.php';
        $conn = (new dbConfig)->getConnection();
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
        <header>
            <div class="container">
                <a href="http://localhost/medic/index" class="logo">
                    <img src="http://localhost/medic/assets/images/logo.png" alt="medic guidence logo">
                </a>
                <nav>
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
                <div class="banner">
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
                <!-- collections -->
                <!-- <div id="collections">
        <div class="course one">
            <h3>Bachelor of Medicine & Bachelor of Surgery(MBBS) Colleges</h3>
            <h5>No. of colleges - 105</h5>
            <button>Explore</button>
            <div class="icon"><img src="http://localhost/medic/assets/icons/mbbs.png" alt=""></div>
        </div>
        <div class="course two ">
            <h3>Bachelor of Medicine & Bachelor of Surgery(MBBS) Colleges</h3>
            <h5>No. of colleges - 105</h5>
            <button>Explore</button>
            <div class="icon"><img src="http://localhost/medic/assets/icons/mbbs.png" alt=""></div>
        </div>
        <div class="course three">
            <h3>Bachelor of Medicine & Bachelor of Surgery(MBBS) Colleges</h3>
            <h5>No. of colleges - 105</h5>
            <button>Explore</button>
            <div class="icon"><img src="http://localhost/medic/assets/icons/mbbs.png" alt=""></div>
        </div>
        <div class="course four ">
            <h3>Bachelor of Medicine & Bachelor of Surgery(MBBS) Colleges</h3>
            <h5>No. of colleges - 105</h5>
            <button>Explore</button>
            <div class="icon"><img src="http://localhost/medic/assets/icons/mbbs.png" alt=""></div>
        </div>
    </div> -->
                <!-- end of collections -->
                <!-- locations -->
                <?php
                include './action/allLocations.php';
                $locations = fetchAllLocations($conn);
                ?>
                <div id="location">
                    <h2>Explore by Locations</h2>
                    <div class="destination">
                        <?php foreach ($locations as $location) : ?>
                            <a href="#" class="location-image">
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
                    <div class="tab">
                        <ul>
                            <li><a href="">All</a></li>
                            <li><a href="">B.Sc. Nursing</a></li>
                            <li><a href="">MBBS</a></li>
                            <li><a href="">BCA</a></li>
                            <li><a href="">Diploma in Radiology</a></li>
                            <li><a href="">Engineering</a></li>
                            <li><a href="">B Pharm</a></li>
                            <li><a href="">Diploma in Radiology</a></li>
                            <li><a href="">Occupational Therapy</a></li>
                        </ul>
                    </div>

                    <!-- college section -->
                    <div id="colleges">
                        <div class="heading">
                            <h2>Explore the Leading Nursing Colleges</h2>
                            <a href="http://localhost/medic/colleges">View All</a>
                        </div>
                        <div class="card-wrapper slides owl-carousel owl-theme">
                            <!-- 1st card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card-img.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Christian Medical College</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 1st card -->

                            <!-- 2nd card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card2.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Christian Medical College</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 2nd card -->

                            <!-- 3rd card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card3.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Christian Medical College</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>YMCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 3rd card -->

                            <!-- 4th card  -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card4.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Christian Medical College</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 4th card -->
                        </div>
                        <!-- 2nd college section -->
                        <div class="heading common ">
                            <h2>Top-Ranked Engineering Colleges</h2>
                            <a href="http://localhost/medic/colleges">View All</a>
                        </div>
                        <div class="card-wrapper slides owl-carousel owl-theme">
                            <!-- 1st card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card6.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>IIT Bombay</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Kharagpur, West Bengal </h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 1st card -->

                            <!-- 2nd card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card7.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>IIT Bombay</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Kharagpur, West Bengal </h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 2nd card  -->

                            <!-- 3rd card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card8.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>IIT Bombay</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Kharagpur, West Bengal </h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>YMCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 3rd card -->

                            <!-- 4th card  -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card9.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>IIT Bombay</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Kharagpur, West Bengal </h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 4th card -->

                            <!-- 5th card -->
                            <!-- <a href="#" class="cards">
                            <img src="http://localhost/medic/assets/images/card10.svg" alt="Christian Medical College">
                            <div class="content">
                                <h4>IIT Bombay</h4>
                                <div class="location">
                                    <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                    <h5>Kharagpur, West Bengal </h5>
                                </div>
                                <div class="approval">
                                    <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                    <h5>MCI, UGC Approved</h5>
                                </div>
                            </div>
                        </a> -->
                            <!-- end of 5th card -->
                        </div>
                        <!-- end of 2nd college section  -->

                        <!-- 3rd college section -->
                        <div class="heading common">
                            <h2>Popular Diploma Colleges</h2>
                            <a href="http://localhost/medic/colleges">View All</a>
                        </div>
                        <div class="card-wrapper slides owl-carousel owl-theme">
                            <!-- 1st card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card-img.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Indian Institute of Management</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 1st card -->

                            <!-- 2nd card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card2.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Indian Institute of Management</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 2nd card  -->

                            <!-- 3rd card -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card3.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Indian Institute of Management</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>YMCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 3rd card -->

                            <!-- 4th card  -->
                            <a href="college-details" class="cards">
                                <img src="http://localhost/medic/assets/images/card4.svg" alt="Christian Medical College">
                                <div class="content">
                                    <h4>Indian Institute of Management</h4>
                                    <div class="location">
                                        <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                        <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                    </div>
                                    <div class="approval">
                                        <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                        <h5>MCI, UGC Approved</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- end of 4th card -->

                            <!-- 5th card -->
                            <!-- <a href="#" class="cards">
                            <img src="http://localhost/medic/assets/images/card5.svg" alt="Christian Medical College">
                            <div class="content">
                                <h4>Indian Institute of Management</h4>
                                <div class="location">
                                    <img src="http://localhost/medic/assets/icons/location.png" alt="">
                                    <h5>Yelahanka, Bengaluru, Karnataka</h5>
                                </div>
                                <div class="approval">
                                    <img src="http://localhost/medic/assets/icons/approval.png" alt="">
                                    <h5>MCI, UGC Approved</h5>
                                </div>
                            </div>
                        </a> -->
                            <!-- end of 5th card -->
                        </div>
                        <!-- end of 3rd college section -->
                    </div>
                    <!-- end of college section -->

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
    <!-- end of main section -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://localhost/medic/src/App.js"></script>
</body>

</html>