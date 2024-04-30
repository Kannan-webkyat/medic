<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Add Location</title>
    <!-- main style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="libs/css/style.css" />



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="location">
        <div data-swup-name="add-location"></div>
        <div class="page-header">
            <h1 class="page-title">Add Location</h1>
        </div>

        <section class="details">
            <div class="box-section">
                <div class="form-feild">
                    <form action="" method="POST" enctype="multipart/form-data" id="add-Location">
                        <div class="flex form-group">

                            <!-- title -->
                            <div class="input-holder split-4">
                                <label for="">Title</label>
                                <input id="title" required name="title" />
                            </div>

                            <!-- location  image -->
                            <div class="input-holder split-4">
                                <label for="">location Image </label>
                                <input id="location-image" required name="location-image" type="file" />
                            </div>
                            <!-- end of location  image  -->

                        </div>
                        <button id="save_btn" type="submit">Create &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
                    </form>
                </div>
            </div>
        </section>
        <?php
        include '../_class/dbConfig.php';
        include './action/location/LocationManager.php';

        $conn = (new dbConfig)->getConnection();
        $crud = new LocationManager($conn);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title         = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
            $image = $_FILES['location-image'];

            $data = [
                'title' => $title,
                'image' => $image,
            ];

            if ($crud->add($data)) {
                header('Location: list-location.php');
            } else {
                echo 'error';
            }
        }
        ?>
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