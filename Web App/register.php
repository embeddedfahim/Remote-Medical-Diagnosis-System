<?php include('dbconn2.php') ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="RMDS Logo.png">
		<title>RMDS</title>
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
				margin-left: 5%;
			}
			.input-group input {
				height: 20px;
				width: 100%;
				padding: 5px 0px;
				font-size: 16px;
				border-radius: 5px;
				border: 1px solid gray;
				margin-left: 4.2%
			}
			.btn {
				padding: 7px;
				font-size: 15px;
				font-weight: bold;
				color: white;
				background: gray;
				margin-left:45%;
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
		<div> <?php include("header.php"); ?>
		<div> <?php include("navbar3.php"); ?>
		<div class = "header">
			<h2>New Doctor Account</h2>
		</div>
		<form method = "post" action = "register.php">
			<?php include('errors.php'); ?>
			<div class = "input-group">
				<label>Username</label>
				<input type = "text" name = "username" value = "<?php echo $username; ?>">
			</div>
			<div class = "input-group">
				<label>Email</label>
				<input type = "email" name = "email" value = "<?php echo $email; ?>">
			</div>
			<div class = "input-group">
				<label>Password</label>
				<input type = "password" name = "password_1">
			</div>
			<div class = "input-group">
				<label>Confirm password</label>
				<input type = "password" name = "password_2">
			</div>
			<div class = "input-group">
				<button type = "submit" class = "btn" name = "reg_user">Register</button>
			</div>
		</form>
	</body>
</html>