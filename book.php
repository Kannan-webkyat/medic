<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Addmission - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="http://localhost/medic/src/splide.min.css">




</head>

<main id="swup" class="transition-fade">

    <div data-swup-name="book-now"></div>

    <!-- header -->
    <?php
    include './_class/dbConfig.php';
    include './action/allCourses.php';
    $conn = (new dbConfig)->getConnection();
    $courses   = fetchAllCourses($conn);
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



    <!-- main section -->
    <div class="container">
        <div class="body-bg">
            <div class="addmission-form">
                <div class="left">
                    <h1>Let us assist you <b>sercure</b> your admission at your dream college</h1>
                    <p>we'll get back to you as soon as possible</p>
                    <img src="https://static.vecteezy.com/system/resources/previews/011/842/991/non_2x/man-is-working-at-a-computer-use-a-computer-mouse-and-typing-on-keyboard-illustration-simple-graphic-style-vector.jpg" width="100%" alt="">
                </div>
                <div class="right">
                    <form action="" class="book-form">

                        <span class="mini-heading">PLEASE FILL THE FORM</span>

                        <div class="input-holder">
                            <input required type="text" id="name" placeholder="Name">
                        </div>
                        <div class="input-holder">
                            <input requiredtype="email" id="email" placeholder="Email">
                        </div>
                        <div class="input-holder">
                            <select style="width: 100%;" name="" id="">
                                <option>-- Choose Course --</option>
                                <?php foreach ($courses as $course) : ?>
                                    <option value="<?php echo $course['title']; ?>"><?php echo $course['title']; ?></option>
                                <?php endforeach; ?>
                                <option value="">Other</option>
                            </select>
                        </div>
                        <div class="input-holder number-holder">
                            <input type="text" disabled value="+91">
                            <input required type="number" id="phone" placeholder="Enter you 10 digit phone number">
                        </div>

                        <div class="toggle">
                            <span class="switch">
                                <input id="switch-rounded" id="whatsapp-noti" checked type="checkbox" />
                                <label for="switch-rounded"></label>
                            </span>
                            <div class="text">
                                Enable update and important notication on whatsapp
                            </div>
                        </div>
                        <button type="submit">
                            Apply Now
                        </button>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus </p> -->
                    </form>
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