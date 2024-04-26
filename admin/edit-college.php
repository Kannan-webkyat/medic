<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Edit College</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="colleges">


        <div data-swup-name="edit-college"></div>
        <div class="page-header">
            <h1 class="page-title">Edit College</h1>
        </div>

        <section class="details">
            <div class="box-section">
                <form action="" method="POST" enctype="multipart/form-data" id="edit-college">
                    <div class="flex">

                        <div class="input-holder split-4">
                            <label for="">Title</label>
                            <input id="title" />

                        </div>
                        <div class="input-holder split-4">
                            <label for="">College Images</label>
                            <input id="images" multiple type="file" />

                        </div>
                        <div class="input-holder split-4">
                            <label for="">Location</label>
                            <select>
                                <option value="">Select</option>
                            </select>

                        </div>
                        <div class="input-holder" style="width: 100%;">
                            <label for="">About College</label>
                            <textarea name="" class="tiny" id="about"></textarea>

                        </div>
                        <div class="input-holder" style="width: 100%;">
                            <label for="">Youtube Link</label>
                            <textarea name=""></textarea>

                        </div>
                        <div class="input-holder split-4">
                            <label for="">Choose course category </label>
                            <select id="course-category">
                                <option value="">Select</option>
                            </select>

                        </div>
                        <div class="input-holder split-4">
                            <label for="">Choose facility </label>
                            <select id="facility">
                                <option value="">Select</option>
                            </select>

                        </div>
                        <div class="input-holder split-4">
                            <label for="">Pick Courses Provided by the college </label>
                            <select pick-courses>
                                <option value="">Select</option>
                            </select>

                        </div>
                        <div class="input-holder split-4">
                            <label for="">is Direct College?</label>
                            <input id="direct-college" type="checkbox" />

                        </div>
                        <div class="input-holder split-4">
                            <label for="">Featured </label>
                            <input id="featured " type="checkbox" />

                        </div>
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