<?php session_start();  ?>
<?php error_reporting(1); ?>
<?php include'connect.php'; ?>

<?php 

 $find_admin = "SELECT * FROM admins where admin_uname = '".$_SESSION['user_admin']."'";
 $admin_member = mysqli_query($connect,$find_admin);

?>
<?php 
     if(isset($_SESSION['user_admin'])){
         
    }
    else{
         header('location:restricted.php');
    }
    ?>
<!DOCTYPE html>

<html>
    <?php include'headers.php'; ?>

<body 
      
      style=""
>
   <?php include'mainnavs.php'; ?>
    <div id="wrapper">
        <div id="sidebar-wrapper">
           <?php include 'wrapperadmin.php'; ?>
        </div>
        
        <div id="page-content-wrapper-profile">
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-12">
                      <div><a href="#"><div class="sider" id="menu-toggle"></div></a></div>
                        <div class="container">
                        <?php
                        
                        if(isset($_SESSION['user_admin'])){
                         echo "<center>";
                                echo "<div class='container profile' >";
                            
                                    while($admin_info=mysqli_fetch_assoc($admin_member)){
                                         echo "<img src='css/images/profilelogo.png'></img>";
                                         echo "<h1>".$admin_info['admin_fname']." ".$admin_info['admin_lname']."</h1>";
                                         echo "<h4><span class='glyphicon glyphicon-star'></span> Your ID number is: ".$admin_info['admin_id']."</h4>";
                                         echo "<h4><span class='glyphicon glyphicon-envelope'></span> Email: ".$admin_info['email']."</h4>";
                                         }
                                echo "</div>";
                        echo"</center>";
                        
                        }
                        ?>
                        </div>
                        </div>
                 </div>
             </div>
        </div>
    </div>
</body>
</html>

