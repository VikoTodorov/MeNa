<?php
	session_start();
	/*if ($_SESSION['role'] != 'patient')
	{
	  header('Location: /index.php?error=cannotaccess');
	  exit();
	}*/
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
	<script type="text/javascript"></script>
	<style>
		h4{
			color: white;	
		}	
	</style>
</head>
<body class="background">
	<?php
		if (isset($_SESSION['userId'])){
			echo '<nav class="top">
				<span class="title">MeNa</span>
				<ul class="my_navbar">
					<li class="btn">
						<a class="active" href="receipts_display.php">Logged</a>
					</li>
					<li class="btn">
						<a class="link" href="/includes/logout.inc.php">Logout</a>
					</li>
				</ul>
			</nav>
			';
		}
	?>
	<div style = "text-align:center">
		<h1 style="color: white">YOUR RECIPES:</h1>
		<?php
			require "includes/dbhandler.inc.php";
			$patientid = $_SESSION['userId'];
			$query = mysqli_query($conn, "SELECT * FROM receipts WHERE patientID=$patientid") or die(mysqli_error($conn));
			while ($row = mysqli_fetch_array($query)){
				echo "
				<h4>{$row['receiptContent']}</h4>
				<h4>Valid until: {$row['dateValidation']}</h4>
				\n
				";
			}
		?>
	</div>
</body>
</html>
