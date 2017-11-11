<html>

<?php

include'connect.php';
include'headers.php';

?>
    
<body class="dbg">
    <?php include'mainnavs.php'; ?>

    
       <div class="container">
        
        <center><div class="login_form">
        
        
            <form class="form-signin" method="post">
        <h2 class="form-signin-heading hwhite">Please Log in</h2>
        <input type="text" name="admin_uname"  class="form-control" placeholder="Username" required autofocus><br>
        
        <input type="password" name="admin_pwd" class="form-control" placeholder="Password" required><br>
            
                <center>
             <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In" name="admin_login" type="submit" />
                </center>
         
            </form>
        
        
        
        </div></center>
        
        </div>
    
    <?php
    
    if(isset($_SESSION['user_admin'])){
        header('location:admin_profile.php');
     }
   else if(isset($_SESSION['stud_id'])){
        header('location:restricted.php');
    }
     else if(isset($_SESSION['member_id'])){
         header('location:restricted.php');    
    }
    else{ 
    }
    
    
    if(isset($_POST['admin_login'])){
        
        $ = mysqli_real_escape_string()
        $ = mysqli_real_escape_string()
    }
    ?>
   
    
    
</body>






</html>