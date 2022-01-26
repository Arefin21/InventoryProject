<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Regtration Form </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/register.css">
</head>
<body>

	<form method="post" action="register.php" enctype="multipart/form-data">
<div class="container">
		<h1>Registration Form</h1>
		<hr>
		<div>
			<label>Your Name<span>*</span></label>
			<input name="name" id="name" type="text" placeholder="Enter Your Name" required>
		</div>

		<div>
			<label>Your Userame<span>*</span></label>
			<input name="uname" id="uname" type="text" placeholder="Enter Your Userame" onchange="checkUsername(this.value); checkUser(this.value);" required>
			<small id="checktext"></small>
			<small id="checkuser"></small>
		</div>

		<div>
			<label>Your Email</label>
			<input name="email" id="email" type="text" placeholder="Enter Your Email">
		</div>

		<div>
			<label>Password<span>*</span></label>
			<input name="pass" id="pass" type="password" placeholder="Enter Your Password" required>
		</div>

		<div>
			<label>Repeat Password<span>*</span></label>
			<input name="r_pass" id="rpass" type="password" placeholder="Confirm your password" required>
		</div>

		<div style="text-align: center">
			<p><span>***</span>By creating an account you agree to our Terms & Conditions.</p>
		</div>

		<div style="text-align: center ; padding: 20px;" >
			<input type="submit" name="submit" class="btn btn-success" value="Submit">
		</div>

		<div style="text-align: center">
			<p>Already Have an Account?<a href="login.php">Sign In</a></p>
		</div>
</div>
	</form>

</body>
</html>