<?php
include("confi.php");
$id = $_GET['id'];


$sql = "update   request set approve='Accepted' where id='$id'";

if ($conn->query($sql) === TRUE) {

    echo " <script>alert(' Success...!');window.location.href='viewrequest.php';</script>";
} else {
    echo " <script>alert('Sorry !...');window.location.href='viewrequest.php';</script>";
}
?>