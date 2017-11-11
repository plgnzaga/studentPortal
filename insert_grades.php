<html>
    <?php include'connect.php'; ?>
    <?php //queries
    
    session_start();
    $faculty_mem = "SELECT * FROM faculty  WHERE member_id  = '".$_SESSION['member_id']."' ";
    $faculty_fullname = mysqli_query($connect,$faculty_mem);
    
    
    ?>
    <?php 
     if(isset($_SESSION['member_id'])){
         
    }
    else if(isset($_SESSION['user_admin'])){
         header('location:restricted.php');
    }
    else if(isset($_SESSION['stud_id'])){
         header('location:restricted.php');
    }
    else {
         header('location:restricted.php');
    }
?>
    <?php
    if(isset($_POST['insertnow'])){
        
        $stud_id = $_POST['stud_id'];
        $fullname = $_POST['fullname'];
        $sem = $_POST['sem'];
        $sy = $_POST['sy'];
        $course = $_POST['course'];
        $yearlvl = $_POST['yearlvl'];
        $sets = $_POST['sets'];
        $insertedBy = $_POST['insertedBy'];
        $dateSub = $_POST['dateSub'];
        
        $code1 = $_POST['code1'];
        $code2 = $_POST['code2'];
        $code3 = $_POST['code3'];
        $code4 = $_POST['code4'];
        $code5 = $_POST['code5']; 
        $code6 = $_POST['code6']; 
        $code7 = $_POST['code7'];
        $code8 = $_POST['code8'];
        $code9 = $_POST['code9'];
        $code10 = $_POST['code10'];
         $code11 = $_POST['code11'];
         $code12 = $_POST['code12'];
        
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];
        $sub5 = $_POST['sub5'];
        $sub6 = $_POST['sub6'];
        $sub7 = $_POST['sub7']; 
        $sub8 = $_POST['sub8'];
        $sub9 = $_POST['sub9'];
        $sub10 = $_POST['sub10'];
         $sub11 = $_POST['sub11'];
        $sub12 = $_POST['sub12'];
        
        $prof1 = $_POST['prof1'];
        $prof2 = $_POST['prof2']; 
        $prof3 = $_POST['prof3'];
        $prof4 = $_POST['prof4'];
        $prof5 = $_POST['prof5'];
        $prof6 = $_POST['prof6'];
        $prof7 = $_POST['prof7'];
        $prof8 = $_POST['prof8']; 
        $prof9 = $_POST['prof9'];
        $prof10 = $_POST['prof10'];
        $prof11 = $_POST['prof11'];
        $prof12 = $_POST['prof12'];
        
        $day1 = $_POST['day1'];
        $day2 = $_POST['day2'];
        $day3 = $_POST['day3'];
        $day4 = $_POST['day4'];
        $day5 = $_POST['day5'];
        $day6 = $_POST['day6'];
        $day7 = $_POST['day7'];
        $day8 = $_POST['day8']; 
        $day9 = $_POST['day9'];
        $day10 = $_POST['day10'];
        $day11 = $_POST['day11'];
        $day12 = $_POST['day12'];
        
        $timein1 = $_POST['timein1']; 
        $timein2 = $_POST['timein2']; 
        $timein3 = $_POST['timein3']; 
        $timein4 = $_POST['timein4'];
        $timein5 = $_POST['timein5']; 
        $timein6 = $_POST['timein6']; 
        $timein7 = $_POST['timein7'];  
        $timein8 = $_POST['timein8']; 
        $timein9 = $_POST['timein9'];
        $timein10 = $_POST['timein10'];
        $timein11 = $_POST['timein11'];
        $timein12 = $_POST['timein12'];
        
         $timeout1 = $_POST['timeout1']; 
        $timeout2 = $_POST['timeout2']; 
        $timeout3 = $_POST['timeout3']; 
        $timeout4 = $_POST['timeout4'];
        $timeout5 = $_POST['timeout5']; 
        $timeout6 = $_POST['timeout6']; 
        $timeout7 = $_POST['timeout7'];  
        $timeout8 = $_POST['timeout8']; 
        $timeout9 = $_POST['timeout9'];
        $timeout10 = $_POST['timeout10'];
        $timeout11 = $_POST['timeout11'];
        $timeout12 = $_POST['timeout12'];
            
            
        $units1 = $_POST['units1'];  
        $units2 = $_POST['units2']; 
        $units3 = $_POST['units3'];
        $units4 = $_POST['units4'];
        $units5 = $_POST['units5'];
        $units6 = $_POST['units6'];
        $units7 = $_POST['units7'];
        $units8 = $_POST['units8'];
        $units9 = $_POST['units9'];
        $units10 = $_POST['units10'];
        $units11 = $_POST['units11'];
        $units12 = $_POST['units12'];
        
        $pre1 = $_POST['pre1'];
        $pre2 = $_POST['pre2'];
        $pre3 = $_POST['pre3'];
        $pre4 = $_POST['pre4'];
        $pre5 = $_POST['pre5']; 
        $pre6 = $_POST['pre6'];
        $pre7 = $_POST['pre7'];
        $pre8 = $_POST['pre8'];
        $pre9 = $_POST['pre9']; 
        $pre10 = $_POST['pre10'];
        $pre11 = $_POST['pre11']; 
        $pre12 = $_POST['pre12'];
        
        
        $mid1 = $_POST['mid1'];
        $mid2 = $_POST['mid2']; 
        $mid3 = $_POST['mid3'];
        $mid4 = $_POST['mid4'];
        $mid5 = $_POST['mid5']; 
        $mid6 = $_POST['mid6']; 
        $mid7 = $_POST['mid7']; 
        $mid8 = $_POST['mid8']; 
        $mid9 = $_POST['mid9'];
        $mid10 = $_POST['mid10'];
        $mid11 = $_POST['mid11'];
        $mid12 = $_POST['mid12'];
        
        $fin1 = $_POST['fin1']; 
        $fin2 = $_POST['fin2']; 
        $fin3 = $_POST['fin3']; 
        $fin4 = $_POST['fin4'];
        $fin5 = $_POST['fin5']; 
        $fin6 = $_POST['fin6']; 
        $fin7 = $_POST['fin7'];  
        $fin8 = $_POST['fin8']; 
        $fin9 = $_POST['fin9'];
        $fin10 = $_POST['fin10'];
        $fin11 = $_POST['fin11'];
        $fin12 = $_POST['fin12'];
        
        $stat1 = $_POST['stat1']; 
        $stat2 = $_POST['stat2']; 
        $stat3 = $_POST['stat3']; 
        $stat4 = $_POST['stat4'];
        $stat5 = $_POST['stat5']; 
        $stat6 = $_POST['stat6'];
        $stat7 = $_POST['stat7']; 
        $stat8 = $_POST['stat8']; 
        $stat9 = $_POST['stat9'];
        $stat10 = $_POST['stat10'];
        $stat11 = $_POST['stat11'];
        $stat12 = $_POST['stat12'];
        
   
          
           //upload student grade
            $register = "INSERT IGNORE into student_grades(stud_id,fullname,sem,sy,course,yearlvl,sets,insertedBy,dateSub,
            code1,code2,code3,code4,code5,code6,code7,code8,code9,code10,code11,code12,
            sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,sub10,sub11,sub12,
            prof1,prof2,prof3,prof4,prof5,prof6,prof7,prof8,prof9,prof10,prof11,prof12,
            day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12,
            timein1,timein2,timein3,timein4,timein5,timein6,timein7,timein8,timein9,timein10,timein11,timein12,
            timeout1,timeout2,timeout3,timeout4,timeout5,timeout6,timeout7,timeout8,timeout9,timeout10,timeout11,timeout12,
            units1,units2,units3,units4,units5,units6,units7,units8,units9,units10,units11,units12,
            pre1,pre2,pre3,pre4,pre5,pre6,pre7,pre8,pre9,pre10,pre11,pre12,
            mid1,mid2,mid3,mid4,mid5,mid6,mid7,mid8,mid9,mid10,mid11,mid12,
            fin1,fin2,fin3,fin4,fin5,fin6,fin7,fin8,fin9,fin10,fin11,fin12,
            stat1,stat2,stat3,stat4,stat5,stat6,stat7,stat8,stat9,stat10,stat11,stat12)
            VALUES('$stud_id','$fullname','$sem','$sy','$course','$yearlvl','$sets','$insertedBy','$dateSub',
            '$code1','$code2','$code3','$code4','$code5','$code6','$code7','$code8','$code9','$code10','$code11','$code12',
            '$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9','$sub10','$sub11','$sub12',
            '$prof1','$prof2','$prof3','$prof4','$prof5','$prof6','$prof7','$prof8','$prof9','$prof10','$prof11','$prof12',
            '$day1','$day2','$day3','$day4','$day5','$day6','$day7','$day8','$day9','$day10','$day11','$day12',
            '$timein1','$timein2','$timein3','$timein4','$timein5','$timein6','$timein7','$timein8','$timein9','$timein10','$timein11','$timein12',
            
            '$timeout1','$timeout2','$timeout3','$timeout4','$timeout5','$timeout6','$timeout7','$timeout8','$timeout9','$timeout10','$timeout11','$timeout12',
            
            '$units1','$units2','$units3','$units4','$units5','$units6','$units7','$units8','$units9','$units10','$units11','$units12',  
            '$pre1','$pre2','$pre3','$pre4','$pre5','$pre6','$pre7','$pre8','$pre9','$pre10','$pre11','$pre12',
            '$mid1','$mid2','$mid3','$mid4','$mid5','$mid6','$mid7','$mid8','$mid9','$mid10','$mid11','$mid12',
            '$fin1','$fin2','$fin3','$fin4','$fin5','$fin6','$fin7','$fin8','$fin9','$fin10','$fin11','$fin12',
            '$stat1','$stat2','$stat3','$stat4','$stat5','$stat6','$stat7','$stat8','$stat9','$stat10','$stat11','$stat12')";
            //run query
            $insert = mysqli_query($connect,$register) or die(mysqli_error()."Error inserting data");
            
            echo "<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Successfully Inserted!</h4>";
           
       // }
    }


?>
    
    <?php   
        if(isset($_GET['search'])){
            
            $sySrch = $_GET['sySrch'];
            $semSrch = $_GET['semSrch'];
            $courseSrch = $_GET['courseSrch'];
            $yearlvlSrch = $_GET['yearlvlSrch'];
            $setsSrch = $_GET['setsSrch'];
            
            $query1 = "SELECT * FROM curricculum WHERE sy = '$sySrch' AND sem = '$semSrch' AND course = '$courseSrch' AND yearlvl = '$yearlvlSrch' AND sets = '$setsSrch'";
             $Q1 = mysqli_query($connect,$query1) or die(mysqli_error()."Not Showing");
            
             $query2 = "SELECT `student_id`,`fullname` FROM students WHERE course = '$courseSrch' AND year = '$yearlvlSrch' AND section = '$setsSrch' ";
            $Q2 = mysqli_query($connect,$query2) or die(mysqli_error()."Not Showing");
            
             $queryNames = "SELECT * FROM students WHERE course = '$courseSrch' AND year = '$yearlvlSrch' AND section = '$setsSrch' ";
            $QFnames = mysqli_query($connect,$queryNames) or die(mysqli_error()."Not Showing");
                
             $query3 = "SELECT * FROM curricculum WHERE sy = '$sySrch' AND sem = '$semSrch' AND course = '$courseSrch' AND yearlvl = '$yearlvlSrch' AND sets = '$setsSrch'";
             $Q3 = mysqli_query($connect,$query3) or die(mysqli_error()."Not Showing");
            
            }
       
       ?>
    
<?php include'headers.php'; ?>
    <body class="blues">
    <?php include'mainnavs.php';?>
    <style>
        
        .smone{
            width: 80px;
            text-align: center;
        }   
        th,td{
          margin: 2px;
            font-size: 15px;
        }
        .tbl{
            margin: 20px;
        }
        body{
            height: 70px;
        }
        
    .longtxtbox2{
    width:370px;
        border:none;
        background-color: transparent;
        border-bottom: 1px solid black;
        outline: none;
        }
        .longtxt2a{
            width:243px;
             border:none;
        background-color: transparent;
        border-bottom: 1px solid black;
        outline: none;
        }
        
       
       
    </style>
    <div class="tbl">
    
        <form method="post"  role="form" class="form form-inline">
           
            <hr>
      
        
            <?php
             
           while($searchQ=mysqli_fetch_array($Q1)){
                ?> 
   <table border="5px" width="1400px" cellpadding="2px" cellspacing="1px" class="table table-hover">
       <tr>
       <th colspan="11"><?php while($searchQ3=mysqli_fetch_array($Q3)){ 
              echo"<h4>Showing datas from: 
Academic Year ".$searchQ3['sy']." ".$searchQ3['sem']." ".$searchQ3['course']." ".$searchQ3['yearlvl']." Set ".$searchQ3['sets']."</h4>";
              echo"<div class='container form-inline' id='hideMeNow'>";
    echo"<input type='text' class=' ' id=''  name='sy' value='".$searchQ3['sy']."' hidden />";
    echo"<input type='text' class=' ' id='' name='sem' value='".$searchQ3['sem']."' hidden />";
    echo"<input type='text' class='' id='' name='course' value='".$searchQ3['course']."' hidden />";
    echo"<input type='text' class=' ' id='' name='yearlvl' value='".$searchQ3['yearlvl']."' hidden />";
    echo"<input type='text' class=' ' id='' name='sets' value='".$searchQ3['sets']."' hidden />";
                
               echo"</div>";
                
                 } ?></th>
       
       </tr>
      <tr>
       
       <th colspan="2">Student Name: 
           <input list="std_fnames" class="longtxtbox2" name="fullname" type="text"  required>
                <datalist id="std_fnames">
                <?php
                    while($fnames=mysqli_fetch_array($QFnames)){ ?>
                         
                             <option><?php echo $fnames['fullname'];?></option>
                       
                        
                    <?php }?>
                
                 </datalist>
            </input></th>
          <th colspan="2">Student ID: <input list="std_ID" name="stud_id" type="text" class="longtxt2a" required>
                <datalist id="std_ID">
                <?php
                    while($IDs=mysqli_fetch_array($Q2)){ ?>
                         
                             <option><?php echo $IDs['student_id'];?></option>
                       
                        
                    <?php }?>
                
                 </datalist>
            </input></th>
          <th colspan="5">Inserted By: <?php
                            while($fac_full_n = mysqli_fetch_array($faculty_fullname)){ 
                                               
                                            
                                
                                        ?>
                                    <input type="text" name="insertedBy" class="longtxtbox2" value="<?php echo $fac_full_n['member_fname']." ".$fac_full_n['member_lname'] ?>" readonly/>
        
                            <?php
                            
                            }
                            
                            ?></th>
        <th colspan="2" >
        
                <input type="text" name="dateSub" value="<?php echo date("Y-m-d");?>" readonly />
        
        </th>
       </tr>
       
       <tr class="active">
           
       
            <th>Subject Code</th>
    <th>Description</th>
    <th>Professor</th>
       <th>Units</th>
    <th>Prelim</th>
    <th>Midterm</th>
    <th>Finals</th>
       
    <th>Remarks</th>
        <th>Day</th>
    <th colspan="2">Class Schedule</th>
    
  </tr>
            
         <?php
                for($num=1;$num<=12;$num++){
                    ?>
           
                    <?php
  echo"<tr>";                                                                                                                                                                               
            echo"<td>"."<input type='text' class=''  name='code$num'  value='".$searchQ['code'.$num.'']."' id='code_txtbox' readonly />"."</td>";
            echo"<td>"."<input type='text' class=''  name='sub$num' value='".$searchQ['sub'.$num.'']."' id='desc_txtbox' readonly />"."</td>";
            echo"<td>"."<input type='text' class='' name='prof$num' value='".$searchQ['prof'.$num.'']."' id='prof_txtbox' readonly />"."</td>";
                     
            echo"<td>"."<input type='text' class='smone'  name='units$num'  value='".$searchQ['units'.$num.'']."' readonly />"."</td>";
            echo"<td>"."<input type='text' class='smone'  name='pre$num' maxlength='3' placeholder='Prelim' />"."</td>";
            echo"<td>"."<input type='text' class=' smone'  name='mid$num'   maxlength='3' placeholder='Midterm' />"."</td>";
            echo"<td>"."<input type='text' class='smone'  name='fin$num'  maxlength='3' placeholder='Finals' />"."</td>";
           
                     echo"<td>"."<input list='rem' name='stat$num' type='text' placeholder='Remarks' class=''>
                <datalist id='rem'>
                <option>Passed</option>
                <option>Failed</option>
                <option>Dropped</option>
                <option>Incomplete</option>
                <option>No Final Exam</option>
                
                
</datalist>
        </input>"."</td>";
                     echo"<td>"."<input type='text' class='' name='day$num' value='".$searchQ['day'.$num.'']."' id='day_txtbox' readonly />"."</td>";
            echo"<td>"."<input type='text' class='' id='longone'  name='timein$num' value='".$searchQ['timein'.$num.'']."'   readonly/>"."</td>";
            echo"<td>"."<input type='text' class='' id='longone' name='timeout$num' value='".$searchQ['timeout'.$num.'']."'  readonly/>"."</td>";  
           
            
            
            
  echo"</tr>";
                    
                }
              
            }
               
        ?>
            
            
       
       
       
       
       
            
    </table>
    
            <input type="submit" value="Input Grades" name="insertnow" class="btn btn-sm btn-primary"/><br>
            <br>

        </form>
        
         
    </div>
    
    </body>
</html>