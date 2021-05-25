<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
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
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
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
<?php $vid = $_GET['clientname'];?>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Update Details</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
    
        
       <div class="col-md-3" >
      <div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Client-info</h5>
        </div>
        <div  class="widget-content nopadding">
          <form action="#" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Clientname :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" id="name" value=<?php echo $vid; ?>  />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">	Date:</label>
              <div class="controls">
                <input type="date" class="span11"   name="Date" id="email" placeholder=date("Y-m-d") />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Time :</label>
              <div class="controls">
                <input type="time" class="span11"  name="Time" id="address" placeholder=time("H:i:s") />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <input type="textarea" class="span11" name="Status" id="phone" placeholder=" status" />
              </div>
            </div>
           
            
            
            
           
            <div class="form-actions">
              <button type="submit"  name="submit" class="btn btn-success">Add</button>
            </div>
          </form>
        </div>
      </div>
      </div>
      
 		
 		
 		

     
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

<?php
include('confi.php');


 $vid = $_GET['clientname'];
 
if (isset($_POST["submit"])) {
      $caseid =$vid; 
     $current_date = date("Y-m-d H:i:s");
   $current_time = time("NOW()");
    $number = $_POST["Status"];
   
    
    
     $sql ="select * from udate where date ='".$current_date."' and time ='".$current_time."' and status ='".$number."' and clientname ='".$caseid."'   ";
 
  
    $res = mysql_query($sql) or die(mysql_error());
    $count = mysql_num_rows($res);  
   if ($count == 0) {
       $query ="INSERT INTO  udate(date,time,status,clientname) values('$current_date','$current_time','$number','$caseid')";
       
        mysql_query($query);
       echo" <script>alert('added successfully');</script>";
        
           
        
    } else {
        
        echo"<script> alert(Error)</script>";
            
        
        
    }

}
/*$sql = "SELECT * from  registration where id='".$vid."'";
echo($sql);
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    $barcode = $row["name"];
    $productname = $row["email"];
    $amount = $row["adderss"];
    $discount  = $row["phone"];
     $nopieces  = $row["username"];
      $hsncode  = $row["password"];
      
}


*/
$conn->close();
?>

