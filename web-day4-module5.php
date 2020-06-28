<?php
session_start();
$name = $_SESSION['username'];
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Web - Day4 - Lesson5</title>
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
                <h5><i class="fa fa-server" aria-hidden="true"></i>&nbsp Superglobals </h5>
            </div>

            <ul class="list-unstyled components">
               <ul class="list-unstyled components">
                <li>
                    <a href="web-day4-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Introduction to PHP</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 1min 41secs</p>

                </li>
                <br>
                <li>
                  <a href="web-day4-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp  Installation</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 8min 14secs</p>

                </li>
                <br>
                <li >
                  <a href="web-day4-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Variables & Data Types</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 20secs</p>

                 </li>
                 <br>
                 <li>
                   <a href="web-day4-module4.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Conditionals & Loops </a>
                   <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 5min 37secs</p>

                  </li>
                  <br>
                  <li class="active">
                    <a href="web-day4-module5.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Superglobals </a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 4min 37secs</p>

                   </li>
                   <br>
                   <li>
                     <a href="web-day4-module6.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp  Form Handling</a>
                     <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 4min 33secs</p>

                    </li>
                    <br>
                    <li>
                      <a href="web-day4-module7.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Form Validation </a>
                      <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 6min 10secs</p>

                     </li>
                     <br>
                     <li>
                       <a href="web-day4-module8.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp  Cookies & Sessions</a>
                       <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 4min 23secs</p>

                      </li>
                      <br>
                      <li>
                        <a href="web-day4-module9.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Database Access </a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 6min 11secs</p>

                       </li>
                        <br>
                <li>
                  <a href="web/day4-mcq.html"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
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
                    <h6 class="text-white d-none d-lg-block">Superglobals </h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>Superglobals </h2>
           
            <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">Superglobals</h5>
                <p class="text-dark">
                
                    Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope
The PHP superglobal variables are: <br>

$GLOBALS <br>
$_SERVER<br>
$_REQUEST<br>
$_POST<br>
$_COOKIE<br>
$_SESSION<br>

                
            </p>
            </div>
            </div>
             <iframe width="100%" height="400" src="https://www.youtube.com/embed/nBLYxQA2A2Q?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             <br>
             <br>
                <a href="web-day4-module4.php">
                    <button class="btn btn-dark" style="float: left;border-radius: 0px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Prev</button>
                </a>
                <a href="web-day4-module6.php">
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
