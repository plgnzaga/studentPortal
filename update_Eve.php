<?php include'connect.php'; ?>
<?php
    
if(isset($_POST['update_event'])){
    
    $date = mysql_real_escape_string($_POST['date']);
    $time = mysql_real_escape_string($_POST['time']);
    $place = mysql_real_escape_string($_POST['place']);
    $event_title = mysql_real_escape_string($_POST['event_title']);
    $status = mysql_real_escape_string($_POST['status']);
    $event_desc = mysql_real_escape_string( $_POST['event_desc']);
    $event_no = mysql_real_escape_string($_POST['event_no']); 
        
        
    $sql = "UPDATE `univ_calendar` SET `date`= '$date',`time`='$time',
    `place`='$place',`event_title`= '$event_title',
    `status`= '$status',`event_desc`='$event_desc' WHERE `event_no`='$event_no' ";

    if(mysql_query($sql)){
        header('location:redirect_event.php');
    }
    else{
    die(mysql_error()."Error updating brotha");
    }
   
}

?>
<?php 

if(isset($_POST['delete_event'])){
    
    
    $event_no = $_POST['event_no']; 
    $date = $_POST['date'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $event_title = $_POST['event_title'];
    $status = $_POST['status'];
    $event_desc =  $_POST['event_desc'];
    
        
        
    $deleteEve = "DELETE FROM `univ_calendar` WHERE 'event_no = '$event_no' ";

    if(mysql_query($deleteEve)){
        echo"Event Deleted!";
    }
    else{
    die(mysql_error()."Error deleting event brothaa");
    }
    
    
    
    
    
    
}




?>