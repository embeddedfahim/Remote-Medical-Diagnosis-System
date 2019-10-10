<html>
	<head>
		<style type = 'text/css'>
			a:link {
			text-decoration: none;
			color: white;
			padding: 4px;
			margin-right: 5px;
			}
			a:visited {
			  color: white;  
			}
			table.table2 {
				text-align: right;
			}
			p9 {
				color: white;
				margin-right: 80%;
			}
		</style>
	</head>

	<table class = 'table2' border = '2' width = '1297.5' align = 'center'>
		<tr>
			<td bgcolor = 'black' height = '30'>
				<?php if(isset($_SESSION['username'])): ?>
					<p9>Welcome, <?php echo $_SESSION['username']; ?></p9> <a href="adminhome.php?logout='1'">Log Out</a>
				<?php endif ?>
			</td>
		</tr>
	</table>
</html>