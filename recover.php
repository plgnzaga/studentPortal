<html>
    <?php 
                include'headers.php'; 
                include'connect.php';
                session_start(); 
    ?>
<body class="defaultbg">
    <?php include'mainnavs.php'; ?>
      <!---tried----->
    <!---start form 1 html---->
    <div class="container signupdivs1" id="f1">
        
  
    <center>
       <h3>Recover your Password</h3><Br>
    
        <form method="POST" action="" >
            <label>Your Student ID:</label>
              <input type="text" name="student_id" placeholder="Student ID" class="form-control" id="signupstd_id" data-placement="right" data-toggle="tooltip" title="Please indicate your Student ID here." />
                <label>Email Address:</label><br>
            <input type="text" name="student_email" placeholder="Email Address" class="form-control" id="signupstd_email" data-placement="right" data-toggle="tooltip" title="Indicate the Email Address you've used." /><br>
       <?php
            
            
             $pwdrecovery = rand(6000,9999);
            $pwdrecovery = md5($pwdrecovery);
             $pwdrecovery = substr($pwdrecovery, 0, 10);
            
             echo"<input type='text' value='$pwdrecovery' name='mycode' class='hideMe' id='signupstd_id' readonly/>";
          

            ?><br>
            <input type="submit" name="recoverme" value="Reset my Password" class="btn btn-sm btn-success" id="signupstd_sub"/>
            
            
        </form>
        
    </center>
        
    </div>
    <!----end form 1 html --->
        <!--tried--->
       
         <!---start form 2 html---->
    <div class="container signupdivs1" id="f2" >
        
           <center>            <!---<h4>Please enter the code you have received in<br><em><a href="<?php echo $_POST['student_email']; ?>"><?php echo $_POST['student_email']; ?></a></em></h4><br>---->
               <h3>Email Sent!</h3>
               <h4>Please input the code we've sent to your email.</h4><br>
               
               <!---past action="reset_pwd.php"--->
        <form method="post" action="">
           
            <input type ="text" name="mycode2" value="<?php echo $_POST['mycode']; ?>"  class="hideMe" id="signupcode" readonly />
             <input type ="text" name="student_id2" value="<?php echo $_POST['student_id']; ?>"  class="hideMe" id="signupcode" readonly />
            <input type ="text" name="student_email2" value="<?php echo $_POST['student_email']; ?>"  class="hideMe" id="signupcode" readonly />
            <input type="text" name="code" placeholder="Code:" class="form-control" id="signupcode" required autofocus/><br>
            
            <input type="submit" name="finish" value="Submit Code" class="btn btn-sm btn-primary" id="signupcode"/>
        
        
        </form>
        
        
        </center>
        
        
</div> 
    <!---end form 2 html---->
        <!--tried-->
         <!----start form3 html--->
        
        <div class="container">
        
        <center>
          
         <form class="container signupdivs1" method="post" id="f3" action="">
            <h4>Change Account Password</h4><br>
          <input type ="text" name="student_id3" value="<?php echo $_POST['student_id2']; ?>"  class="hideMe" id="signupcode" readonly />
          <label>Enter New Password:</label><input type="password" id="new_pass" class="form-control" name="new_pwd" required/><br><br>
           <label>Confirm New Password:</label><input type="password" id="mediumA" class="form-control update_pwd" name="confirm_new_pwd" required/><br><br>
             <input type="submit" value="Save Changes" class="btn btn-sm btn-success" name="update_pwd" id="mediumA"></input><br><br>
        
        
        
        </form>
          
        </center>
           
        
        
        </div>
        
        <!---end form3 html --->
     <!---tried-->
    
    <!---start form1 php---->
<?php
    
    if(isset($_POST['recoverme'])){
        $mycode = $_POST['mycode'];
        $student_id = $_POST['student_id'];
        $student_email = $_POST['student_email'];   
          
    }
     
    if(!empty($student_id)|| !empty($student_email)) {
         $mycode3 = $_POST['mycode'];
        $student_id3 = $_POST['student_id']; 
        $student_email = $_POST['student_email'];   
    $signupQ = "SELECT * FROM students WHERE student_id = '$student_id' AND student_email = '$student_email' "; 
    $signResult = mysql_query($signupQ);
    
        
        if(mysql_num_rows($signResult) > 0){ 
        
          $insertMe = "UPDATE students SET pwdrecovery = '$mycode' WHERE student_id = '$student_id' ";
          $insertResult = mysql_query($insertMe);
          
        error_reporting();
            $to = $_POST['student_email'];
            $message = 'Your code is '.$mycode.' ' ;
            $from = 'From: umportal.16mb.com'; 


            $subject = 'Password Recovery';
            $body = "From: $from\n E-Mail: $student_email\n Message:\n $message";

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
      <!----start form2 php---->
 
 <?php
    
    if(isset($_POST['finish'])){
            
            
            $student_id2 = $_POST['student_id2'];
            $code = $_POST['code'];
        
  }
 if(!empty($code)) {
        
            $codeQ = "SELECT student_id,fullname,pwdrecovery FROM students WHERE student_id LIKE'%$student_id2%' AND pwdrecovery LIKE'%$code%'  LIMIT 1";
            $codeQres = mysql_query($codeQ) or die (mysql_error()." Error while signing in"); 
        
          if(mysql_num_rows($codeQres) > 0){
              
          //start here
         ?>
        
        <script>
            
          $(document).ready(function(){
              $("#f1").hide();
              $("#f2").hide();
              $("#f3").show();
           
           });
            
        </script>
        
            <?php
              
              
            }
        else{
            
          
       
       ?>
      <script>
            
        $(document).ready(function(){
              $("#f1").hide();
              $("#f2").show();
              $("#f3").hide();
           
           }); 
            
        </script>
        <?php
        
           
            
            }
         }
   

//end form2 php empty
 ?>  
   <!---start form3 php---->
    <?php

        
            if(isset($_POST['update_pwd'])){
                
                    $std = $_POST['student_id3'];
                    $new = md5($_POST['new_pwd']);
                    $confirm_new = md5($_POST['confirm_new_pwd']);
               }
                if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,32}$/', $new)) {
              ?>
           
            <script>
                document.getElementById('new_pass').title = "Your password did not meet the requirements.";
                document.getElementById('new_pass').style.borderColor="RED";
           
             </script>
        <?php 
} 
        
                
            else if($new == $confirm_new){
                      /*  echo"sucess bes"; */
                 
                
                        /* end*/                                                                                                
                        $mypass = mysql_query("UPDATE students SET student_pwd='$new' WHERE student_id='$std' ");
                       if($mypass){
                           
                           ?>
                    <script>
    
     $(document).ready(function(){
              $("#f1").hide();
              $("#f2").hide();
              $("#f3").hide();
           
           }); 
                        document.write("<center><br><br><br><h3>Your password has been reset.</h3><a href='login_student.php'><h3>Please Sign In Here</h3></a><center>")
                    </script>
    
    
                        <?php
                         
                           
                           
                       }
                        else{
                            echo"Error updating password.";
                        }
                        
                    }
                               else{
                        echo("The two password does not match");
                    }  

?>

    
    
    
    <!---end form3 --->
     
   
 
</body>
    
</html>
