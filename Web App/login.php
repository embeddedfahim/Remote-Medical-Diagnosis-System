<?php include('dbconn.php') ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="RMDS Logo.png">
		<title>RMDS</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link href = "https://fonts.googleapis.com/css?family=Cinzel" rel = "stylesheet">
	</head>
	
	<body>
		<?php include("header.php"); ?>
		<?php include("navbar2.php"); ?>
		<br></br>
		<p2>"The aim of RMDS is to deliver crucial health information of a patient to a health care professional in life threatening situations. Specially, in the rural areas of Bangladesh a lot of people die due to lack of immediate diagnosis and health-care facility. I have only tried to bring the diagnostics facility a lot closer to the impaired."</p2>
		<div class = "header">
			<h2>Login Panel</h2>
		</div>
		<form method = "post" action = "login.php">
			<?php include('errors.php'); ?>
			<div class = "input-group">
				<label>Username</label>
				<input type = "text" name = "username">
			</div>
			<div class = "input-group">
				<label>Password</label>
				<input type = "password" name = "password">
			</div>
			<div class = "input-group">
				<button type = "submit" align = "center" class = "btn" name = "login_user">Log In</button>
			</div>
		</form>
	</body>
</html>