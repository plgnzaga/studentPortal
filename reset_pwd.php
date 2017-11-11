<html>
    <?php include'connect.php'; 
                include'headers.php'; 
                error_reporting(1);
    
    ?>
    
    <body class="defaultBg">
        
        <?php include'mainnavs.php'; ?>
       
    
       
        <?php
        
            $std = $_GET['student_id2'];
                
            $reset = "UPDATE students SET student_pwd = '$newpass' FROM students WHERE student_id = '$std'  ";
            $resetResult = mysql_query($reset);
            
        ?>
       <div class="container">
        
        <center>
          
         <form method="post" id="f3" action="">
            <h4>Change Account Password</h4>
        
          <label>Enter New Password:</label><input type="password" id="mediumA" class="form-control update_pwd" name="new_pwd" required/><br><br>
           <label>Confirm New Password:</label><input type="password" id="mediumA" class="form-control update_pwd" name="confirm_new_pwd" required/><br><br>
             <input type="submit" value="Save Changes" class="btn btn-sm btn-success" name="update_pwd" id="mediumA"></input><br><br>
        
        
        
        </form>
            <?php
           
            if(isset($_POST['update_pwd'])){
                
                    $std_id = $_GET['student_id2'];
                    $new = md5($_POST['new_pwd']);
                    $confirm_new = md5($_POST['confirm_new_pwd']);
            
            if($new == $confirm_new){
                      /*  echo"sucess bes"; */
                         
                                                                                                                         
                        $mypass = mysql_query("UPDATE students SET student_pwd='$new' WHERE student_id='$std' ");
                       if($mypass){
                           
                          ?>
                    <script>
                    
                            document.getElementById('f3').style.display = "none";
                    
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
                    
                }
           
           ?>
        </center>
           
        
        
        </div>
        
        
        
        
        
    </body>





</html>