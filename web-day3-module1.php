<?php
session_start();
$name = $_SESSION['username'];
$email = $_SESSION['email'];
require_once('connection.php');
$sql = "update registration_details set day3att=1 WHERE email= '$email'";
mysqli_query($conn, $sql);
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Web - Day3 - Lesson1</title>
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
                <h5>Lesson 1:</h5>
                <h5><i class="fa fa-database" aria-hidden="true"></i>&nbsp Introduction to MySQL</h5>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="web-day3-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Introduction to MySQL</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 17secs</p>

                </li>
                <br>
                <li>
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
                     <li>
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
                    <h6 class="text-white d-none d-lg-block">Introduction to MySQL</h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>Introduction to MySQL</h2>
            
            <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">INTRODUCTION </h5>
            <p class="text-dark">Welcome to day 3! So far we have learnt HTML and CSS, we’re now into the backend of the webpage. Our topic for today is MySQL. It is a database service that can be used with standard sql commands. Data is stored in tables as rows and columns. There are 4 types of commands in SQL - DDL, DML, DCL, DQL. In this video, we’ll see a brief introduction to databases and let’s discuss the topics that we’ll be covering in today’s videos.  
            </p>
            </div>
            </div>
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/IK8sH7a2VXI?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br>
                <a href="web-day3-module2.php">
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
