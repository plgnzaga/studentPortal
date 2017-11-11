<?php error_reporting(1); ?>

<?php session_start(1); ?>
<?php 
     if(isset($_SESSION['user_admin'])){
         
    }
    else{
         header('location:restricted.php');
    }
    ?>

<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
   
<body class="blues">
      <style>
        input[type="text"],input[type="password"],input[type="email"]{
           background:transparent;
            border: none;
            border-radius: 0;
            border-bottom: solid black 1px;
            list-style-type: none;
            outline: 0;        
            font-size: 20px;
            width: 300px;
        }
         ::-webkit-input-placeholder {
            color: black;
            opacity: 0.8;
            font-size:16px;
}
    
    
    
    
    </style>
    <?php include'mainnavs.php'; ?>
    
    <div id="wrapper">
        <div id="sidebar-wrapper">
           <?php include 'wrapperadmin.php'; ?>
        </div>
        
        <div id="page-content-wrapper">
            
            <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div><a href="#"><div class="sider" id="menu-toggle"></div></a></div>
                        
                                              
    <div class="container">
        <form class="form-horizontal" id="long2" method="post">
        <h2 class="form-signin-heading">Register Admins</h2>
         <label>Lastname:&nbsp;</label><input type="text" name="admin_lname"  placeholder="Lastname" required autofocus><br><br>
         <label>Firstname:&nbsp;</label><input type="text" name="admin_fname"  placeholder="Firstname" required autofocus><br><br>
            <label>Username:&nbsp;</label><input type="text" name="admin_uname"  placeholder="Username" required autofocus><br><br>
         <label>Email Address:&nbsp;</label><input type="email" name="email"  placeholder="Email" required autofocus><br><br>
        <label>Phone:&nbsp;</label><br> <input type="text" name="phone" class="reg_stud" pattern="\d*" maxlength="12" placeholder="Enter 12 Digit Phone number" title="12 digit valid phone number"></input> <br><br>
        <label>Password:&nbsp;</label> <input type="password" name="admin_pwd" placeholder="Password" required autofocus><br><br>
       <label>Confirm Password::&nbsp;</label>  <input type="password" name="confirm_pwd"  placeholder="Password" required autofocus><br><br>
        Set Privelege ? <input type="checkbox" name="yes" value="Yes" /><br><br>
        

        
                      
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_admin">Register</button><br><br>
      </form>
    </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!---end---wrapper--->
    <?php
    if(isset($_POST['reg_admin'])){
        $admin_lname= mysql_real_escape_string($_POST['admin_lname']);
        $admin_fname= mysql_real_escape_string($_POST['admin_fname']);
        $admin_mname= mysql_real_escape_string($_POST['admin_mname']);
        $admin_uname= mysql_real_escape_string($_POST['admin_uname']);
        $phone= mysql_real_escape_string($_POST['phone']);
        $email = mysql_real_escape_string($_POST['email']);
        $admin_pwd = mysql_real_escape_string($_POST['admin_pwd']);
        $confirm_pwd = mysql_real_escape_string($_POST['confirm_pwd']);
         $privelege = $_POST['yes'];
       
        
       
        /*Success BES!!!!*/
        if(preg_match('/[^a-z\s-]/i',$admin_lname)){
           
           ?>
        <script type="text/javascript">
           document.write("<div class='container char-only1'>Lastname must only contain letters!</div>");


        </script>
                <?php
        }
        else if(preg_match('/[^a-z\s-]/i',$admin_fname)){
        ?>
        <script type="text/javascript">
                document.getElementsByName("admin_fname").title="Firstname must only contain letters";
                document.getElementsByName('admin_fname').style.borderColor="Red";
        </script>
                <?php
        }
        else{
            if(userExists($_POST['admin_uname'])===true){
            echo "It look's like the username, ".$admin_uname." existed";
                 ?>
        <script type="text/javascript">
                document.getElementsByName("admin_fname").title="Firstname must only contain letters";
                document.getElementsByName('admin_fname').style.borderColor="Red";
        </script>
                <?php
        }
        else if(userExists($_POST['admin_uname'])===false){
            if($admin_pwd == $confirm_pwd){
            $admin_pwd = md5($admin_pwd);
            $register = "INSERT into admins(admin_uname,admin_lname,admin_fname,admin_mname,phone,email,admin_pwd,privelege)
         VALUES('$admin_uname','$admin_lname','$admin_fname','$admin_mname','$phone','$email','$admin_pwd','$privelege')";
            //run query
            $insert = mysql_query($register) or die(mysql_error()."Error inserting data");
           
            echo "Successfully Inserted to the database.";
            header("location:redirect_admin.php");
             }
            else{
               ?>
        <script type="text/javascript">
           document.write("<div class='container pwd-err-match'>Password doesn't match!</div>");


        </script> <?php
            }
        }
            
            
        }
        
    }

        ?>

                        
                        
                        
                        
  
</body>


</html>

<?php 
function sanitize($data){
    return mysql_real_escape_string($data);
}
function userExists($admin_uname){
    $admin_uname = sanitize($admin_uname);
    return(mysql_result(mysql_query("SELECT COUNT(`admin_id`) FROM `admins` WHERE `admin_uname` = '$admin_uname' "),0)==1) ? true : false;
}

?>