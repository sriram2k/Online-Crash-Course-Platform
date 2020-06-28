<?php
session_start();

require_once('connection.php');
$mail = $_SESSION['email'];
$sql = "SELECT * FROM registration_details WHERE email='$mail'";
$res = mysqli_query($conn, $sql);

if($res!=false){

while($row=mysqli_fetch_array($res)){
$name=$row["name"];
$course=$row["course"];
$mobile=$row["mobileno1"];

if($row["day1score"]==-1){
    $d1s="Not Attempted" ;
}
else{
    $d1s=$row["day1score"];
}
if($row["day2score"]==-1){
    $d2s="Not Attempted" ;
}
else{
    $d2s=$row["day2score"];
}
if($row["day3score"]==-1){
    $d3s="Not Attempted" ;
}
else{
    $d3s=$row["day3score"];
}
if($row["day4score"]==-1){
    $d4s="Not Attempted" ;
}
else{
    $d4s=$row["day4score"];
}
if($row["day5score"]==-1){
    $d5s="Not Attempted" ;
}
else{
    $d5s=$row["day5score"];
}
if($row["day1att"]==0){
    $d1a="Absent" ;
}
else{
    $d1a="Present";
}

if($row["day2att"]==0){
    $d2a="Absent" ;
}
else{
    $d2a="Present";
}

if($row["day3att"]==0){
    $d3a="Absent" ;
}
else{
    $d3a="Present";
}

if($row["day4att"]==0){
    $d4a="Absent" ;
}
else{
    $d4a="Present";
}

if($row["day5att"]==0){
    $d5a="Absent" ;
}
else{
    $d5a="Present";
}


}

}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>My Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style media="screen">

        #footbtn{
            transition:all 0.8s;
        }
#footbtn:hover{
            
		-ms-transform: scale(1.5); /* IE 9 */
		-webkit-transform: scale(1.5); /* Safari 3-8 */
		transform: scale(1.5);
        }
      #profile{
        border:5px solid white;
        border-radius:500px;
        width:150px;
        height:150px;
      }
      #letter{
        text-align:center;
        font-size:60px;
        margin-top:20px;
        font-weight:700;
      }
      .head{
          font-size:50px;
          font-weight:800;
      }
      @media screen and (max-width: 700px) {
  .head{
      font-size:20px;
      font-weight:800;
  }
  }
}
    </style>
<body>
    <div style="margin-top: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                <center>
            <?php
if(strtoupper($name[0])=='A'){
echo '<div id="profile" style="background-color:red"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='B'){
echo '<div id="profile" style="background-color:lightgreen"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='C'){
echo '<div id="profile" style="background-color:lightblue"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='D'){
echo '<div id="profile" style="background-color:pink"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='E'){
echo '<div id="profile" style="background-color:green"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='F'){
echo '<div id="profile" style="background-color:blue"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='G'){
echo '<div id="profile" style="background-color:purple"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}

else if(strtoupper($name[0])=='H'){
echo '<div id="profile" style="background-color:#fffdd0"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='I'){
echo '<div id="profile" style="background-color:Tomato"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='J'){
echo '<div id="profile" style="background-color:#2DA6CE"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='K'){
echo '<div id="profile" style="background-color:#82E0AA"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}

else if(strtoupper($name[0])=='L'){
echo '<div id="profile" style="background-color:#F08080"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}

else if(strtoupper($name[0])=='M'){
echo '<div id="profile" style="background-color:#FA8072"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}

else if(strtoupper($name[0])=='N'){
echo '<div id="profile" style="background-color:#BF385F"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}

else if(strtoupper($name[0])=='O'){
echo '<div id="profile" style="background-color:#29D217"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='P'){
echo '<div id="profile" style="background-color:#DAAF01"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='Q'){
echo '<div id="profile" style="background-color:#008080"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='R'){
echo '<div id="profile" style="background-color:#FF00FF"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='S'){
echo '<div id="profile" style="background-color:#0FEC11"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='T'){
echo '<div id="profile" style="background-color:#05FAF8"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='U'){
echo '<div id="profile" style="background-color:#F69283"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}

else if(strtoupper($name[0])=='V'){
echo '<div id="profile" style="background-color:#AC91C5"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='W'){
echo '<div id="profile" style="background-color:#C492F2"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='X'){
echo '<div id="profile" style="background-color:#C3818C"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else if(strtoupper($name[0])=='Y'){
echo '<div id="profile" style="background-color:#908CF3"><p id="letter">';
echo strtoupper($name[0]);
echo '</p></div>';
}
else{
  echo '<div id="profile" style="background-color:#F1C40F"><p id="letter">';
  echo strtoupper($name[0]);
  echo '</p></div>';
}
 ?></center>
                    
                    
                </div>
                <div class="col-md-6 col-lg-7">
                    <center>
                        
                        <br><br>
                        <p class="head" ><?php echo $name; ?></p>
                    </center>
                    
                </div>
            </div>
                

            <div class="row">
                <div class="col-md-6 col-lg-4">
                	
                	<br><br>
                    <p style="font-weight: bold;font-size: 20px;">Email</p>
                    <p><?php echo $mail; ?></p>
                    <hr>
                    <p style="font-weight: bold;font-size: 20px;">Mobile</p>
                    <p><?php echo $mobile; ?></p>
                    <hr>
                    <p style="font-weight: bold;font-size: 20px;">Course</p>
                    <p><?php echo $course; ?></p>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="table-responsive table-striped" style="margin-top:10%;" >
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 150px;"></th>
                                    <th>Attendance</th>
                                    <th>Marks</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td style="font-weight: bold;">Day1</td>
                                    <td><?php echo "$d1a";?></td>
                                    <td><?php echo "$d1s";?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Day2</td>
                                    <td><?php echo "$d2a";?></td>
                                    <td><?php echo "$d2s";?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Day3</td>
                                    <td><?php echo "$d3a";?></td>
                                    <td><?php echo "$d3s";?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Day4</td>
                                    <td><?php echo "$d4a";?></td>
                                    <td><?php echo "$d4s";?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Day5</td>
                                    <td><?php echo "$d5a";?></td>
                                    <td><?php echo "$d5s";?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   <center> <a  href="web.php"><button id="footbtn" style="border:none;outline:none;width:200px;padding:10px;margin-bottom:50px;margin-top:40px;background-color:lightgreen;color:white;border-radius:5px;" ><i style="color:white;" class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Go Back</button></a></center>  
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>