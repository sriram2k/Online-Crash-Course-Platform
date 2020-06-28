<?php
session_start();

if ($_SESSION['log-web']!="allow") {
    header("Location:index.php");
}
unset($_SESSION['log-app']);
unset($_SESSION['log-py']);

$name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Web Designing and Development</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Off-Canvas-Sidebar-Drawer-Navbar.css">
    
<style>
        #footbtn{
            transition:all 0.3s;
        }
        #footbtn:hover{
            
		-ms-transform: scale(1.5); /* IE 9 */
		-webkit-transform: scale(1.5); /* Safari 3-8 */
		transform:scale(1.5);
        }
    </style>
</head>

<body background="assets/img/bsa.svg">
    <center>
    <section style="margin-top: 2%;">
        <img src="assets/img/veclogo.gif" style="width: 100px;height: 100px;">
        <h1 class="display-4 text-center" id="head-text" style="font-size: 60px;color: black">Velammal Engineering College&nbsp;</h1>
    </section>
    </center>
    <div style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p style="margin-top: 200px;font-size: 60px;font-weight: 700;color: black">Build a Simple Webpage<br></p>
                    <p style="margin-top: 20px;font-size: 28px;color: grey;">Welcome
                        <b><?php echo "$name";?></b></p>
                    <p style="font-size: 20px;margin-top: 20px;">Learn how to build a Simple Webpage with Html , CSS , JavaScript and PHP</p></div>
                <div
                    class="col-md-6"><img src="assets/img/web.svg" style="margin-top: 10px;" width="80%";></div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <div class="container"><br><br>
      <center>
                <h1>Begin Course</h1>
                

                <br>
            </center><br><br>
            <div class="card shadow mb-5 bg-white rounded">
            <div class="row ">
              <div class="col-md-12" style="padding:40px;">                  
                    <center><h2 style="color:red;font-family:Ubuntu;" >Participants must attend the MCQ everyday to be certified.</h2></center>                   
                  </div>
                </div>
        </div> 
        
        <center>
           
           <div class="card shadow mb-5 bg-white rounded">
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;color:limegreen"><i class="fa fa-smile-o" aria-hidden="true"></i> Thanks for attending Day 1 !!! <i class="fa fa-smile-o" aria-hidden="true"></i></h3>
                  
                </div>
          </div>
           </div>
           
           <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;color:limegreen"><i class="fa fa-smile-o" aria-hidden="true"></i> Thanks for attending Day 2 !!! <i class="fa fa-smile-o" aria-hidden="true"></i> </h3>
                  
                </div>
          </div>
           </div>
           
            <div class="card shadow mb-5 bg-white rounded">
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;color:limegreen"><i class="fa fa-smile-o" aria-hidden="true"></i> Thanks for attending Day 3 !!! <i class="fa fa-smile-o" aria-hidden="true"></i></h3>
                  
                </div>
          </div>
           </div>
           
           <div class="card shadow mb-5 bg-white rounded">
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;color:limegreen"><i class="fa fa-smile-o" aria-hidden="true"></i> Thanks for attending Day 4 !!! <i class="fa fa-smile-o" aria-hidden="true"></i></h3>
                  
                </div>
          </div>
           </div>
           
           <div class="card shadow mb-5 bg-white rounded">
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;color:limegreen"><i class="fa fa-smile-o" aria-hidden="true"></i> Thanks for attending Day 5 !!! <i class="fa fa-smile-o" aria-hidden="true"></i></h3>
                  
                </div>
          </div>
           </div>
           
           </center>
        
        <!--
        <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9">
                    <br>
                    <h6 style="font-family:Ubuntu; margin-left:10px;">Day 1</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">HTML</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">Set up your development Environment for writing HTML and learn Basic tags and Syntax.</p>
                         <hr>
                         <a href="web-day1-course.php" class="start-button float-left">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>
     
                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/web1.png" alt="" class="w-100 h-100">
                  </div>

                </div>
            </div> 
        <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9">
                  <br>
                   <h6 style="font-family:Ubuntu; margin-left:10px;">Day 2</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">CSS</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">Learn the basic of CSS syntax and get started adding style to your websites.</p>
                         <hr>
                         <a href="web-day2-module1.php" class="start-button float-left">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>
                         
                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/web2.png" alt="" class="w-100 h-100">
                  </div>

                </div>
            </div>
            
            
        <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9">
                   <br>
                    <h6 style="font-family:Ubuntu; margin-left:10px;">Day 3</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">MySQL</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">Start learning SQL by using create, insert, select, update, alter statements to read and write data in database table.</p>
                         <hr>
                         <a href="web-day3-module1.php" class="start-button">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>
                         
                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/web3.png" alt="" class="w-100 h-100">
                  </div>

                </div>
            </div>
           
        <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9">
                   <br>
                    <h6 style="font-family:Ubuntu;  margin-left:10px;">Day 4</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">PHP</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">This Lesson provides a introduction to API's, JSOUP and HTML parsing and also scraping.</p>
                         <hr>
                         <a href="web-day4-module1.php" class="start-button">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>
                        
                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/web4.png" alt="" class="w-100 h-100">
                  </div>

                </div>
            </div>
            
        <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9">
                   <br>
                    <h6 style="font-family:Ubuntu; margin-left:10px;">Day 5</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">Building a Website</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">Create a simple login form with backend and also blogs.</p>
                         <hr>
                         <a href="web-day5-module1.php" class="start-button">  <img src="assets/img/button.png" class=" start-img"alt="" width="70px" height="30px"> </a>
                         
                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/web5.png" alt="" class="w-100 h-100">
                  </div>

                </div> 
        </div>  -->

        <center>
             <!--
           <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;">Day 1 videos will be unlocked on 10.06.2020 at 10am.</h3>
                  
                </div>
          </div> 
           </div> 
           
           <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;">Day 2 videos will be unlocked on 11.06.2020 at 10am.</h3>
                  
                </div>
          </div>
           </div>
                      <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;">Day 3 videos will be unlocked on 12.06.2020 at 10am.</h3>
                  
                </div>
          </div>
           </div>         <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;">Day 4 videos will be unlocked on 13.06.2020 at 10am.</h3>
                  
                </div>
          </div>
           </div>           <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;">Day 5 videos will be unlocked on 14.06.2020 at 10am.</h3>
                  
                </div>
          </div>
           </div>
           </center>
        
        
        </div>--->
        
        <!--
         <center>
           <div class="row">
               <div class="col-md-4">
                 <a  href="profile.php"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:#FF0000;color:white;border-radius:5px;" >View Profile &nbsp;<i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div>
               <div class="col-md-4">
                 <a  href="https://chat.whatsapp.com/FAoc8CkOdya77Dv2nGmS1Y"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:#FF0000;color:white;border-radius:5px;" >Join Whatsapp  <i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div>
               <div class="col-md-4">
                 <a  href="https://forms.gle/e5ZVg4ENu8BWqnv48"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:#FF0000;color:white;border-radius:5px;" >Give Feedback  &nbsp;<i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div> 
               
           </div>
           </center>
        -->
        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
    <script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
</body>

</html>
