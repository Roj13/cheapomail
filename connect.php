<?php
session_start();

$conn = new mysqli("localhost","root","","cheapomail");


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// echo "Connected Successful";


if(isset($_POST["username"]) || isset($_POST["password"]) ){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result = $conn->query("select *  user where password = md5('$password') and username='$username'");
	$_SESSION['uid'] = $result;
}



$conn->close();

?>