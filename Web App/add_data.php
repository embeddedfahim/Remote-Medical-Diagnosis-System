<?php
	$servername = "localhost";
	$username = "embedded_fahim";
	$password = "heeyamoni30";
	$dbname = "embedded_rmds";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-m-d h:i:s', time());
	$bpm = $_GET['bpm'];
	$temp = $_GET['temp'];
	
	$sql = "INSERT INTO data (date, bpm, temperature) VALUES ('$date', $bpm, $temp)";

	if(mysqli_query($conn, $sql)) {
		echo "New record created successfully!";
	}
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>