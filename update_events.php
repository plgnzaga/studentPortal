<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>

<?php
session_start();
?>
<?php 
     if(isset($_SESSION['user_admin'])){
        
    }
    else if(isset($_SESSION['member_id'])){
        
    }
    else{
         header('location:restricted.php');
    }
    ?>

<?php
    

    $sql = "SELECT `event_no`, `date`, `time`, `place`, `event_title`, `status`, `event_desc` FROM `univ_calendar` ";

    $records = mysql_query($sql);

?>
<?php 
    function convert_date($date){
        $convert = date("F j, Y",strtotime($date));
        return $convert;
    }
    function convert_time($time){
        $convert = date("g:i a",strtotime($time));
        return $convert;
    }
?>

<!DOCTYPE html>
<html>
    <?php include'headers.php'; ?>
    
  
<body>
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
        <center><h1>Annual University Events</h1></center>
    </div>
    <div class="container">
       
        <?php
         
            while($eve=mysql_fetch_array($records)){
              
                 echo"<div class='jumbotron'>";
                    echo"<form class='form form-inline' method=POST action=update_Eve.php>";
                    echo"<td>Event No.<input type='text' name='event_no' value='".$eve['event_no']."' id='eveNo' class='form-control' readonly /></td><br><br>";
                    echo"<table class='table'>";
                    echo"<tr class='active'>";
                        
                        echo"<th>Date</th>";
                        echo"<th>Time</th>";
                        echo"<th>Place</th>";
                        echo"<th>Title</th>";
                        echo"<th>Status</th>";
                        echo"</tr>";
                    
                    echo"<td><input type='text' name='date' value='".$eve['date']."' class='form-control'/></td>";
                    echo"<td><input type='text' name='time' value='".convert_time($eve['time'])."' class='form-control'/></td>";
                    echo"<td><input type='text' name='place' value='".$eve['place']."' class='form-control'/></td>";
                    echo"<td><input type='text' name='event_title' value='".$eve['event_title']."' class='form-control' /></td>";
                    ?>
                    <td><input list="stud_remarks" name="status" value="<?php echo"".$eve['status'].""; ?>" type="text" class="form-control st-brgy-city-dates">
            <datalist id="stud_remarks">
    <option>Postponed</option>
    <option>Upcoming</option>
    <option>Declined</option> 
    <option>No Final Exam</option>
    
                </datalist>
            </input></td>
        
                    <?php
                   
                    echo"</table><br><br>";
                   
                    echo"<pre><textarea class='form-control' cols='120' rows='10' name='event_desc' placeholder='Event Description'>".$eve['event_desc']."</textarea></pre><br><br>";
                    /*echo"<td><input type='text' name='event_desc' value='".$eve['event_desc']."'</td>";*/
                    echo"<input type='submit' class='btn btn-primary btn-sm' value='Update' name='update_event'>&nbsp;";
                    echo"<input type='submit' class='btn btn-danger btn-sm' value='Delete' name='delete_event'>";
                    echo"</form>";
                echo"</div>";
            }
        ?>
          <?php 
        if(isset($_POST['delete_event'])){
            
            
        }
        
        
        
        ?>
            
            
        
    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!----wrapper---->
    
                        
   
    
</body>
    

</html>

