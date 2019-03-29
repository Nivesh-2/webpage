<!DOCTYPE>
<html>
<head>
	<title>Freeapp</title>
	<link rel="stylesheet" type="text/css" href="ind.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
	<div class="cont">
		<button class="form">Upload Here</button>
	</div>
	<div class="upload-box">
		<div class="hide-upload-btn"><i class="fas fa-times"></i></div>
		<div class="container">
			<form class="upload-form">
				<h1>Upload Here!</h1>
				<div class="form-group">
					<label>User Name</label>
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="form-group">
      				<label for="exampleInputFile">File input</label>
      				<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      				<small >This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    			</div>
    			<button class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		$(".form").on("click",function(){
			$(".upload-box").toggleClass("showed");
		});
		$(".hide-upload-btn").on("click",function(){
			$(".upload-box").toggleClass("showed");
		});
	</script>


</body>
</html>