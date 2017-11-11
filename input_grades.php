
<?php
include 'connect.php';
session_start();
if(isset($_SESSION['member_id'])){
    
}
else{
  header("location:restricted.php");
}

?>


<?php 



$sql4 = "SELECT coursename FROM courses";
$course_Q = mysqli_query($connect,$sql4);

$faculty_mem = "SELECT * FROM faculty  WHERE member_id  = '".$_SESSION['member_id']."' ";
$faculty_fullname = mysqli_query($connect,$faculty_mem);

$sql6 = "SELECT student_lastname,student_firstname,student_middlename FROM students ORDER BY student_lastname ASC ";
$std_fullname = mysqli_query($connect,$sql6);

?>


<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
   
<body class="blues">
    <?php include'mainnavs.php'; ?>
    
   <div class="container">
       
       
       
    
    
    </div>
    
    <div class="container">
        
        <table border="5px" width="1400px" cellpadding="2px" cellspacing="3px"; class="table table-hover">
       <form method="GET" class="form" action="insert_grades.php">
           <h2>Input Grades from:</h2><br><br>
         
        <label for="sY">Academic Year:</label><br>
           <select name="sySrch" class="form-control selectpicker">
            <option></option>
           <?php
            
               $currYear = date('Y');
                $past = $currYear - 1;
               $future = $currYear + 1;
               
               echo"<option>".$past."-".$currYear."</option>";
               echo"<option>".$currYear."-".$future."</option>";
               
               
               
               ?>
           
           
           
           
           </select>
       
           <label>Semester:</label>

           <select name="semSrch" class="form-control selectpicker">
               <option></option>
                <option>First Semester</option>
                <option>Second Semester</option>
            </select>
                      <label>Course:</label>

            <select name="courseSrch" class="form-control selectpicker" required >
                <option></option>
                <?php
                    while($bs = mysqli_fetch_array($course_Q)){
                        
                        echo"<option>".$bs['coursename']."</option>";
                        
                    }
                
                
                ?>
                
            
            </select>&nbsp;&nbsp;&nbsp;
           <label>Year Level</label>
            <select name="yearlvlSrch" class="form-control selectpicker" required>
                <option></option>
                <?php
                    $years = ["First Year","Second Year","Third Year","Fourth Year","Fifth Year"];
                        foreach($years as $year){
                            echo"<option>$year</option>";
                        }
                ?>
                
            </select>&nbsp;&nbsp;&nbsp;
            
            <label>Set:</label>
           
            <select name="setsSrch" class="form-control selectpicker" required>
                
                <option></option>
                <?php 
                    $sets = ["A","B","C","D","E","F","G"];
                    foreach($sets as $set){
                        
                        echo"<option>$set</option>";
                        
                    }
                ?>
                    
            </select><br><br>
            <input type=submit name="search" value="SEARCH" class="btn btn-sm btn-primary"></input>
            
         </form>      
 
       
       
     
       
           
         
              <br><br>
 
    <!---start --->
    
    
   
    <!--end ----->

                
       
            
            
         </table>
       
    </div>
    
    
    
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("input:text").addClass("form-control");
           
            }); 
        
       
    </script>
</body>


</html>

<?php 
    function convert_date($date){
        $convert = date("F j, Y",strtotime($date));
        return $convert;
    }
    function convert_time($time){
        $convert = date("g:i a",strtotime($time));
        return $convert;
    }
?>