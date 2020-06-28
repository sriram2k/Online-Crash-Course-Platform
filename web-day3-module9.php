<?php
session_start();
$name = $_SESSION['username'];
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Web - Day3 - Lesson9</title>
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
                <h5>Lesson 9:</h5>
                <h5><i class="fa fa-database" aria-hidden="true"></i>&nbsp Functions</h5>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="web-day3-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Introduction to MySQL</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 17secs</p>

                </li>
                <br>
                <li >
                  <a href="web-day3-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Data types</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 7secs</p>

                </li>
                <br>
                <li>
                  <a href="web-day3-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Keys</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 11secs</p>

                 </li>
                 <br>
                  <li>
                        <a href="web-day3-module4.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Create and Insert Statement</a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 39secs</p>

                       </li>
                       <br>
                 <li>
                   <a href="web-day3-module5.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Select Statement</a>
                   <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 1min 51secs</p>

                  </li>
                  <br>
                  <li>
                    <a href="web-day3-module6.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Select with conditions</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 33secs</p>

                   </li>
                   <br>
                   <li>
                     <a href="web-day3-module7.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Delete & Update Statement</a>
                     <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 44secs</p>

                    </li>
                    <br>
                    <li>
                      <a href="web-day3-module8.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Alter & Drop Statement</a>
                      <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 46secs</p>

                     </li>
                     <br>
                     <li class="active">
                       <a href="web-day3-module9.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp  Functions</a>
                       <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 54secs</p>

                      </li>
                       <br>
         
                        
                <li>
                  <a href="web/day3-mcq.html"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
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
                    <h6 class="text-white d-none d-lg-block">Functions</h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>Functions</h2>
            
            <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">FUNCTIONS </h5>
            <p class="text-dark">Welcome to the final video of the day! In this video, we’ll discuss some inbuilt functions in MySQL. These inbuilt functions can perform basic operations that we might need to perform on the data that we have retrieved, such as counting the number of rows, adding or finding the average. MySQL provides you with several inbuilt functions that you can use. In this video, we’ll discuss some of them along with their usage examples. 
            </p>
            </div>
            </div>
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/ZGei5jKootg?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br>
            <a href="web-day3-module8.php">
                    <button class="btn btn-dark" style="float: left;border-radius: 0px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Prev</button>
                </a>
            <a href="web/day3-mcq.html">
                    <button class="btn btn-dark" style="float: right;border-radius: 0px;"> MCQ&nbsp;<i class="fa fa-certificate" aria-hidden="true"></i></button>
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
