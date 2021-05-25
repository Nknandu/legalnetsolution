<?php
 include('confi.php');
$vid = $_GET['id'];
$sql = "delete from bankdetails where id='$vid'";
if ($conn->query($sql) === TRUE) {
    echo " <script>alert(' Removed Successfully...!');window.location.href='viewbank.php';</script>";
} else {
    echo " <script>alert('Details not Removed!...');window.location.href='viewbank.php';</script>";
}
?>