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

	//$table = $_SESSION["email"];

	$table = 'kevinwijayaa15@gmail.com';

	$_SESSION['name'] = 'Kevin Wijaya';

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>
	<!-- Webpage Title -->
	<title>Dashboard | Cronicle</title>

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
		/** Default */
		body {
			background-color: #eee;
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
			min-width: 240px;
			max-width: 240px;
			height: 100vh;
			padding: 25px 5px 25px 0;
			border-right: 1px solid #e2e2e2;
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
			margin-bottom: 25px;
		}

		div.nav div.logo p {
			color: black;
			font-weight: bold;
			font-size: 1.15em;
			margin-top: -1.5px;
			margin-left: 2.5px;
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

		div.nav a.profile {
			color: black;
			width: 98.5%;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
			position: absolute;
			left: 0;
			bottom: 25px;
			padding: 5px 0 5px 30px;
		}

		div.nav a.profile:hover {
			background-color: rgb(245, 245, 245);
		}

		div.nav a.profile p {
			margin-top: 7.5px;
			margin-left: 10px;
			max-width: 80%;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}

		div.nav a.nav-link {
			color: black;
			padding-left: 30px;
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-bottom-left-radius: 0;
		}

		div.nav a.nav-link:hover {
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

		div.nav a.nav-link.active img[alt *= "Home Icon"] {
			content: url("image/icon home active.svg");
		}

		div.nav a.nav-link.active img[alt *= "Notifications Icon"] {
			content: url("image/icon notifications active.svg");
		}

		div.nav a.nav-link.active img[alt *= "Activities Icon"] {
			content: url("image/icon activities active.svg");
		}

		div.nav a.nav-link.active img[alt *= "Resources Icon"] {
			content: url("image/icon resources active.svg");
		}




		/** Content */
		div.tab-content {
			width: 100%;
			min-height: 100vh;
			transition: all .3s;
		}

		div.content {
			padding: 50px;
		}

		div.content h2 {
			color: #2a2e34;
			font-size: 1.25em;
			margin-bottom: 25px;
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
		



		/** Home Page */
		div.home col-12 {
			padding: 0;
		}

		div.home h2 {
			color: #2a2e34;
			font-size: 1.25em;
			margin-top: 50px;
			margin-bottom: 25px;
		}

		div.home div.left {
			background-color: #fafbfc;
			min-height: 100vh;
			padding: 0 50px;
			border-right: 1px solid #e2e2e2;
		}

		div.home div.right {
			padding: 0 50px;
		}

		div.home div.notif, div.home div.for-you {
			font-size: .85em;
			text-align: center;
			padding: 0;
		}

		div.home div.notif div.empty {
			border: 1px solid #e9ebf0;
			padding: 25px;
		}

		div.home div.notif div.filled {
			display: none;

			text-align: left;
			font-size: .95em;
			font-weight: bold;
			box-shadow: 0 5px 20px #00000014;
			padding: 25px;
		}

		div.home div.for-you {
			font-size: .95em;
			line-height: 1.65em;
			text-align: left;
			box-shadow: 0 5px 20px #00000014;
			padding: 25px;
			margin-bottom: 50px;
		}

		div.home div.notif p, div.home div.for-you p {
			margin-bottom: 0;
		}

		div.home div.trending div.col-sm-4, div.home div.trending div.col-sm-7 {
			padding: 0;
		}

		div.home div.trending h2 {
			font-size: 1.15em;
			margin-top: 0;
		}

		div.home div.trending h2:hover, div.trending h2:focus, div.trending h2:active {
			color: var(--cpurple);
		}

		div.home div.trending img.full {
			box-shadow: 0 5px 20px #00000014;
		}

		div.home div.trending img[src *= "author"] {
			box-shadow: none;
			margin-bottom: 0;
			border-radius: 50%;
		}

		div.home div.trending p.description {
			font-size: 1em;
			margin-top: 7.5px;
			margin-left: 15px;
		}

		div.home div.agenda {
			color: #7c828d;
			font-size: .85em;
			text-align: center;
			border: 1px solid #e9ebf0;
			border-radius: 5px;
			padding: 25px 10px 100px 10px;
			margin-bottom: 50px;
		}

		div.home div.task {
			background-color: white;
			border-radius: 5px;
			box-shadow: 0 5px 20px #00000014;
			padding: 20px 25px;
			width: 100%;
			margin-bottom: 15px;
		}




		/** Notifications Page */
		div.notifications img {
			margin-top: 25%;
			margin-bottom: 25px;
		}

		div.notifications h2 {
			font-weight: normal;
			line-height: 1.5em;
			margin-bottom: 35px;
		}

		div.notifications p {
			color: var(--cpurple);
			font-size: 1.5em;
		}




		/** Activities Page */
		div.activities form.add {
			background-color: #fafbfc;
			font-size: .95em;
			border-radius: 5px;
			box-shadow: 0 5px 20px #00000014;
			padding: 35px 50px;
			margin-bottom: 50px;
		}

		div.activities form.add textarea {
			background: transparent;
			border-radius: 5px;
			border: 1px solid rgb(200, 200, 200);
			width: 100%;
			height: 70px;
			resize: none;
			padding: 15px;
			margin-bottom: 15px;
		}

		div.activities form.add textarea:focus, div.activities form.add textarea:active {
			outline: none;
		}

		div.activities form.add button.primary {
			box-shadow: none;
		}

		div.activities div.empty {
			border-radius: 5px;
			border: 1px solid rgba(127,127,127,.06);
		}

		div.activities div.empty h3 {
			font-size: 1.25em;
			font-weight: normal;
			text-align: center;
			margin-top: 50px;
			margin-bottom: 20px;
		}

		div.activities div.empty p {
			text-align: center;
			font-size: .95em;
			margin-bottom: 50px;
		}

		div.activities div.task {
			background-color: white;
			border-radius: 5px;
			box-shadow: 0 5px 20px #00000014;
			padding: 20px 35px;
			width: 100%;
			margin-bottom: 15px;
		}

		div.activities div.task button {
			background-color: transparent;
			color: var(--cpurple);
			font-size: 15px;
			border: 1px solid #dadce0;
			border-radius: 50%;
			padding: 0;
			margin-top: -2.5px;
			width: 30px;
			height: 30px;
			float: right;
			transition: .5s background-color;
		}

		div.activities div.task button:hover {
			background-color: var(--cpurple);
			color: white;
			box-shadow: 0 10px 20px 0 rgba(140, 82, 255, .45);
		}



		/** Resources Page */
		div.resources div.content div.panel {
			margin-bottom: 50px;
		}

		div.resources div.content h2 {
			font-size: 1.5em;
			margin-top: 0;
		}

		div.resources div.content a h2:hover, div.resources a h2:focus, div.resources a h2:active {
			color: var(--cpurple);
		}

		div.resources div.content p {
			font-size: .85em;
			margin-bottom: 50px;
		}

		div.resources div.content div.col-sm-4 {
			text-align: center;
		}

		div.resources div.content img.full {
			box-shadow: 0 5px 20px #00000014;
			width: 85%;
			margin-bottom: 15px;
		}

		div.resources div.content img[src *= "author"] {
			box-shadow: none;
			margin-bottom: 0;
			border-radius: 50%;
		}

		div.resources div.content p.description {
			font-size: 1em;
			margin-top: 12.5px;
			margin-left: 15px;
		}

		div.resources div.content p.break {
			font-size: 1em;
			margin: 12.5px 15px 0 15px;
		}

		div.resources div.content img[src *= "icon"] {
			margin-top: 13.5px;
		}




		/** Responsive CSS */
		@media (max-width: 1000px) {

			div.nav {
				margin-left: -240px;
			}

			div.nav.active {
				margin-left: 0;
			}

			button.navbar-toggler {
				margin-top: 0;
			}
		
		}

		@media (max-width: 960px) {

			div.tab-content {
				min-width: 100vw;
				max-width: 100vw;
			}
			
		}

		@media (max-width: 812px) {

			div.resources div.content p.subtitle {
				display: none;
			}

			div.resources div.content p.break, div.resources div.content p.time {
				display: none;
			}

			div.resources div.content img[src *= "icon"] {
				display: none;
			}

		}
 
		@media (max-width: 768px) {

			div.home div.left {
				border-bottom: 1px solid #e2e2e2;
			}

			div.resources div.content img.full {
				width: 100%;
			}

		}

		@media (max-width: 576px) {

			div.resources div.content img.full, div.home div.trending img.full {
				margin-bottom: 25px;
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

	    			<img src = "../main/image/logo.webp" alt = "Cronicle Logo" width = "25" height = "25">

					<p>Cronicle</p>

				</div>

				<!-- Links -->
		      	<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">

		      		<div class = "row">

			      		<img src = "image/icon home.svg" alt = "Home Icon" width = "15" height = "15">

			      		<p>Home</p>

			      	</div>

		      	</a>
		      
		      	<a class="nav-link" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false">

		      		<div class = "row">

			      		<img src = "image/icon notifications.svg" alt = "Notifications Icon" width = "15" height = "15">

		      			<p>Notifications</p>

		      		</div>

		      	</a>

		      	<p class = "title">TASKS</p>

		      	<a class="nav-link active" id="v-pills-activities-tab" data-toggle="pill" href="#v-pills-activities" role="tab" aria-controls="v-pills-activities" aria-selected="true">

		      		<div class = "row">

			      		<img src = "image/icon activities.svg" alt = "Activities Icon" width = "15" height = "15">

			      		<p>Activities</p>

			      	</div>

		      	</a>

		      	<p class = "title">LEARNING</p>
		      
		      	<a class="nav-link" id="v-pills-resources-tab" data-toggle="pill" href="#v-pills-resources" role="tab" aria-controls="v-pills-resources" aria-selected="false">

		      		<div class = "row">

			      		<img src = "image/icon resources.svg" alt = "Resources Icon" width = "15" height = "15">

			      		<p>Resources</p>

			      	</div>

		      	</a>

		      	<a class = "profile" href = "https://cronicle.space/dashboard/account/">

		      		<div class = "row">

			      		<img src = "image/logo profile.svg" alt = "Profile Logo" width = "35" height = "35">

			      		<p> <?php echo $_SESSION['name']; ?> </p>

			      	</div>

		      	</a>
		    
		    </div>

		    <div class = "tab-content" id = "v-pills-tabContent">

		    	<!-- Activities PHP -->
				<?php

					//Add tasks
		    		if (isset($_POST["title"])) {

						$title = $_POST["title"];

						$sqlinsert = "INSERT INTO `$table` (`title`) VALUES('$title')";

						$queryinsert = mysqli_query($db, $sqlinsert);

					}




					//select tasks
					$taskselect1 = "SELECT * FROM `$table` ORDER BY `id` DESC";

					$tasksHome = mysqli_query($db, $taskselect1);

					$taskselect2 = "SELECT * FROM `$table` ORDER BY `id` DESC";

					$tasksActivities = mysqli_query($db, $taskselect2);

		    	?>

		    	<!-- Home Page -->
		    	<div class="tab-pane home fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

		    		<!-- Top NavBar -->
		    		<div class = "col-12">

			      		<div class = "top-nav">
							
			      			<div class = "row">

				      			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">

									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar" style = "margin-bottom: 0;"></span>

								</button>

				      			<h1>Home</h1>

				      		</div>

						</div>

					</div>

					<!-- Content -->
					<div class = "col-12">

						<div class = "row">

							<div class = "col-md-8 left">

								<!-- Notifications -->
								<h2>Notifications</h2>

								<div class = "notif">

									<div class = "empty">

										<p>You have no notifications.</p>

									</div>

									<div class = "filled row">

										<div class = "col-sm-11">
										
											Welcome to Cronicle Space! Let's get you started.

										</div>

										<div class = "col-sm-1">

											<div style = "background-color: var(--cpurple); width: 15px; height: 15px; border-radius: 50%; margin-top: 5px;"></div>

										</div>

									</div>

								</div>

								<!-- Trending -->
								<h2>Trending</h2>

								<div class = "trending">

									<div class = "row">

										<div class = "col-sm-4">

											<a href = "https://cronicle.space/learning/articles/color-coded-notes/" target = "blank">
												<img src = "../learning/articles/color-coded-notes/image.webp" alt = "Learning with Color Coded Notes" class = "full">
											</a>

										</div>

										<div class = "col-sm-1"></div>

										<div class = "col-sm-7">

											<a href = "https://cronicle.space/learning/color-coded-notes/" target = "blank">
												<h2>Color Coded Notes - A Productive Way to Study</h2>
											</a>

											<div class = "row">

												<img src = "../learning/image/author elif.webp" alt = "Author Elif" width = "40" height = "40">

												<p class = "description">Elif Oktay</p>

											</div>

										</div>

									</div>

								</div>

								<!-- For You -->
								<h2>For You</h2>

								<div class = "for-you">

									<p>
										
										<?php

											//select a random quote
											$quoteselect = "SELECT * FROM `quotes` ORDER BY RAND() LIMIT 1";

											$quotes = mysqli_query($db, $quoteselect);


											//print selected quote
											while ($quote = mysqli_fetch_assoc($quotes)) {

												echo $quote["title"];

											}

										?>

									</p>

								</div>

							</div>

							<div class = "col-md-4 right">

								<h2>My Agenda</h2>

								<!-- Empty Task -->
					   			<?php
					   				if (mysqli_num_rows($tasksHome) == 0) {
					   			?>

					   				<div class = "agenda">

										<p>Tasks and assignments that are added will appear here.</p>

									</div>

								<?php } ?>

								<!-- Filled Task -->
						    	<?php
						    		while ($todo = mysqli_fetch_assoc($tasksHome)) {
						    	?>
						    	
							    	<div class = "task">

							    			<!-- Activity -->
							    			<div class = "col-10">

									    		<?php echo $todo["title"]; ?>

									    	</div>

							    	</div>

							    <?php } ?>

							</div>

						</div>

					</div>

		  		</div>

		  		<!-- Notifications Page -->
		      	<div class="tab-pane notifications fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">

		      		<!-- Top NavBar -->
		      		<div class = "col-12">

			      		<div class = "top-nav">
							
							<div class = "row">

				      			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">

									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar" style = "margin-bottom: 0;"></span>

								</button>

				      			<h1>Notifications</h1>

				      		</div>

						</div>

					</div>

					<!-- Content -->
					<div class = "row">

						<div class = "col-3"></div>

						<div class = "col-6">
							
							<img src = "image/icon quote.svg" alt = "Quote Icon" width = "40" height = "40">

							<h2>If you can visualize it, if you can dream it, there is some way to do it.</h2>

							<p>Walt Disney</p>

						</div>

					</div>

		      	</div>
		      		
		      	<!-- Activities Page -->
		      	<div class="tab-pane activities fade show active" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab">

		      		<!-- Top NavBar -->
		      		<div class = "col-12">

			      		<div class = "top-nav">
						
			      			<div class = "row">

				      			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">

									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar" style = "margin-bottom: 0;"></span>

								</button>

				      			<h1>Activities</h1>

				      		</div>

						</div>

					</div>

					<!-- Content -->
					<div class = "row">

						<div class = "col-sm-1"></div>

						<div class = "col-sm-10 content">

							<!-- Add Panel -->
							<form class = "add" action = "" method = "POST" autocomplete = "off">

								<textarea name = "title" placeholder = "Add an activity, e.g. Complete reporting deck before meeting with client on Thursday." required></textarea>

								<br>

								<button type = "submit" class = "primary">Add Activity</button>

							</form>

							<h2>My Activities</h2>

					    	<!-- Empty Task -->
				   			<?php
				   				if (mysqli_num_rows($tasksActivities) == 0) {
				   			?>

				   			<div class = "empty">

								<h3>Wohoo, no activities!</h3>

								<p>Tasks and assignments that are added will appear here.</p>

							</div>

							<?php } ?>

							<!-- Filled Task -->
					    	<?php
					    		while ($todo = mysqli_fetch_assoc($tasksActivities)) {
					    	?>
					    	
						    	<div class = "task">

						    		<div class = "row">

						    			<!-- Activity -->
						    			<div class = "col-10">

								    		<?php echo $todo["title"]; ?>

								    	</div>

								    	<!-- Delete Button -->
								    	<div class = "col-2">
								    		
								    		<a href =
								    			<?php 
								    				echo "delete.php?rn=" . $todo['id'];
								    			?>
								    		>
									    		<button> ✓ </button>
									    	</a>

									    </div>

								    </div>

						    	</div>

						    <?php } ?>

						</div>

					</div>

		      	</div>
		      	
		      	<!-- Resources Page -->
		      	<div class="tab-pane resources fade" id="v-pills-resources" role="tabpanel" aria-labelledby="v-pills-resources-tab">

		      		<!-- Top NavBar -->
		      		<div class = "col-12">

			      		<div class = "top-nav">
						
			      			<div class = "row">

				      			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">

									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar" style = "margin-bottom: 0;"></span>

								</button>

				      			<h1>Resources</h1>

				      		</div>

						</div>

					</div>

					<!-- Content -->
					<div class = "content">

						<!-- Color Coded Notes -->
						<div class = "row panel">

							<div class = "col-sm-4">

								<a href = "https://cronicle.space/learning/articles/color-coded-notes/" target = "blank">
									<img src = "../learning/articles/color-coded-notes/image.webp" alt = "Learning with Color Coded Notes" class = "full">
								</a>

							</div>

							<div class = "col-sm-8">

								<a href = "https://cronicle.space/learning/articles/color-coded-notes/" target = "blank">
									<h2>Color Coded Notes - A Productive Way to Study</h2>
								</a>

								<p class = "subtitle">The color-coding system makes studies more organized and efficient. It also helps in remembering the key points of a subject. This learning technique is essential in boosting productivity.</p>

								<div class = "row">

									<img src = "../learning/image/author elif.webp" alt = "Author Elif" width = "45" height = "45">

									<p class = "description">Elif Oktay</p>

									<p class = "break">|</p>

									<img src = "../learning/image/icon clock.webp" alt = "Clock Icon" width = "20" height = "20">

									<p class = "description time">4 Minute Read</p>

								</div>

							</div>

						</div>

						<!-- Pomodoro Study Technique -->
						<div class = "row panel">

							<div class = "col-sm-4">

								<a href = "https://cronicle.space/learning/articles/pomodoro-technique/" target = "blank">
									<img src = "../learning/articles/pomodoro-technique/image.webp" alt = "Pomodoro Technique Image" class = "full">
								</a>

							</div>

							<div class = "col-sm-8">

								<a href = "https://cronicle.space/learning/articles/pomodoro-technique/" target = "blank">
									<h2>Pomodoro Study Technique - What Is It and Does It Work?</h2>
								</a>

								<p class = "subtitle">The Pomodoro Technique is a time management system method which encourages people to work in the time available and claims to enhance productivity.</p>

								<div class = "row">

									<img src = "../learning/image/author khyatee.webp" alt = "Author Elif" width = "45" height = "45">

									<p class = "description">Khyatee Atolia</p>

									<p class = "break">|</p>

									<img src = "../learning/image/icon clock.webp" alt = "Clock Icon" width = "20" height = "20">

									<p class = "description time">4 Minute Read</p>

								</div>

							</div>

						</div>

						<!-- Pomodoro Study Technique -->
						<div class = "row panel">

							<div class = "col-sm-4">

								<a href = "https://cronicle.space/learning/articles/study-for-hours/" target = "blank">
									<img src = "../learning/articles/study-for-hours/image.webp" alt = "Pomodoro Technique Image" class = "full">
								</a>

							</div>

							<div class = "col-sm-8">

								<a href = "https://cronicle.space/learning/articles/study-for-hours/" target = "blank">
									<h2>Ways to Study For Long Hours Without Getting Bored</h2>
								</a>

								<p class = "subtitle">While some believe that studying with short breaks is useful for retaining knowledge, it is possible to squeeze more hours into your study routine without losing focus.</p>

								<div class = "row">

									<img src = "../learning/image/author melissa.webp" alt = "Author Melissa" width = "45" height = "45">

									<p class = "description">Melissa Huang</p>

									<p class = "break">|</p>

									<img src = "../learning/image/icon clock.webp" alt = "Clock Icon" width = "20" height = "20">

									<p class = "description time">8 Minute Read</p>

								</div>

							</div>

						</div>

					</div>

		      	</div>
		    
		    </div>

		</div>

	</div>

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- Responsive Side Nav JavaScript -->
	<script>

		$(document).ready(function() {
			
			$(".navbar-toggler").on('click', function() {

				$(".nav").toggleClass("active");

			});

		});

	</script>

</body>
</html>