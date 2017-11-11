<html>
<?php include'connect.php'; ?>
    <?php include'headers.php'; ?>
    

    

<body>
    
    <style>
        *{
            font-family: "Calibri";
        }
        .table{ 
          background-color: white;
        }
        hr{
            color: white;
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
        
          #form_3{
            display: none;
        }
        .form-control{
    border-radius:0px;
}
    </style>
<?php include'mainnavs.php'; ?>    
    
   <br>
            <form method="post" id="form_1">
                  
                    <div class="container">
                        <input type="number" name="ref_num" style="display:none;" value="<?php echo date('Y').rand(111111,999999) ?>" /> 
                        
                                <h4>Personal Information &#9679; Course and Campus &#9679; Contact Information &#9679; Previous Campus &#9679; Create Account &#9679; Exam Schedule &#9679; Submit</h4>
                            <table class="table" style="width:800px;">
                                  
                                    <tr>
                                    <td><label>Semester:</label></td>
                                    <td>
                                    <select name="sem" id="opt_med" required>
                                    <option></option>
                                    <option>First Semester</option>
                                    <option>Second Semester</option>
                                    </select>
                                    </td>
                                    </tr>
                                    
                                
                                    <tr>
                                    <td><label>Admission Year:</label></td>
                                        <td>
                                        
                                            
                                      
                                        
                                   <input type="text" value="     <?php
                                        $this_yr = date('Y');
                                        $nxt_yr = date('Y')+1;
                                        $school_yr = $this_yr.'-'.$nxt_yr;
                                        echo $school_yr;
                                        
                                        ?>"
                                          readonly />
                                        
                                            
                                
                                        
                                        </td>
                                
                                    </tr>
                                    
                                    <tr>
                                        <td><br><p class="legends">Personal Information:</h3></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                  <td><label>Surname:</label></td>
                <td> <input type="text" name="surname" class="txt_med" /></td>
                  </tr>
                    <tr>
                  <td><label>Given name:</label></td>
                <td>    <input type="text" name="firstname" class="txt_med" /></td>
                  </tr>
                    <tr>
                  <td>  <label>Middlename:</label></td>
                <td>  <input type="text" name="middlename" class="txt_med" /></td>
                  </tr>
                  <tr>
        <td><label>Gender:</label></td>
        <td><select name="gender" class="txt_sm">
            <option></option>
            <option>Male</option>
            <option>Female</option>
            
            </select></td>
        </tr>
            <tr>
        <td><label>Date of Birth:</label></td>
        <td><select name="month" class="txt_sm">
            <option></option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
            </select>
            <select name="day" class="txt_xss">
                <option></option>
              <?php
                
                 for($i=1;$i<32;$i++){
                     
                     ?> <option><?php echo"$i";?></option><?php
                     
                 }
                
                
                ?>
                </select>
            <select name="year" class="txt_xs">
                <option></option>
              <?php
                $year_this = date('Y')+1;
                 for($i=1980;$i<$year_this;$i++){
                     
                     ?> <option><?php echo"$i";?></option><?php
                     
                 }
                
                
                ?>
                </select></td>
        </tr>
             <tr>
        <td><label>Place of Birth:</label></td>
        <td><input type="text" name="place_of_birth" class="txt_long"/></td>
            </tr>
            <tr>
                
                <td><label>Citizenship:</label></td>
                <td><input type="text" name="citizenship" /></td>
                
            </tr>
            <tr>
            <td><label>Civil Status:</label></td>
                <td><select name="civil_stat" class="txt_sm">
                    <option></option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Annuled</option>

                    </select></td>
            
            </tr>
            <tr>
            <td><label>Religion:</label></td>
                <td><input type="text" name="religion" />
                    </td>
            
            </tr>
    <tr>
        <td><label>Father's Name:</label></td>
        <td><input type="text" name="father_name"  class="txt_med"/></td>
        </tr>
        <tr>
        <td><label>Occupation:</label></td>
        <td><input type="text" name="father_occupation" class="txt_med" /></td>
            
        </tr>
        <tr>
        <td><label>Mother's Name:</label></td>
        <td><input type="text" name="mother_name" class="txt_med" /></td>
        </tr>
          <tr>
        <td><label>Occupation:</label></td>
        <td><input type="text" name="mother_occupation" class="txt_med" /></td>
        </tr>  
             <tr>
        <td><label>Guardians Name:</label></td>
        <td><input type="text" name="guardian_name"  class="txt_med"/></td>
        </tr>
             <tr>
            <td><label>Annual Family Income</label></td>
                <td><select name="annual_gross" class="txt_sm">
                    <option></option>
                    <option>Less Than 90,000</option>
                    <option>100,000+</option>
                    <option>300,000+</option>
                    <option>500,000+</option>
                    <option>600,000+</option>

                    </select>
                    </td>
            
            </tr>
            <tr>
            <td><label>Are you a student with disability?</label></td>
                <td><input type="radio" name="stud_with_disability" value=
                           >Yes</input>&nbsp;&nbsp;&nbsp;<input type="radio" name="stud_with_disability">No</input></td>
            </tr>
                            
            <tr>
    
                <td><br><p class="legends">Course and Campus:</h3></td>
                <td></td>
            </tr>
    
    <tr>
            
                  <td> <label>Seeking admission as:</label></td>
                                    <td><select name="yearlvl" class=" selectpicker" id=opt_med>
                      <option></option>
                    <option>Freshman</option>
                    <option>Transferee</option>
                                        
              </select></td>

                  
            </tr>
                     <tr>
            
                  <td> <label>Course:</label>
              
           
              
              
                </td>
                                    <td><select name="courses" class="selectpicker" id="course"> 
              
              
                 <option></option>
                <option>Bachelor of Science in Computer Science</option>
                <option>Bachelor of Science in Computer Engineering</option>
                <option>Bachelor of Science in Civil Engineering</option>
                <option>Bachelor of Science in Criminology</option>
                <option>Bachelor of Science in Business Administration</option>
                <option>Bachelor of Science in Hotel and Restaurant Management</option>
                <option>Bachelor of Science in Information Technology</option>
                <option>Bachelor of Science in Tourism and Hospitality Management</option>
                <option>Bachelor of Science in Accountancy</option>
                <option>Bachelor of Science in Foreign Studies</option>
                <option>Bachelor of Science in Accountancy</option>
                <option>Bachelor of Science in Secondary Education</option>
                <option>Bachelor of Science in Elementary Education</option>
                <option>Bachelor of Science in Industrial Engineering</option>
                <option>Bachelor of Science in Marketing Management</option>
                
  </select></td>

                  
            </tr>
                     <tr>
            
                  <td><label>Campus:</label></td>
                                    <td><select name="campus" class=" selectpicker" id=opt_med>
              <option></option>
              <option>Manila</option>
              <option>Malolos</option>
              
              </select></td>

                  
            </tr>

    <tr>
        <td><br><p class="legends">Contact Information:</h3></td>
        <td></td>
    
    </tr>
      <tr>
                <td><label>Present Address:</label></td>
                 <td><input type="text" class="txt_long" name="address" /></td>
            </tr>
            <tr>
                <td><label>ZIP Code</label></td>
                 <td><input type="number" class="" name="zipcode" /></td>
            </tr>
            <tr>
                <td><label>Contact Number:</label></td>
                 <td><input type="number" class="" name="contact_num" /></td>
            </tr>
            <tr>
                <td><label>Email Address:</label></td>
                 <td><input type="email" class="txt_med" name="email_address" /></td>
            </tr><br>
         <tr>
             <tr>
                 
                    <td><br><p class="legends">Previous School</p></td>
                    <td></td>
            
            </tr>
        <tr>
    
            <td><label>Are you currently enrolled?</label></td>    
            <td><select name="enroll_stat" class="txt_sm">
            <option></option>
            <option>Yes</option>
            <option>No</option>
            
            </select></td>    

        </tr>
<tr>
        <td><label>Name of School:</label></td>
        <td><input type="text" name="current_school" class="txt_long" /></td>

</tr>
<tr>
        <td><label>School Address:</label></td>
        <td><input type="text" name="school_address" class="txt_long"/></td>


</tr>
<tr>
        <td><label>School Type:</label></td>
        <td><select name="school_type" class="txt_sm">
                <option></option>
                <option>Public</option>
                <option>Semi Private</option>
                <option>Private</option>

                </select></td>


</tr>

             
             
             
             <tr>
                <td><br><p class="legends">Create User Account</h3></td>
                 <td></td>
    
    
            </tr>
              <tr>
        <td><label>Username:</label></td>
        <td> <input type="text" name="username" class="txt_sm" maxlength="16" /></td>
    </tr>         
      <tr>
          <td> <label>Password:</label></td>
        <td><input type="password" name="password" class="txt_sm" id="pwd_box"/></td>
        
        </tr>
        <tr>
        <td>  <label>Confirm Password:</label></td>
            <td>  <input type="password" name="confirm_pwd"  class="txt_sm" id="pwd_box2"/><br></td>
        
        </tr>
        
        <tr>
                <td></td>
                <td><br><input type="submit" name="submit_form" value="Submit" class="btn btn-md btn-primary" /></td>
             

        </tr>
                                
 </table>
    
                    

    
</div><!---id form 1--->

 </form>  


         

    <!---- form output --->
    <?php
    
    if(isset($_POST['submit_form'])){
   
        
        $sem  = mysqli_real_escape_string($connect,$_POST['sem']);
        $sy = mysqli_real_escape_string($connect,$_POST['sy']);
        $surname  = mysqli_real_escape_string($connect,$_POST['surname']);
        $firstname  = mysqli_real_escape_string($connect,$_POST['firstname']);
        $middlename  = mysqli_real_escape_string($connect,$_POST['middlename']);
        $gender = mysqli_real_escape_string($connect,$_POST['gender']);
        $month = mysqli_real_escape_string($connect,$_POST['month']);
        $day = mysqli_real_escape_string($connect,$_POST['day']);
        $year = mysqli_real_escape_string($connect,$_POST['year']);
        $place_of_birth = mysqli_real_escape_string($connect,$_POST['place_of_birth']);
        $citizenship = mysqli_real_escape_string($connect,$_POST['citizenship']);
        $civil_stat = mysqli_real_escape_string($connect,$_POST['civil_stat']);
        $religion = mysqli_real_escape_string($connect,$_POST['religion']);
        $father_name = mysqli_real_escape_string($connect,$_POST['father_name']);
        $father_occupation = mysqli_real_escape_string($connect,$_POST['father_occupation']);
        $mother_name = mysqli_real_escape_string($connect,$_POST['mother_name']);
        $mother_occupation = mysqli_real_escape_string($connect,$_POST['mother_occupation']);
        $guardian_name = mysqli_real_escape_string($connect,$_POST['guardian_name']);
        $annual_gross = mysqli_real_escape_string($connect,$_POST['annual_gross']);
        $stud_with_disability = mysqli_real_escape_string($connect,$_POST['stud_with_disability']);
        $address = mysqli_real_escape_string($connect,$_POST['address']);
        $zipcode = mysqli_real_escape_string($connect,$_POST['zipcode']);
        $contact_num = mysqli_real_escape_string($connect,$_POST['contact_num']);
        $email_address = mysqli_real_escape_string($connect,$_POST['email_address']);
        $enroll_stat = mysqli_real_escape_string($connect,$_POST['enroll_stat']);
        $current_school = mysqli_real_escape_string($connect,$_POST['current_school']);
        $school_address = mysqli_real_escape_string($connect,$_POST['school_address']);
        $school_type = mysqli_real_escape_string($connect,$_POST['school_type']);
        $ref_num = mysqli_real_escape_string($connect,$_POST['ref_num']);
        
        
        
        $yearlvl = mysqli_real_escape_string($connect,$_POST['yearlvl']);
        $courses  = mysqli_real_escape_string($connect,$_POST['courses']);
        $campus  = mysqli_real_escape_string($connect,$_POST['campus']);
        
        
        $username  = mysqli_real_escape_string($connect,$_POST['username']);
        
        $password = mysqli_real_escape_string($connect,$_POST['password']);
        $confirm_pwd = $_POST['confirm_pwd'];
        if($password!=$confirm_pwd){
            
           ?>
<script>

    document.getElementById("pwd_box").style.borderColor="blue";
     document.getElementById("pwd_box2").style.borderColor="blue";

</script>

            <?php
            
        }
        else{
            
            $admitme = "INSERT IGNORE INTO admissions(sem,sy,surname,firstname,middlename,gender,month,day,year,place_of_birth,citizenship,civil_stat,religion,father_name,father_occupation,mother_name,mother_occupation,guardian_name,annual_gross,stud_with_disability,address,zipcode,contact_num,email_address,enroll_stat,current_school,school_address,school_type,yearlvl,courses,campus,username,password,ref_num)
        VALUES('$sem','$sy','$surname','$firstname','$middlename','$gender','$month','$day','$year','$place_of_birth','$citizenship','$civil_stat','$religion','$father_name','$father_occupation','$mother_name','$mother_occupation','$guardian_name','$annual_gross','$stud_with_disability','$address','$zipcode','$contact_num','$email_address','$enroll_stat','$current_school','$school_address','$school_type','$yearlvl','$courses','$campus','$username','$password','$ref_num')";
        ?>
            
             <script>
            
                document.getElementById('form_1').style.display = "none";
               function show_app_form(){
                     
                     document.getElementById('form_2').style.display = "none";
                     document.getElementById("form_3").style.display = "inline";
                     
                 }
                 
            </script>
}

        <div class="container"  style="border:3px solid black;padding:20px;margin-top:80px;" id="form_2">
                
            <center>
                
                <h3>Admission Completed</h3>
                <p>Please remember your reference number</p>
                
                <h4><b>Reference No:<?php echo $ref_num; ?></b></h4>
                <h4>Name: <?php echo $surname.' '.$firstname ?></h4>
                <br><br>
                <input type="button" name="" id="" value="View Application Form" onclick="show_app_form();"></input>
             <br><br><br>
        
            </center>
        
     </div>


    <div class="container" id="form_3" style="padding:40px;">


    <table class="table" style="border:3px solid black;margin-left:60px;margin-top:40px;width:1100px;">
        
            <tr>
            <td></td>
               <td><center><img src="css/images/um_logo.png" style="width:110px;height:90px;" />
                   <p style="text-align:center;">
                   <span style="font-family:OLD ENGLISH TEXT MT;font-size:25px;">The University of Manila</span>
                    <br>546 M.V. Delos Santos St. Sampaloc, Manila<br>
                       <?php echo $campus.' Campus'; ?><br>
                       <h3>Application for Admission</h3><br>
                  
                  
                       
                   </p></center></td>
    <td><br><br><center>
        
        <div style="border:3px solid black;width:170px;height:170px;"><br><br><br>2x2 Photo</center></td>
        
            </tr> 
<tr style="background-color:lightgrey;">
<td>Reference Number:  <?php echo $ref_num; ?></td>
    <td></td>
    <td></td>

</tr>
<tr>

        <td style="width:350px;">Semester:<br> <b><?php echo $sem; ?></b></td>
        <td style="width:450px;">School Year: <br><b><?php echo $sy; ?></b></td>
        <td>Seeking Admission as: <br><b><?php echo $yearlvl; ?></b></td>
    
</tr>

<tr>
    <td>Date of Application: <br><b><?php echo date("M d, Y"); ?></b></td>
    <td colspan="2">Course: <br><b><?php echo $courses; ?></b></td>

</tr>
<tr>

<td>Surname: <br><b> <?php echo $surname; ?> </b></td>
<td>Firstname: <br><b> <?php echo $firstname; ?></b></td>
<td>Middlename: <br><b><?php echo $middlename; ?></b></td>
    
</tr>
<tr>
    <td colspan="2">Permanent Address:<br> <b><?php echo $address; ?></b></td>
    <td>Phone Number:<br> <b><?php echo $contact_num; ?></b></td>
    

</tr>

<tr>
    <td>Gender: <br><b><?php echo $gender; ?></b></td>
<td>E-mail Address: <br><b><?php echo $email_address; ?></b></td>
    <td></td>
    
</tr>

<tr>
   
<td>Birthdate:<br> <b><?php echo $month.' '.$day.','.$year.' '; ?></b></td>
    <td>Birthplace:<br> <b><?php echo $place_of_birth; ?></b></td>
        <td></td>

</tr>

<tr>
    <td>Citizenship:<br> <b><?php echo $citizenship; ?></b></td>
<td>Civil Status: <br><b><?php echo $civil_stat; ?></b></td>
    <td>Religion:<br> <b><?php echo $religion; ?></b></td>
</tr>

<tr>
    <td colspan="2">Father's Name:<br> <b><?php echo $father_name; ?></b></td>
<td>Occupation: <br><b><?php echo $father_occupation; ?></b></td>
    
</tr>
<tr>
    <td colspan="2">Mother's Name:<br> <b><?php echo $mother_name; ?></b></td>
<td>Occupation:<br> <b><?php echo $mother_occupation; ?></b></td>
   
</tr>

<tr>
    <td colspan="3">Guardian's Name:<br> <b><?php echo $guardian_name; ?></b></td>

</tr>
<tr>
    <td colspan="2">Gross Annual Family Income:<br> <b><?php echo $annual_gross; ?></b></td>
<td>: <b></b></td>

</tr>
<tr>
    <td colspan="3">School Last Attended: <br><b><?php echo $current_school; ?></b></td>
   
</tr>
<tr>
    <td colspan="2">School Address: <br><b><?php echo $school_address; ?></b></td>
    <td>Type of School: <br><b><?php echo $school_type; ?></b></td>

</tr>
<tr>

<td colspan="3">

<br><b>   <center><i> <p> I hereby certify that the information above is true and correct. </p>
    </i></center></b><br>
</td>
    <tr>

            <td></td>
        <td></td>
<td><br><br>Signature of Applicant: ________________________</td>        
    </tr>

</tr>
        
        
            
    
    
    
    </table>
    
    </div><!--form 3 --->

            <?php 
            
        $admit = mysqli_query($connect,$admitme);
         ///header('location:admission.php');
       
        
    }
    

            
        }
        
      ?>   

</body>


</html>