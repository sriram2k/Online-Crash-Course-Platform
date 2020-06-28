<?php

require_once('connection.php');
 
if(isset($_GET['nod'])){
    $nod=$_GET['nod'];
}
 
   $output='
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
 </tr>';
   
   
   $sno=1;
   #$output.= $nod;

   if($nod==1){
   $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where (day1att=1 and day1score!= -1)");
   if($result!=false){
     while($row=mysqli_fetch_array($result)){
       $output.= '<tr> <td>'.$sno.'</td> <td>'.$row["name"].'</td> <td>'.$row["email"].'</td>  <td>'.$row["course"].'</td> <td>'.$row["day1score"].'</td> <td>'.$row["day2score"].'</td> <td>'.$row["day3score"].'</td> <td>'.$row["day4score"].
       '</td> <td>'.$row["day5score"].'</td></tr>' ;

       $sno+=1;
     }
     
     
   }mysqli_free_result($result);
   mysqli_close($conn);
   
   $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;

 }
 else if($nod==2){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
               
               $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
             }
               else if($nod==3){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1 and day3att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
               $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
             }

              else if($nod==4){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1 and day3att=1 and day4att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
               $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
             }

              else if($nod==5){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day2att=1 and day3att=1 and day4att=1 and day5att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td><td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
               $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
             }
              else if($nod=="Not attended all 5 days"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=0 and day2att=0 and day3att=0 and day4att=0 and day5att=0");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td><td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }
               mysqli_free_result($result);
               mysqli_close($conn);
               $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
             }

            else if($nod=="Only 1st day"){
             $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1");
             if($result!=false){
               while($row=mysqli_fetch_array($result)){
                 $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                 "</td> <td>".$row["day5score"]."</td></tr>" ;

                 $sno+=1;
               }
             }mysqli_free_result($result);
             mysqli_close($conn);
                
$output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
            }

              else if($nod=="Only 2nd day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day2att=1");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }


              else if($nod=="Only 3rd day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day3att=1  ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }

              else if($nod=="Only 4th day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day4att=1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }

              else if($nod=="Only 5th day"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day5att=1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }
               
               else if($nod=="Day 1 with MCQ"){
             $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where day1att=1 and day1score!=-1");
             if($result!=false){
               while($row=mysqli_fetch_array($result)){
                 $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                 "</td> <td>".$row["day5score"]."</td></tr>" ;

                 $sno+=1;
               }
             }mysqli_free_result($result);
             mysqli_close($conn);
                   $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
               }

              else if($nod=="Day 2 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where (day2att=1 and day2score!= -1)");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }


              else if($nod=="Day 3 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  (day3att=1 and day3score!= -1) ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }

              else if($nod=="Day 4 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day4att=1 and day4score!= -1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }

              else if($nod=="Day 5 with MCQ"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details where  day5att=1 and day5score!= -1 ");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }
               }mysqli_free_result($result);
               mysqli_close($conn);
                  $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
              }
               
               else if($nod=="View Entire Database"){
               $result=mysqli_query($conn,"select distinct email,name, mobileno1, course, day1score, day2score, day3score, day4score, day5score, day1att, day2att, day3att, day4att, day5att from registration_details");
               if($result!=false){
                 while($row=mysqli_fetch_array($result)){
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                 }  
               }
               mysqli_free_result($result);
               mysqli_close($conn);
                                     $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
               }
               
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
                             
                         
                   $output.= "<tr> <td>".$sno."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td>  <td>".$row["course"]."</td> <td>".$row["day1score"]."</td> <td>".$row["day2score"]."</td> <td>".$row["day3score"]."</td> <td>".$row["day4score"].
                   "</td> <td>".$row["day5score"]."</td></tr>" ;

                   $sno+=1;
                     }
                 }}
               }mysqli_free_result($result);
               mysqli_close($conn);
                   $output.='</table>';
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=$nod.xls");
   
echo $output;
               }

           

        


?>
   

