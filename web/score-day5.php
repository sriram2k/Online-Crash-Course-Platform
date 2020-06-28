<?php
require_once('connection.php');
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
    $score = $_GET['score'];
    session_start();

    $email = $_SESSION['email'];

    $sql="UPDATE registration_details SET day5score='$score' WHERE email='$email'";

#Executing the Query
mysqli_query($conn,$sql);
echo '</response>';
?>