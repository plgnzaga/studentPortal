<?php error_reporting(1)?>

<?php include 'connect.php'; ?>
<?php
session_start();

?>
<?php 
     if(isset($_SESSION['user_admin'])){
         
    }
    else{
         header('location:restricted.php');
    }
    ?>
<?php

    if(isset($_POST['event_input'])){
      
        $date = $_POST['date'];
        $time = $_POST['time'];
        $place = $_POST['place'];
        $event_title = $_POST['event_title'];
        $event_status = $_POST['event_status'];
        
        $event_desc = mysqli_real_escape_string($_POST['event_desc']);
        
       
            echo "Event Added";
            
            //connect to the databse
           
            
            $addEvent = "INSERT into univ_calendar(date,time,place,event_title,status,event_desc)
            VALUES('$date','$time','$place','$event_title','$event_status','$event_desc')";
            //run query
            $insertEve = mysqli_query($connect,$addEvent) or die(mysqli_error()."Error inserting data");
            
            echo "Successfully Inserted to the database.";
            header("location:redirect_add_eve.php");
        }

?>

<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
<body class="blues">
    <style>
        form{
            width: 250px;
            
        }
        #eve_desc{
            width: 500px;
            
        }
       
    </style>
    
    <?php include'mainnavs.php';?>
    <div id="wrapper">
        <div id="sidebar-wrapper">
          <?php include'wrapperadmin.php'; ?>
        
        </div>
       
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div><a href="#"><div class="sider" id="menu-toggle"></div></a></div>
                        
                        <div class="container">
                            <h1>Create an Event</h1><br><br>
        <form method="post" action="" role="form" enctype="multipart/form-data" class="form-horizontal">
            <!---<input type="text" name="event_date" placeholder="Date of Event"/><br><br>--->
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" required><br><br>
            <label for="time">Time</label>
            <input type="text" name="time" class="form-control" required placeholder="Time"><br><br>
            <label>Place:&nbsp;</label>
            <input type="text" name="place"  class="form-control" placeholder="Event Place"><br><br>
            <label>Event Name:&nbsp;</label>
            <input class="form-control" type="text" name="event_title" placeholder="Title"/><br><br>
            <label>Status:&nbsp;</label>
             <input list="eve_stat" class="form-control" type="text" name="event_status" placeholder="Status">
                <datalist id="eve_stat">
            
                    <option>Upcoming</option>
                    <option>Postponed</option>
                    <option>Declined</option>
                    
                </datalist>
            
            </input><br><br>
            <label>Details:&nbsp;</label>
            <textarea class="form-control" cols="50" rows="10" name="event_desc" placeholder="Event Description" id="eve_desc"></textarea><br><br>
             <input type="submit" name="event_input" value="Add Event" class="btn btn-md btn-primary"/>
        </form><input type="button" value="Back" class="btn btn-md btn-primary inputblock" id="btn-back" onclick="history.go(-1)"/><br><br>
    </div>
                    </div>
                </div>
            </div>
         </div>
    </div><!--wrapper!--->

</body>
    
</html>