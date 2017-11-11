<!DOCTTYPE HTML>

<html>
    <?php include'connect.php'; ?>
<?php include'headers.php';?>
    <body style="background: linear-gradient(#ffffff,#8fd3cc,#ffffff);">
        <?php include'mainnavs.php'; ?>
        
      <style>
      
           #form_3{
            display: none;
        }
        </style>
        <div class="wrapper" style="margin-top:100px;">
              <form method="post" id="form_1">
        <h2 class="headings1">UM Admission Form</h2>
            
            <table class="table table-hover">
               <input type="number" name="ref_num" style="display:inline;" value="<?php echo date('Y').rand(111111,999999) ?>" /> 
                <tr>
                    <td>Semester:</td>
                    <td> 
                        <select name="sem" class="form-control">
                                    <option></option>
                                    <option>First Semester</option>
                                    <option>Second Semester</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                <td>Admission Year:</td>
                    <td>  <input type="text"  class="form-control" value="     <?php
                                        $this_yr = date('Y');
                                        $nxt_yr = date('Y')+1;
                                        $school_yr = $this_yr.'-'.$nxt_yr;
                                        echo $school_yr;
                                        
                                        ?>"
                                          readonly /></td>
                
                
                
                </tr>
                
                <tr>
                    <th colspan="2"><center><h4>Personal Information:</h4></center></th>
                
                </tr>
                
                <tr>
                        <td>Surname:</td>
                        <td><input type="text" name="surname" class="form-control" /></td>
                </tr>
                <tr>
                        <td>Given Name:</td>
                        <td>   <input type="text" name="firstname" class="form-control" /></td>
                </tr>
                <tr>
                        <td>Middle Name:</td>
                        <td><input type="text" name="middlename" class="form-control" /></td>
                </tr>
                <tr>
                        <td>Gender:</td>
                        <td><select name="gender" class="form-control">
            <option></option>
            <option>Male</option>
            <option>Female</option>
            
            </select></td>
                </tr>
                <tr>
                        <td>Date of Birth:</td>
                        <td><select name="month" class="form-control" style="width:400px;float:left;">
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
            <select name="day" class="form-control" style="width:60px;float:left;">
                <option></option>
              <?php
                
                 for($i=1;$i<32;$i++){
                     
                     ?> <option><?php echo"$i";?></option><?php
                     
                 }
                
                
                ?>
                </select>
            <select name="year" class="form-control" style="width:60px;float:left;">
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
                        <td>Place of Birth:</td>
                        <td><input type="text" name="place_of_birth" class="form-control"/></td>
                </tr>
                <tr>
                        <td>Citizenship:</td>
                        <td><input type="text" name="citizenship" class="form-control" /></td>
                </tr>
                <tr>
                        <td>Civil Status:</td>
                        <td><select name="civil_stat" class="form-control">
                    <option></option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Annuled</option>

                    </select></td>
                </tr>
                <tr>
                        <td>Religion:</td>
                        <td><input type="text" name="religion"  class="form-control col-sm-12" /></td>
                </tr>
                <tr>
                        <td>Father's Name:</td>
                        <td><input type="text" name="father_name"  class="form-control col-sm-12"/></td>
                </tr>
                <tr>
                        <td>Occupation:</td>
                        <td><input type="text" name="father_occupation" class="form-control col-sm-12" /></td>
                </tr>
                <tr>
                        <td>Mother's Name:</td>
                        <td><input type="text" name="mother_name" class="form-control col-sm-12" /></td>
                </tr>
                <tr>
                        <td>Occupation:</td>
                        <td><input type="text" name="mother_occupation" class="form-control col-sm-12" /></td>
                </tr>
                <tr>
                        <td>Guardian's Name:</td>
                        <td><input type="text" name="guardian_name"  class="form-control col-sm-12"/></td>
                </tr>
                <tr>
                        <td>Annual Family Income:</td>
                        <td><select name="annual_gross" class="form-control">
                    <option></option>
                    <option>Less Than 90,000</option>
                    <option>100,000+</option>
                    <option>300,000+</option>
                    <option>500,000+</option>
                    <option>600,000+</option>

                    </select></td>
                </tr>
                <tr>
                        <td>Are you a person with disability?</td>
                        <td><input type="radio" name="stud_with_disability" value=
                           >Yes</input>&nbsp;&nbsp;&nbsp;<input type="radio" name="stud_with_disability">No</input></td>
                </tr>
                <tr>
                        <th colspan="2"><center><h4>Course and Campus:</h4></center></th>
                </tr>
                <tr>
                        <td>Seeking Admission As:</td>
                        <td><select name="yearlvl" class=" form-control" id=opt_med>
                      <option></option>
                    <option>Freshman</option>
                    <option>Transferee</option>
                                        
              </select></td>
                </tr>
                  <tr>
                        <td>Preferred Course:</td>
                        <td><select name="courses" class="form-control" id="course"> 
              
              
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
                        <td>Preferred Campus Site:</td>
                        <td><select name="campus" class=" form-control" id=opt_med>
              <option></option>
              <option>Manila</option>
              <option>Malolos</option>
              
              </select></td>
                </tr>
                
                <tr>
                        <th colspan="2"><center><h4>Contact Information:</h4></center></th>
                </tr>
                
                  <tr>
                        <td>Present Address:</td>
                        <td><input type="text" class="form-control" name="address" /></td>
                </tr>
                 <tr>
                        <td>ZIP Code</td>
                        <td><input type="number" class="form-control" name="zipcode" /></td>
                </tr>
                 <tr>
                        <td>Contact Number:</td>
                        <td><input type="number" class="form-control" name="contact_num" /></td>
                </tr>
                 <tr>
                        <td>Email Address:</td>
                        <td><input type="email" class="form-control" name="email_address" /></td>
                </tr>
                
                 <tr>
                        <th colspan="2"><center><h4>Previous School</h4></center></th>
                </tr>
                 <tr>
                        <td>Are you currently enrolled?</td>
                        <td><select name="enroll_stat" class="form-control">
            <option></option>
            <option>Yes</option>
            <option>No</option>
            
            </select></td>
                </tr>
                <tr>
                        <td>Name of School:</td>
                        <td><input type="text" name="current_school" class="form-control" /></td>
                </tr>
                <tr>
                        <td>School Address:</td>
                        <td><input type="text" name="school_address" class="form-control"/></td>
                </tr>
                <tr>
                        <td>School Type:</td>
                        <td><select name="school_type" class="form-control">
                <option></option>
                <option>Public</option>
                <option>Semi Private</option>
                <option>Private</option>

                </select></td>
                </tr>
                  <tr>
                        <th colspan="2"><center><h4>Create Student Account</h4></center></th>
                </tr>
                <tr>
                        <td>Username:</td>
                        <td> <input type="text" name="username" class="form-control" maxlength="16" /></td>
                </tr>
                 <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" class="form-control" id="pwd_box"/></td>
                </tr>
                 <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="confirm_pwd"  class="form-control" id="pwd_box2"/></td>
                </tr>  
     <tr>
                <td colspan=2><center>
                    <p><em>"I hereby certify that the above information is true and correct in true best of my knowledge and belief."</em></p><input type="submit" name="submit_form" value="Submit" class="btn btn-md btn-primary" style="width:200px;" /></center></td>
             
             

        </tr>
                
            
            
            </table>
        </form>

        </div>

<!--end form 1--->

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


    <table class="table" style="border:3px solid black;margin-left:120px;margin-top:40px;width:1100px;">
        
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