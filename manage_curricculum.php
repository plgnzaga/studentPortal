
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
       
      
           
           $register = "INSERT IGNORE into curricculum(sem,sy,course,yearlvl,sets,
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
            
        
        
        
       
        
       // }
    

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
                        <div><a href="#"><div class="sider" id="menu-toggle"></div></a></div>
                        
                        <div class="container">
        <form class="form-inline" method="post">
        <h2 class="form-signin-heading">Curricculum</h2>
            <label for="sY">Academic Year:</label>
          
            <select name="sy" class="form-control selectpicker">
        <?php
        $currY  = date('Y');
        $nxtY = date('Y') +  1;
      echo "<option>".$currY."-".$nxtY."</option>";
      
      ?>    

            </select>  
            <br><br>
        <label for="Semester">Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <select name="sem" class="form-control">
            <option></option>
            <option>First Semester</option>    
            <option>Second Semester</option>
           
            
        </select><br><br>
        
            <label>Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select class="form-control select-picker reg_stud_c" name="course"  data-toggle="tooltip" title="Course" required>
            <option></option>
                 
                <?php  
                $courses = ["Bachelor of Science in Accountancy","Bachelor of Science in Criminology","Bachelor of Science in Civil Engineering","Bachelor of Science in Computer Science","Bachelor of Science in Business Administration","Bachelor of Science in Hotel and Restaurant Management","Bachelor of Elementary Education","Bachelor of Secondary Education","Foreign Service","Arts Bachelor"];
                        foreach($courses as $course){
                            echo"<option>$course</option>";
                        }
                
                
                ?>
            </optgroup>
            </select>&nbsp;&nbsp;&nbsp;

        <label>Year Level:&nbsp;</label>
            <select name="yearlvl" class="form-control selectpicker" required>
                <option></option>
                <?php
                    $years = ["First Year","Second Year","Third Year","Fourth Year","Fifth Year"];
                        foreach($years as $year){
                            echo"<option>$year</option>";
                        }
                ?>
                
            </select>&nbsp;&nbsp;
            <label>Set:&nbsp;</label>
            <select name="sets" class="form-control selectpicker" required >
                <option></option>
                <?php 
                    $sets = ["A","B","C","D","E","F","G"];
                    foreach($sets as $set){
                        echo"<option>$set</option>";
                    }
                ?>
                    
            </select><br><br>
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
                    
             echo"<td><input type='text' name='code$no' class='form-control' placeholder ='Subject Code $no' ></td>";
            echo" <td><input type='text' name='sub$no' class='form-control'  placeholder ='Subject Description $no' ></td>";
                echo"<td><input type='text' name='prof$no' class='form-control'  placeholder ='Professor $no' ></td>";
                echo"<td>";
                 echo"<input class='form-control' type='text' name='day$no' placeholder='Schedule'>";
                  
                 echo"</td>";
                 echo"<td>";
                    echo"<select name='timein$no' class='form-control select-picker'>";
                    echo"<option></option>";
                        for($x=7;$x<=12;$x++){
                        
                            
                            
                           if($x==12){
                               
                               echo"<option>$x:00 PM</option>";
                               echo"<option>$x:30 PM</option>";
                               
                           }
                            else{
                                
                                if($x=="7:00 AM"){
                                    
                                    echo"<option style:display='none'>7:30 AM</option>";
                                    
                                }
                                
                              
                                else{
                                    
                                    echo"<option>$x:00 AM</option>";
                                    echo"<option>$x:30 AM</option>";
                                    
                                }
                                
                                  
                            }
                        }
                          for($y=1;$y<=9;$y++){
                                        echo"<option>$y:00 PM</option>";
                                        echo"<option>$y:30 PM</option>";
                                        
                                    }
                    echo"</select>";
                 
                 echo"</td>";
                  echo"<td>";
                    echo"<select name='timeout$no' class='form-control select-picker'>";
                    echo"<option></option>";
                        for($x=7;$x<=12;$x++){
                        
                            
                           if($x==12){
                               
                               echo"<option>$x:00 PM</option>";
                                echo"<option>$x:30 PM</option>";
                           }
                            else{
                                
                                echo"<option>$x:00 AM</option>";
                                echo"<option>$x:30 AM</option>";
                                  
                            }
                        }
                          for($y=1;$y<=9;$y++){
                                        echo"<option>$y:00 PM</option>";
                                        echo"<option>$y:30 PM</option>";
                                        
                                    }
                    echo"</select>";
                 
                 echo"</td>";
             
                echo"<td> <input type='number' name='units$no' class='form-control btn-sm' placeholder ='Units' ></td>";
               echo"</tr>";
             }
               
             
             ?>
            
            </table>    
                    
                
                </div> 
            
              </div>
            
            
            </div>  
            
             <button class="btn btn-xs btn-primary btn-block" type="submit" name="add_curr">Add</button>
      <button class="btn btn-xs btn-primary btn-block" type="submit" name="update_curr">Update</button>      
       
             
             
      </form>
    </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
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
function syExists($sy){
    $sy = sanitize($sy);
    return(mysql_result(mysql_query("SELECT COUNT(`curricculumyear`) FROM `curricculum` WHERE `sy` = '$sy' "),0)==1) ? true : false;
}

?>