<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Add Facility</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="facility">
        <div data-swup-name="add-facility"></div>
        <div class="page-header">
            <h1 class="page-title">Add facility</h1>
        </div>

        <section class="details">
            <div class="box-section">
                <form action="" id="add-facility">
                    <div class="flex">

                        <!-- title -->
                        <div class="input-holder split-4">
                            <label for="">Title</label>
                            <input id="title" name="title"/>
                        </div>

                        <!-- facility icon -->
                        <div class="input-holder split-4">
                            <label for="">Facility Icon</label>
                            <input id="facility-icon" type="file" name="facility-icon" />
                        </div>
                        <!-- end of facility icon  -->

                       




                    </div>
                    <button id="save_btn" type="submit">Create &nbsp; <img src="assets/icons/arrow-right.png" alt=""></button>
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
<script type="module" src="src/app.js"></script>

</html>