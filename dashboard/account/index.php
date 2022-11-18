<?php

	session_start();

	//if (!isset($_SESSION["name"])) {

		//header("location: https://cronicle.space/login/");

	//}

	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "cronicle";

	$db = mysqli_connect($host, $user, $password, $database);

	$_SESSION['name'] = 'Kevin Wijaya';
	$_SESSION['email'] = 'kevinwijayaa15@gmail.com';

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>
	<!-- Webpage Title -->
	<title>Account | Cronicle</title>

	<!-- Website Icon -->
	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

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
	<link rel = "stylesheet" href = "../../main/css/style.css">

	<style>
		/** Default */
		h1 {
			font-size: 1.45em;
		}

		h2  {
			font-size: 1.25em;
			margin-bottom: 25px;
		}

		p {
			margin-bottom: 50px;
		}

		a {
			font-family: Segoe UI, roboto, Helvetica Neue, helvetica, arial, sans-serif;
		}

		div.container-fluid, div.col-2, div.col-10, div.col-12 {
			padding: 0;
		}

		div.row {
			margin: 0;
		}




		/** Wrapper */
		div.wrapper {
			display: flex;
			transition: all 0.3s;
		}




		/** Left Navbar */
		div.nav {
			background-color: #fafbfc;
			min-width: 300px;
			max-width: 300px;
			height: 100vh;
			padding: 55px 5px 55px 0;
			box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .15);;
			position: sticky;
			top: 0;
			transition: all .3s;
		}

		div.nav.active {
			margin-left: -240px;
		}

		div.nav p {
			margin-bottom: 0;
		}

		div.nav div.logo {
			margin-left: 30px;
			margin-bottom: 15px;
		}

		div.nav div.logo p {
			color: black;
			font-weight: bold;
			font-size: 1.35em;
			margin-top: 1.5px;
			margin-left: 5px;
		}

		div.nav p.title {
			color: #53575e;
			font-weight: bold;
			font-size: .75em;
			border-top: 1px solid rgba(57,76,96,0.15);
			padding: 25px 0 15px 10px;
			margin-top: 25px;
			margin-right: 20px;
			margin-left: 20px;
		}

		div.nav a.signout {
			color: black;
			width: 98.5%;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
			position: absolute;
			left: 0;
			bottom: 55px;
			padding: 15px 0 10px 30px;
		}

		div.nav a.signout:hover {
			background-color: rgb(245, 245, 245);
		}

		div.nav a.signout p {
			margin-left: 10px;
		}

		div.nav a.nav-link {
			color: black;
			padding-left: 30px;
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-bottom-left-radius: 0;
		}

		div.nav a.nav-link:hover, a.nav-link:focus, a.nav-link:active {
			background-color: rgb(245, 245, 245);
		}

		div.nav a.nav-link img[alt *= "Icon"] {
			margin-top: 3.5px;
			margin-right: 10px;
		}

		div.nav a.nav-link.active {
			background-color: #dfdbfb;
			color: var(--cpurple);
			font-weight: bold;
			border-left: 5px solid var(--cpurple);
			padding-left: 25px;
		}

		div.nav a.nav-link.active:hover {
			background-color: #dfdbfb;
		}




		/** Content */
		div.tab-content {
			width: 100%;
			min-height: 100vh;
			padding: 65px 50px;
			animation: fade-in 1.25s ease;
			transition: all .3s;
		}




		/** Top NavBar */
		div.top-nav {
			background-color: #fafbfc;
			width: 100%;
			border-bottom: 1px solid #e2e2e2;
			padding: 20px 50px;
		}

		div.top-nav h1 {
			color: #343431;
			font-size: 1.35em;
			margin-bottom: 0;
		}

		div.top-nav span.icon-bar {
			background-color: var(--cpurple);
			border-radius: 5px;
			display: block;
			width: 20px;
			height: 3.25px;
			margin-bottom: 3.25px;
			margin-right: 15px;
		}
		



		/** Responsive CSS */
		@media (max-width: 1000px) {

			div.nav.active {
				margin-left: 0;
			}
		
		}

		@media (max-width: 960px) {

			div.tab-content {
				min-width: 100vw;
				max-width: 100vw;
			}
			
		}

	</style>
</head>
<body>

	<div class = "container-fluid">

		<div class = "wrapper">

	    	<div class = "nav flex-column nav-pills" id = "v-pills-tab" role = "tablist" aria-orientation = "vertical">

	    		<!-- Cronicle Logo -->
	    		<div class = "row logo">

	    			<img src = "../../main/image/logo.webp" alt = "Cronicle Logo" width = "35" height = "35">

					<p>Cronicle</p>

				</div>

				<p class = "title">MY ACCOUNT</p>

				<!-- Links -->
		      	<a class="nav-link active" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">

		      		<div class = "row">

			      		<img src = "image/icon settings active.svg" alt = "Settings Icon" width = "15" height = "15">

			      		<p>Account Settings</p>

			      	</div>

		      	</a>

		      	<a class = "signout" href = "signout.php">

		      		<div class = "row">

			      		<img src = "image/icon signout.svg" alt = "Sign Out Icon" width = "20" height = "20">

			      		<p> Sign Out </p>

			      	</div>

		      	</a>
		    
		    </div>

		    <div class = "tab-content" id = "v-pills-tabContent">

		    	<!-- Settings Page -->
		    	<div class="tab-pane settings fade show active" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

		    		<h1>Account Settings</h1>

		    		<h2>Full Name</h2>

		    		<p> <?php echo $_SESSION['name']; ?> </p>

		    		<h2>Email</h2>

		    		<p> <?php echo $_SESSION['email']; ?> </p>

		  		</div>
		    
		    </div>

		</div>

	</div>

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>