<?php
// Start the session
session_start();
   include('confi.php');
 		
   $username = $_SESSION["username"] ;
 $lawyername = $_SESSION["name"] ;
    ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
<title>Legalnetsolution</title>
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
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php
include('header.php');
?>

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->

<?php
include('side.php');
?>

<!--close of sidemenu-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables<?php echo $_SESSION["name"] ; ?></a> </div>
    <h1>Case Details</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
              
              
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sl.no</th>
                  <th>Date of case</th>
                  <th>Time</th>
                  <th>Place</th>
                  <th>Station</th>
                  <th>Details</th>
                  <th>Distric</th>
                  <th>Client</th>
                </tr>
              </thead>
              <tbody>
                   <?php
                   include('confi.php');
 		 
                       $count = 1;
                       $sql = "SELECT * from caseregistration ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                if($row["status"]=='NEW'){
                                                echo "<tr>";
                                                echo"<td width='10'>" . $count . "</td>";
                                                  echo"<td width='100'>" . $row["date"] . "</td>";
                                                  echo"<td width='100'>" . $row["time"] . "</td>";
                                                   echo"<td width='100'>" . $row["place"] . "</td>";
                                                 echo"<td width='100'>" . $row["station"] . "</td>";
                                                  echo"<td width='100'>" . $row["details"] . "</td>";
                                                  echo"<td width='100'>" . $row["distric"] . "</td>";
                                                 echo"<td width='100'>" . $row["clientname"] . "</td>";
                                                 
                                                }
                                                  
                                                 // echo '<td><a class="btn btn-success " href= "editcase.php?id='.$row["id"].'"><i class="icon-pencil"></i></a><a class="btn btn-danger" href="deletecase.php?id='.$row["id"].'"><i class="icon-trash"  ></i></a></td>';
                                                
                                                
                                                echo "</tr>";
                                                $count++ ;
                                                ?>
                                                <?php
                                            }
                                            } else {
                echo "Error";
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
