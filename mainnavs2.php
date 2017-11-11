<?php error_reporting(1); ?>


<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navi</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand active" href="">The University of Manila</a>
            
        <div class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav navbar-left">
                <?php
                
                if(isset($_SESSION['member_id'])){
                      
                    echo '<li class=""><a href="faculty_myprofile.php">My Account</a></li>';
                    echo '<li class=""><a href="input_grades.php">Input Grades</a></li>';
                    echo '<li class=""><a href="notyetdone.php">Get Student Grades</a></li>';
                    echo '<li class=""><a href="events.php">University Calendar</a></li>';
                        
                    }
                else { ?>
                        
                <li class=""><a href="index.php">Home</a></li>
                <?php 
                
                 if(isset($_SESSION['user_admin'])){
                
                  
                     ?>
                <li class=""><a href="admin_profile.php">My Profile</a></li>
                
                <li class=""><a href="events.php">University Calendar</a></li>
                
                    <?php
                
                     
                }
                else{
                    ?>
                 <li class=""><a href="about_us.php">About Us</a></li> 
                <li class=""><a href="events.php">University Calendar</a></li>
                <li class=""><a href="hall_of_fame.php">Hall of Fame</a></li>
                 <li class=""><a href="admission.php">Admission</a></li>
                    <?php
                }
                
                ?>
                
               
                
                         
                <?php }
                
                
                ?>
                
  </ul>    
            <ul class="nav navbar-nav navbar-right">
                
                <?php
                     if(isset($_SESSION['stud_id'])){
                         $find_student_n = "SELECT * FROM students where student_id = '".$_SESSION['stud_id']."'";
                            $stud_member_n = mysql_query($find_student_n);
                         
                         echo '<a class="navbar-brand stud_admin" href="student_profile.php">';
                          
                           while($student_info_n=mysql_fetch_assoc($stud_member_n)){
                               echo "<p class='hi_stud' data-toggle='tooltip' data-placement='bottom' title='My Account'>".$student_info_n['student_firstname']." ".$student_info_n['student_lastname']."</p>";
                               
                           }
                        echo'<li>';
                         echo'<a href="logout_account.php">';
                         echo'Log Out';
                         echo'</a>';
                         echo'</li>';
                         echo'</a>';
                        }
                     else if(isset($_SESSION['member_id'])){
                       
                      
                           
                        echo'<li>';
                         echo'<a href="logout_account.php">';
                         echo'Log Out';
                         echo'</a>';
                         echo'</li>';
                         
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
                         
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In to E-Portal<b class="caret"></b></a>
                <ul class="dropdown-menu">
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
        </div>
        
        </div>
        
        
    </nav>