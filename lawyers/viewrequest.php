<?php
// Start the session
session_start();
   include('confi.php');
 		
   $username=$_SESSION["username"] ;
  // $id=$_SESSION["id"] ;
 $lawyername =$_SESSION["name"] ;
 
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
      
        <!--<div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Static table with checkboxes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>-->
       
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table <?php echo$_SESSION["name"]; ?></h5>
          </div>
          <div class="widget-content nopadding">
              
             
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sl.no</th>
                  <th>Caseid</th>
                  <th>CaseCategory</th>
                  <th>Lawyer</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                   <?php
                   include('confi.php');
                   
 		 
                       $count = 1;
                       $sql = "SELECT * from request where lawyer ='".$_SESSION["name"]."'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo"<td width='10'>" . $count . "</td>";
                                                  echo"<td width='100'>" . $row["caseid"] . "</td>";
                                                  echo"<td width='100'>" . $row["casecategorye"] . "</td>";
                                                   echo"<td width='100'>" . $row["lawyer"] . "</td>";
                                                 echo"<td width='100'>" . $row["message"] . "</td>";
                                                 
                                                 
                                                  if($row["approve"]=="NEW")
                                                  
                                                {
                                                echo'<td  style = "text-align:center;"> <a class="btn btn-success"  href="approverequest.php?id='.$row["id"].'">Accept</a>';
                                                echo' <a class="btn btn-danger"  href="rejectrequest.php?id='.$row["id"].'">Reject</a></td>';
                                                }else{
                                                  echo'<td  style = "text-align:center;"> <a class="btn btn-warning " disabled>Approved</a></td>';
                                      
                                                } 
                                                 
                            
                                               //   echo '<td><a class="btn btn-warning " href= "editrequest.php?id='.$row["id"].'"><i class="icon-pencil"></i></a><a class="btn btn-danger" href="deleterequest.php?id='.$row["id"].'"><i class="icon-trash"  ></i></a></td>';
                                                echo "</tr>";
                                                $count++ ;
                                                
                                                }
                                                ?>
                                                <?php
                                            }
                                             else {
                echo "no requests  ";
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
