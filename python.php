<?php
session_start();
if ($_SESSION['log-py']!="allow") {
    header("Location:index.php");
}
unset($_SESSION['log-app']);
unset($_SESSION['log-web']);

$name = $_SESSION['username'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Python Programming</title>
        <link rel="stylesheet" href="assets/css/styles.css">

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    </head>

    <body background="assets/img/bsa.svg">
        <center>
            <section style="margin-top: 1%;">
                <img src="assets/img/veclogo.gif" style="width: 100px;height: 100px;">
                <h1 class="display-4 text-center" id="head-text" style="font-size: 60px;color: black">Velammal Engineering College&nbsp;</h1>
            </section>
        </center>
        <div class="section"><br><br><br><br><br><br></div>
        <div>
            <div class="container">
                <div class="row">
                
                   <div class="col-md-12">
                   <div class="card shadow mb-5 bg-white rounded">
                      <div class="row ">
                        <div class="col-md-12" style="font-family:Ubuntu; padding:40px;">
                   
                          <center><h2 >Python Programming Course will be taken on Zoom.</h2></center>
                          <center><h3>Check your registered email id for Zoom details.</h3></center>
                  </div>
                </div>
        </div>
                   </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="script-day1.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        
    </body>

    </html>
 