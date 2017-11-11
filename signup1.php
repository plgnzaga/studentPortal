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