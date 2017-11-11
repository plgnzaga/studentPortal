<html>
<?php include'headers.php';?>

<body style="background: linear-gradient(#7db6b0, #ffffff);">
    
   <?php include'mainnavs.php';?> 
    <style>
    
    p{
        font-family: "SEGOE UI";
        font-size: 15px;
        }
    
    .form-control{
    border-radius:0px;
}
    
    </style>
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <section class="col-md-6">
                <h2>Apply Online!</h2>
                <p>Welcome to the UM Online Application for Admission!
                        Please fill-out the required fields in your admission form.
                        As soon as you are ready, 
                        just click the next button to start your admission process.</p>
                <a href="start_admission.php"><input type="button" class="btn btn-primary" name="start" value="Start Application" style="width:200px;"/></a>
            </section>
            <section class="col-md-6">
                <h2>Already have an account?</h2>
                <p>Please Login Here.</p>
                
                   <form method="post">
                       
                    <table class="table" style="background-color:transparent;">
        
                <tr>
                    <td style="width:140px;" ><label>Applicant ID:</label></td>
                    <td><input type="text" name="applicant_id" class="form-control txt_sm" placeholder="Applicant ID" /></td>
                </tr>
            
              <tr>
                    <td style="width:140px;" ><label>Password:</label></td>
                    <td><input type="password" name="applicant_pwd" class="form-control txt_sm" placeholder="Password" /><br></td>
              </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" class="btn" name="sign_in" value="Login" style="width:200px;background-color:gold"/></td>
                
            
            </tr>
            
        </table>
                       
                       
                </form>
            </section>
        
        
        </div>
    
    </div>
    
</body>

</html>