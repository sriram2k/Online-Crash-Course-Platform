
<?php

require_once('connection.php');


$output='
<table width="1200" border="1" style="text-align:center;">
  <tr>
  <td>SNO</td>
  <td>NAME</td>
  <td>E-MAIL</td>
  <td>MOBILE NUMBER</td>
  <td>COURSE</td>
  <td>DAY-1 MCQ</td>
  <td>DAY-2 MCQ</td>
  <td>DAY-3 MCQ</td>
  <td>DAY-4 MCQ</td>
  <td>DAY-5 MCQ</td>
</tr> ';

  $sno=1;

  $result=mysqli_query($conn,"select * from registration_details");
  
  if($result!=false){
    while($row=mysqli_fetch_array($result)){
      $output.='<tr> <td>'.$sno.'</td> <td>'.$row["name"].'</td> <td>'.$row["email"].'</td> <td>'.$row["mobileno1"].'</td> <td>'.$row["course"].'</td> <td>'.$row["day1score"].'</td> <td>'.$row["day2score"].'</td> <td>'.$row["day3score"].'</td> <td>'.$row["day4score"].
      '</td> <td>'.$row["day5score"].'</td></tr>' ;

      $sno+=1;
    }
    $output.='</table>';
  }
 

header('Content-Type: application/xls');
header('Content-Disposition:attachment; filename="MAD_DB.xls"');


echo $output;

 ?>
