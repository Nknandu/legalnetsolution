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
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
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
<!--close of sidemenu-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Request</a> </div>
    <h1>Request Details</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
     
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table </h5>
          </div>
          <div class="widget-content nopadding">
              
             
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sl.no</th>
                  <th>Caseid</th>
                  
                  <th>Lawyer</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                   <?php
                   include('confi.php');
 		 
                       $count = 1;
                       $sql = "SELECT * from request where clientname = '".$_SESSION["clientname"]."' ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               // if($row["approve"]=='Accepted'){
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo"<td width='10'>" . $count . "</td>";
                                                  echo"<td width='100'>" . $row["caseid"] . "</td>";
                                                 // echo"<td width='100'>" . $row["casecategorye"] . "</td>";
                                                   echo"<td width='100'>" . $row["lawyer"] . "</td>";
                                                 echo"<td width='100'>" . $row["message"] . "</td>";
                                                 
                                                 
                                                 
                                                 
                            
                                                  echo "<td width='100'>your account was  ". $row["approve"] ."</td>";
                                                echo "</tr>";
                                                $count++ ;
                                                ?>
                                                <?php
                                            }
                                            
                                            } else {
                echo "Sorry No Requests ";
            }
                                            $conn->close();
                                            ?>
                </tbody>
            </table>
          </div>
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
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
