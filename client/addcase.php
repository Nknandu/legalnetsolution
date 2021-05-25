<?php
// Start the session
session_start();
   include('confi.php');
 		
   $username=$_SESSION["username"] ;
 
 //$id= $_SESSION["id"] ;
 
  $name= $_SESSION["clientname"] ;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Legalnetsolution</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Legalnetsolution</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php
include('navbar.php');
?>
<!--start-top-serch->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<?php
include('side.php');
?>
<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Case Registration</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
    
        
       <div class="col-md-3" >
      <div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Case-info</h5>
        </div>
        <div  class="widget-content nopadding">
          <form action="#" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Date of incident :</label>
              <div class="controls">
                <input type="date" class="span11" name="date" placeholder="Date" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Time of incident :</label>
              <div class="controls">
                <input type="time" class="span11"  name="time" placeholder="Time" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Place of incident  :</label>
              <div class="controls">
                <input type="text" class="span11"  name="place" placeholder="Address" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">District :</label>
              <div class="controls">
                <input type="text" class="span11" name="distric" placeholder=" District" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Lawyer  :</label>
              <div class="controls">
                   <?php
           include('confi.php');
                    $get=mysql_query("SELECT * FROM addlawyers");
                    ?>
                <select name="lawyer" >
                    <option value="">Please select</option>
                   <?php
            while($row = mysql_fetch_assoc($get))
            {
            ?>
                  <option value="<?php echo($row['lawyername'])?>"><?php echo($row['lawyername'])?></option>
                   <?php } ?>
                </select>
              </div>
           
            <div class="control-group">
              <label class="control-label">Police station :</label>
              <div class="controls">
                <input type="textarea" class="span11"  name="station" placeholder="Station details" />
                <span class="help-block"></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Details of incident</label>
              <div class="controls">
                <input type="textarea"  class="span11"  name="details" placeholder="Enter details of case"  />
                <span class="help-block"></span>
              </div>
            </div>
            
            
           
            <div class="form-actions">
              <button type="submit"  name="submit" class="btn btn-success">Add</button>
            </div>
          </form>
        </div>
      </div>
      </div>
      <?php
include('confi.php');
 		
 		
 		
if (isset($_POST["submit"])) {
    $date = $_POST["date"];
    $time = $_POST["time"];
   $place = $_POST["place"];
    $distric = $_POST["distric"];
    $station= $_POST["station"];
    $lawyer=$_POST["lawyer"];
    $details = $_POST["details"];
    $client =  $_SESSION["clientname"];
    $status='NEW';
     $sql ="select * from caseregistration where date = '".$date."' and time = '".$time."' and place = '".$place."'  and distric = '".$distric."'and station = '".$station."' and lawyername = '".$lawyer."' and details = '".$details."' and status='".$status."' and clientname='".$_SESSION["clientname"]."' ";
 
  
    $res = mysql_query($sql) or die(mysql_error());
    $count = mysql_num_rows($res);  
     
   if ($count == 0) {
       $query ="INSERT INTO  caseregistration(date,time,place,distric,station,lawyername,details,status,clientname) values('$date','$time','$place','$distric','$station','$lawyer','$details','$status','$client')";
       
        mysql_query($query);
       echo" <script>alert('Case Registered  successfully');</script>";
        
           
        
    } else {
        
        echo"<script> alert(Error)</script>";
            
        
        
    }
}
?>
     
</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
