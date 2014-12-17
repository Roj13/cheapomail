<!DOCTYPE html>
<html>
<title>Home</title>
<head>
<script src="//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js"></script>	
<style>
div#sender {
    display: none;
}
</style>

</head>
<body>
	
<div id="nav">
	<nav>
  <a href="#Compose" id="compose">Compose</a> |
  <a href="index.php">Logout</a> |
  <a href="#">Inbox</a> |
  <a href="#NewUser" id="newuser">New User</a> |
	</nav> 

</div>

<br>
<br>
<br>
<br>
<h1> Welcome to Your Profile </h1>
<p>Not complete</p>
<div id="typee">


</div>


<div id="sender" >
<form method="post">
            <center>
                Subject:    <input type="text" id="subject" name="subject"><br>
                Recipents:  <input type="text" id="rec" name="rec"><br>
                Message:    <textarea id="message" rows="4" cols="50" placeholder="Type Message Here!!! " name="message"></textarea> <br>
               <input type="submit" id="send" value="Send" />
            </center>
</form>
</div>

<script type="text/javascript" src="ajax.js"></script>
<?php require_once 'signup.php' ?>
</body>





</html>