<?php

session_start();
if ($_SESSION['log-app']!="allow") {
    header("Location:index.php");
}
unset($_SESSION['log-web']);
unset($_SESSION['log-py']);

$name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mobile App Development</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Off-Canvas-Sidebar-Drawer-Navbar.css">
    
    <style>
        #footbtn{
            transition:all 0.8s;
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
                    <p style="margin-top: 200px;font-size: 60px;font-weight: 700;color: black">Build a Simple Android app<br></p>
                    <p style="margin-top: 20px;font-size: 18px;color: grey;">Welcome <u>
                        <?php echo "$name";?></u></p>
                    <p style="font-size: 20px;margin-top: 20px;">Learn how to build a Simple android app with android studio and firebase</p></div>
                <div class="col-md-6"><img src="assets/img/app.png" style="margin-top: 10px;width:100%;"></div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <div class="container">
      <center>
                <h1>Begin Course</h1>
            </center><br><br>
            <div class="card shadow mb-5 bg-white rounded">
            <div class="row ">
              <div class="col-md-12">                  
                    <center><h2 style="color:red;font-family:Ubuntu; padding:40px;">Participants must attend the MCQ everyday to be certified.</h2></center>                   
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
       <center>
           <div class="row">
               <div class="col-md-4">
                 <a  href="app/day1-mcq.php"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:blue;color:white;border-radius:5px;" >Day-1 MCQ &nbsp;<i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div>
               <div class="col-md-4">
                 <a  href="app/day2-mcq.php"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:blue;color:white;border-radius:5px;" >Day-2 MCQ <i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div>
               <div class="col-md-4">
                 <a  href="app/day3-mcq.php"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:blue;color:white;border-radius:5px;" >Day-3 MCQ  &nbsp;<i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div> 
           </div>
           </center>
        -->
    
        <!--
         <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9 ">
                    <br>
                    <h6 style="font-family:Ubuntu; margin-left:10px;">Day 1</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">Preface</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">This Lesson provides an introduction java and Android and also explains how to use install IDE or Editor's</p>
                         <hr>
                         <a href="app-day1-course.php" class="start-button float-left">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>

                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/android1.png" alt="" class="w-100 h-100">
                  </div>

                </div>
            </div> 
        <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9">
                  <br>
                   <h6 style="font-family:Ubuntu; margin-left:10px;">Day 2</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">Getting Started </h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">Creating Simple login form and also Importing a website into android app.</p>
                         <hr>
                         <a href="app-day2-module1.php" class="start-button float-left">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>

                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/android2.png" alt="" class="w-100 h-100">
                  </div>

                </div>
            </div>
        <div class="card shadow  mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9 ">
                   <br>
                    <h6 style="font-family:Ubuntu; margin-left:10px;">Day 3</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">Scrap the web</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">This Lesson provides a introduction to API's, JSOUP and HTML parsing and also scraping.</p>
                         <hr>
                         <a href="app-day3-module1.php" class="start-button float-left">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>

                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/android3.png" alt="" class="w-100 h-100">
                  </div>
              </div>
            </div>
            

        <div class="card shadow mb-5 bg-white rounded">
          <div class="row ">
              <div class="col-md-9">
                   <br>
                    <h6 style="font-family:Ubuntu; margin-left:10px;">Day 4</h6>
                    <h4 style="font-family:Ubuntu; margin-left:10px;">Data in clouds</h4>
                    <div class="card-block">
                         <p class="lead" style=" margin-left:10px;">Understanding Firebase's Realtime Database and Firestore. Build an application to upload and retrieve data from cloud server.</p>
                         <hr>
                         <a href="app-day4-module1.php" class="start-button float-left">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>
 
                    </div>
                  </div>
                  <div class="col-md-3 d-none d-lg-block">
                    <img src="assets/img/android4.png" alt="" class="w-100 h-100">
                  </div>

                </div>
            </div> 
            
            
        <div class="card shadow mb-5 bg-white rounded">
          <div class="row">
            <div class="col-md-9 ">
                 <br>
                  <h6 style="font-family:Ubuntu; margin-left:10px;">Day 5</h6>
                  <h4 style="font-family:Ubuntu; margin-left:10px;">Fruition</h4>
                  <div class="card-block">
                       <p class="lead" style=" margin-left:10px;">Build a app to stimulate Social media feeds.</p>
                       <hr>
                       <a href="app-day5-module1.php" class="start-button float-left">  <img src="assets/img/button.png" class="start-img"alt="" width="70px" height="30px"> </a>
                  </div>
                </div>
                <div class="col-md-3 d-none d-lg-block">
                  <img src="assets/img/android5.png" alt="" class="w-100 h-100">
                </div>
          </div>
           </div> 
           
           -->
           
           <center>
               
           <!--
           <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;">Day 4 videos will be unlocked on 08.06.2020 at 10am.</h3>
                  
                </div>
          </div>
           </div>
           
           <div class="card shadow mb-5 bg-white rounded">
               
          <div class="row">
            <div class="col-md-12 ">
                  <h3 style="font-family:Ubuntu; margin-left:10px;padding:30px;">Day 5 videos will be unlocked on 09.06.2020 at 10am.</h3>
                  
                </div>
          </div>
           </div>
           
           -->
           
           </center>
           </div>
           
           
           <center>
               <!--
           <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-3">
                 <a  href="profile.php"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:orange;color:white;border-radius:5px;" >View Profile &nbsp;<i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div>
               <div class="col-md-2">
                 <a  href="https://chat.whatsapp.com/IkybiMqk4wx5CTuH00o0mz"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:orange;color:white;border-radius:5px;" >Join Whatsapp  <i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div>
                <div class="col-md-3">
                 <a  href="https://forms.gle/HtzsfoXAtuj2Y65DA"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:10px;background-color:orange;color:white;border-radius:5px;" >Give Feedback  &nbsp;<i style="color:white;" class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>  
               </div> 
               <div class="col-md-2"></div>
           </div> 
           -->
           </center>
           
 
        


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
    <script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
</body>

</html>
