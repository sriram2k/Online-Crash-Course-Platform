<?php
session_start();
$name = $_SESSION['username'];
$email = $_SESSION['email'];
require_once('connection.php');
$sql = "update registration_details set day4att=1 WHERE email= '$email'";
mysqli_query($conn, $sql);
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>App - Day4 - Lesson1</title>
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
                <h5><i class="fa fa-android" aria-hidden="true"></i>&nbsp 1.Introduction to Firebase</h5>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="app-day4-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp 1.Introduction to Firebase</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 55secs</p>

                </li>
                <br>
                <li>
                  <a href="app-day4-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp 2.Connecting to Firebase</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 4min 51secs</p>

                </li>
                <br>
                <li>
                  <a href="app-day4-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp 3.Realtime Database</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 6min 31secs</p>

                 </li>
                 <br>
                 <li>
                   <a href="app-day4-module4.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp 4.Upload and Retrieve Files in firebase	</a>
                   <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 12min 20secs</p>

                  </li>
                  <br>
                <li>
                  <a href="app/day4-mcq.php"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="app.php" class="article"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Back to Course</a>
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
                    <h6 class="text-white d-none d-lg-block">1.Introduction to Firebase	</h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>1.Introduction to Firebase	</h2>
             <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">What is Firebase?</h5>
            <p class="text-dark">Firebase is a mobile and web application development platform developed by Firebase, Inc. in 2011, then acquired by Google in 2014. As of March 2020, the Firebase platform has 19 products, which are used by more than 1.5 million apps.</p>
            <p class="text-dark">It is used for:
            <ul>
              <li>Unlimited Reporting</li>
              <li>Audience Segmentation</li>
              <li>Authentication</li>
              <li>Cloud Messaging</li>
              <li>Hosting</li>
              
            </ul>
            </p>
            </div>
            </div>
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/srkhQqxqNZ4?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
                <br>
                
                <a href="app-day4-module2.php">
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
