<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Edit Facility</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="facility">
        <div data-swup-name="edit-facility"></div>
        <div class="page-header">
            <h1 class="page-title">Edit facility</h1>
        </div>

        <?php
        include '../_class/dbConfig.php';
        include './action/facility/FacilityManager.php';

        $conn = (new dbConfig)->getConnection();
        $crud = new FacilityManager($conn);

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $facility = $crud->fetchEdit($id);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $id,
                'title' => filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS),
                'image' => $_FILES['facility-icon'] ?? [],
                'description' => filter_var($_POST['description'], FILTER_SANITIZE_SPECIAL_CHARS)
            ];

            if ($crud->edit($data)) {
                header('Location: list-facility.php');
            } else {
                echo 'error';
            }
        }
        ?>

        <section class="details">
            <div class="box-section">
                <div class="form-feild">
                    <form action="" method="POST" enctype="multipart/form-data" id="edit-facility">
                        <div class="flex form-group">

                            <!-- title -->
                            <div class="input-holder split-4">
                                <label for="">Title</label>
                                <input id="title" name="title" value="<?php echo $facility['title']; ?>" />
                            </div>

                        <!-- facility icon -->
                        <div class="input-holder split-4">
                            <label for="">Facility Icon</label>
                            <input id="facility-icon" type="file" name="facility-icon" />
                        </div>
                        <!-- end of facility icon  -->

                        <!-- description -->
                        <div class="input-holder split-4">
                            <label for="">Description</label>
                            <textarea id="description" name="description"><?php echo $facility['description']; ?></textarea>
                        </div>
                        <!-- end of description -->

                        <!-- Display current image -->
                        <div class="input-holder split-4">
                            <label for="">Current Icon</label>
                            <img width="250" src="./action/facility/docs/<?php echo $facility['image']; ?>" alt="Current Image">
                        </div>
                    </div>
                    <button id="save_btn" type="submit">Save &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
                </form>
            </div>
        </section>
    </main>
</body>
<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<!-- global jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- tiny editor -->
<script src="https://cdn.tiny.cloud/1/43aunf39f890dvkf0odugutyswrwof33rftvvs52jrl27zli/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<!-- app js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="src/app.js"></script>

</html>