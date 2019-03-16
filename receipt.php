<?php
	session_start();
	if ($_SESSION['role'] != 'doctor')
	{
	  header('Location: /index.php?error=cannotaccess');
	  exit();
	}
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
	<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=cenrhu2wphg5zedrdakfuorq7jdoulcfgwyju8jfcruiny5c"></script>
  <script>
	tinymce.init({
			selector: '#receipt',  // change this value according to your HTML
			//skin: 'dark',
			width : 1200,
			height : 350,
			max_height: 500,
 			max_width: 1200,
			statusbar: false,
			menubar: false
			//placeholder: "Receipt"
	});
	</script>
</head>
<body class="background">
	<nav class="top">
		<a href="index.php" class="title"><MeNa</a>
		<ul class="my_navbar">
			<li class="btn">
				<a class="link" href="/includes/logout.inc.php">Log out</a>
			</li>
		</ul>
	</nav>
<form method="post" action="includes/receipt.inc.php">
	<div class="input-receipt" style="width: 500px; margin: 0 auto">
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-user"></i></span>
			</div>
			<input type="text" name="pat_pid" class="form-control" placeholder="Patient PID">
		</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-user"></i></span>
			</div>
			<input type="text" name="pat_date" class="form-control" placeholder="Valid until: yyyy-mm-dd">
		</div>
	</div>
	<div style = "margin: 0 auto; width: 1200px">
		<textarea name="receipt" id="receipt">Receipt: </textarea>
	</div>
	<div class="form-group wrapper" style = "text-align: center">
		<button style="margin-top: 5px; width: 200px" type="submit" name="receipt-submit" class="btn login_btn">Submit Receipt</button>
	</div>
</form>
</body>
</html>
