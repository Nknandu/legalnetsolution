<?php
include('insert.php');
 		
 		
 		
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
   $address = $_POST["address"];
    $number = $_POST["number"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $status='NEW';
     $sql ="select * from registration where name = '".$name."' and email = '".$email."' and adderss = '".$address."'  and phone = '".$number."'and username = '".$username."' and password = '".$password."' and status = '".$status."' ";
 
  
    $res = mysql_query($sql) or die(mysql_error());
    $count = mysql_num_rows($res);  
     
   if ($count == 0) {
       $query ="INSERT INTO  registration(name,email,adderss,phone,username,password,clientname,status) values('$name','$email','$address','$number','$username','$password','$name','NEW')";
        //print_r($query);
        mysql_query($query);
       echo" <script>alert('Registration successfully');window.location.href='index.php';</script>";
	   
        
           
        
    } else {
        
        echo"<script> alert(added successfully)</script>";
            
        
        
    }
}
?>