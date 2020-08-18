<?php
//Database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'demo';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 
 
//insert into database
if(!empty($_POST)) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message']; 
 mysqli_query($conn, "insert into users (name, email, message) values ('$name', '$email', '$message')"); 
 
 echo "Name : ".$name."</br>";
 echo "Email : ".$email."</br>";
 echo "Message : ".$message."</br>";
}
?>