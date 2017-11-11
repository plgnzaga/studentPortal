<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>
<?php session_start(); ?>
<?php    
       $sqlview = "SELECT * FROM admins";
        $sqlR = mysqli_query($connect,$sqlview);
                    
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
  
    <th><center>Admin Name</center></th>
    <th><center>Admin Username</center></th>
    <th class="action"><center>Action</center></th>
    
  </tr>
       
        <form class="form-inline" method="post">
        <h2 class="form-signin-heading">Registered Admins</h2>
       
        <?php
         while($viewAdmins=mysqli_fetch_array($sqlR)){
             
             echo"<tr>";
            echo"<input type='text' name='admin_id' value='".$viewAdmins['admin_id']."' />";
              echo"<td>".$viewAdmins['admin_fname']." ".$viewAdmins['admin_lname']."</td>";  
                echo"<td>".$viewAdmins['admin_uname']."</td>";    
                echo"<td><center><input type='submit' name='delete' value='Delete User' class='btn btn-xs btn-danger' id='del'></input><center></td>";
             echo"</tr>";
            
  }
            ?>
            
      </form>
             </table>
    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!--end wrapper --->
    
    <?php
    
     if(isset($_POST['delete'])){
     
        
        $admin_id = $_POST['admin_id'];
 
        $del = "DELETE FROM admins WHERE admin_id = $admin_id ";    
        $delQR = mysqli_query($connect,$del);
         
         if($delQR){
    echo "User Deleted";
 
}
else{
    
    echo "Error deleting record: " . mysqli_error();

} 

    }
       

    
    
    ?>
</body>


</html>


