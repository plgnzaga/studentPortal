<?php error_reporting(1); ?>
<?php

$connect = mysqli_connect("localhost","root","","um_portal") or
    
die(mysqli_error()."Could not connect to the server");
            $db = mysqli_select_db($connect,"um_portal") or die(mysqli_error()."Could not connect to the database");



?>      