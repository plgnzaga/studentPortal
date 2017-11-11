
<?php include 'connect.php'; ?>
<?php session_start(); ?>


<?php 
     if(isset($_SESSION['user_admin'])){
         
    }
    else{
         header('location:restricted.php');
    }
    ?>

<?php
    if(isset($_POST['add_curr'])){
         $sem = mysql_real_escape_string($_POST['sem']);
        $sy = mysql_real_escape_string($_POST['sy']);
        $course = mysql_real_escape_string($_POST['course']);
        $yearlvl = mysql_real_escape_string($_POST['yearlvl']);
        $sets = mysql_real_escape_string($_POST['sets']);
        $code1 = mysql_real_escape_string($_POST['code1']);
        $code2 = mysql_real_escape_string($_POST['code2']);
        $code3 = mysql_real_escape_string($_POST['code3']);
        $code4 = mysql_real_escape_string($_POST['code4']);
        $code5 = mysql_real_escape_string($_POST['code5']); 
        $code6 = mysql_real_escape_string($_POST['code6']); 
        $code7 = mysql_real_escape_string($_POST['code7']);
        $code8 = mysql_real_escape_string($_POST['code8']);
        $code9 = mysql_real_escape_string($_POST['code9']);
        $code10 = mysql_real_escape_string($_POST['code10']);
        $code11 = mysql_real_escape_string($_POST['code11']);
        $code12 = mysql_real_escape_string($_POST['code12']);
        $sub1 = mysql_real_escape_string($_POST['sub1']);
        $sub2 = mysql_real_escape_string($_POST['sub2']);
        $sub3 = mysql_real_escape_string($_POST['sub3']);
        $sub4 = mysql_real_escape_string($_POST['sub4']);
        $sub5 = mysql_real_escape_string($_POST['sub5']);
        $sub6 = mysql_real_escape_string($_POST['sub6']);
        $sub7 = mysql_real_escape_string($_POST['sub7']); 
        $sub8 = mysql_real_escape_string($_POST['sub8']);
        $sub9 = mysql_real_escape_string($_POST['sub9']);
        $sub10 = mysql_real_escape_string($_POST['sub10']);
         $sub11 = mysql_real_escape_string($_POST['sub11']);
         $sub12 = mysql_real_escape_string($_POST['sub12']);
        $prof1 = mysql_real_escape_string($_POST['prof1']);
        $prof2 = mysql_real_escape_string($_POST['prof2']); 
        $prof3 = mysql_real_escape_string($_POST['prof3']);
        $prof4 = mysql_real_escape_string($_POST['prof4']);
        $prof5 = mysql_real_escape_string($_POST['prof5']);
        $prof6 = mysql_real_escape_string($_POST['prof6']);
        $prof7 = mysql_real_escape_string($_POST['prof7']);
        $prof8 = mysql_real_escape_string($_POST['prof8']); 
        $prof9 = mysql_real_escape_string($_POST['prof9']);
        $prof10 = mysql_real_escape_string($_POST['prof10']);
        $prof11 = mysql_real_escape_string($_POST['prof11']); 
        $prof12 = mysql_real_escape_string($_POST['prof12']); 
        $day1 = mysql_real_escape_string($_POST['day1']);
        $day2 = mysql_real_escape_string($_POST['day2']);
        $day3 = mysql_real_escape_string($_POST['day3']);
        $day4 = mysql_real_escape_string($_POST['day4']);
        $day5 = mysql_real_escape_string($_POST['day5']);
        $day6 = mysql_real_escape_string($_POST['day6']);
        $day7 = mysql_real_escape_string($_POST['day7']);
        $day8 = mysql_real_escape_string($_POST['day8']); 
        $day9 = mysql_real_escape_string($_POST['day9']);
        $day10 = mysql_real_escape_string($_POST['day10']); 
        $day11 = mysql_real_escape_string($_POST['day11']); 
        $day12 = mysql_real_escape_string($_POST['day12']); 
        $timein1 = mysql_real_escape_string($_POST['timein1']); 
        $timein2 = mysql_real_escape_string($_POST['timein2']); 
        $timein3 = mysql_real_escape_string($_POST['timein3']); 
        $timein4 = mysql_real_escape_string($_POST['timein4']);
        $timein5 = mysql_real_escape_string($_POST['timein5']); 
        $timein6 = mysql_real_escape_string($_POST['timein6']); 
        $timein7 = mysql_real_escape_string($_POST['timein7']);  
        $timein8 = mysql_real_escape_string($_POST['timein8']); 
        $timein9 = mysql_real_escape_string($_POST['timein9']);
        $timein10 = mysql_real_escape_string($_POST['timein10']);
          $timein11 = mysql_real_escape_string($_POST['timein11']);
          $timein12 = mysql_real_escape_string($_POST['timein12']);
        $timeout1 = mysql_real_escape_string($_POST['timeout1']); 
        $timeout2 = mysql_real_escape_string($_POST['timeout2']); 
        $timeout3 = mysql_real_escape_string($_POST['timeout3']); 
        $timeout4 = mysql_real_escape_string($_POST['timeout4']);
        $timeout5 = mysql_real_escape_string($_POST['timeout5']); 
        $timeout6 = mysql_real_escape_string($_POST['timeout6']); 
        $timeout7 = mysql_real_escape_string($_POST['timeout7']);  
        $timeout8 = mysql_real_escape_string($_POST['timeout8']); 
        $timeout9 = mysql_real_escape_string($_POST['timeout9']);
        $timeout10 = mysql_real_escape_string($_POST['timeout10']); 
        $timeout11 = mysql_real_escape_string($_POST['timeout11']); 
        $timeout12 = mysql_real_escape_string($_POST['timeout12']); 
        $units1 = mysql_real_escape_string($_POST['units1']);  
        $units2 = mysql_real_escape_string($_POST['units2']); 
        $units3 = mysql_real_escape_string($_POST['units3']);
        $units4 = mysql_real_escape_string($_POST['units4']);
        $units5 = mysql_real_escape_string($_POST['units5']);
        $units6 = mysql_real_escape_string($_POST['units6']);
        $units7 = mysql_real_escape_string($_POST['units7']);
        $units8 = mysql_real_escape_string($_POST['units8']);
        $units9 = mysql_real_escape_string($_POST['units9']);
        $units10 = mysql_real_escape_string($_POST['units10']);
         $units11 = mysql_real_escape_string($_POST['units11']);
         $units12 = mysql_real_escape_string($_POST['units12']);
       
        /*Success BES!!!!*/
        if(userExists($_POST['course'])===true){
            echo "It look's like the course, ".$course." existed";
        }
        else if(userExists($_POST['course'])===false){
           
           $register = "INSERT into curricculum(sem,sy,course,yearlvl,sets,
            code1,code2,code3,code4,code5,code6,code7,code8,code9,code10,code11,code12,
            sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,sub10,sub11,sub12,
            prof1,prof2,prof3,prof4,prof5,prof6,prof7,prof8,prof9,prof10,prof11,prof12,
            day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12,
            timein1,timein2,timein3,timein4,timein5,timein6,timein7,timein8,timein9,timein10,timein11,timein12,
            timeout1,timeout2,timeout3,timeout4,timeout5,timeout6,timeout7,timeout8,timeout9,timeout10,timeout11,timeout12,
            units1,units2,units3,units4,units5,units6,units7,units8,units9,units10,units11,units12)
         VALUES('$sem','$sy','$course','$yearlvl','$sets',
         '$code1','$code2','$code3','$code4','$code5','$code6','$code7','$code8','$code9','$code10','$code11','$code12',
         
            '$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9','$sub10','$sub11','$sub12',
            '$prof1','$prof2','$prof3','$prof4','$prof5','$prof6','$prof7','$prof8','$prof9','$prof10','$prof11','$prof12',
            '$day1','$day2','$day3','$day4','$day5','$day6','$day7','$day8','$day9','$day10','$day11','$day12',
            '$timein1','$timein2','$timein3','$timein4','$timein5','$timein6','$timein7','$timein8','$timein9','$timein10','$timein11','$timein12',
            '$timeout1','$timeout2','$timeout3','$timeout4','$timeout5','$timeout6','$timeout7','$timeout8','$timeout9','$timeout10','$timeout11','$timeout12',
            '$units1','$units2','$units3','$units4','$units5','$units6','$units7','$units8','$units9','$units10','$units11','$units12')";
            //run query
            $insert = mysql_query($register) or die(mysql_error()."Error inserting data");
           
            echo "Successfully Inserted to the database.";
            header("location:redirect_upload_curr.php");
             }
            
        }
        
        
       
        
       // }
    

        ?>


<?php  
if(isset($_POST['update_curr'])){
    $curricculumyear = mysql_real_escape_string($_POST['curricculumyear']);
    $sem = mysql_real_escape_string($_POST['sem']);
        $sy = mysql_real_escape_string($_POST['sy']);
        $course = mysql_real_escape_string($_POST['course']);
        $yearlvl = mysql_real_escape_string($_POST['yearlvl']);
        $sets = mysql_real_escape_string($_POST['sets']);
        $code1 = mysql_real_escape_string($_POST['code1']);
        $code2 = mysql_real_escape_string($_POST['code2']);
        $code3 = mysql_real_escape_string($_POST['code3']);
        $code4 = mysql_real_escape_string($_POST['code4']);
        $code5 = mysql_real_escape_string($_POST['code5']); 
        $code6 = mysql_real_escape_string($_POST['code6']); 
        $code7 = mysql_real_escape_string($_POST['code7']);
        $code8 = mysql_real_escape_string($_POST['code8']);
        $code9 = mysql_real_escape_string($_POST['code9']);
        $code10 = mysql_real_escape_string($_POST['code10']);
        $code11 = mysql_real_escape_string($_POST['code11']);
        $code12 = mysql_real_escape_string($_POST['code12']);
        $sub1 = mysql_real_escape_string($_POST['sub1']);
        $sub2 = mysql_real_escape_string($_POST['sub2']);
        $sub3 = mysql_real_escape_string($_POST['sub3']);
        $sub4 = mysql_real_escape_string($_POST['sub4']);
        $sub5 = mysql_real_escape_string($_POST['sub5']);
        $sub6 = mysql_real_escape_string($_POST['sub6']);
        $sub7 = mysql_real_escape_string($_POST['sub7']); 
        $sub8 = mysql_real_escape_string($_POST['sub8']);
        $sub9 = mysql_real_escape_string($_POST['sub9']);
        $sub10 = mysql_real_escape_string($_POST['sub10']);
         $sub11 = mysql_real_escape_string($_POST['sub11']);
         $sub12 = mysql_real_escape_string($_POST['sub12']);
        $prof1 = mysql_real_escape_string($_POST['prof1']);
        $prof2 = mysql_real_escape_string($_POST['prof2']); 
        $prof3 = mysql_real_escape_string($_POST['prof3']);
        $prof4 = mysql_real_escape_string($_POST['prof4']);
        $prof5 = mysql_real_escape_string($_POST['prof5']);
        $prof6 = mysql_real_escape_string($_POST['prof6']);
        $prof7 = mysql_real_escape_string($_POST['prof7']);
        $prof8 = mysql_real_escape_string($_POST['prof8']); 
        $prof9 = mysql_real_escape_string($_POST['prof9']);
        $prof10 = mysql_real_escape_string($_POST['prof10']);
        $prof11 = mysql_real_escape_string($_POST['prof11']); 
        $prof12 = mysql_real_escape_string($_POST['prof12']); 
        $day1 = mysql_real_escape_string($_POST['day1']);
        $day2 = mysql_real_escape_string($_POST['day2']);
        $day3 = mysql_real_escape_string($_POST['day3']);
        $day4 = mysql_real_escape_string($_POST['day4']);
        $day5 = mysql_real_escape_string($_POST['day5']);
        $day6 = mysql_real_escape_string($_POST['day6']);
        $day7 = mysql_real_escape_string($_POST['day7']);
        $day8 = mysql_real_escape_string($_POST['day8']); 
        $day9 = mysql_real_escape_string($_POST['day9']);
        $day10 = mysql_real_escape_string($_POST['day10']); 
        $day11 = mysql_real_escape_string($_POST['day11']); 
        $day12 = mysql_real_escape_string($_POST['day12']); 
        $timein1 = mysql_real_escape_string($_POST['timein1']); 
        $timein2 = mysql_real_escape_string($_POST['timein2']); 
        $timein3 = mysql_real_escape_string($_POST['timein3']); 
        $timein4 = mysql_real_escape_string($_POST['timein4']);
        $timein5 = mysql_real_escape_string($_POST['timein5']); 
        $timein6 = mysql_real_escape_string($_POST['timein6']); 
        $timein7 = mysql_real_escape_string($_POST['timein7']);  
        $timein8 = mysql_real_escape_string($_POST['timein8']); 
        $timein9 = mysql_real_escape_string($_POST['timein9']);
        $timein10 = mysql_real_escape_string($_POST['timein10']);
          $timein11 = mysql_real_escape_string($_POST['timein11']);
          $timein12 = mysql_real_escape_string($_POST['timein12']);
        $timeout1 = mysql_real_escape_string($_POST['timeout1']); 
        $timeout2 = mysql_real_escape_string($_POST['timeout2']); 
        $timeout3 = mysql_real_escape_string($_POST['timeout3']); 
        $timeout4 = mysql_real_escape_string($_POST['timeout4']);
        $timeout5 = mysql_real_escape_string($_POST['timeout5']); 
        $timeout6 = mysql_real_escape_string($_POST['timeout6']); 
        $timeout7 = mysql_real_escape_string($_POST['timeout7']);  
        $timeout8 = mysql_real_escape_string($_POST['timeout8']); 
        $timeout9 = mysql_real_escape_string($_POST['timeout9']);
        $timeout10 = mysql_real_escape_string($_POST['timeout10']); 
        $timeout11 = mysql_real_escape_string($_POST['timeout11']); 
        $timeout12 = mysql_real_escape_string($_POST['timeout12']); 
        $units1 = mysql_real_escape_string($_POST['units1']);  
        $units2 = mysql_real_escape_string($_POST['units2']); 
        $units3 = mysql_real_escape_string($_POST['units3']);
        $units4 = mysql_real_escape_string($_POST['units4']);
        $units5 = mysql_real_escape_string($_POST['units5']);
        $units6 = mysql_real_escape_string($_POST['units6']);
        $units7 = mysql_real_escape_string($_POST['units7']);
        $units8 = mysql_real_escape_string($_POST['units8']);
        $units9 = mysql_real_escape_string($_POST['units9']);
        $units10 = mysql_real_escape_string($_POST['units10']);
         $units11 = mysql_real_escape_string($_POST['units11']);
         $units12 = mysql_real_escape_string($_POST['units12']);
    
    
    
     $update = "UPDATE `curricculum` SET `sem`= '$sem',`sy`= '$sy',`course` = '$course',`yearlvl` = '$yearlvl',`sets`='$sets',`code1`='$code1',`code2`='$code2',`code3`='$code3',`code4`='$code4',`code5`= '$code5',`code6`= '$code6',`code7`= '$code7',`code8`= '$code8',`code9`= '$code9',`code10`= '$code10',`code11`= '$code11',`code12`= '$code12',`sub1`= '$sub1',`sub2`= '$sub2',`sub3`= '$sub3',`sub4`= '$sub4',`sub5`= '$sub5',`sub6`= '$sub6',`sub7`= '$sub7',`sub8`= '$sub8',`sub9`= '$sub9',`sub10`= '$sub10',`sub11`= '$sub11',`sub12`= '$sub12',`prof1`= '$prof1',`prof2`= '$prof2',`prof3`= '$prof3',`prof4`= '$prof4',`prof5`= '$prof5',`prof6`= '$prof6',`prof7`= '$prof7',`prof8`= '$prof8',`prof9`= '$prof9',`prof10`= '$prof10',`prof11`= '$prof11',`prof12`= '$prof12',`day1`= '$day1',`day2`= '$day2',`day3`= '$day3',`day4`= '$day4',`day5`= '$day5',`day6`= '$day6',`day7`= '$day7',`day8`= '$day8',`day9`= '$day9',`day10`= '$day10',`day11`= '$day11',`day12`= '$day12',`timein1`= '$timein1',`timein2`= '$timein2',`timein3`= '$timein3',`timein4`= '$timein4',`timein5`= '$timein5',`timein6`= '$timein6',`timein7`= '$timein7',`timein8`= '$timein8',`timein9`= '$timein9',`timein10`= '$timein10',`timein11`= '$timein11',`timein12`= '$timein12',`timeout1`= '$timeout1',`timeout2`= '$timeout2',`timeout3`= '$timeout3',`timeout4`= '$timeout4',`timeout5`= '$timeout5',`timeout6`= '$timeout6',`timeout7`= '$timeout7',`timeout8`= '$timeout8',`timeout9`= '$timeout9',`timeout10`= '$timeout10',`timeout11`= '$timeout11',`timeout12`= 'timeout12$',`units1`= '$units1',`units2`= '$units2',`units3`= '$units3',`units4`= '$units4',`units5`= '$units5',`units6`= '$units6',`units7`= '$units7',`units8`= '$units8',`units9`= '$units9',`units10`= '$units10',`units11`= '$units11',`units12`= '$units12' WHERE `curricculumyear`= 'curricculumyear'";
            //run query
            $updates = mysql_query($update) or die(mysql_error()."Error updating data");
           
            echo "Successfully Updated to the database.";
            header("location:redirect_upload_curr.php");
}
    
?>


?>

<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
   
<body>
    <?php include'mainnavs.php'; ?>
    <div class="container">
        <form class="form-inline" method="post">
        <h2 class="form-signin-heading">Curricculum</h2>
        <label for="Semester">Semester:</label><br>
        <select name="sem" class="form-control">
            <option></option>
            <option>First Semester</option>    
            <option>Second Semester</option>    
            
        </select><br><br>
        <label for="sY">Academic Year:</label><br>
          <select name="sy" class="form-control selectpicker">
              <option></option>
           <?php 
              
            $y1 = 2012;
            $y2 = 2013;
            for($no=0;$no<=100;$no++){
                $sy1 = $y1+$no;
                $sy2 = $y2+$no;
                echo"<option>".$sy1.'-'.$sy2."</option>";
            }
           
           ?>
           </select>
            
               <input type="name" name="course" class="form-control" placeholder="Course" required autofocus>

        <input type="name" name="yearlvl" class="form-control" placeholder="Year Level" required autofocus>
            <input type="name" name="sets" class="form-control" placeholder="Set" required autofocus><br><br>
          <div class="container">
            <div class="row">
                <div class="col-xs-12">
                
                     <table cellpadding="2px" cellspacing="3px" class="table table-condensed table-curr">
            <tr>
   
    <th>Subject Code</th>
    <th>Description</th>
    <th>Professor</th>
    <th>Day</th>
    <th colspan="2">Schedule</th>
    <th>Units</th>
    
   
    </tr>
             <?php
             
             for($no=1;$no<=12;$no++){
                 echo"<tr>";
                    
             echo"<td><input type='name' name='code$no' class='form-control' placeholder ='Subject Code $no' autofocus></td>";
            echo" <td><input type='name' name='sub$no' class='form-control'  placeholder ='Subject Description $no' autofocus></td>";
                echo"<td><input type='name' name='prof$no' class='form-control'  placeholder ='Professor $no' autofocus></td>";
                echo"<td>";
                 echo"<select class='form-control select-picker' name='day$no'>";
                  echo"<option></option>";
                 echo"<option>Monday</option>";
                  echo"<option>Tuesday</option>";
                  echo"<option>Wednesday</option>";
                  echo"<option>Thursday</option>";
                  echo"<option>Friday</option>";
                  echo"<option>Saturday</option>";
                  echo"<option>Sunday</option>";
                 echo"</select>";
                 echo"</td>";
                
                echo"<td><input type='time' name='timein$no' class='form-control'  placeholder ='Time In' autofocus></td>";
                echo"<td><input type='time' name='timeout$no' class='form-control'  placeholder ='Time Out' autofocus></td>";
                echo"<td> <input type='name' name='units$no' value='0' class='form-control' placeholder ='Units' autofocus></td>";
               echo"</tr>";
             }
               
             
             ?>
            
            </table>    
                    
                
                </div> 
            
              </div>
            
            
            </div>  
            
            
      <button class="btn btn-xs btn-primary btn-block" type="submit" name="update_curr">Update</button>      
    
             
             
      </form>
    </div>
</body>


</html>

<?php 
function sanitize($data){
    return mysql_real_escape_string($data);
}
function userExists($course){
    $course = sanitize($course);
    return(mysql_result(mysql_query("SELECT COUNT(`curricculumyear`) FROM `curricculum` WHERE `course` = '$course' "),0)==1) ? true : false;
}

?>