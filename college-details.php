<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-Details - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main id="swup" class="transition-fade">
        <div data-swup-name="college-details"></div>
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
                            <a href="http://localhost/medic/index"><img src="http://localhost/medic/assets/icons/home.png" />Home</a>
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

        <!-- fixed cta -->
        <div id="fixed-cta">
            <button type="submit">Apply Now</button>
        </div>
        <!-- main section -->
        <div class="container">
            <div class="body-bg">
                <div class="college-details com-table com-ul">
                    <?php
                    include './_class/dbConfig.php';
                    include './action/collegeDetails.php';
                    $conn = (new dbConfig)->getConnection();
                    $slug = $_GET['id'];
                    $collegeDetails = fetchCollegeDetails($conn, $slug);
                    $collegeImagePath = "http://localhost/medic/admin/action/college/docs/";
                    ?>
                    <!-- hero section -->
                    <div class="college-img">
                        <div class="left-img">
                            <img src="<?= $collegeImagePath . $collegeDetails['images'][0]['image'] ?>" alt="college-image">
                        </div>
                        <div class="right-img">
                            <?php foreach ($collegeDetails['images'] as $index => $image) : ?>
                                <?php if ($index == 0) continue; ?>
                                <div class="box">
                                    <img src="<?= $collegeImagePath . $image['image'] ?>" alt="college-image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- content section -->
                    <div class="info">
                        <div class="content">
                            <!-- details -->
                            <div class="details">
                                <div class="about">
                                    <h2><?= $collegeDetails['title'] ?></h2>
                                    <p><?= html_entity_decode($collegeDetails['about']) ?></p>
                                </div>
                                <hr>

                                <div class="highlights">
                                    <h3>Highlights of CMS College of Nursing</h3>
                                    <ul>
                                        <li>
                                            <div class="heading">Established year/Ownership</div>
                                            <div class="content">1942 | Private</div>
                                        </li>
                                        <li>
                                            <div class="heading">Affiliated with</div>
                                            <div class="content">Dr. MGR University</div>
                                        </li>
                                        <li>
                                            <div class="heading">Approved by</div>
                                            <div class="content">1MCI</div>
                                        </li>
                                        <li>
                                            <div class="heading">Application Mode</div>
                                            <div class="content">Online</div>
                                        </li>
                                        <li>
                                            <div class="heading">Campus Size</div>
                                            <div class="content">19 Acre</div>
                                        </li>
                                        <li>
                                            <div class="heading">Course Offered</div>
                                            <div class="content">B.Sc, MBBS, BDS, BPT, MD, MS, M.Sc, Certificate
                                                Courses,
                                                Diploma, Fellowship, PhD.</div>
                                        </li>
                                        <li>
                                            <div class="heading">Admission Criteria</div>
                                            <div class="content">Merit-Based and Entrance Exam</div>
                                        </li>
                                        <li>
                                            <div class="heading">Facilities Available</div>
                                            <div class="content">Library, Sports, Canteen, Laboratory, Hostel</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="vdo">
                                    <iframe width="800" height="300" src="<?php echo $collegeDetails['yt_url'] ?>">
                                    </iframe>
                                </div>
                                <div class="facilities">
                                    <h3><?php echo $collegeDetails['title'] ?> Facilities</h3>
                                    <?php foreach ($collegeDetails['facilities'] as $facility) : ?>
                                        <div class="box">
                                            <div class="heading">
                                                <img src="http://localhost/medic/admin/action/facility/docs/<?php echo $facility['image'] ?>" alt="<?php echo $facility['facility_name'] ?>-icon">
                                                <h4><?php echo $facility['facility_name'] ?> </h4>
                                            </div>
                                            <div class="content">
                                                <p><?php echo $facility['description'] ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- end of details -->
                            <!-- courses -->
                            <hr>
                            <div id="courses">
                                <h3>Courses provided by <?= $collegeDetails['title']; ?>.</h3>
                                <div class="card-wrapper ">
                                    <!-- college providing courses -->
                                    <?php
                                    include './action/coursesUnderCollege.php';
                                    $coursesUnderCollege = fetchCollegeCourses($conn, $slug);
                                    ?>
                                    <?php foreach ($coursesUnderCollege as $course) : ?>
                                        <a href="http://localhost/medic/course-details/<?= $course['slug'] ?>" class="card">
                                            <img src="http://localhost/medic/admin/action/course/docs/<?= $course['banner_image'] ?>" alt="">
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
                            <!-- end of courses -->
                            <hr>
                            <!-- gallery -->
                            <div class="gallery">
                                <div class="h3">
                                    <h3>Gallery</h3>
                                    <div class="gallery-img">
                                        <div class="image">
                                            <img src="http://localhost/medic/assets/images/gallery-img.svg" alt="">
                                        </div>
                                        <div class="image">
                                            <img src="http://localhost/medic/assets/images/gallery-img.svg" alt="">
                                        </div>
                                        <div class="image">
                                            <img src="http://localhost/medic/assets/images/gallery-img.svg" alt="">
                                        </div>
                                        <div class="image">
                                            <img src="http://localhost/medic/assets/images/gallery-img.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of gallery -->
                            <hr>
                            <!-- news / articles -->
                            <div class="news">
                                <h3>News / Articles</h3>
                                <a href="http://localhost/medic/news" class="content">
                                    <div class="date">
                                        <img src="http://localhost/medic/assets/icons/calendar-con.png" alt="">
                                        <h5>Mar 10, 2024</h5>
                                    </div>
                                    <div class="discription">
                                        <h3>NEET 2024 Cut off for AFMC Pune and Selection Process</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Vitae massa posuere in iaculis in
                                            quisque
                                            tellus. Morbi magna euismod sed risus
                                            mi ut. Feugiat risus dignissim facilisi vitae placerat nunc velit. Amet
                                            faucibus
                                            in facilisi sit egestas. Lorem ipsum
                                            dolor sit amet consectetur. Vitae massa posuere in iaculis in quisque
                                            tellus.
                                        </p>
                                        <span class="cta">Read More</span>

                                    </div>
                                </a>
                                <a href="http://localhost/medic/news" class="content">
                                    <div class="date">
                                        <img src="http://localhost/medic/assets/icons/calendar-con.png" alt="">
                                        <h5>Mar 10, 2024</h5>
                                    </div>
                                    <div class="discription">
                                        <h3>NEET 2024 Cut off for AFMC Pune and Selection Process</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Vitae massa posuere in iaculis in
                                            quisque
                                            tellus. Morbi magna euismod sed risus
                                            mi ut. Feugiat risus dignissim facilisi vitae placerat nunc velit. Amet
                                            faucibus
                                            in facilisi sit egestas. Lorem ipsum
                                            dolor sit amet consectetur. Vitae massa posuere in iaculis in quisque
                                            tellus.
                                        </p>
                                        <span class="cta">Read More</span>
                                    </div>
                                </a>

                            </div>
                            <!-- end of news / articles  -->

                        </div>
                        <!-- form -->
                        <div class="form">
                            <h3>Book Your Addmission</h3>
                            <form action="" method="post">
                                <div class="input-field">
                                    <label for="name">Name</label>
                                    <div class="field">
                                        <div class="holder">
                                            <div class="icon">
                                                <img src="http://localhost/medic/assets/icons/name-icon.png" alt="name icon">
                                            </div>
                                            <div class="input">
                                                <input type="text" id="name" name="name" required placeholder="Enter your name">
                                            </div>
                                            <div class="x-icon">
                                                <img src="http://localhost/medic/assets/icons/x-icon.png" alt=" close">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- mail -->
                                <div class="input-field">
                                    <label for="email">Email</label>
                                    <div class="field">
                                        <div class="holder">
                                            <div class="icon">
                                                <img src="http://localhost/medic/assets/icons/email-icon.png" alt="email icon">
                                            </div>
                                            <div class="input">
                                                <input type="email" id="email" name="email" required placeholder="Enter email address">
                                            </div>
                                            <div class="x-icon">
                                                <img src="http://localhost/medic/assets/icons/x-icon.png" alt="close">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- phone -->

                                <div class="input-field">
                                    <label for="phone">Phone Number</label>
                                    <div class="field">
                                        <div class="holder">
                                            <div class="icon">
                                                <img src="http://localhost/medic/assets/icons/mobile-icon.png" alt="email icon">
                                            </div>
                                            <div class="input">
                                                <input type="tel" id="phone" name="phone" required placeholder="Enter phone number">
                                            </div>
                                            <div class="x-icon">
                                                <img src="http://localhost/medic/assets/icons/x-icon.png" alt="close">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- course -->

                                <div class="input-field">
                                    <label for="course">Course</label>
                                    <div class="field">
                                        <div class="holder">
                                            <div class="icon">
                                                <img src="http://localhost/medic/assets/icons/course-icon.png" alt="email icon">
                                            </div>
                                            <div class="input select-holder">
                                                <select id="course" name="course" required>
                                                    <option value=" select-course">Select Course</option>
                                                    <?php
                                                    include './action/allCourses.php';
                                                    $courses = fetchAllCourses($conn);
                                                    foreach ($courses as $course) : ?>
                                                        <option value="<?php echo $course['id']; ?>"><?php echo $course['title']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <!-- <div class="x-icon">
                                            <img src="http://localhost/medic/assets/icons/x-icon.png" alt="close">
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- cta -->
                                <button type="submit">Apply Now</button>
                            </form>
                        </div>
                        <!-- end of form -->

                        <!-- submit form -->
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $query = "INSERT INTO leads (`name`,phone,email,course_id) VALUES(?,?,?,?)";
                            $sql = $conn->prepare($query);
                            $sql->bind_param('sssi', $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['course_id'], $_POST['read_status']);
                            if ($sql->execute()) {
                                // success message
                            } else {
                                // error message
                            }
                        }
                        ?>
                        <!-- end of content section -->
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