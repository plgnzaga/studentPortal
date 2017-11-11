<?php


 echo"<tr>";
            
              echo"<td>".$viewStd['student_lastname']." , ".$viewStd['student_firstname']." , ".$viewStd['student_middlename']."</td>";  
                
                if(isset($_SESSION['user_admin'])){
                 
          echo"<form method='post'><td><button type='submit' class='btn btn-sm btn-success' id='view_std_form'>View Personal Data</button></td></form>";
                }
             else if(isset($_SESSION['member_id'])){
                echo"<td><input type='submit' value='View Marks' class='btn btn-xs btn-success'></input></td>";    
                 
             }
               
             
             
             echo"</tr>";

?>