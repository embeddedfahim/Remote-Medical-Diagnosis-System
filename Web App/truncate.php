<?php
	session_start();
	include("connect.php");

	if(!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first!";
		header('location: login.php');
	}
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	
	$pdo = new PDO('mysql:host=localhost;dbname=embedded_rmds', 'embedded_fahim', 'heeyamoni30');

	$sql2 = "TRUNCATE TABLE `data`";
	$statement = $pdo->prepare($sql2);

	$statement->execute();
?>

<!doctype html>
<html>
	<head>
		<link rel="icon" href="RMDS Logo.png">
		<title>RMDS</title>
		<link href = "https://fonts.googleapis.com/css?family=Cinzel" rel = "stylesheet">
		<style type = "text/css">
			p {
				color: white;
				text-align: center;
				margin-top: 7%;
				width: 100%;
				font-size: 1.1em;
				font-family: 'Cinzel', serif;
				padding: 80px 0;
			}
			body {
				font-family: "Trebuchet MS", Arial;
				background-image: url("bg.jpg");
			}
		</style>
	</head>
	
	<body>
		<div> <?php include("header.php"); ?>
		<div> <?php include("navbar5.php"); ?>
		<p>Data wipe successful!<br></br><a href="index.php">Return to Home Page</a></p>
	</body>
</html>