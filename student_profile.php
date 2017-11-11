<?php error_reporting(1); ?>
<?php session_start(); ?>
<?php include'connect.php'; ?>
<?php 

 $find_student = "SELECT * FROM students where student_id = '".$_SESSION['stud_id']."'";
 $stud_member = mysqli_query($connect,$find_student);

?>

<!DOCTYPE html>
<html>
    <style>
    
        body {
            background-image: url(css/images/std.jpg);
        }
        
    </style>
    <?php include'headers.php'; ?>
    
   
<body>
   <?php include'mainnavs.php'; ?>

    
<div class="container">
    
    
    

    <?php

if(isset($_SESSION['stud_id'])){
    /*
    echo "<center>";
    echo "<div class='container profile' id='profile-hide-scroll'>";
    
    
    echo '</div>';
    echo'</center>';*/
    
    ?>
    
    <div class="profile_home">
    
  
    <?php
    
    while($student_info=mysqli_fetch_assoc($stud_member)){
       
        ?>
        <img src='css/images/profilelogo.png'></img>
        <h1><?php echo $student_info['student_firstname']." ".$student_info['student_lastname'] ;?></h1>
        <h4><span class='glyphicon glyphicon-star'></span> Your ID number is: <?php echo $student_info['student_id']; ?></h4>
        <h4><span class='glyphicon glyphicon-envelope'></span> Email: <?php echo $student_info['student_email']; ?></h4>
    <h4><span class='glyphicon glyphicon-gift'></span> Born on <?php echo $student_info['bmonth']." ".$student_info['bday'].", ".$student_info['byear']; ?></h4>
    <h4><span class='glyphicon glyphicon-home'></span> Lives at <?php echo $student_info['num']." ".$student_info['street']." ".$student_info['brgy']." ".$student_info['city']; ?></h4>
    <h4><span class='glyphicon glyphicon-education'></span> Studying <?php echo $student_info['course']; ?></h4>
    <a href='view_grades.php'><input type='submit' value='View My Grades' class='btn btn-sm btn-success'></input></a>
    <a href='#'><input type='submit' value='View Curricculum Year' class='btn btn-sm btn-success'></input></a>
    <a href='update_profile.php'><input type='submit' value='Account Settings' class='btn btn-sm btn-success'></input></a>
        <?php
        
            
               
           }
    
    ?>
    
    
    </div>
    

    </div>
    
    <?php
    
    
    
}
  
else{
  header('location:restricted.php');
}
?>
    
   

    
</body>

</html>
