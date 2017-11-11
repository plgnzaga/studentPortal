<html>
<?php include'connect.php'; ?>
<?php session_start(); ?>
    <?php include'headers.php'; ?>
    <style>
        .megatron{
            
            width: 400px;
           margin: 5px;
            
        }
        .blue{
            width:435;
            background-color: silver;
        }
        .bluefont{
            
            color: blue;
            
        }
    </style>
<body>
    <br><br>
    <?php include'mainnavs.php'; ?>
    <?php
    
    $msg = "SELECT public_msgs,sender FROM messages";
    $display = mysql_query($msg);

    ?>
    <div class="container blue">
    <br>
        <?php
    
    while($row = mysql_fetch_array($display)){
        
        ?>
    <center>
        
     <div class="jumbotron megatron">
       <form method="post" class="form-horizontal">
           <?php echo $row['public_msgs']; ?>
      <p  class="bluefont"><?php echo "-".$row['sender']; ?></p>
         <input type="text" name="comment" class="form-control" placeholder="Comment"/>
    <input type="submit" class="btn btn-xs btn-primary" value="Comment"/>
         
         
         
         </form>
      
    </div>
    
    
    </center>
   
    
        <?php
        
    }
    
    ?>
    
    
    
    </div>

</body>

</html>