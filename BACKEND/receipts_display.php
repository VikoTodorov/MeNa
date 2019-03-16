<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		
	</script>
</head>
<body class="background">
	<nav class="top">
		<span class="title">MeNa</span>
		<ul class="my_navbar">
			<li class="btn">
				<a class="active" href="receipts_display.php">Logged</a>
			</li>
			<li class="btn">
				<a class="link" href="pharmacy_reg.php">Pharmacy</a>
			</li>
			<li class="btn">
				<a class="link" href="doctor_reg.php">Doctor</a>
			</li>
			<li class="btn">
				<a class="link" href="patient_reg.php">Patient</a>
			</li>
			<li class="btn">
				<a class="link" href="/includes/logout.inc.php">Log out</a>
			</li>
		</ul>
	</nav>
	<div style = "text-align:center">
		<h1 style="color: white">YOUR RECIPES:</h1>
		<?php
			$n = 0;
			require "includes/dbhandler.inc.php";
			$patientid = $_SESSION['userId'];
			$query = mysqli_query($conn, "SELECT * FROM receipts WHERE patientID=$patientid") or die(mysqli_error($conn));
			while ($row = mysqli_fetch_array($query)){
				echo "
				<p style = 'color: white'>-{$row['receiptContent']}</p>\n
				";
			}
		?>
	</div>
</body>
</html>
