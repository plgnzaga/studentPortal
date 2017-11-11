<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>
<?php session_start(); ?>
<?php    
       $sqlview = "SELECT * FROM faculty";
        $sqlR = mysql_query($sqlview);
                    
   ?>
<!DOCTYPE html>
<html>
   <?php include'headers.php'; ?>
    
<body class="blues">
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
         <table border="5px" width="1000px" cellpadding="2px" cellspacing="3px"; class="table table-hover table-condensed">
        <tr class="active">
  
    <th><center>Faculty Member Name</center></th>
    
    <th class="action"><center>Action</center></th>
    
  </tr>
       
        <form class="form-inline" method="post">
        <h2 class="form-signin-heading">Registered Faculty Members</h2>
       
        <?php
         while($viewFacultys=mysql_fetch_array($sqlR)){
             
             echo"<tr>";
            echo"<input type='text' name='member_id' class='hideMe' value='".$viewFacultys['member_id']."' />";
              echo"<td>".$viewFacultys['member_fname']." ".$viewFacultys['member_lname']."</td>";  
              
                echo"<td><center><input type='submit' name='delete' value='Delete User' class='btn btn-xs btn-danger' id='del'></input><center></td>";
             echo"</tr>";
            
  }
            ?>
            
      </form>
             </table>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!--end wrapper --->
    
    <?php
    
     if(isset($_POST['delete'])){
     
        
        $member_id = $_POST['member_id'];
 
        $del = "DELETE FROM faculty WHERE member_id  = $member_id ";    
        $delQR = mysql_query($del);
         
         if($delQR){
    echo "User Deleted";
 
}
else{
    
    echo "Error deleting record: " . mysql_error();

} 

    }
       

    
    
    ?>
</body>


</html>


