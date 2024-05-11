<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>All Courses Collection</title>
    <!-- main style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="libs/css/style.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="course-collection">
        <div data-swup-name="list-course-collection"></div>
        <div class="page-header">
            <h1 class="page-title">Courses Collection</h1>
        </div>
        <div class="table-options">
            <div class="option">
                <a href="add-course-collection.php"><button class="assign_button">Add Course Collection<ion-icon name="add-outline">
                        </ion-icon></button></a>
            </div>
            <!-- <div class="option">
                <input id="searchFilter" type="text" placeholder="Search Students">
            </div> -->
        </div>
        <div class="content">
            <div class="table-container">
                <table id="list-course-collection">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Total Courses</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../_class/dbConfig.php';
                        include './action/course-collection/CourseCollectionManager.php';
                        $conn = (new dbConfig)->getConnection();
                        $courseCollectionManager = new CourseCollectionManager($conn);
                        $courseCollections = $courseCollectionManager->list();
                        foreach ($courseCollections as $index => $courseCollection) : ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $courseCollection['title']; ?></td>
                                <td><?php echo $courseCollection['course_count']; ?></td>
                                <td class="button-group">
                                    <a href="edit-course-collection.php?id=<?php echo $courseCollection['id']; ?>" class="edit_button"><ion-icon name="create-outline"></ion-icon>Edit</a>
                                    <form action="" method="POST">
                                        <input type="text" name="id" value="<?php echo $courseCollection['id'] ?>" hidden>
                                        <a type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this category?');">
                                            <ion-icon name="trash-outline"></ion-icon>Delete
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <ul id="pagination-demo" class="pagination-sm"></ul>
        </div>

        <!-- delete -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $delete = $courseCollectionManager->delete($id);
            if ($delete) {
                header('location: list-course-collection.php');
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="src/app.js"></script>

</html>