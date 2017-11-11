<?php

session_start();
if(isset($_SESSION['user_admin'])){

unset($_SESSION['is_logged_in']);
unset($_SESSION['user_admin']);
session_destroy();
header('location:login_admin.php');

}
else if(isset($_SESSION['member_id'])){

unset($_SESSION['is_logged_in']);
unset($_SESSION['member_id']);
session_destroy();
header('location:login_faculty.php');

}
else if(isset($_SESSION['stud_id'])){

unset($_SESSION['is_logged_in']);
unset($_SESSION['stud_id']);
session_destroy();
header('location:login_student.php');

}
else{
    header("location:restricted.php");
}


?>