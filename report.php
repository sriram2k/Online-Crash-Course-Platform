<?php

require_once('connection.php');
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Report</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

     <style media="screen">
       body{
         font-family: 'Montaga', serif;

       }
     </style>
   </head>
   <body>
     <center>
       <div class="jumbotron">
         <h1>Attendance Report</h1>
       </div>
       <div class="container">
         <form class="" action="" method="POST" >
       <div class="row">
         <div class="col-md-7">
           <div class="form-group" style="border-radius:20px;">
             <div class="input-group"  >
               <label style="margin-right:30px;font-size:30px;">Select Number of Days :</label>
                 <select id="days" name="days" >
                   <option selected>---- Select Number of days ---- </option>
                   <br>
                   <option class="opt">View Entire Database </option><br>
                   <option class="opt">1 </option><br>
                   <option class="opt">2 </option><br>
                     <option class="opt">3 </option><br>
                     <option class="opt">4 </option><br>
                     <option class="opt">5 </option><br>
                     <option class="opt">Only 1st day</option><br>
                     <option class="opt">Only 2nd day</option><br>
                     <option class="opt">Only 3rd day</option><br>
                     <option class="opt">Only 4th day</option><br>
                     <option class="opt">Only 5th day</option><br />
                     <option class="opt">Day 1 with MCQ</option><br>
                     <option class="opt">Day 2 with MCQ</option><br>
                     <option class="opt">Day 3 with MCQ</option><br>
                     <option class="opt">Day 4 with MCQ<br>
                     <option class="opt">Day 5 with MCQ</option><br />
                     <option class="opt">Not attended all 5 days</option><br />
                     <option class="opt">Students eligible for E-certificate</option><br />
                 </select>
               </div>
           </div>
           </div>
           <br>
             
             <div class="col-md-2">
               
           <div class="form-group">
             <div class="input-group " >
               <input class="btn btn-info" type="submit" name="submit" value="View Report">
               </div>
           </div>
         </div>
         
         <div class="col-md-3">
           <div class="form-group">
             <div class="input-group " >
               <input class="btn btn-info" type="submit" name="download" value="Download Report">
               </div>
           </div>
         </div>
         
         </div>
       </form>
       
       
       
       
         <br><br><br>
         <div class="row">
           <div class="col-md-12">
               
             <table width="1200" border="1" style="text-align:center;">
               <tr>
               <td>SNO</td>
               <td>NAME</td>
               <td>E-MAIL</td>
               <td>COURSE</td>
               <td>DAY-1 MCQ</td>
               <td>DAY-2 MCQ</td>
               <td>DAY-3 MCQ</td>
               <td>DAY-4 MCQ</td>
               <td>DAY-5 MCQ</td>
             </tr>
               <?php
               
               
               if(isset($_POST['submit'])){
               $nod=$_POST['days'];
               $sno=1;
               #echo $nod;

               if($nod==1){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where (day1att=1 and day1score!= -1)");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);

             }
               else if($nod==2){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
             }
               else if($nod==3){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1 and day3att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
             }

              else if($nod==4){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1 and day3att=1 and day4att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
             }

              else if($nod==5){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1 and day3att=1 and day4att=1 and day5att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td><td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
             }
              else if($nod=="Not attended all 5 days"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=0 and day2att=0 and day3att=0 and day4att=0 and day5att=0");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td><td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
             }

            else if($nod=="Only 1st day"){
             $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1");
             if($result!=false){
               while($row=mysqli_fetch_array($result)){
                 echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                 "</td> <td>".$row["day5score"]."</td></tr>" ;

                 $sno+=1;
               }
             }mysqli_free_result($result);
             mysqli_close($conn);}

              else if($nod=="Only 2nd day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day2att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}


              else if($nod=="Only 3rd day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day3att=1  ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}

              else if($nod=="Only 4th day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day4att=1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}

              else if($nod=="Only 5th day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day5att=1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}
               
               else if($nod=="Day 1 with MCQ"){
             $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day1score!=-1");
             if($result!=false){
               while($row=mysqli_fetch_array($result)){
                 echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                 "</td> <td>".$row["day5score"]."</td></tr>" ;

                 $sno+=1;
               }
             }mysqli_free_result($result);
             mysqli_close($conn);}

              else if($nod=="Day 2 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where (day2att=1 and day2score!= -1)");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}


              else if($nod=="Day 3 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  (day3att=1 and day3score!= -1) ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}

              else if($nod=="Day 4 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day4att=1 and day4score!= -1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}

              else if($nod=="Day 5 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day5att=1 and day5score!= -1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);}
               
               else if($nod=="View Entire Database"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }  
               }
               mysqli_free_result($result);
               mysqli_close($conn);}
               
               else if($nod=="Students eligible for E-certificate"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details");
               
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                     if($row["day1att"]+$row["day2att"]+$row["day3att"]+$row["day4att"]+$row["day5att"] >=3){
                         $cert=0;
                         if($row["day1score"] > -1) {$cert+=1;}
                         if($row["day2score"] > -1) {$cert+=1;}
                         if($row["day3score"] > -1) {$cert+=1;}
                         if($row["day4score"] > -1) {$cert+=1;}
                         if($row["day5score"] > -1) {$cert+=1;}
                         
                         if($cert>=3){
                             
                         
                   echo "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                     }
                 }}
               }mysqli_free_result($result);
               mysqli_close($conn);}
               
              

           }
           

           if(isset($_POST["download"])){
               $nod=$_POST["days"];
               header("Location:report1.php?nod=$nod");
               exit();
           }


                ?>
             </table>
           </div>
         </div>
       </div>
     </center>
     <br><br><br>
   </body>


 </html>
