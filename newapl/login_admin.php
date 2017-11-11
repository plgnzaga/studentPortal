<?php error_reporting(1)?>
<?php include 'connect.php'; ?>
<?php

//start session
session_start();
?>
<?php 
     if(isset($_SESSION['user_admin'])){
        header('location:admin_profile.php');    
    }
    else if(isset($_SESSION['member_id'])){
         header('location:restricted.php');
    }
    else if(isset($_SESSION['stud_id'])){
         header('location:restricted.php');
    }
    else {
         
    }
?>

<?php

if(isset($_POST['admin_login'])){
    
    $admin_uname = mysqli_real_escape_string($connect,$_POST['admin_uname']);
    $admin_pwd = mysqli_real_escape_string($connect,$_POST['admin_pwd']);
    
}
//validate username and password of admin
if(!empty($admin_uname)|| !empty($admin_pwd)) {
    //log in the admin
    $admin_pwd = md5($admin_pwd);
    $login = "SELECT admin_uname,admin_pwd FROM admins WHERE admin_uname LIKE '%$admin_uname%' AND admin_pwd LIKE'%$admin_pwd%' LIMIT 1";
    $result = mysqli_query($connect,$login) or die (mysqli_error()." Error while logging in");
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_admin'] = $admin_uname;
        
        header('location:admin_profile.php');
    }
    else{
        
        
        echo"<div class='alert alert-danger'>";
        echo"<strong>Username or Password are Incorrect </strong>";
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
    
  <center>
      <div class="container">
      
        <div class="login_form">
        <form class="form-signin" method="post">
        <h2 class="form-signin-heading hwhite">Admin Log in</h2>
       
        <input type="text" name="admin_uname" id="inputName" class="form-control" placeholder="Admin Name" required autofocus><br>
        
        <input type="password" name="admin_pwd" id="inputPassword" class="form-control" placeholder="Password" required><br>
        
            <center><button class="btn btn-lg btn-primary btn-block btn-sign-in" name="admin_login" type="submit">Sign in</button></center>
      </form>
    </div>
      
      </div>
    
    
</center>
 
</body>

</html>



