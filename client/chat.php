<?php
// Start the session
session_start();
   include('confi.php');
 		
   $username=$_SESSION["username"] ;
  // $id= $_SESSION["id"] ;
  $name= $_SESSION["clientname"] ;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>legal net solution</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
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
include('navbar.php');
?>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<?php
include('side.php');
?>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Chat option</a> </div>
    <h1>Chat option</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-chat">
          <div class="widget-title"> <span class="icon"> <i class="icon-comment"></i> </span>
            <h5>Let's do a chat</h5>
          </div>
          <div class="widget-content nopadding">
            <!--<div class="chat-users panel-right2">
              <div class="panel-title">
                <h5>Online Users <?php echo $_SESSION["clientname"] ; ?> </h5>
              </div>
              <div class="panel-content nopadding">
                  <ul class="contact-list">
                  <li id="user-Alex" class="online"><a href=""><img alt="" src="img/demo/av1.jpg" /> <span>Alex</span></a></li>
                  <li id="user-Linda"><a href=""><img alt="" src="img/demo/av2.jpg" /> <span>Linda</span></a></li>
                  <li id="user-John" class="online new"><a href=""><img alt="" src="img/demo/av3.jpg" /> <span>John</span></a><span class="msg-count badge badge-info">3</span></li>
                  <li id="user-Mark" class="online"><a href=""><img alt="" src="img/demo/av4.jpg" /> <span>Mark</span></a></li>
                  <li id="user-Maxi" class="online"><a href=""><img alt="" src="img/demo/av5.jpg" /> <span>Maxi</span></a></li>
                </ul>
              </div>
            </div>-->
            <div class="chat-content panel-left2">
                <div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>message-info</h5>
        </div>
        <div  class="widget-content nopadding">
          <form action="#" method="POST" class="form-horizontal">
            
             <div class="control-group">
              <label class="control-label">from :</label>
              <div class="controls">
                <input type="text" class="span11"  name="lawyer" value="<?php echo $_SESSION["clientname"] ; ?>" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">To  :</label>
              <div class="controls">
                   <?php
           include('confi.php');
                    $get=mysql_query("SELECT lawyername FROM caseregistration where clientname = '".$_SESSION["clientname"]."'");
                    ?>
                <select name="client" >
                    <option value="">Please select</option>
                   <?php
            while($row = mysql_fetch_assoc($get))
            {
            ?>
                  <option value="<?php echo($row['lawyername'])?>"><?php echo($row['lawyername'])?></option>
                   <?php } ?>
                </select>
            </div>
            </div>
            
    
            <div class="control-group">
                <label class="control-label">Message</label>
                <div class="controls">
                    <input type="textarea"  style="" class="span20" name="mesage"/>
               
              </div>
            </div>
            
           
            <div class="form-actions">
              <button type="submit"  name="submit" class="btn btn-success">send</button>
            </div>
          </form>
        </div>
      </div>
              <?php
include('confi.php');
 		
 		
 		
if (isset($_POST["submit"])) {
    $client = $_POST["client"];
    $lawyer = $_POST["lawyer"];
   $mesage = $_POST["mesage"];
    $clientname =  $_SESSION["clientname"];
    $approve="NEW";
     $sql ="select * from message where client = '".$lawyer."' and lawyer ='".$client."' and message = '".$mesage."'  and clientname = '".$clientname."'  ";
 
  
    $res = mysql_query($sql) or die(mysql_error());
    $count = mysql_num_rows($res);  
     
   if ($count == 0) {
       $query ="INSERT INTO  message(client,lawyer,message,clientname,status) values('$lawyer','$client','$mesage','$clientname','$approve')";
       
        mysql_query($query);
       echo" <script>alert('Message Sended successfully');</script>";
        
           
        
    } else {
        
        echo"<script> alert(Error)</script>";
            
        
        
    }
}
?>
 
            </div>
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
<script src="js/matrix.js"></script> 
<script src="js/matrix.chat.js"></script>
</body>
</html>
