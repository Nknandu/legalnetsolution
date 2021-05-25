<?php
include("confi.php");
$id = $_GET['id'];


$sql = "update   caseregistration set status='Rejected' where id='$id'";

if ($conn->query($sql) === TRUE) {

    echo " <script>alert(' Success...!');window.location.href='viewcase.php';</script>";
} else {
    echo " <script>alert('Sorry !...');window.location.href='viewcase.php';</script>";
}
?>