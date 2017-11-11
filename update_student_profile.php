<?php error_reporting(1); ?>
<?php session_start(); ?>
<?php include'connect.php'; ?>
<?php 
     if(isset($_SESSION['stud_id'])){
         
    }
    else{
         header('location:restricted.php');
    }
    ?>
<?php
    if(isset($_POST['update_infos'])){
    $student_firstname = mysql_real_escape_string($_POST['student_firstname']);
    $student_lastname = mysql_real_escape_string($_POST['student_lastname']);
    $student_middlename = mysql_real_escape_string($_POST['student_middlename']);
    $student_id = mysql_real_escape_string($_POST['student_id']);
    $student_email = mysql_real_escape_string($_POST['student_email']);
    $bd = mysql_real_escape_string($_POST['bd']); 
    $bm = mysql_real_escape_string($_POST['bm']); 
    $by = mysql_real_escape_string($_POST['by']); 
    $num = mysql_real_escape_string($_POST['num']); 
    $street = mysql_real_escape_string($_POST['street']);
    $brgy = mysql_real_escape_string($_POST['brgy']);
    $city = mysql_real_escape_string($_POST['city']);
    $intro = mysql_real_escape_string($_POST['intro']);
        

    $sql = "UPDATE `students` SET `student_lastname` = '$student_lastname',`student_firstname`= '$student_firstname',`student_middlename`='$student_middlename',`student_email`='$student_email',    
    `bday`='$bd',`bmonth`='$bm',`byear`='$by',`num`='$num',`street`='$street',`brgy`= '$brgy' ,`city`= '$city',`intro`= '$intro' WHERE `student_id` = '$student_id' ";
    if(mysql_query($sql)){ ?>
     
    <?php include'headers.php'; ?>
    <head>
        <meta http-equiv="refresh" content="4;url=student_profile.php">
    </head>
    <?php include'mainnavs.php'; ?>
        
        <div class="container">
            
        <h1>Updating Profile...</h1>
        You will be redirected at your profile page after a few seconds
        <div class="progress progress-striped active progress-success">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">60% Complete (success)</span>
  </div>
</div>
</div>


<?php
    }
    else{
    echo"<h1>Error Updating Data</h1>";
    }
    }
    
    

?>