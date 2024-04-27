<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>All Courses</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="course">
        <div data-swup-name="list-course"></div>
        <div class="page-header">
            <h1 class="page-title">Courses</h1>
        </div>
        <div class="table-options">
            <div class="option">
                <a href="add-course.php"><button class="assign_button">Add Course<ion-icon name="add-outline">
                        </ion-icon></button></a>
            </div>
            <!-- <div class="option">
                <input id="searchFilter" type="text" placeholder="Search Students">
            </div> -->
        </div>
        <div class="content">
            <div class="table-container">
                <table id="list-course">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Eligibility</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <!-- fetching all course -->
                    <?php
                    include '../_class/dbConfig.php';
                    include './action/course/CourseManager.php';

                    $conn = (new dbConfig)->getConnection();
                    $courseObj = new CourseManager($conn);
                    $courses = $courseObj->list();
                    ?>
                    <tbody>
                        <?php foreach ($courses as $index => $course) : ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $course['title']; ?></td>
                                <td><?php echo $course['category']; ?></td>
                                <td><?php echo $course['duration']; ?></td>
                                <td><?php echo $course['eligibility']; ?></td>
                                <td>
                                    <a href="edit-course.php?id=<?php echo $course['id']; ?>" class="edit_button"><ion-icon name="create-outline"></ion-icon>Edit</a>
                                    <form action="" method="POST">
                                        <input type="text" name="id" value="<?php echo $course['id'] ?>" hidden>
                                        <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this category?');">
                                            <ion-icon name="trash-outline"></ion-icon>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <ul id="pagination-demo" class="pagination-sm"></ul>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $delete = $courseObj->delete($id);
            if ($delete) {
                header('location: list-course.php');
            } else {
                echo 'error while delete';
            }
        }
        ?>
    </main>
</body>

<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- global jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- app js -->
<!-- tiny editor -->
<script src="https://cdn.tiny.cloud/1/43aunf39f890dvkf0odugutyswrwof33rftvvs52jrl27zli/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script type="module" src="src/app.js"></script>

</html>