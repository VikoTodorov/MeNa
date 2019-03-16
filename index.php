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
</head>
<body class="background">
	<nav class="top">
		<span class="title">MeNa</span>
		<ul class="my_navbar">
			<li class="btn">
				<a class="active" href="index.php">Login</a>
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
  <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Log In</h3>
			</div>
			<div class="card-body">
				<form style= "text-align:center" action = "includes/login.inc.php" method ="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="email" style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" placeholder="E-mail">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="psw"style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" placeholder="password">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<select name="opt-log" form="choose_opt_log" style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control select-focus" placeholder="Choose what are you">
							<option value="Patient">Patient</option>
							<option value="Doctor">Doctor</option>
							<option value="Pharmacy">Pharmacy</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" name="login-submit" class="btn float-right login_btn">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
