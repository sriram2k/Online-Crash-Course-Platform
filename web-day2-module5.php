<?php
session_start();
$name = $_SESSION['username'];
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Web - Day2 - Lesson5</title>
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <script src="assets/js/popper.js" charset="utf-8"></script>
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="bg-dark">
            <div class="sidebar-header b-dark" >
                <h5>Lesson 5:</h5>
                <h5><i class="fa fa-css3" aria-hidden="true"></i>&nbsp Fonts & Tables</h5>
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="web-day2-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Introduction to CSS</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 1min 59secs</p>

                </li>
                <br>
                <li>
                  <a href="web-day2-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Adding CSS to HTML</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 36secs</p>

                </li>
                <br>
                <li>
                  <a href="web-day2-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Common properties</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 4min 7secs</p>

                 </li>
                 <br>
                 <li>
                   <a href="web-day2-module4.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Selector, Classes & Ids</a>
                   <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 42secs</p>

                  </li>
                  <br>
                  <li class="active">
                    <a href="web-day2-module5.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Fonts & Tables</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 5mins 11secs</p>

                   </li>
                   <br>
                   <li>
                     <a href="web-day2-module6.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Layout Properties</a>
                     <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 4min 57secs</p>

                    </li>
                    <br>
                    <li>
                      <a href="web-day2-module7.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Shadows</a>
                      <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 57secs</p>

                     </li>
                     <br>
                     <li>
                       <a href="web-day2-module8.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Nav bar</a>
                       <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 6min 15secs</p>

                      </li>
                      <br>
                      <li>
                        <a href="web-day2-module9.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Transitions</a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 20secs</p>

                       </li>
                       <br>
                       <li>
                         <a href="web-day2-module10.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Animations</a>
                         <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 13secs</p>

                        </li>
                        <br>
                <li>
                  <a href="web/day2-mcq.html"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="web.php" class="article"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Back to Course</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-secondary" style="margin-top:-20px; margin-left:-20px; margin-right:-20px; box-border: 2px 2px solid black">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn bg-secondary">
                        <span class="bg-white"></span>
                        <span class="bg-white"></span>
                        <span class="bg-white"></span>
                    </button>
                    <h6 class="text-white d-none d-lg-block">Fonts & Tables</h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>Fonts & Tables</h2>
            
            <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">FONTS AND TABLES</h5>
            <p class="text-dark">The styling options available for the fonts are font family, font style, and the font-weight. The font family is used to give the font you want on the site. The font style is used to make the font italic and the font-weight makes the text bold. The tables have styling options like the table borders, table width and height, and the alignment. 
            </p>
            </div>
            </div>
           <iframe width="100%" height="415" src="https://www.youtube.com/embed/zSqqLjypGG4?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <br><br>
           <a href="web-day2-module4.php">
                    <button class="btn btn-dark" style="float: left;border-radius: 0px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Prev</button>
                </a>
                <a href="web-day2-module6.php">
                    <button class="btn btn-dark" style="float: right;border-radius: 0px;"> Next&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
