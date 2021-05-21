


<!DOCTYPE html>
<html>
	<head>



<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}


?>

		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>ADMIN CONTROL PORTAL</h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>COMPLAINS</h2>
			<p>Welcome <?=$_SESSION['name']?>,</p>
		</div>
		 <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">  
			<tr>
				<td>REGION</td>
				<td>TOWN</td>
				
				<td>PHONE</td>
				<td>GPSCODE</td>
				<td align="center">COMPLAINS</td>
				<td>DATE</td>
			</tr>
			<?php
			include_once 'dbconnect.php';

			$read = "SELECT * FROM public;";
			 $dbdb = mysqli_query($conn, $read);

			 if ($dbdb) {
			 	while ($row = $dbdb->fetch_assoc()) {
			 		$REGION = $row['Region'];
			 		$TOWN = $row['Town'];
			 		$DATE = $row['Date'];
			 		$PHONE = $row['Phone'];
			 		$GPSCODE = $row['GPSCODE'];
			 		$COMPLAINS = $row['Complain'];
			 		echo "<tr>
				<td>$REGION</td>
				<td>$TOWN</td>
				
				<td>$PHONE</td>
				<td>$GPSCODE</td>
				<td>$COMPLAINS</td>
				<td>$DATE</td>
			</tr>";
			 	}
			 }else{
			 	echo "Cant read database";
			 }
			?>

		</table>
	</body>
</html>

