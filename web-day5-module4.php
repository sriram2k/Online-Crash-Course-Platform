<?php
session_start();
$name = $_SESSION['username'];
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web - Day5 - Lesson4</title>
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
                <h5>Lesson 4:</h5>
                <h5><i class="fa fa-window-maximize" aria-hidden="true"></i>&nbsp Displaying blogs</h5>
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="web-day5-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Creating Frontend</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 21min 30secs</p>

                </li>
                <br>
                <li>
                  <a href="web-day5-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Registration & Login</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 29min 48secs</p>

                </li>
                <br>
                <li>
                  <a href="web-day5-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Posting new Blog</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 27min 3secs</p>

                 </li>
                 <br>
                 <li class="active">
                   <a href="web-day5-module4.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Displaying blogs</a>
                   <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 10min 40secs</p>
                  </li>
                  <br>

                <li>
                  <a href="web/day5-mcq.html"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
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
                    <h6 class="text-white d-none d-lg-block">Displaying blogsL</h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>Displaying blogs</h2>
        <!--    <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">What is Java?</h5>
            <p class="text-dark">Java is a popular programming language, created in 1995.It is owned by Oracle, and more than 3 billion devices run Java.</p>
            <p class="text-dark">It is used for:
            <ul>
              <li>Mobile applications (specially Android apps)</li>
              <li>Desktop applications</li>
              <li>Web applications</li>
              <li>Web servers and application servers</li>
              <li>Games</li>
              <li>Database connection</li>
              <li>And much, much more!</li>
            </ul>
            </p>
            </div>
            </div> -->

            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/t5qoNhcQAqI?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
             <br>
                <a href="web-day5-module3.php">
                    <button class="btn btn-dark" style="float: left;border-radius: 0px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Prev</button>
                </a>
                <a href="web/day5-mcq.html">
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
