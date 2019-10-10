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
?>

<!doctype html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
		<link rel="icon" href="RMDS Logo.png">
		<title>RMDS</title>
		<link href = "https://fonts.googleapis.com/css?family=Cinzel" rel = "stylesheet">
		<style type = "text/css">
			.table_titles, .table_cells_odd, .table_cells_even {
				padding-right: 20px;
				padding-left: 20px;
				color: #000;
			}
			.table_titles {
				color: #FFF;
				background-color: #666;
			}
			.table_cells_odd {
				background-color: #CCC;
			}
			.table_cells_even {
				background-color: #FAFAFA;
			}
			table.table1 {
				border: 2px solid #333;
				text-align: center;
				float: left;
				width: 40%;
				position: relative;
				left: 27px;
			}
			body {
				font-family: "Trebuchet MS", Arial;
				background-image: url("bg.jpg");
			}
			p {
				float: right;
				text-align: justify;
				color: white;
				width: 40%;
				position: relative;
				right: 27px;
				font-size: 1.1em;
				font-family: 'Cinzel', serif;
				padding: 80px 0;
				text-shadow: 2px 2px #0000ff;
			}
		</style>
	</head>
	
	<meta http-equiv="refresh" content="30" > 
	
	<body>
		<div> <?php include("header.php"); ?>
		<div> <?php include("navbar.php"); ?>
		<br></br>
		<p>"The aim of RMDS is to deliver crucial health information of a patient to a health care professional in life threatening situations. Specially, in the rural areas of Bangladesh a lot of people die due to lack of immediate diagnosis and health-care facility. I have only tried to bring the diagnostics facility a lot closer to the impaired."</p>
		<table class = "table1" border = "1" cellspacing = "0" cellpadding = "4">
			<tr>
				<td class = "table_titles">ID</td>
				<td class = "table_titles">Date and Time</td>
				<td class = "table_titles">BPM</td>
				<td class = "table_titles">Temperature (°C)</td>
			</tr>
			
			<?php
				// retrieve all records and display them
				$result = mysqli_query($dbh, "SELECT * FROM data ORDER BY id DESC");

				// used for row color toggle
				$oddrow = true;

				// process every record
				while($row = mysqli_fetch_array($result))
				{
					if($oddrow) 
					{ 
						$css_class=' class="table_cells_odd"'; 
					}
					else
					{ 
						$css_class=' class="table_cells_even"'; 
					}

					$oddrow = !$oddrow;

					echo '<tr>';
					echo '   <td'.$css_class.'>'.$row["id"].'</td>';
					echo '   <td'.$css_class.'>'.$row["date"].'</td>';
					echo '   <td'.$css_class.'>'.$row["bpm"].'</td>';
					echo '   <td'.$css_class.'>'.$row["temperature"].'</td>';
					echo '</tr>';
				}
			?>
		</table>
	</body>
</html>