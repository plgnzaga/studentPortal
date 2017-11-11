<?php include'connect.php'; ?>
 <?php
    
    if(isset($_GET['signupme'])){
        $mycode = $_GET['mycode'];
        $student_id = $_GET['student_id'];
        $student_email = $_GET['student_email'];   
          
    }
     
    if(!empty($student_id)|| !empty($student_email)) {
        
    $signupQ = "SELECT * FROM students WHERE student_id = '$student_id' AND student_email = '$student_email' "; 
    $signResult = mysql_query($signupQ);
    $checkExist = "SELECT student_id,exist FROM students WHERE student_id = '$student_id' AND exist='1'  ";
    $chkresult = mysql_query($checkExist);
        
    if(mysql_num_rows($chkresult) > 0){
        ?>
    <div class='alert alert-std alert-danger'>
<center><strong>Your account already exists.</strong>
<span class='glyphicon glyphicon-warning-sign'>
    </span></center>
</div>
    
    
        <?php
        
    }
      else if(mysql_num_rows($signResult) > 0){ 
        
          $insertMe = "UPDATE students SET temp = '$temp' WHERE student_id = '$student_id' ";
          $insertResult = mysql_query($insertMe);
          
          error_reporting();
            $to = $_POST['email'];
            $message = 'Your code is '.$temp.' ' ;
            $from = 'From: umportal.16mb.com'; 


            $subject = 'Password Recovery';
            $body = "From: $from\n E-Mail: $email\n Message:\n $message";

            $headers .= "MIME-Version: 1.0\r\n";
         
            $headers .= "Content-type: text/html\r\n";
            $headers = 'From: umportal.16mb.com' . "\r\n" .
            'Reply-To: umportal.16mb.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
          
          header('location:signup_account_confirm.php');
      
            ?>
    
            <script>
               document.getElementById("f1").style.display = "none";
                document.getElementById("f2").style.display = "inline";
                
            </script>
            <?php
        
          
      }
       
else{
    
      ?>
    



<?php
    
    if(isset($_POST['finish'])){
            
            $student_id2 = $_POST['student_id2'];
            $code = $_POST['mycode'];

    }
    if(!empty($code)) {
        
            $codeQ = "SELECT student_id,temp FROM students WHERE student_id LIKE'%$student_id2%' AND temp LIKE'%$code%'  LIMIT 1";
            $codeQres = mysql_query($codeQ) or die (mysql_error()." Error while signing in"); 
        
          if(mysql_num_rows($codeQres) > 0){
             $_SESSION['is_logged_in'] = true;
            $_SESSION['tempStudent'] = $student_id2;
        
            header('location:register_student.php');
        
        
            }
        else{
        
           ?>
          
           <script>

        </script>

            <?php
            
        }
}

//end if code empty
 ?>


    
    <div class="container signupdivs1" id="f2" >
        
           <center>
               <h4>Please enter the code you have received in<br><em><a href="<?php echo $_GET['student_email']; ?>"><?php echo $_GET['student_email']; ?></a></em></h4><br>
               
               
        <form method="get" action="signup_account.php">
           
            <input type ="text" name="student_id2" value="<?php echo $_GET['mycode']; ?>"  class="form-control" id="signupcode" readonly />
             <input type ="text" name="student_id2" value="<?php echo $_GET['student_id']; ?>"  class="form-control" id="signupcode" readonly />
            <input type ="text" name="student_email2" value="<?php echo $_GET['student_email']; ?>"  class="form-control" id="signupcode" readonly />
            <input type="text" name="code" placeholder="Code:" class="form-control" id="signupcode"/><br>
            
            <input type="submit" name="finish" value="Submit Code" class="btn btn-sm btn-primary" id="signupcode"/>
        
        
        </form>
        
        
        </center>
        
        
</div> 