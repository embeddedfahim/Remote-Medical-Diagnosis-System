<?php
session_start();

// initializing variables
$username = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'embedded_fahim', 'heeyamoni30', 'embedded_login');

// login
if(isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($username)) {
		array_push($errors, "Username is required!");
	}
	
	if(empty($password)) {
		array_push($errors, "Password is required!");
	}

	if (count($errors) == 0) {
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		
		if(mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			header('location: index.php');
		}
		else {
			array_push($errors, "Wrong username/password combination!!");
		}
	}
}