<?php 
//CS First Year 
$sql1 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'First Semester' and yearlvl = 'First Year' and sets='A'  ";
$rescs101 =  mysqli_query($connect,$sql1);

$sql2 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'Second Semester' and yearlvl = 'First Year'  ";
$rescs102 =  mysqli_query($connect,$sql2);
//CS Second  Year 
$sql3 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'First Semester' and yearlvl = 'Second Year' and sets='A' ";
$rescs201 =  mysqli_query($connect,$sql3);

$sql4 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'Second Semester' and yearlvl = 'Second Year'  ";
$rescs202 =  mysqli_query($connect,$sql4);
//CS Third Year 
$sql5 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'First Semester' and yearlvl = 'Third Year' and sets='A' ";
$rescs301 =  mysqli_query($connect,$sql5);

$sql6 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'Second Semester' and yearlvl = 'Third Year'  ";
$rescs302 =  mysqli_query($connect,$sql6);
//CS Fourth Year 
$sql7 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'First Semester' and yearlvl = 'Fourth Year' and sets='A'  ";
$rescs401 =  mysqli_query($connect,$sql7);

$sql8 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Computer Science' and sem = 'Second Semester' and yearlvl = 'Fourth Year'  ";
$rescs402 =  mysqli_query($connect,$sql8);

//Accountancy

$sql9 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'First Semester' and yearlvl = 'First Year' and sets='A' ";
$resbsa101 =  mysqli_query($connect,$sql9);

$sql10 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'Second Semester' and yearlvl = 'First Year' sets='A' ";
$resbsa102 =  mysqli_query($connect,$sql10);
//CS Second  Year 
$sql11 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'First Semester' and yearlvl = 'Second Year' sets='A' ";
$resbsa201 =  mysqli_query($connect,$sql11);

$sql12 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'Second Semester' and yearlvl = 'Second Year' sets='A' ";
$resbsa202 =  mysqli_query($connect,$sql12);
//CS Third Year 
$sql13 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'First Semester' and yearlvl = 'Third Year' sets='A' ";
$resbsa301 =  mysqli_query($connect,$sql13);

$sql14 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'Second Semester' and yearlvl = 'Third Year' sets='A'  ";
$resbsa302 =  mysqli_query($connect,$sql14);
//CS Fourth Year 
$sql15 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'First Semester' and yearlvl = 'Fourth Year' sets='A' ";
$resbsa401 =  mysqli_query($connect,$sql15);

$sql16 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Accountancy' and sem = 'Second Semester' and yearlvl = 'Fourth Year'  sets='A' ";
$resbsa402 =  mysqli_query($connect,$sql16);

///BSBA
$sql17 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'First Semester' and yearlvl = 'First Year' and sets='A' ";
$resbsba101 =  mysqli_query($connect,$sql17);

$sql18 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'Second Semester' and yearlvl = 'First Year' sets='A' ";
$resbsba102 =  mysqli_query($connect,$sql18);
//CS Second  Year 
$sql19 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'First Semester' and yearlvl = 'Second Year' sets='A' ";
$resbsba201 =  mysqli_query($connect,$sql19);

$sql20 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'Second Semester' and yearlvl = 'Second Year' sets='A' ";
$resbsba202 =  mysqli_query($connect,$sql20);
//CS Third Year 
$sql21 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'First Semester' and yearlvl = 'Third Year' sets='A' ";
$resbsba301 =  mysqli_query($connect,$sql21);

$sql22 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'Second Semester' and yearlvl = 'Third Year' sets='A'  ";
$resbsba302 =  mysqli_query($connect,$sql22);
//CS Fourth Year 
$sql23 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'First Semester' and yearlvl = 'Fourth Year' sets='A' ";
$resbsba401 =  mysqli_query($connect,$sql23);

$sql24 = "SELECT * FROM curricculum WHERE course = 'Bachelor of Science in Business Administration' and sem = 'Second Semester' and yearlvl = 'Fourth Year'  sets='A' ";
$resbsba402 =  mysqli_query($connect,$sql24);

?>


<!---- displaying students query ----->

<?php
            $sqlview = "SELECT * FROM students ORDER BY student_lastname ASC";
            $view = mysqli_query($connect,$sqlview) or die(mysql_error()."Error displaying data");
            
             $std_summer= "SELECT * FROM students WHERE summer LIKE '%Enrolled%' ";
            $show_summer = mysqli_query($connect,$std_summer) or die(mysql_error()."Error displaying data");

            $scho= "SELECT * FROM students WHERE std_lvl LIKE '%Scholar%' ";
            $show_scho = mysqli_query($connect,$scho) or die(mysql_error()."Error displaying data");

            $nonscho= "SELECT * FROM students WHERE std_lvl LIKE '%Non%' ";
            $show_nonscho = mysqli_query($connect,$nonscho) or die(mysql_error()."Error displaying data");
            
            $std_frs = "SELECT * FROM students WHERE year LIKE '%First Year%' ";
            $show_frs = mysqli_query($connect,$std_frs) or die(mysql_error()."Error displaying data");

            $std_sop = "SELECT * FROM students WHERE year LIKE '%Second Year%' ";
            $show_sop = mysqli_query($connect,$std_sop) or die(mysql_error()."Error displaying data");
        
            $std_jun = "SELECT * FROM students WHERE year LIKE '%Third Year%' ";
            $show_jun = mysqli_query($connect,$std_jun) or die(mysql_error()."Error displaying data");

            $std_sen = "SELECT * FROM students WHERE year LIKE '%Fourth Year%' ";
            $show_sen = mysqli_query($connect,$std_sen) or die(mysql_error()."Error displaying data");

            $std_male = "SELECT * FROM students WHERE gender = 'Male' ";
            $show_male = mysqli_query($connect,$std_male) or die(mysql_error()."Error displaying data");

            $std_fem = "SELECT * FROM students WHERE gender = 'Female' ";
            $show_fem = mysqli_query($connect,$std_fem) or die(mysql_error()."Error displaying data");

            
            $std_ce = "SELECT * FROM students WHERE course LIKE '%Civil Engineering%' ";
            $show_ce = mysqli_query($connect,$std_ce) or die(mysql_error()."Error displaying data");    

            $std_cs = "SELECT * FROM students WHERE course LIKE '%Computer Science%' ";
            $show_cs = mysqli_query($connect,$std_cs) or die(mysql_error()."Error displaying data");

            $std_crim = "SELECT * FROM students WHERE course LIKE '%Criminology%' ";
            $show_crim = mysqli_query($connect,$std_crim) or die(mysql_error()."Error displaying data");
            
            $std_hrm = "SELECT * FROM students WHERE course LIKE '%Hotel and Restaurant%' ";
            $show_hrm = mysqli_query($connect,$std_hrm) or die(mysql_error()."Error displaying data");
            
            $std_ba = "SELECT * FROM students WHERE course LIKE '%Business Administration%' ";
            $show_ba = mysqli_query($connect,$std_ba) or die(mysql_error()."Error displaying data");

            $std_bs = "SELECT * FROM students WHERE course LIKE '%Secondary%' ";
            $show_bs = mysqli_query($connect,$std_bs) or die(mysql_error()."Error displaying data");

            $std_be = "SELECT * FROM students WHERE course LIKE '%Elementary%' ";
            $show_be = mysqli_query($connect,$std_be) or die(mysql_error()."Error displaying data");

            $std_bsa = "SELECT * FROM students WHERE course LIKE '%Accountancy%' ";
            $show_bsa = mysqli_query($connect,$std_bsa) or die(mysql_error()."Error displaying data");

            $std_fs = "SELECT * FROM students WHERE course LIKE '%Foreign Service%' ";
            $show_fs = mysqli_query($connect,$std_fs) or die(mysql_error()."Error displaying data");

              $std_jp = "SELECT * FROM students WHERE course LIKE '%Japanology%' ";
            $show_jp = mysqli_query($connect,$std_jp) or die(mysql_error()."Error displaying data");
        ?>
<?php
/* queries */


$total = mysqli_query($connect,"SELECT COUNT(*) FROM students");
$summer = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE summer LIKE'%Enrolled%' ");
$scho = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE std_lvl LIKE '%Scholar%' ");
$nonscho= mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE std_lvl LIKE '%Non%' ");
$frs = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE year LIKE '%First Year%' ");
$sop = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE year LIKE '%Second Year%' ");
$jun = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE year LIKE '%Third Year%' ");
$sen = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE year LIKE '%Fourth Year%' ");
$male_count = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE gender = 'Male'");
$fem_count = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE gender = 'Female'");
$male_count = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE gender = 'Male'");
$count_ce = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Civil Engineering%' ");
$count_cs = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Computer Science%' ");
$count_crim = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Criminology%' ");
$count_hrm = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Hotel and Restaurant Management%' ");
$count_ba = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Business Administration%' ");
$count_bs = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Secondary%' ");
$count_be = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Elementary%' ");
$count_bsa = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Accountancy%' ");
$count_fs = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Foreign Service%' ");
$count_jp= mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE course LIKE '%Japanology%' ");





?>


<!--- end of view students----->