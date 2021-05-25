<?php
// Start the session
session_start();
    include ('config.php');
  //  $id= $_SESSION["id"] ;
    $name= $_SESSION["clientname"] ;
    ?>




<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>LEGAL NET SOLUTION</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="POST" action="#">
				 <div class="control-group normal_text"> <h3>Legal Net Solution </h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="oldpassword" placeholder="oldPassword" />
                        </div>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="newpassword" placeholder="newpassword" />
                        </div>
                    </div>
                </div>
               <!--  <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="confirm" placeholder="Confirm Password" />
                        </div>
                    </div>
                </div>-->
                <div  class="form-actions">
               <!--<span class="pull-left"><a href="#" class="flip-link btn btn-info">Lost password?</a></span>-->
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
       if (isset($_POST['submit'])) {
            $old_pass = $_POST['oldpassword'];
            $pass = $_POST['newpassword'];
            $re_pass = $_POST['confirm'];
            
               echo $username ; 
               echo $old_pass ;
               echo $new_pass ;
               echo $re_pass;
                        
                            if ($old_pass === $pass ) {
                                echo "<script>alert('Old and New password are same , Retype Password !');</script>";
                            }
                            
                           
                           //else if ($new_pass != $re_pass) {
                              //  echo "<script>alert(' New Password are not matching !');</script>";
                          //  } -->
                            else {
                                $qu = "update registration set password='$pass' where clientname='$name'";
                                echo $qu;
                                $res = $conn->query($qu);
                                if ($res === TRUE) {
                                    echo "<script>window.location.href='index.php';</script>";
                                } else {
                                    echo "<script>window.location.href='#';</script>";
                                }
                            }
                       
                   
            
        }
?>
    
