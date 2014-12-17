


<form name = "myForm" method="POST" id="formsub" onsubmit="return validateForm()">

<fieldset>

<legend>New User</legend>

<label>Username: </label><input type="text" name="username" placeholder="Username" /><br/><br/>

<label>Password: </label><input type="password" name="password" placeholder="Password" /><br/><br/>

<label>First Name: </label><input type="text" name="firstname" placeholder="First Name"><br/><br/>

<label>Last Name</label><input type="text" name="lastname" placeholder="Last Name"><br/><br/>


<input type="submit" value="Submit"/>
<input type="reset" value="Reset" />

</fieldset>
</form>


<?php require 'signup.php' ?>
