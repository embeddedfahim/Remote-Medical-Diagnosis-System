<?php include('dbconn2.php') ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="RMDS Logo.png">
		<title>RMDS</title>
		<link href = "https://fonts.googleapis.com/css?family=Cinzel" rel = "stylesheet">
		<style type = "text/css">
			.header {
				width: 30%;
				margin: 50px auto 0px;
				color: white;
				background: gray;
				text-align: center;
				padding: 10px;
			}
			form, .content {
				width: 30%;
				margin: 0px auto;
				padding: 10px;
				background: #A9A9A9;
			}
			.input-group {
				margin: 5px 32px 0px 0px;
			}
			.input-group label {
				display: block;
				text-align: left;
				margin-left: 30.5%;
			}
			.input-group input {
				height: 20px;
				width: 50%;
				padding: 5px 0px;
				font-size: 16px;
				border-radius: 5px;
				border: 1px solid gray;
				margin-left: 30%;
			}
			.btn {
				padding: 7px;
				font-size: 15px;
				font-weight: bold;
				color: white;
				background: gray;
				margin-left:46.5%;
				margin-top: 10px;
				border-radius: 5px;
				margin-bottom: 6.5px;
				height: 36px;
			}
			.error {
				width: 100%; 
				padding: 0px;
				border: 1px solid #a94442; 
				color: #a94442; 
				background: #f2dede;
				text-align: center;
			}
			body {
				font-family: "Trebuchet MS", Arial;
				background-image: url("bg.jpg");
			}
		</style>
	</head>
	
	<body>
		<?php include("header.php"); ?>
		<?php include("navbar4.php"); ?>
		<br></br>
		<div class = "header">
			<h2>Admin Login</h2>
		</div>
		<form method = "post" action = "adminlogin.php">
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
				<button type = "submit" align = "center" class = "btn" name = "login_admin">Log In</button>
			</div>
		</form>
	</body>
</html>