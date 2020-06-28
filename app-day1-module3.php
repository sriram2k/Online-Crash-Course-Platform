<?php
session_start();
$name = $_SESSION['username'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>App - Day1 - Lesson3</title>
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
            <nav id="sidebar" class="bg-dark">
                <div class="sidebar-header b-dark">
                    <h5>Lesson 3:</h5>
                    <h5><i class="fa fa-code" aria-hidden="true"></i>&nbsp Introduction to Programming and Java</h5>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                    <a href="app-day1-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Course Objective</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 1min 16secs</p>

                </li>
                    <li>
                        <a href="app-day1-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp; 1.Introduction to Android and Android Studio</a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 5min 42secs</p>

                    </li>
                    <br>
                    <li>
                        <a href="app-day1-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp 2.Installation and Setup</a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 3secs</p>

                    </li>
                    <br>
                    <li class="active">
                        <a href="app-day1-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp 3.Introduction to Programming and Java </a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 38min 3secs</p>

                    </li>
                    <br>
                    <li>
                        <a href="app-day1-module4.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp 4.Introduction to the  Editor  </a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 13min 24secs</p>

                    </li>
                    <br>
                    <li>
                        <a href="app/day1-mcq.html"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="app.php" class="article"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Back to Course</a>
                    </li>
                </ul>
            </nav>

            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-secondary" style="margin-top:-20px; margin-left:-20px; margin-right:-20px; box-border: 2px 2px solid black">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="navbar-btn bg-secondary">
                            <span class="bg-white"></span>
                            <span class="bg-white"></span>
                            <span class="bg-white"></span>
                        </button>
                        <h6 class="text-white d-none d-lg-block">Introduction to Programming and Java</h6>

                        <h6 class="text-white"><?php echo "$name";?></h6>
                    </div>
                </nav>

                <h2>Java-Object Oriented Programming</h2>
                <div class="card shadow p-3 mb-5 bg-white rounded">
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
                        <p class="text-dark">Click here for Online Java Compiler &nbsp &nbsp<a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjOwvHyobDpAhXs4HMBHcIyC0QQFjAAegQIAxAB&url=https%3A%2F%2Fwww.onlinegdb.com%2Fonline_java_compiler&usg=AOvVaw2myOqVkBKsV8TU6zWjBGf1" target="_blank">Online java compiler</a></p>
                        <p class="text-dark">Practise simple java programs in Hackerrank &nbsp &nbsp <a href="https://www.hackerrank.com/dashboard" target="_blank">www.hackerrank.com</a></p>
                    </div>
                </div>
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/t_vOZwrNqDw?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <br>
                <a href="app-day1-module2.php">
                    <button class="btn btn-dark" style="float: left;border-radius: 0px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Prev</button>
                </a>
                <a href="app-day1-module4.php">
                    <button class="btn btn-dark" style="float: right;border-radius: 0px;"> Next&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </a>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
    </body>

    </html>