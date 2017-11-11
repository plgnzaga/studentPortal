<html>
    <?php 
                include'headers.php'; 
                include'connect.php';
                session_start(); 
    
    ?>
    
<body class="defaultbg">
    <?php include'mainnavs.php'; ?>
    <!---start form 1 html---->
    
    <div class="container new">
    
    <div class="container" id="f1">
        
  
    <center>
        <h4>Create your Student Portal Account.</h4>
    
        <form method="get" action="signup_account.php" >
            <label>Your Student ID:</label>
              <input type="text" name="student_id" placeholder="Student ID" class="form-control" id="signupstd_id" data-placement="right" data-toggle="tooltip" title="Please indicate your Student ID here." />
                <label>Email Address:</label><br>
            <input type="text" name="student_email" placeholder="Email Address" class="form-control" id="signupstd_email" data-placement="right" data-toggle="tooltip" title="Indicate the Email Address you've used." /><br>
       <?php
            
            
             $temp = rand(6000,9999);
             echo"<input type='text' value='$temp' name='mycode' class='form-control' id='signupstd_id' readonly/>";
          

            ?><br>
            <input type="submit" name="signupme" value="Create my Account" class="btn btn-sm btn-success" id="signupstd_sub"/>
            
            
        </form>
        
    </center>
        
    </div>
        
        
         <div class="container signupdivs1" id="f2" >
        
           <center>            <h4>Please enter the code you have received in<br><em><a href="<?php echo $_GET['student_email']; ?>"><?php echo $_GET['student_email']; ?></a></em></h4><br>
            
        
               
        <form method="post">
           
            <input type ="text" name="mycode2" value="<?php echo $_GET['mycode']; ?>"  class="form-control" id="signupcode" readonly />
             <input type ="text" name="student_id2" value="<?php echo $_GET['student_id']; ?>"  class="form-control" id="signupcode" readonly />
            <input type ="text" name="student_email2" value="<?php echo $_GET['student_email']; ?>"  class="form-control" id="signupcode" readonly />
            <input type="text" name="code" placeholder="Code:" class="form-control" id="signupcode"/><br>
            
            <input type="submit" name="finish" value="Submit Code" class="btn btn-sm btn-primary" id="signupcode"/>
        
        
        </form>
        
        
        </center>
        
        
</div> 
        
        
    
    
    
    </div>
    
    <!----end form 1 html --->
           <!----start form2 php---->
 <?php
    
    if(isset($_POST['finish'])){
            
            $student_id2 = $_POST['student_id2'];
            $code = $_POST['code'];

    }
    if(!empty($code)) {
        
            $codeQ = "SELECT student_id,temp FROM students WHERE student_id LIKE'%$student_id2%' AND temp LIKE'%$code%'  LIMIT 1";
            $codeQres = mysqli_query($connect,$codeQ) or die (mysqli_error()." Error while signing in"); 
        
          if(mysqli_num_rows($codeQres) > 0){
             $_SESSION['is_logged_in'] = true;
            $_SESSION['tempStudent'] = $student_id2;
        
            header('location:register_student.php');
        
        
            }
        else{
            echo"Wrong code";
           ?>
          
           <script>

        </script>

            <?php
            
        }
}

//end if code empty
    
    
 ?>       <!----start form2 php---->

    

   
    
    
    
    <!---start form1 php---->
<?php
    
    if(isset($_GET['signupme'])){
        $mycode = $_GET['mycode'];
        $student_id = $_GET['student_id'];
        $student_email = $_GET['student_email'];   
          
    }
     
    if(!empty($student_id)|| !empty($student_email)) {
        
    $signupQ = "SELECT * FROM students WHERE student_id = '$student_id' AND student_email = '$student_email' "; 
    $signResult = mysqli_query($connect,$signupQ);
    $checkExist = "SELECT student_id,exist FROM students WHERE student_id = '$student_id' AND exist='1'  ";
    $chkresult = mysqli_query($connect,$checkExist);
        
    if(mysqli_num_rows($chkresult) > 0){
        ?>
    <div class='alert alert-std alert-danger'>
<center><strong>Your account already exists.</strong>
<span class='glyphicon glyphicon-warning-sign'>
    </span></center>
</div>
    
    
        <?php
        
    }
      else if(mysqlI_num_rows($signResult) > 0){ 
        
          $insertMe = "UPDATE students SET temp = '$mycode' WHERE student_id = '$student_id' ";
          $insertResult = mysqli_query($connect,$insertMe);
          
       
            $to = $_POST['email'];
            $message = 'Your code is '.$mycode.' ' ;
            $from = 'From: umportal.16mb.com'; 


            $subject = 'Password Recovery';
            $body = "From: $from\n E-Mail: $email\n Message:\n $message";

            $headers .= "MIME-Version: 1.0\r\n";
         
            $headers .= "Content-type: text/html\r\n";
            $headers = 'From: umportal.16mb.com' . "\r\n" .
            'Reply-To: umportal.16mb.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
          
          
         
            ?>
    
            <script>
                
                document.getElementById("f1").style.display = "none";
                document.getElementById("f2").style.display = "inline";
                
            </script>
            <?php
        
          
      }
       
else{
    
      ?>
    
    <div class='alert alert-std alert-danger'>
<center><strong>Invalid Student ID or Email Address.</strong>
<span class='glyphicon glyphicon-warning-sign'>
    </span></center>
</div>
    
    
        <?php
    
    }

        
    }
else if(empty($student_id) || empty($student_email)) {
     ?>
    <div class='alert alert-std alert-danger' id="warningEmpty"><center>
        <strong>Please enter required fields.</strong>
<span class='glyphicon glyphicon-warning-sign'>
</span>
        
        </center>

    </div>
    
    
        <?php
            
    
       
        }

    
    ?>
    <!---end form1 php--->
   
 
</body>
    
</html>
