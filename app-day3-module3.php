<?php
session_start();
$name = $_SESSION['username'];
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>App - Day3 - Lesson3</title>
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
                <h5>Lesson 3:</h5>
                <h5><i class="fa fa-android" aria-hidden="true"></i>&nbsp Instagram Scrapping</h5>
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="app-day3-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Introduction to API's</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 6min 57secs</p>

                </li>
                <br>
                <li >
                  <a href="app-day3-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Jsoup and HTML Parsing	</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 14min 43secs</p>

                </li>
                <br>
                <li class="active" >
                  <a href="app-day3-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Instagram Scrapping</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 14min 33secs</p>

                 </li>
                <br>
                <li>
                  <a href="app/day3-mcq.html"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
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
                    <h6 class="text-white d-none d-lg-block">Instagram Scrapping</h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>Instagram Scrapping</h2>            
            <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">What is Instagram Scrapping?</h5>
            <p class="text-dark">Enables scraping of publicly available data from Instagram posts on profile, hashtag and place pages. The actor extracts links to photos, comments, and detailed information about the Instagram pages. It supports search queries as well as a list of URLs.</p>
            <p class="text-dark">The Instagram data scraper supports the following features:
            <ul>
              <li>Scrape profiles - query profiles matched by search keyword and then you can either scrape posts or get metadata from each profile</li>
              <li>Desktop applications</li>
              <li>Scrape hashtags - query hastags matched by search keyword you can either scrape posts or scrape metadata from each hashtag</li>
              <li>Scrape places - query places matched by search keyword you can either scrape posts or scrape metadata from each place</li>
              <li>Scrape comments - you can scrape comments from any post</li>
                 </ul>
            </p>
            </div>
            </div>

            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/GaUXiMrTHIY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
                <br>
                <a href="app-day3-module2.php">
                    <button class="btn btn-dark" style="float: left;border-radius: 0px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Prev</button>
                </a>
                <a href="app/day3-mcq.html">
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
