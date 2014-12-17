<?php

$conn = new mysqli("localhost","root","","cheapomail");


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// echo "Connected Successful";


if(isset($_POST["username"]) || isset($_POST["password"]) || isset($_POST["lastname"])  || isset($_POST["firstname"])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];

	$conn->query("INSERT INTO `user`(`firstname`, `lastname`, `password`, `username`) VALUES ('$fname','$lname',md5('$password'),'$username')");
}




if(isset($_POST["rec"])){

	$message=$_POST["message"];
	$rec=$_POST["rec"];
	$subject=$_POST["subject"];
	$sql = "INSERT INTO `message`(`body`, `subject`) VALUES ('$message','$subject')";
	$conn->query($sql);
}

$conn->close();

?>