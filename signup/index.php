<?php

	session_start();

	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "cronicle";

	$db = mysqli_connect($host, $user, $password, $database);

	if (isset($_POST["register"])) {

		//get user data
		$email = $_POST["email"];
		$name = $_POST["name"];
		$password = $_POST["password"];


		//check whether user already has an account
		$sql = "SELECT * FROM users WHERE `name` = '$name' AND `email` = '$email' AND `password` = '$userpassword'";

		$result = mysqli_query($db, $sql);


		if (mysqli_num_rows($result) == 0) {

			//create new account
			$sql = "INSERT INTO users(`name`, `email`, `password`) VALUES('$name','$email','$password')";

			$query = mysqli_query($db, $sql);


			//create user table
			$sqltable = "CREATE TABLE `$email` (id int NOT NULL AUTO_INCREMENT,title TEXT, PRIMARY KEY (id));";

			$querytable = mysqli_query($db, $sqltable);

			//start session
			$_SESSION["name"] = $name;
			$_SESSION["email"] = $email;

			header("location: https://cronicle.space/dashboard/");

		}
		
	}

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>
	<!-- Webpage Title -->
	<title>Sign Up | Cronicle</title>

	<!-- Website Icon -->
	<link rel = "shortcut icon" type = "image" href = "../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8"> <!-- Language -->
	<meta http-equiv='content-language' content='en-us'> <!-- Language -->

	<meta name = "viewport" content = "width = device-width, initial-scale = 1"> <!-- Mobile Responsiveness -->

	<!-- Bootstrap 4.1 CSS Library -->
	<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7W1M8PDX1X"></script>
	
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-7W1M8PDX1X');
	</script>

	<!-- Main CSS -->
	<link rel = "stylesheet" href = "../main/css/style.css">

	<style>
		/** Nav Bar */
		nav {
			background: transparent;
			box-shadow: none;
		}

		nav span.d-flex p {
			font-weight: bold;
			margin-top: 10px;
			margin-bottom: 0;
			margin-right: 25px;
		}

		nav button.primary {
			margin-top: 0;
		}




		/** Header Content */
		header {
			min-height: 100vh;
		}

		header img.background {
			width: 100vw;

			position: absolute;
			bottom: 0;
			left: 0;
			z-index: -1;
		}

		header img {
			user-drag: none;  /** Disable User Select */
		   	user-select: none;
		   	-moz-user-select: none;
		   	-webkit-user-drag: none;
		   	-webkit-user-select: none;
		   	-ms-user-select: none;
		}



		/** Content */
		div.content {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -40%);
		}




		/** Form */
		form {
			background-color: white;
			box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .15);
			border-radius: 5px;
			padding: 40px 55px;
			width: 90vw;
			max-width: 465px;
		}

		form h2 {
			font-size: 1.85em;
			text-align: center;
			margin-bottom: 20px;
		}

		form p {
			font-size: 12px;
			margin-bottom: 5px;
		}

		form input {
			width: 100%;
			font-size: .85em;
			margin-bottom: 25px;
			padding: 10px 15px;
			border-radius: 5px;
			border: 1px solid #e4e4e4;
		}

		form input:focus, form input:active {
			outline: none;
		}

		form button.primary {
			width: 100%;
		}

		form p.fail {
			color: red;
			font-weight: bold;
			margin-top: -15px;
			margin-bottom: 10px;
		}




		/** Additional Content */
		p.additional, p.additional a {
			color: white;
			text-align: center;
			font-size: .85em;
			margin-top: 35px;
		}

		p.additional a {
			text-decoration: underline;
		}

		p.additional a:hover, p.additional a:focus, p.additional a:active {
			font-weight: bold;
		}




		/** Responsive CSS */
		@media (max-width: 785px) {

			nav span.d-flex p, nav button.primary {
				display: none;
			}

		}

	</style>
</head>
<body>

	<!-- Content -->
	<header>

		<!-- Background Image -->
		<img src = "image/background.svg" alt = "Gradient Image" class = "background">

		<!-- NavBar -->
		<nav class = "navbar navbar-expand-lg">

			<div class = "container">

		  		<a class = "navbar-brand" href = "https://cronicle.space">
		  			<div class = "row">
		  				<img src = "../main/image/logo.webp" alt = "Cronicle Logo" width = "50" height = "50">

						<p>Cronicle</p>
					</div>
				</a>

			  	<div class = "row">
			    	
			    	<span class = "navbar-nav mr-auto"></span>

			   		<span class = "d-flex">

			   			<p>Already have an account?</p>
			   		
			   		</span>

					<span class = "d-flex">

						<a href = "https://cronicle.space/login/">
				    		<button class = "primary">Log In</button>
						</a>

					</span>

			  	</div>

			</div>

		</nav>

		<div class = "content">

			<!-- Form -->
			<form method = "POST" class = "animate">

				<h2>Sign Up</h2>

				<p>Full Name</p>
				<input type = "text" name = "name" placeholder = "John Doe" required>

				<p>Email</p>
				<input type = "email" name = "email" placeholder = "example@yoursite.com" required>

				<p>Password</p>
				<input name = "password" type = "password" placeholder = "password123" required>

				<?php

					if (isset($_POST["register"])) {

						//get user data
						$email = $_POST["email"];
						$name = $_POST["name"];
						$password = $_POST["password"];


						//check whether user already has an account
						$sql = "SELECT * FROM users WHERE `name` = '$name' AND `email` = '$email' AND `password` = '$userpassword'";

						$result = mysqli_query($db, $sql);

						//print error
						if (mysqli_num_rows($result) != 0) {

							echo "<p class = 'fail'>Email already taken!</p>";

						}
					}

				?>

				<button type = "submit" name = "register" value = "Sign up" class = "primary">Sign Up</button>

			</form>

			<p class = "additional">

				Already have an account? <a href = "https://cronicle.space/login/">Log In</a>
			
			</p>

		</div>

	</header>

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>