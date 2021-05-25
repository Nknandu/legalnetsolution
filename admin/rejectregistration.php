<?php
include("confi.php");
$id = $_GET['id'];


$sql = "update   registration set status='Rejected' where id='$id'";

if ($conn->query($sql) === TRUE) {

    echo " <script>alert(' Success...!');window.location.href='viewclients.php';</script>";
} else {
    echo " <script>alert('Sorry !...');window.location.href='viewclients.php';</script>";
}
?>