<?php session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include ('confi.php');?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="POST" action="">
				 <div class="control-group normal_text"> <h3>Legal Net Solution</h3> <br>  <a href="../admin/">Admin</a>- <a href="#">Lawyer</a> </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="user" placeholder="Username" />
                        </div>
                </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div  class="form-actions">
                <!--<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>-->
                    <span class="pull-right"><input type="submit" name="submit" class="btn btn-success"/></input></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
<?php
include('confi.php');

if (isset($_POST["submit"])) {
    $username = $_POST['user'];
    $pass = $_POST['password'];
    
   $res = mysql_query("select * from  addlawyers where  user='".$username."' and password='".$pass."' ") or die(mysql_error());
   $count = mysql_num_rows($res);
   

 
  if ($count != 0) {
      $id='';
      $lawyername='';

                   
                  
                   while($row = mysql_fetch_array($res))   {
                           $id = $row["id"];
                           $lawyername = $row["lawyername"];
                          $username = $row["user"];
                            
                             }
                         
     
                        
     
     
 $_SESSION["username"] = $username;
   echo $_SESSION["password"] = $pass;
  echo $_SESSION["name"] = $lawyername;
    
   
   
    echo "<script>window.location.href='index1.php';</script>";
  }
 
    
  else {
        echo "<script>alert('Invalid Username or Password, Try Again!')</script>";
		
    }
  
}
?>
    
    
    
    
    






