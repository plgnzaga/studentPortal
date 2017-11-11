<?php error_reporting(1); ?>

<style>
.navbar-inverse{
    background-color: #292929;
    }</style>
 <nav class="navbar navbar-inverse navbar-fixed-top" style="clear:both;">
                    
             <button type="button" class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navi</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
                 <div class="row navbar-collapse collapse" >
                        <ul class="col-sm-12 navbar-nav navbar-right">
                          
                           <li class="col-sm-3 mid"><a href="index.php">ABOUT US</a>
                            <li class="col-sm-3 mid"><a href="admission.php">ADMISSION</a></li>
                            <li class="col-sm-3 mid"><a href="events.php">UNIVERSITY CALENDAR</a></li>
                             <li class="col-sm-3 mid"><a href="#"></a>
                              <ul class="navbar-nav ">
                                  <?php
                     if(isset($_SESSION['stud_id'])){
                         $find_student_n = "SELECT * FROM students where student_id = '".$_SESSION['stud_id']."'";
                            $stud_member_n = mysqli_query($connect,$find_student_n);
                         
                         echo '<a class="navbar-brand stud_admin" href="student_profile.php">';
                          
                           while($student_info_n=mysqli_fetch_assoc($connect,$stud_member_n)){
                               echo "<p class='hi_stud' data-toggle='tooltip' data-placement='bottom' title='My Account'>".$student_info_n['student_firstname']." ".$student_info_n['student_lastname']."</p>";
                               
                           }
                         ?>
                                  <li><a href="logout_account.php">Log Out</a></li>
                                  
                        <?php
                        }
                     else if(isset($_SESSION['member_id'])){
                       
                         ?>
                                  <li><a href="logout_account.php">Log Out</a></li>
                                  
                        <?php
                         
                    }
                     else if(isset($_SESSION['user_admin'])){
                       echo'<a class="navbar-brand stud_admin" href="admin_profile.php">';
                         echo 'Hi '.$_SESSION['user_admin'].' ';
                           
                        echo'<li>';
                         echo'<a href="logout_account.php">';
                         echo'Log Out';
                         echo'</a>';
                         echo'</li>';
                         echo'</a>';
                    }
                else{ ?>
 
                                 <li class="dropdown">
                                     <a href="" class="dropdown-toggle"  type="button" id="menu1"  data-toggle="dropdown">LOGIN TO E-PORTAL<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                     <li class="dropdown-header">As</li>
                    <li><a href="login_student.php">Student</a></li>
                    <li><a href="login_faculty.php">Faculty</a></li> 
                     <li><a href="login_admin.php">Administrator</a></li> 
                </ul>
                    </li>
                                  <?php
                }
                    
              
                ?>
                                 </ul>
                            
                            
                            </li>
                     
                     </ul>
                </div>
        </nav>
<style>
    li{
        list-style-type: none;
        
    }
    a{
        text-decoration: none;
    }
</style>