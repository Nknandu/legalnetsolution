<?php error_reporting(E_ERROR | E_PARSE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 
<?php

include('navbar.php');


?>

<!--top-Header-menu-->

<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<?php

include('side.php');


?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
          <?php 
                include("confi.php");
                $sql ="SELECT * FROM request;";
                $result=$conn->query($sql);
                $count =0;
                while ($row = $result->fetch_assoc()) {
                    $count++;
                }
         ?>
        <li class="bg_lb"> <a href=""> <i class="icon-dashboard"></i> <span class="label label-important"><?php $count ?></span>Request </a> </li>
        <li class="bg_lg span3"> <a href=""> <i class="icon-signal"></i> Charts</a> </li>
        <?php 
                include("confi.php");
                $sql ="SELECT * FROM caseregistration;";
                $result=$conn->query($sql);
                $count =0;
                while ($row = $result->fetch_assoc()) {
                    $count++;
                }
         ?>
        <li class="bg_ly"> <a href=""> <i class="icon-inbox"></i><span class="label label-success"><?php echo $count ?></span> Case </a> </li>
        <li class="bg_lo"> <a href=""> <i class="icon-th"></i>Junior</a> </li>
        <li class="bg_ls"> <a href=""> <i class="icon-fullscreen"></i>Payment</a> </li>
        <!-- <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
       <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>-->

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <!--<div class="span9">
              <div class="chart"></div>
            </div>-->
            <div class="span10">
              <ul class="site-stats">
                  <?php
                     include("confi.php");
                     $sql="SELECT * FROM caseregistration;";
                     $result=$conn->query($sql);
                     $count=0;
                     while ($row = $result->fetch_assoc()){
                        $count++;
                     }
                     ?>
                     
                <li class="bg_lh"><i class="icon-user"></i> <strong><?php echo $count; ?></strong><small>Total Case</small></li>
                
                <?php
                     include("confi.php");
                     $sql="SELECT * FROM registration;";
                     $result=$conn->query($sql);
                     $count=0;
                     while ($row = $result->fetch_assoc()){
                         
                        $count++;
                     }
                     ?>
                
                <li class="bg_lh"><i class="icon-plus"></i> <strong><?php echo $count ?></strong> <small>New Users </small></li>
                <?php 
              include("confi.php");
              $sql = "SELECT * FROM request;";
              $result = $conn->query($sql);
              $count = 0;
                
              while ($row = $result->fetch_assoc()) {
                    
          

                  if ($row['approve']=='NEW'){
                     $count++;                            
              }}
              ?>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong><?php echo $count ;?></strong> <small>New Request</small></li>
                 <?php 
              include("confi.php");
              $sql = "SELECT * FROM request;";
              $result = $conn->query($sql);
              $count = 0;
              
              while ($row = $result->fetch_assoc()) {
                 
                     $count++;                            
              }
              ?>
                <li class="bg_lh"><i class="icon-tag"></i> <strong><?php echo $count ?></strong> <small>Total Orders</small></li>
                
                
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
