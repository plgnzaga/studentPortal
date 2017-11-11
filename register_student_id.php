<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>
<?php session_start(); ?>

<?php
    
function sanitize($data){
    return mysqli_real_escape_string($data);
}
    
function studExists($student_username){
    $student_username = sanitize($student_username);
    return(mysqli_result(mysqli_query($connect,"SELECT COUNT(`student_id`) FROM `students` WHERE `student_username` = '$student_username' "),0)==1) ? true : false;
}
 
?>

<?php 
     if(isset($_SESSION['user_admin'])){
         
    }
    else{
         header('location:restricted.php');
    }
    ?>

<!DOCTYPE html>
<html>
      <style>
        input[type="text"],input[type="email"]{
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
            opacity: 0.5;
            font-size:16px;
}
    
    
    
    
    </style>
   <?php include'headers.php'; ?>
<body class="blues">
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
                        <div class="container reg_std_acc">
        <form class="form form-inline" method="post">
        <h2 class="form-signin-heading">Register a Student Account</h2><br>
            
       <legend>Student Information:</legend>
            <br>
        <label>Student ID Number:  &nbsp;&nbsp; </label>&nbsp;
            
            <input type="text" name="student_id"  placeholder="Student No" autofocus><br><br><br>
        
            
         <label>Student Fullname:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input id="student_fullname"  type="text" name="student_fullname" class="reg_stud" placeholder="Fullname" data-toggle="tooltip" data-placement="right" title=""><br><br><br>
        
        <label>Email Address:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="email" id="email_data" name="email_input" class="reg_stud" placeholder="E-mail" ><br><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scholar:<input type="radio" name="std_lvl" value="Scholar" />
            Non Scholar:<input type="radio" name="std_lvl" value="Non Scholar" /><br><br><input type="submit" class="btn btn-sm btn-primary" value="Create Account" name="reg_input"/>
            
            
         <br><br><br><br><br><br><br><br><br><br><br><br>
      </form>
    </div>
                        
                        
                        
                    </div><!---- <div class="col-lg-12"> --->
                </div><!---div class="row">--->
            </div><!----div fluid ----->
        </div><!----page content wrapper  --->
    </div><!----div wrapper--->
    
    

<?php
    if(isset($_POST['reg_input'])){
        
       $student_id =   mysqli_real_escape_string($_POST['student_id']);
       $student_fullname = mysqli_real_escape_string($_POST['student_fullname']);
       $email_input = mysqli_real_escape_string($_POST['email_input']);
        $std_lvl = mysqli_real_escape_string($_POST['std_lvl']);
           
    if(preg_match('/[^a-z\s-]/i',$student_fullname)){ ?>

        <script>
            document.getElementById("student_fullname").title="Name must only contain letters.";
            document.getElementById("student_fullname").style.borderColor="RED"; 

        </script>

        <?php
            
        }
    
        else{
             
       
          
            $register = "INSERT IGNORE INTO students(student_id,fullname,student_email,std_lvl)
         VALUES('$student_id','$student_fullname','$email_input','$std_lvl')";
            
            //run query
            $insert = mysqli_query($connect,$register) or die(mysqli_error()."Error inserting data"); ?>

       <!DOCTYPE html>
<html>
    
    <head>
    <meta http-equiv="refresh" content="0;url=redirect_stud1.php">
    </head>


</html>
    
            <?php
            
        }
   // }
    }
?>  
</body>

</html>
