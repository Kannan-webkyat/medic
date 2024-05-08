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
            <!-- contact form -->

            <div class="addmission-form">
                <h2>Book Your Addmission</h2>
                <form class="book-now-form" action="#" method="post">
                    <div class="input-field">
                        <div class="box">
                            <label for="name">First Name</label>
                            <div class="field">
                                <div class="holder">
                                    <div class="input">
                                        <input type="text" id="name" name="name" required placeholder="Enter your name">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <label for="name">Last Name</label>
                            <div class="field">
                                <div class="holder">
                                    <div class="input">
                                        <input type="text" id="name" name="name" required placeholder="Enter your name">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <div class="box">
                            <label for="email">Email Address</label>
                            <div class="field">
                                <div class="holder">
                                    <div class="input">
                                        <input type="email" id="email" name="email" required placeholder="Enter email address ">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <label for="name">Phone Number</label>
                            <div class="field">
                                <div class="holder">
                                    <div class="input">
                                        <input type="tel" id="phone" name="phone" required placeholder="Enter phone number">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <div class="box message">
                            <label for="message">Message</label>
                            <div class="field">
                                <div class="holder">
                                    <div class="input" style="width: 100%;">
                                        <textarea id="message" name="message" rows="4" cols="60" placeholder="Write text here ..."></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="submit">Submit</button>

                </form>
            </div>
            <!-- end of contact form  -->
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