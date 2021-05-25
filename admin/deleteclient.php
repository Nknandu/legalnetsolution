<?php
 $conn = new mysqli("localhost", "solution_ABCDEF", "ABCDEFWebSo1234#",'solution_legal');
  mysql_connect("localhost", "solution_ABCDEF", "ABCDEFWebSo1234#");
 		mysql_select_db("solution_legal");
$vid = $_GET['id'];
$sql = "delete from registration where id='$vid'";
if ($conn->query($sql) === TRUE) {
    echo " <script>alert(' Removed Successfully...!');window.location.href='viewclients.php';</script>";
} else {
    echo " <script>alert('Details not Removed!...');window.location.href='viewclients.php';</script>";
}
?>