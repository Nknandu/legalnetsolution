<?php

/*$mysql_hostname = "localhost";
$mysql_user = "solution_ABCDEF";
$mysql_password = "ABCDEFWebSo1234#";
$mysql_database = "solution_legal";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some  wrong");
mysql_select_db($mysql_database, $bd) or die("error");*/


  //Start the Session
session_start();
$mysql_hostname = "localhost";
$mysql_user = "solution_ABCDEF";
$mysql_password = "ABCDEFWebSo1234#";
$mysql_database = "solution_legal";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some  wrong");
mysql_select_db($mysql_database, $bd) or die("error");


//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['user']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['user'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM registration WHERE username='$username' and password='$password'";

$result = mysqli_query($connection, $query) or die(fgf);

$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "";
//echo "This is the Members Area
//";
echo "<a href='index.php'>Logout</a>";
 
}else

echo"yuokhngknmhgnk";
//3.2 When the user visits the page first time, simple login form will be displayed.
?>





