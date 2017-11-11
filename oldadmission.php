<html>
<?php include'connect.php'; ?>
    <?php include'headers.php'; ?>
<?php
        
        //error_reporting();
        session_start();
    
        if(isset($_SESSION['user_admin'])){
            
            header('location:restricted.php');
            
        }
    
        if(isset($_POST['sign_in'])){
            
            $app_id = mysqli_real_escape_string($_POST['applicant_id']);
            $app_pwd = mysqli_real_escape_string($_POST['applicant_pwd']);
            
        }
        if(!empty($app_id) || !empty($app_pwd)){
            $login_check = "SELECT surname,firstname,middlename,app_id,password FROM admissions WHERE app_id = '$app_id' AND password = '$app_pwd' LIMIT 1";
             //$login_check = "SELECT * FROM `admissions` WHERE `app_id` = $app_id AND `password` = `$app_pwd` LIMIT 1";
            $login_result = mysqli_query($connect,$login_check)or die (mysqli_error()." Error while logging in");
            
            if(mysqli_num_rows($login_result) > 0){
                
                $_SESSION['is_logged_in'] = true;
                $_SESSION['applicants_id'] = $app_id; 
                
               header('location:applicant_page.php');
                
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
<body class="dbg">
    
    <style>
       
        .this_bg{
           background-image: url(css/images/em.jpg)
        }
    
        .txt_long{
    
            height: 30px;
            width: 450px;
    
        }
        .txt_sm{
            height: 30px;
            width:200px;
        }
         .txt_xs{
            height: 30px;
             width:53px;
        }
        .txt_xss{
            height: 30px;
            width:40px;
        }
        
        .legends{
        font-family: "Segoe UI";
        font-size:20px;
        
        }
        tr{
            outline-color: 0;
         }
        #f1{
    
    position: relative;
    top:100px;
            color: black;
    
    
}
        #f1b{
            float: right;
            position: absolute;
            top:100px;
            left:750px;
            color: black;
        }
        *{
            color: black;
        }
        
    </style>
<?php include'mainnavs.php'; ?>    
    
   <div class="jumbotron" style="height:100%;">
     <div class="container" id="f1">
    
    <h3>Apply Online!</h3>
        
        <h4>Welcome to the UM Online Application for Admission!<br>
      Please fill-out the required fields in your admission form.<br>
        As soon as you are ready, <br>just click the next button to start your admission process.</h4>
        <br>

        <a href="start_admission.php"><input type="button" class="btn btn-primary" name="start" value="Start Application" style="width:200px;"/></a>
    </div>
       
    <div id="f1b">
        <h3>Already have an account?</h3><p>Please Login Here.</p><br>
       
       
        
        
        <form method="post">
            
        <table class="table" style="background-color:transparent;">
        
                <tr>
                    <td style="width:140px;" ><label>Applicant ID:</label></td>
                    <td><input type="text" name="applicant_id" class="form-control txt_sm" placeholder="Applicant ID" /></td>
                </tr>
            
              <tr>
                    <td style="width:140px;" ><label>Password:</label></td>
                    <td><input type="password" name="applicant_pwd" class="form-control txt_sm" placeholder="Password" /><br></td>
              </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" class="btn" name="sign_in" value="Login" style="width:200px;background-color:gold"/></td>
                
            
            </tr>
            
        </table>
            
       <br>
        
        </form>
        
    </div>
    </div>
    </body>

</html>
     