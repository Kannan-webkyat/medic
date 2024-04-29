<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course-Details - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<main id="swup" class="transition-fade">
    <div data-swup-name="course-details"></div>
    <!-- loader -->
    <div class="loader-container">
        <div class="loader">
        </div>
    </div>

    <!-- header -->
    <div id="fixed-menu">
        <ul>
            <li>
                <a href="http://localhost/medic/index"><img src="http://localhost/medic/assets/icons/home.png" />Home</a>
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
                        <a href="index"><img src="http://localhost/medic/assets/icons/home.png" />Home</a>
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

    <!-- fetching course details -->
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './_class/dbConfig.php';
    include './action/courseDetails.php';
    $conn = (new dbConfig)->getConnection();
    $slug = $_GET['id'];
    $courseData = fetchCourseDetails($conn, $slug);
    ?>

    <!-- main section -->
    <div class="container">
        <div class="body-bg">
            <div class="course-details">
                <div class="content">
                    <h2><?php echo $courseData['title'] ?></h2>
                    <img class="des-img" src="http://localhost/medic/admin/action/course/docs/<?php echo $courseData['banner_image'] ?>" alt="">
                    <p class="course-content"><?php echo $courseData['about'] ?></p>
                    <hr>

                    <div class="details">
                        <h3>Details of BSc Nursing Program</h3>
                        <ul>
                            <li>
                                <div class="left">
                                    <div class="icon"><img src="http://localhost/medic/assets/icons/duration.png" alt=""></div>
                                    <div class="heading">
                                        <h4>Duration</h4>
                                    </div>
                                </div>
                                <div class="right">
                                    <h4><?php echo $courseData['duration'] ?></h4>
                                </div>

                            </li>

                            <li>
                                <div class="left">
                                    <div class="icon"><img src="http://localhost/medic/assets/icons/eligibility.png" alt=""></div>
                                    <div class="heading">
                                        <h4>Eligibility</h4>
                                    </div>
                                </div>
                                <div class="right">
                                    <h4><?php echo $courseData['eligibility'] ?></h4>
                                </div>

                            </li>

                            <li>
                                <div class="left">
                                    <div class="icon"><img src="http://localhost/medic/assets/icons/age.png" alt=""></div>
                                    <div class="heading">
                                        <h4>Minimum Age Requirement</h4>
                                    </div>
                                </div>
                                <div class="right">
                                    <h4><?php echo $courseData['minimum_age'] ?></h4>
                                </div>

                            </li>

                            <li>
                                <div class="left">
                                    <div class="icon"><img src="http://localhost/medic/assets/icons/percentage.png" alt=""></div>
                                    <div class="heading">
                                        <h4>Minimum Percentage</h4>
                                    </div>
                                </div>
                                <div class="right">
                                    <h4><?php echo $courseData['minimum_percentage'] ?></h4>
                                </div>

                            </li>

                            <li>
                                <div class="left">
                                    <div class="icon"><img src="http://localhost/medic/assets/icons/job.png" alt=""></div>
                                    <div class="heading">
                                        <h4>Jobs</h4>
                                    </div>
                                </div>
                                <div class="right">
                                    <h4><?php echo htmlspecialchars($courseData['job_opportunity']) ?></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="guidelines">
                        <h3>BSc Nursing Admission Guidelines</h3>
                        <ul>
                            <li>
                                <div class="heading">
                                    <h4>Eligibility Criteria</h4>
                                </div>
                                <div class="points">
                                    <div class="circle"></div>

                                    <p>Candidates must have completed their high school education (or equivalent) with a
                                        background in science subjects such as biology, chemistry, and physics.</p>

                                </div>
                                <div class="points">
                                    <div class="circle"></div>

                                    <p>Candidates must have completed their high school education (or equivalent) with a
                                        background in science subjects such as biology, chemistry, and physics.</p>

                                </div>
                                <div class="points">
                                    <div class="circle"></div>

                                    <p>Candidates must have completed their high school education (or equivalent) with a
                                        background in science subjects such as biology, chemistry, and physics.</p>

                                </div>

                            </li>
                            <li>
                                <div class="heading">
                                    <h4>Entrance Examinations</h4>
                                </div>
                                <div class="points">
                                    <div class="circle"></div>

                                    <p>Candidates must have completed their high school education (or equivalent) with a
                                        background in science subjects such as biology, chemistry, and physics.</p>

                                </div>
                                <div class="points">
                                    <div class="circle"></div>

                                    <p>Candidates must have completed their high school education (or equivalent) with a
                                        background in science subjects such as biology, chemistry, and physics.</p>

                                </div>
                                <div class="points">
                                    <div class="circle"></div>

                                    <p>Candidates must have completed their high school education (or equivalent) with a
                                        background in science subjects such as biology, chemistry, and physics.</p>

                                </div>

                            </li>

                        </ul>
                    </div>
                    <hr>

                    <div class="syllabus">
                        <h3>The Syllabus for a Bachelor of Science in Nursing</h3>
                        <div class="year">
                            <div class="subjects">
                                <h4 class="heading">BSc Nursing Syllabus First Year</h4>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <h4>Anatomy</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Physiology</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Nutrition</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Biochemistry</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Nursing Foundation
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Physiology</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Introduction to Computers

                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>English</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Microbiology</h4>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- sub -->
                            <div class="subjects">
                                <h4 class="heading">BSc Nursing Syllabus Second Year</h4>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <h4>Pharmacology</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Pathology & Genetics
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Medical- Surgical Nursing (Adult including geriatrics)
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Community Health Nursing
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Communication and Educational Technology

                                            </h4>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                            <!-- sub -->
                            <div class="subjects">
                                <h4 class="heading">BSc Nursing Syllabus Third Year</h4>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <h4>Sociology</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Child Health Nursing
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Mental Health Nursing
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Medical- Surgical Nursing (Adult including Geriatrics)

                                            </h4>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                            <!-- sub -->
                            <div class="subjects">
                                <h4 class="heading">BSc Nursing Syllabus Fourth Year</h4>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <h4>Midwifery and Obstetrical Nursing
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Community Health Nursing- II
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Nursing Research & Statistics

                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Management of Nursing Services and Education
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <h4>Integrated Practice

                                            </h4>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- colleges -->
                <?php
                include './action/courseProvidingColleges.php';
                $providingColleges = fetchCollegesUnderCourse($conn, $slug);
                echo "<pre>";
                print_r($providingColleges);
                echo "</pre>";
                ?>
                <div class="colleges des-colleges">
                    <h2>Colleges</h2>
                    <div class="card-wrapper">
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
                        <a href="#" class="cards">
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
                        <!-- end of 2nd card  -->

                        <!-- 3rd card -->
                        <a href="#" class="cards">
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
                        <a href="#" class="cards">
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
                </div>
                <!--end of colleges -->

                <!-- responsive colleges -->
                <div class="colleges res-colleges">
                    <h2>Colleges</h2>
                    <div class="card-wrapper  slides owl-carousel owl-theme ">
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
                        <a href="#" class="cards">
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
                        <!-- end of 2nd card  -->

                        <!-- 3rd card -->
                        <a href="#" class="cards">
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
                        <a href="#" class="cards">
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

                        <!-- 5th card -->
                        <!-- <a href="#" class="cards">
                            <img src="http://localhost/medic/assets/images/card5.svg" alt="Christian Medical College">
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
                        </a> -->
                        <!-- end of 5th card -->
                    </div>

                </div>
                <!-- end of responsive colleges -->

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