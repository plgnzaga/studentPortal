
<ul class="sidebar-nav">
     <li class="dropdown-header">Manage Students</li>
     <li><a href="register_student_id.php">Create Student Account</a></li>
     <li><a href="view_students.php">View Students</a></li>
     <li><a href="notyetdone.php">View Student Grades</a></li>
     <li class="dropdown-header">Manage University Calendar</li>
     <li><a href="add_events.php">Create an Event</a></li>
     <li><a href="update_events.php">Update Events</a></li>
    
     <?php
     $session = $_SESSION['user_admin'];
     $chkLvl = "SELECT privelege FROM admins WHERE admin_uname = '$session' ";
     $chkRes = mysqli_query($connect,$chkLvl);
    
    while($row = mysqli_fetch_array($chkRes)){
        if($row['privelege'] == "Yes"){   ?>
            
            <li class="dropdown-header">Manage Admins</li>
     <li><a href="register_admin.php">Add Admins</a></li>
     <li><a href="view_admins.php">View Admins</a></li>
    <li class="dropdown-header">Manage Faculty</li>
     <li><a href="register_faculty.php">Add Faculty Member</a></li>
    <li><a href="view_faculty.php">View Faculty Members</a></li>
             <?php 
        }
        
    }
     
     ?>
     
     
     <li class="dropdown-header">Manage Curricculum</li>
     <li><a href="manage_curricculum.php">Update Curricculum</a></li>
     <li><a href="view_curricculum.php">View Annual Curricculum</a></li>
     <li class="dropdown-header">Messages</li>
    <li><a href="messages.php">View Public Messages</a></li>
     <li class="dropdown-header">--------------------</li>
</ul>
        