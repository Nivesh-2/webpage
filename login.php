<?php  ?>
<!DOCTYPE>
<html>
<head>
	<title>Freeapp</title>
	<link rel="stylesheet" type="text/css" href="ind.css">
	<link rel="stylesheet" type="text/css" href="log.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<nav id="nav" style="padding-top: 30px; padding-left: 50px;">
		<h1>LOGO</h1>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
	</nav>
	<div class="container">
		<div class="box">
			<h1>Login</h1>
			<form method="post">
				<div class="inputBox">
					<input type="text" name="user" >
					<label>User ID</label>
				</div>
				<div class="inputBox">
					<input type="password" name="pass">
					<label>Password</label>
				</div>
				<button class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</body>