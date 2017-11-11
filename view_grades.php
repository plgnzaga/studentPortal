<?php
error_reporting(1);
    session_start();
    include'connect.php';
 ?>
<?php

function convert_deci($marks){
        switch ($marks) {
            case 100:
            case 99:
            case 98:           
            case  97:
            $marks = "1.00";
                 break;
            case  96:
            case 95:
            case 94:
            $marks = "1.25";
                 break;
            case 93:
            case 92:
            case 91:
            $marks= "1.50";
                 break;
            case 90:  
            case 89: 
            case 88: 
                 $marks= "1.75";
                 break;
                    case 87:
                  case 86:
                  case 85:
                 $marks= "2.00";
                 break;
                  case 84: 
                  case 83:
                  case 82:
                 $marks= "2.25";
                 break;
              case 81: 
                  case 80:
                 $marks= "2.50";
                 break;
                  case 79:
                  case 78:
                  case 77:
                 $marks= "2.75";
                 break;
                  case 76:
                case 75:
                 $marks= "3.00";
                    break;
                  case 74:
                  case 73:
                  case 72:
                  case 71:
                  case 70:
                 $marks= "4.00";
                 break;
                 case 69:
            case 68:
            case 67:
            case 66:
            case 65:
           $marks= "5.00";
                 break;
                
                default:
                $marks = "";
}
    return $marks;
}


?>
<!----queries---->
<?php
//first yr
$firstyr = "SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'First Year'  ORDER BY 'dateSub' ASC";
$firstyr_records = mysqli_query($connect,$firstyr);
//secondyr
$secondyr = "SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Second Year'  ORDER BY 'dateSub' ASC";
$secondyr_records = mysqli_query($connect,$secondyr);


//third yr
$thirdyr = "SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Third Year'  ORDER BY 'dateSub' ASC";
$thirdyr_records = mysqli_query($connect,$thirdyr);

//fourth yr
$fourthyr = "SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Fourth Year' ORDER BY 'dateSub' ASC";
$fourthyr_records = mysqli_query($connect,$fourthyr);

?>

<!DOCTYPE html>
<html>
   <?php include'headers.php'; ?>
    
   
<body class="">
    <?php include'mainnavs.php'; ?>
   <style>
    
       .brdr{
           border-right: 5px  solid black;
          
       }
       .cont{
           position: relative;
           top: 690px;
           left: 30px;
           letter-spacing: 2px;
          
       }
       #my_grades{
    position: relative;
    top:100px;
}
       
    </style>
    
    <div class="container" id="my_grades">
       <center>
           
           <a href="student_profile.php"><button class="btn btn-sm btn-success active profilesm">My Profile</button></a><br><br>
           <form method="post">
            <input type="submit" name="year1" class="btn btn-sm btn-primary" value="First Year" />&nbsp;&nbsp;
            <input type="submit" name="year2" class="btn btn-sm btn-primary" value="Second Year" />&nbsp;&nbsp;
            <input type="submit" name="year3"  class="btn btn-sm btn-primary" value="Third Year" />&nbsp;&nbsp;
            <input type="submit" name="year4"  class="btn btn-sm btn-primary" value="Fourth Year" />
           </form>
        
        </center> 
      
    </div><hr>
    
    <div class="container">
     <?php
    
        if(isset($_POST['year1'])){
           
             while($firstyr_rec = mysqli_fetch_assoc($firstyr_records)){ ?>
        
    <tr class="active">
   <table border="5px" width="1800px" cellpadding="2px" cellspacing="3px"; class="table  table-hover">
       
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $firstyr_rec['fullname']; ?></th>
       </tr>
        <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $firstyr_rec['course']; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo  ''.$firstyr_rec['sem'].' '.$firstyr_rec['sy'].''; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo ''.$firstyr_rec['yearlvl'].' SET-'.$firstyr_rec['sets'].''; ?></th>
       </tr>
      
        
    <th class="">Subject Code</th>
    <th>Description</th>
    <th>Professor</th>
    
    <th>Units</th>
    <th>Prelim</th>
    <th>Midterm</th>
    <th>Finals</th>
    <th class="brdr">Remarks</th>
  </tr>  

    <?php
echo "<br><br>";
    for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td class='th-sm-th1'>".$firstyr_rec['code'.$no.'']."</td>";
    echo"<td class='th-sm-th3'>".$firstyr_rec['sub'.$no.'']."</td>";
    echo"<td class='th-sm-th2'>".$firstyr_rec['prof'.$no.'']."</td>";
    
    echo"<td  class='th-sm-th'>".$firstyr_rec['units'.$no.'']."</td>";
    echo"<td class='th-sm-th'>".convert_deci($firstyr_rec['pre'.$no.''])."</td>";
    echo"<td class='th-sm-th'>".convert_deci($firstyr_rec['mid'.$no.''])."</td>";
    echo"<td class='th-sm-th'>".convert_deci($firstyr_rec['fin'.$no.''])."</td>";
    echo"<td class='th-sm-th1 brdr '>".$firstyr_rec['stat'.$no.'']."</td>";
  echo"</tr>";
    }
   
            ?>
            <tr>
        <th colspan="11" class="underlineborder overboard"><?php
    echo 'Verified By: '.$firstyr_rec['insertedBy'].''; ?></th>
       </tr>
            <?php
  
            } 

?>
         <?php
         
 $result1 = mysqli_query($connect,"SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'First Year' AND sem = 'First Semester'"); 
        if (mysqli_num_rows($result1)==0){
           echo "<center><br><br><h4 class='na_msg'>(No Records yet for First Year First Semester  as of this moment)</h4></center>";
    //there are results
}
       
         ?>
         <?php
         
$result2 = mysqli_query($connect,"SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'First Year' AND sem = 'Second Semester'"); 
        if (mysqli_num_rows($result2)==0){
           echo "<center><div class='cont'><h4 class='na_msg'>(No Records yet for First Year  Second Semester  as of this moment)</h4></div></center>";
    //there are results
}
        
        }
    
        //second yr
    else if(isset($_POST['year2'])){
             
           

   while($secyr_rec=mysqli_fetch_assoc($secondyr_records)){ ?>
    
        <tr class="active">
   <table border="5px" width="1400px" cellpadding="2px" cellspacing="3px"; class="table  table-hover">
       
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $secyr_rec['fullname']; ?></th>
       </tr>
        <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $secyr_rec['course']; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo  ''.$secyr_rec['sem'].' '.$secyr_rec['sy'].''; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo ''.$secyr_rec['yearlvl'].' SET-'.$secyr_rec['sets'].''; ?></th>
       </tr>
      
        
       <th class="">Subject Code</th>
    <th>Description</th>
    <th>Professor</th>
    
    <th>Units</th>
    <th>Prelim</th>
    <th>Midterm</th>
    <th>Finals</th>
    <th class="brdr">Status</th>
  </tr>  

    <?php
echo "<br><br>";
    for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td class='th-sm-th1'>".$secyr_rec['code'.$no.'']."</td>";
    echo"<td class='th-sm-th3'>".$secyr_rec['sub'.$no.'']."</td>";
    echo"<td class='th-sm-th2'>".$secyr_rec['prof'.$no.'']."</td>";
    
    echo"<td  class='th-sm-th'>".$secyr_rec['units'.$no.'']."</td>";
    echo"<td class='th-sm-th'>".convert_deci($secyr_rec['pre'.$no.''])."</td>";
    echo"<td class='th-sm-th'>".convert_deci($secyr_rec['mid'.$no.''])."</td>";
    echo"<td class='th-sm-th'>".convert_deci($secyr_rec['fin'.$no.''])."</td>";
    echo"<td class='th-sm-th1 brdr'>".$secyr_rec['stat'.$no.'']."</td>";
  echo"</tr>";
    }
   
            ?>
            <tr>
        <th colspan="11" class="underlineborder overboard"><?php
    echo 'Verified By: '.$secyr_rec['insertedBy'].''; ?></th>
       </tr>
            <?php
  
            } 

?>
         <?php
         
 $result1 = mysqli_query($connect,"SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Second Year' AND sem = 'First Semester'"); 
        if (mysqli_num_rows($result1)==0){
           echo "<center><br><br><h4 class='na_msg'>(No Records yet for First Year First Semester  as of this moment)</h4></center>";
    //there are results
}
       
         ?>
         <?php
         
$result2 = mysqli_query($connect,"SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Second Year' AND sem = 'Second Semester'"); 
        if (mysqli_num_rows($result2)==0){
           echo "<center><div class='cont'><h4 class='na_msg'>(No Records yet for Second Year  Second Semester  as of this moment)</h4></div></center>";
    //there are results
}
         
         
        
        
        }
    //third yr
    else if(isset($_POST['year3'])){
         
        
         while($thirdyr_rec=mysqli_fetch_assoc($thirdyr_records)){ ?>
    
        <tr class="active">
   <table border="5px" width="1400px" cellpadding="2px" cellspacing="3px"; class="table  table-hover">
       
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $thirdyr_rec['fullname']; ?></th>
       </tr>
        <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $thirdyr_rec['course']; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo  ''.$thirdyr_rec['sem'].' '.$thirdyr_rec['sy'].''; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo ''.$thirdyr_rec['yearlvl'].' SET-'.$thirdyr_rec['sets'].''; ?></th>
       </tr>
      
    <th class="">Subject Code</th>
    <th>Description</th>
    <th>Professor</th>
    
    <th>Units</th>
    <th>Prelim</th>
    <th>Midterm</th>
    <th>Finals</th>
    <th class="brdr">Status</th>
  </tr>  

    <?php
echo "<br><br>";
    for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td class='th-sm-th1'>".$thirdyr_rec['code'.$no.'']."</td>";
    echo"<td class='th-sm-th3'>".$thirdyr_rec['sub'.$no.'']."</td>";
    echo"<td class='th-sm-th2'>".$thirdyr_rec['prof'.$no.'']."</td>";
    
    echo"<td  class='th-sm-th'>".$thirdyr_rec['units'.$no.'']."</td>";
    echo"<td class='th-sm-th'>".convert_deci($thirdyr_rec['pre'.$no.''])."</td>";
    echo"<td class='th-sm-th'>".convert_deci($thirdyr_rec['mid'.$no.''])."</td>";
    echo"<td class='th-sm-th'>".convert_deci($thirdyr_rec['fin'.$no.''])."</td>";
    echo"<td class='th-sm-th1 brdr'>".$thirdyr_rec['stat'.$no.'']."</td>";
  echo"</tr>";
    }
   
            ?>
            <tr>
        <th colspan="11" class="underlineborder overboard"><?php
    echo 'Verified By: '.$thirdyr_rec['insertedBy'].''; ?></th>
       </tr>
            <?php
  
            } 

?>
         <?php
         
$result1 = mysqli_query($connect,"SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Third Year' AND sem = 'First Semester'"); 
        if (mysqli_num_rows($result1)==0){
           echo "<center><br><br><h4 class='na_msg'>(No Records yet for Third Year First Semester as of this moment)</h4></center>";
    //there are results
}
       
         ?>
         <?php
         
$result2 = mysqli_query($connect,"SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Third Year' AND sem = 'Second Semester'"); 
        if (mysqli_num_rows($result2)==0){
           echo "<center><div class='cont'><h4 class='na_msg'>(No Records yet for Third Year  Second Semester  as of this moment)</h4></div></center>";
    //there are results
}
         
     }
    //fourth year
    else  if(isset($_POST['year4'])){
            
        ?>
         <?php

   while($fourthyr_rec=mysqli_fetch_assoc($fourthyr_records)){ ?>
    
        <tr class="active">
            
   <table border="5px" width="1400px" cellpadding="2px" cellspacing="3px"; class="table  table-hover">
       
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $fourthyr_rec['fullname']; ?></th>
       </tr>
        <tr>
        <th colspan="11" class="underlineborder"><?php
    echo $fourthyr_rec['course']; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo  ''.$fourthyr_rec['sem'].' '.$fourthyr_rec['sy'].''; ?></th>
       </tr>
       <tr>
        <th colspan="11" class="underlineborder"><?php
    echo ''.$fourthyr_rec['yearlvl'].' SET-'.$fourthyr_rec['sets'].''; ?></th>
       </tr>
      
       <th class="">Subject Code</th>
    <th>Description</th>
    <th>Professor</th>
    
    <th>Units</th>
    <th>Prelim</th>
    <th>Midterm</th>
    <th>Finals</th>
    <th class="brdr">Status</th>
  </tr>  

    <?php
echo "<br><br>";
    for($no=1;$no<=12;$no++){
        
  echo"<tr>"; 
        
    echo"<td class='th-sm-th1'>".$fourthyr_rec['code'.$no.'']."</td>"; 
    echo"<td class='th-sm-th3'>".$fourthyr_rec['sub'.$no.'']."</td>"; 
    echo"<td class='th-sm-th2'>".$fourthyr_rec['prof'.$no.'']."</td>"; 
    
    echo"<td  class='th-sm-th'>".$fourthyr_rec['units'.$no.'']."</td>"; 
    echo"<td class='th-sm-th'>".convert_deci($fourthyr_rec['pre'.$no.''])."</td>"; 
    echo"<td class='th-sm-th'>".convert_deci($fourthyr_rec['mid'.$no.''])."</td>"; 
    echo"<td class='th-sm-th'>".convert_deci($fourthyr_rec['fin'.$no.''])."</td>"; 
    echo"<td class='th-sm-th1 brdr'>".$fourthyr_rec['stat'.$no.'']."</td>"; 
  echo"</tr>";
    }
   
            ?>
            <tr>
        <th colspan="11" class="underlineborder overboard"><?php
    echo 'Verified By: '.$fourthyr_rec['insertedBy'].''; ?></th>
       </tr>
            <?php
  
            } 
?>
         <?php
        $query_res1 = "SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Fourth Year' AND sem = 'First Semester'";
        $result1 = mysqli_query($connect,$query_res1); 
        if (mysqli_num_rows($result1)==0){
           echo "<center><br><br><h4 class='na_msg'>(No Records yet for Fourth Year First Semester as of this moment)</h4></center>";
    //there are results
}
       
         ?>
         <?php
         
$result2 = mysqli_query($connect,"SELECT * FROM student_grades WHERE stud_id = '".$_SESSION['stud_id']."' AND yearlvl = 'Fourth Year' AND sem = 'Second Semester'"); 
        if (mysqli_num_rows($result2)==0){
           echo "<center><div class='cont'><h4 class='na_msg'>(No Records yet for Fourth Year  Second Semester  as of this moment)</h4></div></center>";
    //there are results
}
         
         ?>
    
    </div>
        
        <?php
        
        }
    else{
     
    }
    
?>
</body>
</html>
