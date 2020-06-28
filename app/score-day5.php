<?php
require_once('connection.php');
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
    $score = $_GET['score'];
    session_start();

    $email = $_SESSION['email'];

$res=mysqli_query($conn,"select * from registration_details where email='$email'");
    
    if($res!=false){
        while($row=mysqli_fetch_array($res)){
            $sc=$row["day5score"];
        }
    }
    if($sc==-1){
        $sql="UPDATE registration_details SET day5score='$score' WHERE email='$email'";
        
    }
#Executing the Query
mysqli_query($conn,$sql);
echo '</response>';
?>