<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>
<?php

session_start();
?>
<?php 
     if(isset($_SESSION['member_id'])){
         header('location:admin_profile.php');
    }
    else if(isset($_SESSION['user_admin'])){
         header('location:restricted.php');
    }
    else if(isset($_SESSION['stud_id'])){
         header('location:restricted.php');
    }
    else {
         
    }
?>
<?php

if(isset($_POST['member_login'])){
    $member_id = mysqli_real_escape_string($connect,$_POST['member_id']);
    $member_pwd = mysqli_real_escape_string($connect,$_POST['member_pwd']);
    
}
//validate username and password of admin
if(!empty($member_uname)|| !empty($member_pwd)) {
    //log in the admin
    $member_pwd = md5($member_pwd);
    $login = "SELECT member_id,member_pwd FROM faculty WHERE member_id = '$member_id' AND member_pwd='$member_pwd' LIMIT 1";
    $result = mysqli_query($connect,$login) or die (mysqli_error()." Error while logging in");
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['is_logged_in'] = true;
        
         $_SESSION['member_id'] = $member_id;
       
        
        header('location:faculty_myprofile.php');
    }
    else{
        
        echo"<div class='alert alert-danger'>";
        echo"<strong>Member ID or Password are Incorrect </strong>";
        echo"<span class='glyphicon glyphicon-warning-sign'>";
        echo"</span>";
        echo"</div>";
      
    }
}
?>
<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
    <style>
        *{
            color: white;
        }
    </style>
   <link rel="stylesheet" href="style2.css">
<body class="dbg">
     <?php include'mainnavs.php'; ?>
     
      
    
    <div id="faculty_msg">
        <p>This is an exclusive gateway for UM Faculty Members<br>only
        for online information, class  schedules and <br>inputting of grades.
        
        </p>
    
    
    
    </div>
    <center>
    <div class="container">
       <div class="login_form">
        
         <form class="form-signin" method="post">
        <h2 class="form-signin-heading hwhite">Faculty Sign In</h2>
       <input type="name" name="member_id" id="inputName" class="form-control" placeholder="Member ID" required autofocus><br>
        
        
        <input type="password" name="member_pwd" id="inputPassword" class="form-control" placeholder="Password" required><br>
        
        <center><button class="btn btn-lg btn-primary btn-block" name="member_login" type="submit">Sign in</button></center>
      </form>
        
        
        </div>
    </div></center>
    
   
    
</body>


</html>



