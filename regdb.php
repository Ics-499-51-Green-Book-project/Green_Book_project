<?php

error_reporting(0);  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

//Database connection
$connection= new mysqli("localhost", "root", "Farxaan143!","GreenBookSystem");
if($connection->connect_error){
die ("Failed to connect: ".$connection->connect_error);
}
else {
    $stmt = $connection->prepare("insert into register(fname,lname,phone,email,passwordS)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$fname,$lname,$phone,$email,$passwordS);
    $stmt->execute();
    echo "Registratoin Successfully...";
    $stmt->close();
    $connection->close();
 
}


?>