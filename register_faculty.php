<?php error_reporting(1); ?>

<?php include 'connect.php'; ?>
<?php session_start(); ?>
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
            width: 300px;text
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
                     <h2 class="form-signin-heading">Register Faculty members</h2><br>
                                <div class="container">
                                    <form class="form-horizontal" id="long" method="post">
                                       
                                        <label>Lastname:&nbsp;</label><input type="text" name="member_lname"  placeholder="Lastname" data-toggle="tooltip" title="" data-placement="right" autofocus id="lname_data"><br><br>
                                        <label>Firstname:&nbsp;</label><input type="text" name="member_fname"  placeholder="Firstname"  data-toggle="tooltip" title="" data-placement="right" required autofocus id="fname_data"><br><br>
                                        <label>Email:&nbsp;</label><input type="email" name="member_email"  placeholder="Email"  required autofocus><br><br>
                                        <label>Phone:&nbsp;</label><br>  <input type="text" name="phone" class="reg_stud" pattern="\d*" maxlength="12" placeholder="Enter 12 Digit Phone number" title="12 digit valid phone number"></input><br><br>
                                   
                                    <label>Password:&nbsp;</label> <input type="password" name="member_pwd"  placeholder="Password" data-toggle="tooltip" title="Your password must be minimum of 8 characters and maximum of 32 characters in length, with at least one digit number, at least one lowercase char, at least one uppercase char and one special symbol!" data-placement="right"required autofocus id="pwd_data"><br><br>
                                    <label>Repeat Password:&nbsp;</label> <input type="password" name="confirm_pwd"  placeholder="Password" data-toggle="tooltip" title="" data-placement="right" required autofocus><br><br>
        

        
                      
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_member">Register</button>
                                    </form>
                                </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </div><!---wrapper--->
    
    
    
    
    

    
    
   
</body>
<?php
    if(isset($_POST['reg_member'])){
        $member_lname = mysql_real_escape_string($_POST['member_lname']);
        $member_fname= mysql_real_escape_string($_POST['member_fname']);
        $member_email = mysql_real_escape_string($_POST['member_email']);
        
        $member_pwd = mysql_real_escape_string($_POST['member_pwd']);
        $confirm_pwd = mysql_real_escape_string($_POST['confirm_pwd']);
       
       if($member_pwd != $confirm_pwd){
            ?>
        <script type="text/javascript">
           document.getElementById("pwd_data").title="Your two passwords does not match.";
            document.getElementById("pwd_data").style.borderColor="RED"; 


        </script>
                <?php
        }
        
        else if(preg_match('/[^a-z\s-]/i',$member_lname)){
           
           ?>
        <script type="text/javascript">
           document.getElementById("lname_data").title="Lastname must only contain letters.";
            document.getElementById("lname_data").style.borderColor="RED"; 


        </script>
                <?php
        }
        else if(preg_match('/[^a-z\s-]/i',$member_fname)){
           
          ?>
        <script type="text/javascript">
           document.getElementById("fname_data").title="Firstname must only contain letters.";
            document.getElementById("fname_data").style.borderColor="RED"; 


        </script>
                <?php
        }                  
        
        else if(!preg_match('/^[0-9a-z\?]{8,32}$/', $member_pwd)) {
            
             ?>
        <script type="text/javascript">
           document.getElementById("pwd_data").title="Password did not meet the requirements.";
            document.getElementById("pwd_data").style.borderColor="RED"; 


        </script>
                <?php
            
}
        else{
        
            $member_pwd = md5($member_pwd);
            $register = "INSERT into faculty(member_lname,member_fname,member_email,member_pwd)
         VALUES('$member_lname','$member_fname','$member_email','$member_pwd')";
            //run query
            $insert = mysql_query($register) or die(mysql_error()."Error inserting data");
           
            echo "Successfully Inserted to the database.";
            header("location:redirect_member.php");
             
        }
        
        
       
        /*Success BES!!!!*/
                
       // }
    }

        ?>

</html>

<?php 
function sanitize($data){
    return mysql_real_escape_string($data);
}
function userExists($member_uname){
    $member_uname = sanitize($member_uname);
    return(mysql_result(mysql_query("SELECT COUNT(`member_id`) FROM `faculty` WHERE `member_uname` = '$member_uname' "),0)==1) ? true : false;
}

?>