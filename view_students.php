<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>
<?php session_start(); ?>
<?php include'query_currs.php'; ?>
<?php 

     if(isset($_SESSION['user_admin'])){
         
    }
else if(isset($_SESSION['member_id'])){
    
}
    else{
         header('location:restricted.php');
    }
    ?>

<!---search function ----->
<?php

$outcome = "";
if(isset($_POST['search'])){
    
    $searchQ = $_POST['search'];
   
    
    $stdnames = mysqli_query($connect,"SELECT * FROM students WHERE fullname LIKE '%$searchQ%' ") or die("Could not Search");
    $count = mysqli_num_rows($stdnames);
    
    
    $count_res = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE fullname LIKE '%$searchQ%' ");
    
    if($count == 0){
        
        $outcome = '<tr><td><h4><strong>No matching results!</strong></h4></td></tr>';
        
    }
    else{
        echo mysqli_num_rows_rows($count_res,0);
        while($row = mysqli_fetch_assoc($stdnames)){
          
            $fullname = $row['fullname'];
          
            $outcome .=  '<br>
                            <th>Student Fullname</th>
                            <tr>
                            <td>'.$fullname.'</td>
                            
                            
                        </tr>';
            
        }
        
    }

}

?>

<?php

$outcome2 = "";

    if(isset($_POST['search_email'])){
        
        $searchEmail = $_POST['search_email'];
        
        $emailQ = mysqli_query($connect,"SELECT * FROM students WHERE student_email LIKE '%$searchEmail%' ") or die("Could not Search");
        $count2 = mysqli_num_rows($emailQ);
    
    
        $count_result2 = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE  student_email LIKE'%$searchEmail%' ");
        
        if($count2 == 0){
        
        $outcome2 = '<tr><td><h4><strong>No matching results!</strong></h4></td></tr>';
        
    }
    else{
        echo mysqli_num_rows($count_result2,0);
       
        while($row = mysqli_fetch_assoc($emailQ)){
          
            $email = $row['student_email'];
            $fullname= $row['fullname'];
          
          
            $outcome2 .=  '  <br>      
  <th>Student Email</th>
                                        <th>Fullname</th>
  
                            <tr>
                            <td>'.$email.'</td>
                            <td>'.$fullname.'</td>
                           
                            
                        </tr>';

        }
        
    }
           
    }

?>
<!---end search email ---->

<!---start search address--->

<?php

$outcome3 = "";

    if(isset($_POST['search_loc'])){
        
        $searchLoc = $_POST['search_loc'];
        
        $LocQ = mysqli_query($connect,"SELECT * FROM students WHERE city LIKE '%$searchLoc%' ") or die("Could not Search");
        $count3 = mysqli_num_rows($LocQ);
    
    
        $count_result3 = mysqli_query($connect,"SELECT COUNT(*) FROM students WHERE city LIKE'%$searchLoc%' ");
        
        if($count3 == 0){
        
        $outcome3 = '<tr><td><h4><strong>No matching results!</strong></h4></td></tr>';
        
    }
    else{
        echo mysqli_num_rows($count_result3,0);
        while($row = mysqli_fetch_assoc($LocQ)){
          
            $city = $row['city'];
            $fullname= $row['fullname'];
     
          
            $outcome3 .=  '  <br> <th>Student Location</th>
                                        <th>Fullname</th>
                            <tr>
                            <td>'.$city.'</td>
                            <td>'.$fullname.'</td>
                           
                            
                        </tr>';

        }
        
    }
           
    }

?>



<!---end search address--->

<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
<body class="blues">
    <style>
    
        .bg-sky{
            background-color: lightsteelblue;
        }
    
    </style>
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
                                
                                <div class="jumbotron">
                                    <h2>Search:</h2>
                                        <!---search names--->
                                         <form action="view_students.php" method="post">
                                               
                                             <input type="text" name="search" placeholder="Student Name" class="longtxtbox"  required/>
                                                <input type="submit" name="" value="Search" class="btn btn-sm btn-primary medium"/>
                                            </form><!--names-->
                                        <!---search email --->
                                             <form action="view_students.php" method="post">
                                               
                                             <input type="text" name="search_email" placeholder="Student Email" class="longtxtbox" required/>
                                                <input type="submit" name="" value="Search" class="btn btn-sm btn-primary medium"/>
                                            </form>
                                    <!---email end---->
                                    <!---  search address--->
                                            <form action="view_students.php" method="post">
                                               
                                             <input type="text" name="search_loc" placeholder="Student Location" class="longtxtbox" required/>
                                                <input type="submit" name="" value="Search" class="btn btn-sm btn-primary medium"/>
                                            </form>
                                    <!---address end--->
                                    
                                    
                                          <table class="table table-striped" style=width:800px;>
                                             
                                              <?php print("$outcome"); ?>
                                                    </table>
                                              
                                             <table class="table table-striped" style=width:800px;>
                                                
                                                  <?php print("$outcome2"); ?>
                                    </table>
                                              <table class="table table-striped" style=width:800px;>
                                               
                                               <?php print("$outcome3"); ?>
                                               </table>
                                    
                                            
                                </div>
                        
                        
                        </div>

        
    <div class="container">
        <div class="jumbotron">
        <h2>Population of Students from:</h2>
           <form method="post">
            
            <button type="submit" name="all" class="btn btn-xs btn-success btn-course btn-rect" id="rec1">Currently Enrolled Students <span class="badge"><?php echo mysqli_num_rows($total,0); ?></span></button>
                   <button type="submit" name="summer" class="btn btn-xs btn-success btn-course btn-rect" id="rec1">Summer Students <span class="badge"><?php echo mysqli_num_rows($summer,0); ?></span></button><br>
               <button type="submit" name="scho" class="btn btn-xs btn-success btn-course btn-rect" id="rec1">Scholars <span class="badge"><?php echo mysqli_num_rows($scho,0); ?></span></button>
                 <button type="submit" name="nonscho" class="btn btn-xs btn-success btn-course btn-rect" id="rec1">Non Scholars <span class="badge"><?php echo mysqli_num_rows($nonscho,0); ?></span></button>
                 <button type="submit" name="femi" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec6">Female <span class="badge"><?php echo mysqli_num_rows($fem_count,0); ?></span></button>
           
            <button type="submit" name="masc" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec7">Male <span class="badge"><?php echo mysqli_num_rows($male_count,0); ?></span></button><br>
                   <button type="submit" name="frshmn" class="btn btn-xs btn-primary btn-course   btn-rect" id="rec2">Freshmens <span class="badge"><?php echo mysqli_num_rows($frs,0); ?></span></button>
           
            <button type="submit" name="sphmr" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec3">Sophomores <span class="badge"><?php echo mysqli_num_rows($sop,0); ?></span></button>
             <button type="submit" name="jnr" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec4">Juniors <span class="badge"><?php echo mysqli_num_rows($jun,0); ?></span></button>
           
            <button type="submit" name="snr" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec5">Seniors <span class="badge"><?php echo mysqli_num_rows($sen,0); ?></span></button><br>
             
            
          
            
           
            <button type="submit" name="civil" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec8">BSCE <span class="badge"><?php echo mysqli_num_rows($count_ce,0); ?></span></button>
            <button type="submit" class="btn btn-xs btn-primary btn-course  btn-rect" name="comscie" id="rec9">BSCS <span class="badge"><?php echo mysqli_num_rows($count_cs,0); ?></span></button>
            <button type="submit" name="crime" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec10">BSCRIM <span class="badge"><?php echo mysqli_num_rows($count_crim,0); ?></span></button>
            <button type="submit" name="hrm" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec16">BSHRM <span class="badge"><?php echo mysqli_num_rows($count_hrm,0); ?></span></button>
           
            <button type="submit" name="secEd" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec12">BSED <span class="badge"><?php echo mysqli_num_rows($count_bs,0); ?></span></button>
            <button type="submit" name="elemEd" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec13">BEED <span class="badge"><?php echo mysqli_num_rows($count_be,0); ?></span></button>
            <button type="submit" name="acct" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec14">BSA <span class="badge"><?php echo mysqli_num_rows($count_bsa,0); ?></span></button>
            <button type="submit" name="frgnsrvc" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec15">BSFS <span class="badge"><?php echo mysqli_num_rows($count_fs,0); ?></span></button>
                <button type="submit" name="buss" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec11">BSBA <span class="badge"><?php echo mysqli_num_rows($count_ba,0); ?></span></button>
                <button type="submit" name="japanology" class="btn btn-xs btn-primary btn-course  btn-rect" id="rec15">Japanology <span class="badge"><?php echo mysqli_num_rows($count_jp,0); ?></span></button>
            <br>
            
        
            
            
            
            </form>
             

            
            <div id="show_stud" class="container">
    <table id="" class="table table-condensed">
       
       
        <form class="" method="post" action="view_std_form.php">
               
        <?php
            
            if(isset($_POST['all'])){
                 echo"<h4><b><em>Showing all Data<em></b></h4><br>";
                include'tbl-heading.php';
                 while($viewStd=mysqli_fetch_assoc($view)){
                    include'show-std-tbl.php';       
                        }
            }
            else if(isset($_POST['summer'])){
                     echo"<h4>Showing Data from <b><em>Summer Class<em></b></h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_summer)){
                        include'show-std-tbl.php'; 
                    }
                }
             else if(isset($_POST['scho'])){
                     echo"<h4>Showing Data from <b><em>Scholars<em></b></h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_scho)){
                        include'show-std-tbl.php'; 
                    }
                }
             else if(isset($_POST['nonscho'])){
                     echo"<h4>Showing Data from <b><em>Non Scholars<em></b></h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_nonscho)){
                        include'show-std-tbl.php'; 
                    }
                }
          
                else if(isset($_POST['frshmn'])){
                     echo"<h4>Showing Data from <b><em>1st Year<em></b> level</h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_frs)){
                        include'show-std-tbl.php'; 
                    }
                }
                
               else if(isset($_POST['sphmr'])){
                    echo"<h4>Showing Data from <b><em>2nd Year<em></b> level</h4><br>";
                   include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_sop)){
                        include'show-std-tbl.php'; 
                        
                        
                    }
                    
                }
                
                else if(isset($_POST['jnr'])){
                     echo"<h4>Showing Data from <b><em>3rd Year<em></b> level</h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_jun)){
                        include'show-std-tbl.php'; 
                        
                    }
                    
                }
               
                else if(isset($_POST['snr'])){
                    echo"<h4>Showing Data from <b><em>4th Year<em></b> level</h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_sen)){
                        include'show-std-tbl.php'; 
                       
                    }
                    
                }
                
                else if(isset($_POST['masc'])){
                    echo"<h4>Showing Data of all <b><em>Male<em></b> students</h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_male)){
                        include'show-std-tbl.php'; 
                      
                    }
                    
                }
                
               else if(isset($_POST['femi'])){
                   echo"<h4>Showing Data of all <b><em>Female<em></b> students</h4><br>";
                   include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_fem)){
                        include'show-std-tbl.php'; 
                        
                        
                    }
                    
                }
                
                else if(isset($_POST['civil'])){
                    echo"<h4>Showing Data from the course <b><em>BS Civil Engineering<em></b></h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_ce)){
                        include'show-std-tbl.php'; 
  
                    }  
                }

                
               else if(isset($_POST['comscie'])){
                   echo"<h4>Showing Data from the course <b><em>BS Computer Science<em></b></h4><br>";
                   include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_cs)){
                        include'show-std-tbl.php'; 
                }
                    
            }
            
               else if(isset($_POST['crime'])){
                   echo"<h4>Showing Data from the course <b><em>BS Criminology<em></b></h4><br>";
                   include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_crim)){
                        include'show-std-tbl.php'; 
                }
                    
            }
            
                if(isset($_POST['hrm'])){
                    echo"<h4>Showing Data from the course <b><em>BS Hotel and Restaurant Management<em></b></h4><br>";
                    include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_hrm)){
                        include'show-std-tbl.php'; 
                }
                    
            }
           
               else if(isset($_POST['buss'])){
                   echo"<h4>Showing Data from the course <b><em>BS Business Administration<em></b></h4><br>";
                   include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_ba)){
                        include'show-std-tbl.php'; 
                }
                    
            }
           
               else if(isset($_POST['secEd'])){
                   echo"<h4>Showing Data from the course <b><em>Bachelor in Secondary Education<em></b></h4><br>";
                   include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_bs)){
                        include'show-std-tbl.php'; 
                }
                    
            }
            
               else if(isset($_POST['elemEd'])){
                   include'tbl-heading.php';
                   echo"<h4>Showing Data from the course <b><em>Bachelor in Elementary Education<em></b></h4><br>";
                    while($viewStd=mysqli_fetch_assoc($show_be)){
                        include'show-std-tbl.php'; 
                }
                    
            }
            
               else if(isset($_POST['acct'])){
                   include'tbl-heading.php';
                    echo"<h4>Showing Data from the course <b><em>BS Accountancy<em></b></h4><br>";  
                   include'tbl-heading.php';
                    while($viewStd=mysqli_fetch_assoc($show_bsa)){
                        include'show-std-tbl.php'; 
                }
                    
            }
            
               else if(isset($_POST['frgnsrvc'])){
                   include'tbl-heading.php';
                   echo"<h4>Showing Data from the course <b><em>BS Foreign Service<em></b></h4><br>";  
                    while($viewStd=mysqli_fetch_assoc($show_fs)){
                        include'show-std-tbl.php'; 
                }
                    
            }
            else if(isset($_POST['japanology'])){
                   include'tbl-heading.php';
                   echo"<h4>Showing Data from the course <b><em>Japanology<em></b></h4><br>";  
                    while($viewStd=mysqli_fetch_assoc($show_jp)){
                        include'show-std-tbl.php'; 
                }
                    
            }
            
            ?>
            
      </form>
             </table>
    
    
    
    </div>
            
            
        </div>
  
        
</div><!---maincon--->
                        
                        
                        
                    </div><!---col-12--->
                </div><!--roww-->
            </div><!--fluid-->
        </div><!---div content wrapper-->
    </div><!---wrapper-->
    
    
    
    
   
    <br><br>
    
         
    
    
</body>


</html>


