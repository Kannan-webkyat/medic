<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Add Course</title>
    <!-- main style -->
    <link rel="stylesheet" href="libs/css/style.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body data-barba="wrapper">
    <main id="swup" class="transition-fade" page-ref="course">
        <div data-swup-name="add-course"></div>
        <div class="page-header">
            <h1 class="page-title">Add Course</h1>
        </div>

        <section class="details">
            <div class="box-section">
                <form action="" id="add-course">
                    <div class="flex">

                        <!-- title -->
                        <div class="input-holder split-4">
                            <label for="">Title</label>
                            <input id="title" />
                        </div>

                        <!-- main banner image -->
                        <div class="input-holder split-4">
                            <label for="">Main Banner Image</label>
                            <input id="banner-images" type="file" />
                        </div>
                        <!-- end of main banner image -->

                        <!-- about course -->
                        <div class="input-holder" style="width: 100%;">
                            <label for="">About Course</label>
                            <textarea name="" class="tiny" id="about course"></textarea>

                        </div>
                        <!--end of about course -->

                        <!-- duration -->
                        <div class="input-holder split-4">
                            <label for="">Duration</label>
                            <input type="text" id="duration" name="duration" />
                        </div>
                        <!-- end of duration -->

                        <!-- duration -->
                        <div class="input-holder split-4" style="width: 100%;">
                            <label for=""> Elegibitliy</label>
                            <input type="text" id=" elegibitliy" name=" elegibitliy" />
                        </div>
                        <!-- end of duration -->


                        <!-- Minimum age -->
                        <div class="input-holder split-4">
                            <label for="">Minimum Age</label>
                            <input type="text" id="minimum-age" name="minimum age" />
                        </div>
                        <!-- end of Minimum age -->
                        
                        <!-- Minimum Percentage -->
                        <div class="input-holder split-4">
                            <label for="">Minimum Percentage</label>
                            <input type="text" id="minimum-percentage" name="minimum-percentage" />
                        </div>
                        <!-- end of Minimum Percentage -->
                        
                        <!-- Job Opertunity -->
                        <div class="input-holder split-4">
                            <label for="">Job Opertunity </label>
                            <input type="text" id="job-opertunity " name="job-opertunity" />
                        </div>
                        <!-- end of Job Opertunity -->
                        <!-- frequently asked questions  -->
                        <div class="input-holder" style="width: 100%;">
                            <label for="">Frequently Asked Questions</label>
                            <textarea name="frequently-asked-questions" class="tiny" id="frequently-asked-questions"></textarea>

                        </div>
                        <!-- end of frequently asked questions  -->




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