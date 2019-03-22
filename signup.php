<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta charset="utf-8">
	<meta charset=""/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="topnav">
	  	<a href="index.php?#home">Home</a>
	  	<a href="#contact">Contact</a>
	  	<a href="index.php?#about">About Us</a>
		<a href="login.php" style="float:right">Login</a>
		<a href="signup.php" style="float:right">Sign Up</a>
	</div>
	<br>
	<form action="/action_page.php">
		<div class="container">
			<h1>Register</h1>
			<p>Please fill in this form to create an account.</p>
			<hr>
			
			<label for="email"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>
			
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
			<hr>
			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<button type="submit" class="registerbtn">Register</button>
		</div>

		<div class="container signin">
			<p>Already have an account? <a href="login.php">Login</a>.</p>
		</div>
	</form>

	<div class="footer">
		<div style="text-align:center">
			<h3 id="contact" style="font-size: 24px; margin:8px">Contact Me</h3>
			<p style="font-size: 14px; margin:4px;">University of Pittsburgh</p>
			<p style="font-size: 14px; margin:4px;"> Joc101@pitt.edu</p>
			<span class="footer_text" style="font-size: 10px;">Copyright © 2019 All Rights Reserved. </span>
		</div>
	</div>
</body>
</html>