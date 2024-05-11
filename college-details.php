<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-Details - Medic Guidance</title>
    <link rel="stylesheet" href="http://localhost/medic/style/style.css">
    <link rel="stylesheet" href="http://localhost/medic/src/splide.min.css">





</head>

<body>
    <main id="swup" class="transition-fade">
        <div data-swup-name="college-details"></div>
        <!-- header -->
        <?php
        include './_class/dbConfig.php';
        include './action/collegeDetails.php';
        $conn = (new dbConfig)->getConnection();
        $slug = $_GET['id'];
        $collegeDetails = fetchCollegeDetails($conn, $slug);
        $collegeImagePath = "http://localhost/medic/admin/action/college/docs/";
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

        <!-- fixed cta -->
        <div id="fixed-cta">
            <button type="submit">Apply Now &nbsp; <ion-icon name="arrow-forward-outline"></ion-icon></button>
        </div>
        <!-- main section -->
        <div class="container">
            <div class="body-bg">
                <div class="college-details com-table com-ul">

                    <!-- hero section -->




                    <section class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($collegeDetails['images'] as $index => $image) : ?>
                                    <?php if ($index == 0) continue; ?>
                                    <div class="box splide__slide">
                                        <img width="100%" src="<?= $collegeImagePath . $image['image'] ?>" alt="college-image">
                                    </div>
                                <?php endforeach; ?>
                        </div>
                    </section>


                    <!-- content section -->
                    <div class="info">
                        <div class="content">
                            <!-- details -->
                            <div class="details">
                                <div class="about">
                                    <h1><?= $collegeDetails['title'] ?></h1>
                                    <p><?= html_entity_decode($collegeDetails['about']) ?></p>
                                </div>

                                <div class="facilities">
                                    <h3><?php echo $collegeDetails['title'] ?> Facilities</h3>
                                    <?php foreach ($collegeDetails['facilities'] as $facility) : ?>
                                        <div class="box">
                                            <div class="heading">
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

                            <!-- <div id="courses">
                                <h3>Courses provided by <?= $collegeDetails['title']; ?>.</h3>
                                <div class="card-wrapper ">
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
                            </div> -->
                            <!-- end of courses -->


                        </div>
                        <!-- form -->
                        <div class="form">
                            <form action="" class="book-form">

                                <?php
                                if ($collegeDetails['direct'] == 1) {
                                ?>
                                    <div class="direct-college">
                                        <ion-icon name="shield-checkmark"></ion-icon> &nbsp; Direct Admission
                                    </div>
                                <?php
                                }
                                ?>
                                <h3>Book Your Admission on <b><?php echo $collegeDetails['title'] ?></b></h3>
                                <div class="input-holder">
                                    <input required type="text" id="name" placeholder="Name">
                                </div>
                                <div class="input-holder">
                                    <input requiredtype="email" id="email" placeholder="Email">
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
    <script src="http://localhost/medic/src/splide.min.js"></script>
    <script src="http://localhost/medic/src/App.js"></script>

    <script>

    </script>
</body>

</html>