<?php 
	session_start();

	if(!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first!";
		header('location: adminlogin.php');
	}
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: adminlogin.php");
	}
?>

<!doctype html>
<html>
	<head>
		<link rel = "icon" href = "RMDS Logo.png">
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
			.btn {
				padding: 7px;
				width: 100%;
				font-size: 20px;
				color: white;
				background: gray;
				margin-left: 0px;
				margin-top: 5px;
				border-radius: 5px;
				margin-bottom: 50%;
				height: 43px;
				font-family: 'Cinzel', serif;
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
			<h2>Managing Deck</h2>
		</div>
		<form method = "post" action = "register.php">
			<div>
				<button type = "link" class ="btn" href = "register.php">Create A New Doctor Account</button>
			</div>
		</form>
	</body>
</html>
