 <?php
$mysql_hostname = "localhost";
$mysql_user = "solution_ABCDEF";
$mysql_password = "ABCDEFWebSo1234#";
$mysql_database = "solution_legal";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some  wrong");
mysql_select_db($mysql_database, $bd) or die("error");
  
session_start();
$user_check=$_SESSION['login_user'];
 
$ses_sql=mysql_query("select username from registration where username='$user_check' ");
 
$row=mysql_fetch_array($ses_sql);
 
$login_session=$row['username'];
 
if(!isset($login_session))
{
header("Location: login.php");
}
?>