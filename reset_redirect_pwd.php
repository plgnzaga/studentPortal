<?php error_reporting(1);?>
<?php include'connect.php'; ?>
<?php

        
            if(isset($_POST['update_pwd'])){
                
                    $std = $_POST['student_id3'];
                    $new = md5($_POST['new_pwd']);
                    $confirm_new = md5($_POST['confirm_new_pwd']);
            
            if($new == $confirm_new){
                      /*  echo"sucess bes"; */
                         
                                                                                                                         
                        $mypass = mysql_query("UPDATE students SET student_pwd='$new' WHERE student_id='$std' ");
                       if($mypass){
                           
                           echo"Success!";
                           
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






