<?php error_reporting(1); ?>
<?php include'connect.php'; ?>
<?php session_start();  ?>

<?php 
     if(isset($_SESSION['member_id'])){
         
    }
    else{
         header('location:restricted.php');
    }
    ?>

<?php
                        $find_member = "SELECT * FROM faculty where member_id = '".$_SESSION['member_id']."'";
                        $faculty_records = mysqli_query($connect,$find_member);

                        $find_member_u = "SELECT member_uname FROM faculty where member_id = '".$_SESSION['member_id']."'";
                        $faculty_member = mysqli_query($connect,$find_member_u);

                        ?>
<!DOCTYPE html>

<html>
   <?php include'headers.php'; ?>
 
<body id="facultyPage">
   <?php include'mainnavs.php'; ?>
    <div id="wrapper">
       
  <div class="container faculty_profile">
      
                        <?php
         
           while($faculty_rec=mysqli_fetch_assoc($faculty_records)){
              //echo "";
               ?>
      <br><img src="css/images/profilelogo.png"></img>
        <?php
            echo "<h1>Welcome! ".$faculty_rec['member_fname']." ".$faculty_rec['member_lname']."</h1>";
               echo "<h4>Your ID number is ".$faculty_rec['member_id']."</h4>";
                echo "<h4>Email: ".$faculty_rec['member_email']."</h4>";
               
           }
                        
                        ?>
                        <p> </p>
    
 </div>
                
 </div>
    
  
</body>


</html>

