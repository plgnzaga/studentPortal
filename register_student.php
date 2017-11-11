<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>
<?php session_start(); ?>
<?php
    if(isset($_SESSION['tempStudent'])){
        
    }
else{
    header('location:restricted.php');
}


?>
<?php
    
function sanitize($data){
    return mysqli_real_escape_string($data);
}
    
function studExists($student_username){
    $student_username = sanitize($student_username);
    return(mysqli_result(mysqli_query($connect,"SELECT COUNT(`student_id`) FROM `students` WHERE `student_username` = '$student_username' "),0)==1) ? true : false;
}
 
?><?php

$query_id = "SLECT LAST(student_id) AS std FROM students;";
$query_id_res = mysqli_query($connect,$query_id);

echo $query_id_res;

?>


<!DOCTYPE html>
<html>
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
                      
                        <div class="container">
        <form class="form form-horizontal" method="post">
        <h2 class="form-signin-heading">Register my Account</h2><hr><br>
        <label>Student ID:</label>
        <input type="text" name="stud_id_input" class="form-control" id="shorts1" placeholder="Student No" value="<?php echo $_SESSION['tempStudent']; ?>" readonly autofocus><br><br>
        
     
        <label>Lastname:&nbsp;</label> 
        <input id="lname_data" type="name" name="lname_input" class="form-control reg_stud" placeholder="Lastname" data-toggle="tooltip" data-placement="right" title="" required >
        <label>Firstname:&nbsp;</label> 
        <input id="fname_data" type="name" name="fname_input" class="form-control reg_stud" placeholder="Firstname" data-toggle="tooltip" data-placement="right" title="" required >
        <label>Middlename:&nbsp;</label> 
            
        <input id="mname_data"  type="name" name="mname_input" class="form-control reg_stud" placeholder="Middlename" data-toggle="tooltip" data-placement="right" title=""><br><br>
               <label>Password:&nbsp;</label> 
        <input type="password" id="std_pwd" name="student_pwd" class="form-control reg_stud" data-toggle="tooltip" title="Your password must be minimum of 8 characters and maximum of 32 characters in length, with at least one digit number and one special symbol!" data-placement="right" placeholder="Password" maxlength="32" required >
        <label>Confirm Password:&nbsp;</label> 
      <input type="password" id="confirm_pwd" name="conf_std_pwd" class="form-control reg_stud" data-toggle="tooltip" title="" data-placement="right" placeholder="Confirm Password" required ><br><br>
        <label>E-mail:&nbsp;</label> 
        <input type="email" id="email_data" name="email_input" class="form-control reg_stud" placeholder="E-mail" >
            <label>Phone:&nbsp;</label><br> <input type="text" id="phone_data" name="phone" class="form-control reg_stud" pattern="\d*" title="12 digit valid phone number" minlength="12" maxlength="12" placeholder="Enter 12 Digit Phone number" ></input> <br><br>
            <label for="gender">Gender:</label>
            
            <select class="form-control reg_stud selectpicker" id="gender_data" name="gender_input">
                <optgroup label="Gender">
                    <option></option>
                    <option>Male</option>
                    <option>Female</option>
                </optgroup>
            
            </select><br><br>
            <label>Age:&nbsp;</label>
            <input id="ageVal" type="text" name="age_input" class="form-control Num" placeholder="Age" minlength="1" maxlength="2" pattern="\d*" data-toggle="tooltip" data-placement="right"  title="Enter Valid Age"  required><p id="urAge"></p><br><br>
          
            <hr><br>
            
            <div class="form-inline">
            
            <label><em>Home No. | Street. | Brgy: | City:</em></label><br>
            <input type="text" name="num" placeholder="No." class="form-control Num" />
           
            <input type="text" name="street" placeholder="Street" class="form-control st-brgy-city-dates" />
          
            <input type="text" name="brgy" placeholder="Barangay" class="form-control st-brgy-city-dates"  /> 
           
            <input list="cities" name="city" type="text" placeholder="City/Municipality" class="form-control st-brgy-city-dates">
                <datalist id="cities">
                   <option>Caloocan</option>
                    <option>Las Pinas</option>option>
                    <option>Makati</option>option>
                    <option>Malabon</option>option>
                    <option>Mandaluyong</option>option>
                    <option>Manila</option>option>
                    <option>Marikina</option>option>
                    <option>Muntinlupa</option>option>
                    <option>Navotas</option>option>
                    <option>Paranaque</option>option>
                    <option>Pasay</option>option>
                    <option>Pasig</option>option>
                    <option>Pateros*</option>option>
                    <option>Quezon City</option>option>
                    <option>San Juan</option>option>
                    <option>Taguig</option>option>
                    <option>Valenzuela</option>option>
                </datalist>
            </input>
            
            <br><br><br>
            
            
            
            <br>
                
         
          
            <label>Date of Birth:</label><br><em><label> Day | Month | Year </label><br></em>
            <select  name="bd" class="form-control select-picker st-brgy-city-dates" required>
                                    <option></option>

                <?php for($no=1;$no<=31;$no++){
                    echo"<option>$no</option>";
                } ?>
            </select>
            
            
            
            <select name="bm" class="form-control select-picker st-brgy-city-dates" required>
                                    <option></option>

                <?php
                    $months = ["January","February","March","April","May","June","July","August",
                              "September","October","November","December"];
                        foreach($months as $month){
                            echo"<option>$month</option>";
                        }
                ?>
            
            
            
            </select>
           
            
            <select name="by" class="form-control select-picker st-brgy-city-dates" required>
                                    <option></option>

                <option></option>
                <?php for($no=1960;$no<=2060;$no++){
                    echo"<option>$no</option>";
                } ?>
            </select>
            
            
        <br><br>
            
            
            
           
            
            </div>
            
 
<br><hr><br>
            <label for="course">Course</label>
            <select class="form-control select-picker reg_stud_c" name="course_input"  data-toggle="tooltip" title="Course"  id="shorts1" required>
                                    <option></option>

            
                 
                <?php  
                $courses = ["Bachelor of Science in Accountancy","Bachelor of Science in Criminology","Bachelor of Science in Civil Engineering","Bachelor of Science in Computer Science","Bachelor of Science in Business Administration","Bachelor of Science in Hotel and Restaurant Management","Bachelor of Elementary Education","Bachelor of Secondary Education",
                              "Foreign Service","Arts Bachelor"];
                        foreach($courses as $course){
                            echo"<option>$course</option>";
                        }
                
                
                ?>
           
            </select>
            <label for="yearlvl">Year Level:</label>
            <select class="form-control select-picker reg_stud" name="yearlvl_input" id="shorts1"  required>
                                    <option></option>

            
             <?php
                    $yrlvls = ["First Year","Second Year","Third Year","Fourth Year","Fifth Year"];
                        foreach($yrlvls as $yr_lvl){
                            echo"<option>$yr_lvl</option>";
                        }
                ?>
                
            </select>
            <label for="set">Set:</label>
           <select class="form-control select-picker reg_stud" name="section_input" id="shorts1"  required>
                                   <option></option>

                <?php
                    $sections = ["A","B","C","D","E","F","G"];
                        foreach($sections as $sect){
                            echo"<option>$sect</option>";
                        }
                ?>
            
            
            
            </select><br><br> <input class="btn btn-sm btn-success btn-block" id="signUp" type="submit" name="reg_input" value="Sign Up"></input><br><br>
       
                      
      </form>
    </div>
                        
                        
                        
                    </div><!---- <div class="col-lg-12"> --->
                </div><!---div class="row">--->
            </div><!----div fluid ----->
        </div><!----page content wrapper  --->
    </div><!----div wrapper--->
    
    

<?php
    if(isset($_POST['reg_input'])){
        
         $student_id = mysqli_real_escape_string($_POST['stud_id_input']);
        $student_pwd = mysqli_real_escape_string($_POST['student_pwd']);
        $conf_std_pwd = mysqli_real_escape_string($_POST['conf_std_pwd']);
        $lname_input = mysqli_real_escape_string($_POST['lname_input']);
        $fname_input = mysqli_real_escape_string($_POST['fname_input']);
        
        $mname_input = mysqli_real_escape_string($_POST['mname_input']);
        $fullname = "$lname_input"."$fname_input"."$mname_input";
        $email_input = mysqli_real_escape_string($_POST['email_input']);
        
        $phone = mysqli_real_escape_string($_POST['phone']);
        //if(isset($_POST['gender_input'])){
        $gender_input = mysqli_real_escape_string($_POST['gender_input']);
        //}
        
        $age_input = mysqli_real_escape_string($_POST['age_input']);
        $num = mysqli_real_escape_string($_POST['num']);
        $street = mysqli_real_escape_string($_POST['street']);
        $brgy = mysqli_real_escape_string($_POST['brgy']);
        $city = mysqli_real_escape_string($_POST['city']);
        
        $bd = mysqli_real_escape_string($_POST['bd']);
        $bm = mysqli_real_escape_string($_POST['bm']);
        $by = mysqli_real_escape_string($_POST['by']);
        $course_input = mysqli_real_escape_string($_POST['course_input']);
        $yearlvl_input = mysqli_real_escape_string($_POST['yearlvl_input']);
        
        $section_input = mysqli_real_escape_string($_POST['section_input']);
        
        if($age_input <= 10){ ?>
      <script> 
          document.getElementById('ageVal').title="It look's like you're too young to be in this University";
          document.getElementById('ageVal').style.borderColor="Red";
        </script>"; <?php
        }
        else if($age_input >= 80){
       ?>
    
      <script>
        
            document.getElementById('ageVal').title="It look's like you're too old to be in this University";
            document.getElementById('ageVal').style.borderColor="Red";


        </script> 
              
             }
            
         <?php
        }
        else if($student_pwd != $conf_std_pwd){ ?>
            <script>
                document.getElementById('confirm_pwd').title="The two passwords does not match.";
                document.getElementById('std_pwd').style.borderColor="RED";
                document.getElementById('confirm_pwd').style.borderColor="RED";
            </script>
            
        <?php }
        
        
        else if(preg_match('/[^a-z\s-]/i',$lname_input)){ ?>

        <script>
            
            document.getElementById("lname_data").title="Lastname must only contain letters.";
            document.getElementById("lname_data").style.borderColor="RED"; 

        </script>

        <?php
            
        }
        else if(preg_match('/[^a-z\s-]/i',$fname_input)){
            ?>
           
            <script>
                document.getElementById("fname_date").title="Firstname must only contain letters";
                document.getElementById('fname_date').style.borderColor="Red";
            
            </script>
        <?php 
        }
        
        else if(preg_match('/[^a-z\s-]/i',$mname_input)){
            ?>
           
            <script>
                document.getElementById("mname_date").title="Middlename must only contain letters";
                document.getElementById('mname_date').style.borderColor="Red";
             </script>
        <?php 
        } 
        /*   */
        else if(!preg_match('/^(?=.*\d)(?=.*[a-z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,32}$/', $student_pwd)) {
              ?>
           
            <script>
                document.getElementById('std_pwd').title = "Your password did not meet the requirements.";
                document.getElementById('std_pwd').style.borderColor="RED";
                
             </script>
        <?php 
}
        
        else{
             
       
           
           
             $student_pwd = md5($student_pwd);
        
             $register = "UPDATE students SET
             student_pwd  = '$student_pwd ',
             student_lastname = ' $lname_input',
             student_firstname = '$fname_input',
             student_middlename = '$mname_input',
             fullname = '$fullname',
             student_email = '$email_input',
             phone = '$phone',
             gender = '$gender_input',
             age = ' $age_input',
             num = ' $num',
             street = '$street',
             brgy = '$brgy',
             city = '$city',
             bday = ' $bd',
             bmonth = '$bm',
             byear = ' $by',
             course = '$course_input',
             year = '$yearlvl_input',
             section = '$section_input',
             exist ='1' WHERE student_id = '$student_id' ";
            
      
            
            //run query
            $insert = mysqli_query($connect,$register) or die(mysqli_error()."Error inserting data"); ?>

       <!DOCTYPE html>
<html>
    
    <head>
    <meta http-equiv="refresh" content="0;url=redirect_stud.php">
    </head>


</html>
    
            <?php
            
        }
   // }
    }
?>  
</body>

</html>
<!---



/*
            $register = "INSERT students(student_pwd,student_lastname,student_firstname,
         student_middlename,fullname,student_email,phone,gender,age,num,street,brgy,city,bday,bmonth,byear,course,year,section)
         VALUES('$student_pwd',
         '$lname_input','$fname_input','$mname_input','$fullname','$email_input','$phone','$gender_input',
         '$age_input','$num','$street','$brgy','$city','$bd','$bm','$by','$course_input','$yearlvl_input',
         '$section_input')"; */


-->