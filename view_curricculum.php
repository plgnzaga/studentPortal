<?php error_reporting(1); ?>
<?php include 'connect.php'; ?>
<?php session_start(); ?>
<?php include'query_currs.php'; ?>
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
                        
                         <div class="container curr">
     <div class="jumbotron">
        <p id="annual_curr">The University of Manila Annual Curricculum</p>
    </div>
</div>
   
    <div class="container">
       <div class="panel-group" id="accordion">
          
           
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Bachelor of Science in Computer Science</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
        <?php 
        while($cs=mysqli_fetch_assoc($rescs101)){  
        
     echo"<center>";
            echo $cs['yearlvl'].'<br>';
    echo $cs['sem'].'<br>';
    echo $cs['course'].'<br>';
    
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$cs['code'.$no.'']."</td>";
    echo"<td>".$cs['sub'.$no.'']."</td>";
    echo"<td>".$cs['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          
         while($cs=mysqli_fetch_assoc($rescs201)){  
        
     echo"<center>";
     echo $cs['yearlvl'].'<br>';
    echo $cs['sem'].'<br>';
    echo $cs['course'].'<br>';
   
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$cs['code'.$no.'']."</td>";
    echo"<td>".$cs['sub'.$no.'']."</td>";
    echo"<td>".$cs['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          
         while($cs=mysqli_fetch_assoc($rescs301)){  
        
     echo"<center>";
    echo $cs['yearlvl'].'<br>';
    echo $cs['sem'].'<br>';
    echo $cs['course'].'<br>';
    
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$cs['code'.$no.'']."</td>";
    echo"<td>".$cs['sub'.$no.'']."</td>";
    echo"<td>".$cs['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          
          while($cs=mysqli_fetch_assoc($rescs401)){  
        
     echo"<center>";
    echo $cs['yearlvl'].'<br>';
    echo $cs['sem'].'<br>';
    echo $cs['course'].'<br>';
    
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$cs['code'.$no.'']."</td>";
    echo"<td>".$cs['sub'.$no.'']."</td>";
    echo"<td>".$cs['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          
          
          
        ?>
          
          
          
          
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Bachelor of Science in Business Administration</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        
    <?php
          while($bsba=mysqli_fetch_assoc($resbsba101)){  
        
     echo"<center>";
              echo"<b>";
    echo $bsba['yearlvl'].'<br>';
    echo $bsba['sem'].'<br>';
    echo $bsba['course'].'<br>';
    echo"</b>";
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsba['code'.$no.'']."</td>";
    echo"<td>".$bsba['sub'.$no.'']."</td>";
    echo"<td>".$bsba['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          while($bsba=mysqli_fetch_assoc($resbsba201)){  
        
     echo"<center>";
    echo $bsba['yearlvl'].'<br>';
    echo $bsba['sem'].'<br>';
    echo $bsba['course'].'<br>';
    
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsba['code'.$no.'']."</td>";
    echo"<td>".$bsba['sub'.$no.'']."</td>";
    echo"<td>".$bsba['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          while($bsba=mysqli_fetch_assoc($resbsba301)){  
        
     echo"<center>";
    echo $bsba['yearlvl'].'<br>';
    echo $bsba['sem'].'<br>';
    echo $bsba['course'].'<br>';
  
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsba['code'.$no.'']."</td>";
    echo"<td>".$bsba['sub'.$no.'']."</td>";
    echo"<td>".$bsba['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          while($bsba=mysqli_fetch_assoc($resbsba401)){  
        
     echo"<center>";
    echo $bsba['yearlvl'].'<br>';
    echo $bsba['sem'].'<br>';
    echo $bsba['course'].'<br>';
    
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsba['code'.$no.'']."</td>";
    echo"<td>".$bsba['sub'.$no.'']."</td>";
    echo"<td>".$bsba['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
    
    ?>
        
        
    </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
        Bachelor of Science in Accountancy</a>
          
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse">
      <div class="panel-body">
          <?php
          
        while($bsa=mysqli_fetch_assoc($resbsa101)){  
        
     echo"<center>";
    echo $bsa['yearlvl'].'<br>';
    echo $bsa['sem'].'<br>';
    echo $bsa['course'].'<br>';
    
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsa['code'.$no.'']."</td>";
    echo"<td>".$bsa['sub'.$no.'']."</td>";
    echo"<td>".$bsa['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          while($bsa=mysqli_fetch_assoc($resbsa201)){  
        
     echo"<center>";
    echo $bsa['yearlvl'].'<br>';
    echo $bsa['sem'].'<br>';
    echo $bsa['course'].'<br>';
    
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsa['code'.$no.'']."</td>";
    echo"<td>".$bsa['sub'.$no.'']."</td>";
    echo"<td>".$bsa['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          
          while($cs=mysqli_fetch_assoc($resbsa301)){  
        
     echo"<center>";
    echo $bsa['yearlvl'].'<br>';
    echo $bsa['sem'].'<br>';
    echo $bsa['course'].'<br>';
   
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsa['code'.$no.'']."</td>";
    echo"<td>".$bsa['sub'.$no.'']."</td>";
    echo"<td>".$bsa['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          
          while($bsa=_fetch_assoc($resbsa401)){  
        
     echo"<center>";
    
    echo $bsa['yearlvl'].'<br>';
    echo $bsa['sem'].'<br>';
    echo $bsa['course'].'<br>';
  
    
   
    echo"<table border='2px' class='table table-condensed'>";
      echo"<tr>";
            echo"<th class='curricculums'>Subject Code</th>";
            echo"<th class='curricculums'>Subject Description</th>";
            echo"<th class='curricculums'>Units</th>";
      echo"</tr>";
             for($no=1;$no<=12;$no++){
  echo"<tr>"; 
    echo"<td>".$bsa['code'.$no.'']."</td>";
    echo"<td>".$bsa['sub'.$no.'']."</td>";
    echo"<td>".$bsa['units'.$no.'']."</td>";
   
  echo"</tr>";
    }
     echo"</table>";   
      echo"<center>";  
        }
          ?>
        
    </div>
    </div>
  </div>         
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Bachelor of Science in Civil Engineering</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        
      
        </div>
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
       Bachelor of Science in Criminology</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"></div>
    </div>
  </div>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Bachelor of Science in Hotel and Restaurant Management</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body"></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        Bachelor of Science in Foreign Service</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body"></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        Bachelor in Elementary Education</a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body"></div>
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
       Bachelor in Secondary Education</a>
      </h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse">
      <div class="panel-body"></div>
    </div>
  </div>
   
          
           
           
</div>
    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
   
   
</body>


</html>

