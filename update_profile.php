<?php error_reporting(1); ?>
<?php session_start(); 

$std_id = $_SESSION['stud_id'];
if($std_id){
    
}
else{
    die("you must be logged in");
}


?>

<?php include'connect.php'; ?>
<?php 

 $find_student = "SELECT * FROM students where student_id = '".$_SESSION['stud_id']."'";
 $stud_member = mysqli_query($connect,$find_student);

?>

<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
   
<body id="this_bg">
   <?php include'mainnavs.php'; ?>  

    
    
<?php

if(isset($_SESSION['stud_id'])){
  
    echo "<img src='css/images/update_profile_logo.png' id='sm-logo'></img>";
   
    while($student_info=mysqli_fetch_assoc($stud_member)){
            echo "<form method=post action=update_student_profile.php>";
            echo "<div class='container' id='info_update'>";
            echo "<hr>";
            echo "<h4>Personal Informations</h4><br>";
            echo "<label>Lastname</label><input type='text' name='student_lastname' value='".$student_info['student_lastname']."' class='form-control update_info' id='mediumA'></input><br>";
            echo "<label>Firstname</label><input type='text' name='student_firstname' value='".$student_info['student_firstname']."' class='form-control update_info' id='mediumA'></input><br>";
            
            echo "<label>Middlename</label><input type='text' name='student_middlename' value='".$student_info['student_middlename']."' class='form-control update_info' id='mediumA'></input><br>";
            echo "<label>Your ID number is:</label><input type='number' name='student_id' value='".$student_info['student_id']."'class='form-control update_info' id='mediumA' readonly> </input><br>";
            echo "<label>Email:</label><input type='email' name='student_email' value='".$student_info['student_email']."' class='form-control update_info' id='mediumA'></input><br><br>";
             echo '</div>';
            
           echo"<div class='container form-inline' id='bod_format'>"; ?>
        <label>Date of Birth: dd/mm/yyyy</label><br>
                <select name='bd' class='form-control selectpicker'  >
                    <option><?php echo"".$student_info['bday'].""; ?></option> <?php
                for($day=1;$day<=31;$day++){
                    echo"<option>$day</option>";
                    
                } ?>
    </select><?php
        
            ?>
            <select name="bm" class="form-control select-picker st-brgy-city-dates" id="">
                 <option><?php echo"".$student_info['bmonth'].""; ?></option>
                <?php
                    $months = ["January","February","March","April","May","June","July","August",
                              "September","October","November","December"];
                        foreach($months as $month){
                            echo"<option>$month</option>";
                        }
                ?>
            
            
            
            </select>
           
            
            <select name="by" class="form-control select-picker st-brgy-city-dates" >
                <option><?php echo"".$student_info['byear'].""; ?></option>
                <?php for($no=1960;$no<=2060;$no++){
                    echo"<option>$no</option>";
                } ?>
            </select>
    
    
    
            <?php
        
            echo"</div>";
        
            echo"<div class='container' id='info_update2'>";
            echo"<div class='form-inline'>";
            echo "<label>Home Address: No/Street/Town/City</label><br><input type='num' class='form-control update_info' name='num'  value='".$student_info['num']."' id='homenum'></input>";
            echo "<input type='text' class='form-control update_info' name='street'  value='".$student_info['street']."'></input>";
            echo "<input type='text' class='form-control update_info' name='brgy' value='".$student_info['brgy']."'></input>";
            echo "<input type='text' class='form-control update_info' name='city'  value='".$student_info['city']."'></input><br>";
          echo"</div><br>";
            echo "<label>A Brief Summary about Yourself: </label>";
            echo "<textarea class='form-control' rows='5' name='intro' id='txtareaupdate'>".$student_info['intro']."</textarea><br><br>";
            echo "<input type='submit' value='Update Info' class='btn btn-sm btn-success' name='update_infos' ></input>";
           
           echo"</form>";
            echo"</div>";
            ;  
           }
            ?>
    <?php
    
        $findsq = "SELECT q1,q2,q3 FROM students WHERE student_id = '".$_SESSION['stud_id']."' ";
        $findsqResult =  mysqli_query($connect,$findsq);
    
    ?>
    <div class="form form-horizonal white-font container">
            <h4>Update Security Questions:</h4><br>
        
            <form method="post">
                
            <?php
                    while($row = mysqli_fetch_array($findsqResult)){ ?>
                <input type="text" name="q1" placeholder="Question 1" class="form-control" value=<?php echo'"'.$row['q1'].'"'; ?>/><br>
                <input type="text" name="a1" placeholder="Answer"  class="form-control" /><br>
                <input type="text" name="q2" placeholder="Question 2"   class="form-control" value=<?php echo'"'.$row['q2'].'"'; ?>/><br>
                <input type="text" name="a2" placeholder="Answer"   class="form-control"/><br>
                <input type="text" name="q3" placeholder="Question 3"  class="form-control" value=<?php echo'"'.$row['q3'].'"'; ?> /><br>
                <input type="text" name="a3" placeholder="Answer" class="form-control"/><br>
                        
                <?php    }
    
    
            ?>
                
               
                
                
                <input type="submit" name="create" value="Create" class="btn btn-sm btn-success"/>
                
                 <br><br><br><br>
            </form>
    
    
            </div>
   
            <div id="pwd_update" class="white-font container">
                    <hr class="line2"><br><br>

            <form method=POST action=change-pwd.php>
            
           
            <h4>Change Account Password</h4>
          <label>Enter Old Password:</label><input type="password" id="mediumA" class="form-control update_pwd" name="old_pwd" required/><br>
          <label>Enter New Password:</label><input type="password" id="mediumA" class="form-control update_pwd" name="new_pwd" required/><br><br>
           <label>Confirm New Password:</label><input type="password" id="mediumA" class="form-control update_pwd" name="confirm_new_pwd" required/><br><br>
             <input type="submit" value="Save Changes" class="btn btn-sm btn-success" name="update_pwd" id="mediumA"></input><br><br>
               <hr class="line2">

            </form>
    
            </div>
           
    
    
            <?php
   
           
    
    
    
    
    
}
else{
  header('location:restricted.php');
}
?>

<?php

    if(isset($_POST['create'])){
        $q1 = $_POST['q1'];
        $a1 = $_POST['a1'];
        $q2 = $_POST['q2'];
        $a2 = $_POST['a2'];
        $q3 = $_POST['q3'];
        $a3 = $_POST['a3'];
        
        $insert_sq = "UPDATE students SET q1 = '$q1', a1 = '$a1',q2 = '$q2', a2 = '$a2',
        q3 = '$q3', a3 = '$a3' WHERE student_id = '".$_SESSION['stud_id']."'";
        $insert_sqResult = mysqli_query($connect,$insert_sq) or die(mysqli_error()."Error inserting data");
            
    }
    
    
?>
    
    
</body>
<style>
    div{
        width: 30%;
    }
      #this_bg{
           background-image: url(css/images/profilepage.jpg);
        }
</style>

</html>
