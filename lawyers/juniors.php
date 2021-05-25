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
  <h1>Junior Details</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
    
        
       <div class="col-md-3" >
      <div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Junior-info</h5>
        </div>
        <div  class="widget-content nopadding">
          <form action="#" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="name" />
              </div>
            </div>
            
           
             <div class="control-group">
              <label class="control-label">Experience  :</label>
              <div class="controls">
                <input type="number" class="span11"  name="experience" placeholder="experience" />
              </div>
            </div>
            
            <!--<div class="control-group">
              <label class="control-label">Category  :</label>
              <div class="controls">
                   
				<input type="number" class="span11"  name="lawyer" placeholder="Category" />
              </div>
            </div>-->
            
            </div>
            
           
            <div class="form-actions">
              <button type="submit"  name="submit" class="btn btn-success">ADD</button>
            </div>
          </form>
        </div>
      </div>
      </div>
      <?php
include('confi.php');
 		
 		
 		
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $experience = $_POST["experience"];
   $category= $_POST["category"];
   
    
     $sql ="select * from  junior where name = '".$name."' and experience = '".$experience."' and category = '".$category."'   ";
 
  
    $res = mysql_query($sql) or die(mysql_error());
    $count = mysql_num_rows($res);  
     
   if ($count == 0) {
       $query ="INSERT INTO junior(name,experience,category) values('$name','$experience','$category')";
      
        mysql_query($query);
       echo" <script>alert('added successfully');</script>";
        
           
        
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
