<div class="footers">
    <?php include'connect.php';     ?>
        
            <h3 id="connect_with_us">Connect with Us!</h3><br>
                        <em>If you don't mind...</em>
                        <p>Kindly leave us a message:</p>
                    
                    <form method="post" class="form-inline">
                    <textarea style="width:275px;height:90px;" name="myMessage" id="txtholder" placeholder="Write your message here" ></textarea><br><br>
                        
                        <p id="msgresponse"></p>
                    <input type="submit" value="Send Message" name="send" class="btn btn-xs btn-primary" /><br><br>
                    </form>
        
         <p>
                    or
                    Contact us : 435-6143(144)  
         </p>
            
                <p>&copy;&nbsp;All Rights Reserved <?php echo date("Y");?></p>
         <?php
     if(isset($_POST['send'])){
        
        $myMessage = htmlentities($_POST['myMessage']);
        
        $send_query = "INSERT INTO messages(public_msgs) VALUES ('$myMessage')";
        $send_result = mysqli_query($connect,$send_query);
        
         header("location:restricted.php");
      
        
    }
    
    ?>
    <style>
    textarea{
    resize: none;
}</style>
    </div>