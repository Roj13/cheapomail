<!DOCTYPE html>
<?php include_once 'connect.php';

?>
<html>
<title>Cheapomail</title>
<body>
<form  method="POST" action="home.php">

<fieldset>
<legend>Login</legend>

<label>Username: </label><input type="text" name= "username" placeholder="Username" /><br/><br/>

<label>Password: </label><input type="password" name="password" placeholder="Password" /><br/><br/>


<input type="submit" value="Submit" />
<input type="reset" value="Reset" />

</fieldset>


</form>



</body>
</html>