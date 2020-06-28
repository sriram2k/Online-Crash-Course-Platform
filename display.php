<?php
#calling the connection.php 
require_once('connection.php');

#Selecting the Data from Query
$sql="SELECT * FROM registration_details ";

#Executing the Query
$res=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

</head>
<body>
  <center>
    <div class="display-box">
      <p>
        <b>Displaying Details</b>
      </p>
      <hr>
      <?php 
      #if Condition runs if any Query is Selected
      if(mysqli_num_rows($res) > 0)
        {
        while($row = mysqli_fetch_assoc($res))
        {
        #storing the Values from the query in the Variable
        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];
        $course = $row["course"];
        $day1score = $row["day1score"];
        $day2score = $row["day2score"]; 
        $day1attend = $row["day1att"];
        $day2attend = $row["day2att"];
        ?>
        <table class ="table table-striped">
       
        <tr>
            <td><?php echo "$id"; ?></td>
          <td><?php echo "$name"; ?></td>
          
          <td><?php echo "$email"; ?></td>

          <td><?php echo "$course"; ?></td>

          <td><?php echo "$day1score"; ?></td>

          <td><?php echo "$day2score"; ?></td>

          <td><?php echo "$day1attend"; ?></td>

        <td><?php echo "$day2attend"; ?></td>


        </tr>
        </table>
        <?php
        }
        }
      else
        {
        echo "error";
        } 
      ?>
     
    </div>
  </center>
</body>
</html>
