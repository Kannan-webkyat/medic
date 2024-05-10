<?php

function pageHeader(mysqli $conn)
{
?>
    <header>
        <div class="container">
            <a href="http://localhost/medic/index" class="logo">
                <img src="http://localhost/medic/assets/images/logo.png" style="filter:invert(100%)" alt="medic guidence logo">
            </a>
            <nav>
                <ul>
                    <li>
                        <a href="" class="drop-trigger">Choose a Goal &nbsp; <ion-icon name="chevron-down-outline"></ion-icon></a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </nav>
            <button class="booknow-btn desktop-cta apply-trigger"> <ion-icon name="chatbox-ellipses-outline"></ion-icon> &nbsp; Get a Free Consultation</button>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
        <div class="mega-menu">

            <div class="left">
                <div class="heading">Course Category</div>
                <ul>
                    <?php
                    include './action/allCategoriesWithCourseName.php';

                    // Fetch all categories and their associated courses
                    $megaData = fetchAllCategories($conn);

                    // Loop through each category
                    foreach ($megaData as $index => $data) :
                        // Extract courses for the current category
                        $sub = $data['courses'];
                    ?>
                        <li class="<?php echo ($index == 0) ? 'has-sub li-active' : (count($sub) > 0 ? 'has-sub' : '') ?>">
                            <?php echo $data['title']; ?>
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                            <?php
                            // If there are courses for this category, display them
                            if (count($sub) > 0) :
                            ?>
                                <ul>
                                    <?php
                                    // Loop through each course and display its title
                                    foreach ($sub as $item) :
                                    ?>
                                        <li><a href="http://localhost/medic/colleges/course=<?php echo $item['slug']; ?>"><?php echo $item['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php
                            endif; // End check for courses
                            ?>
                        </li>
                    <?php
                    endforeach; // End loop through categories
                    ?>
                </ul>

            </div>

        </div>


    </header>
<?php
}
?>