<html>
<?php
    session_start();
    error_reporting();
    include'connect.php';
    include'headers.php';
    include'mainnavs.php';
    
    $display_events = "SELECT * FROM univ_events ORDER BY event_date ASC";
    $display_result = mysqli_query($connect,$display_events);
    
    
    
    function convert_date($date){
        $convert = date("F j, Y",strtotime($date));
        return $convert;
    }
    function convert_time($time){
        $convert = date("g:i a",strtotime($time));
        return $convert;
    }

    
    ?>

   <body class="dbg">
    
    
    <div class="container">
       
       <div class="events">
     
           
          
           
        </div>
        
        <?php
        
        
        while($events = mysqli_fetch_array($display_result)){
            
            ?>
            <div class="event1">
            
                <h1><?php echo $events['event_title']; ?></h1>
                <h5><?php echo convert_date($events['event_date']); ?></h5>
                <h5><?php echo convert_time($events['event_time']); ?></h5>
                <h5><?php echo $events['event_organizer']; ?></h5>
                <?php echo $events['event_desc']; ?>
        
        
        
            <br><br><input type="text" style="width:995px;height:30px;"/>
            <button class="btn btn-sm btn-primary">Comment</button>
            </div>
        
        
        
        
            <?php
            
            
            
            
        }
        
        
        
        ?>
        
        
        
        
       
       
    </div>
    
    
    
    
    </body> 
    
<?php include'footers.php';?>


</html>