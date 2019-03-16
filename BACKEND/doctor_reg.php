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
	<div class="title" style = "">
		<h1>MeNa</h1>
		<h2>Registration form for Doctor:</h2>
	</div>
<nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-bottom">
  <ul class="navbar-nav">
	<li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pharmacy_reg.php">Pharmacy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="doctor_reg.php">Doctor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="patient_reg.php">Patient</a>
    </li>
  </ul>
</nav>
<div style="text-align:center">
<div class="d-flex justify-content-center h-100">
	<div class="card">
		<div class="card-header">
			<h3>Register</h3>
		</div>
		<div class="card-body">
			<form action="includes/docsignup.inc.php" method="post">
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Enter username" name="hname" required><br>
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Enter email" name="email" required><br>
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="Enter Password" name="pass" required><br>
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="Repeat Password" name="rpass" required><br>
				</div>
				<div class="input-group form-group">
 					<div class="input-group-prepend">
    					<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
				<input type="text" class="form-control" placeholder="Enter telephone" name="telephone" required><br>
				</div>
				<div class="form-group">
					<button type="submit" name="register-submit-doc" class="btn float-right login_btn">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>

</body>
</html>
