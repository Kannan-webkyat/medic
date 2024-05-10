<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Medic Guidance</title>





</head>

<main id="swup" class="transition-fade">
    <div data-swup-name="about"></div>

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

            <div id="about">
                <div class="description">
                    <div class="content">
                        <h4>About Us</h4>
                        <h2>Empowering Your Educational Journey: Discover Medic Guidance</h2>
                        <p>At Medic Guidance, we understand that choosing the right college and course is a crucial step
                            in shaping your future. Founded with a passion for empowering students to make informed
                            decisions about their education, we are a trusted institution dedicated to guiding
                            individuals through every step of the college search process.With a team of experienced
                            advisors and access to comprehensive resources, we strive to provide personalized support
                            tailored to each student's unique goals and aspirations. Whether you're exploring different
                            colleges, deciding on a major, or seeking guidance on the admission process, we're here to
                            help you navigate the journey towards a rewarding academic experience.
                        </p>
                    </div>
                    <div class="img">
                        <img src="http://localhost/medic/assets/images/about-img1.svg" alt="">
                    </div>
                </div>

                <div class="abt-img">
                    <img class="abt-img1" src="http://localhost/medic/assets/images/about-img2.svg" alt="">
                    <img class="abt-img2" src="http://localhost/medic/assets/images/about-img3.svg" alt="">
                </div>

                <div class="mission-vision">
                    <h2>Our Purpose and Aspirations: Mission & Vision at Medi Guidance
                    </h2>
                    <div class="content">
                        <p><strong>Our mission</strong> at Medic Guidance is to empower students to make confident
                            decisions about their education by providing comprehensive guidance, resources, and support
                            throughout the college search process. We are committed to helping individuals discover
                            their passions, explore diverse opportunities, and achieve their academic and career goals.
                        </p>

                        <p><strong> Our vision</strong> is to become a leading provider of college and course search
                            guidance, recognized for our commitment to excellence, integrity, and student-centered
                            approach. We aspire to be a trusted partner for students and families, offering innovative
                            solutions and personalized support to help every individual unlock their full potential.</p>
                    </div>


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