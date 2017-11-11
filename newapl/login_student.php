<?php error_reporting(0); ?>
<?php include 'connect.php'; ?>
<?php
session_start();
if(isset($_SESSION['stud_id'])){

         header('location:student_profile.php');
    
}
else{
    if(isset($_SESSION['user_admin'])){
    header('location:restricted.php');     
    }
    else if(isset($_SESSION['member_id'])){
    header('location:restricted.php');    
    }
    else{
        
        
    }
}
?>





<?php
if(isset($_POST['student_login'])){
    $student_id = mysqli_real_escape_string($connect,$_POST['student_id']);
    
    $student_pwd = mysqli_real_escape_string($connect,$_POST['student_pwd']);

}
if(!empty($student_pwd) || !empty($student_id)){
    //die (mysql_error()."Username and Password are Blank!");
      $student_pwd = md5($student_pwd);
    $login = "SELECT student_id,student_pwd from students WHERE student_id = '$student_id' AND student_pwd='$student_pwd' LIMIT 1";
    $result = mysqli_query($connect,$login) or die (mysqli_error()." Error while logging in");
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['is_logged_in'] = true;
        
        $_SESSION['stud_id'] = $student_id;
        header('location:student_profile.php');
    }
    
    else{
        echo"<div class='alert alert-danger' id='warn_msg'>";
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
    
 

    <body class="dbg">
      
    <?php include'mainnavs.php'; ?>
          
    <div class="container">
        
        <center><div class="login_form">
        
            <style>
        a{
            color: white;
        }
                
                a:hover{
                    color: antiquewhite;
                }
    </style>
            <form class="form-signin" method="post">
        <h2 class="form-signin-heading hwhite">Student Log in</h2>
        <input type="text" name="student_id" id="idNo" class="form-control" placeholder="Student No" required autofocus><br>
        
        <input type="password" name="student_pwd" id="inputPassword" class="form-control" placeholder="Password" required><br>
            
                <center><button class="btn btn-lg btn-primary btn-block" name="student_login" type="submit">Sign in</button><br>
                <a href="signup_account.php">Dont have an account yet? Please sign up here.</a><br><br>
                <a href="forgotpwd.php">Forgot Password?</a></center>
         
            </form>
        
        
        
        </div></center>
        
        
        
        
    </div>
   
</body>


</html>
