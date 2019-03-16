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
				<a class="link" href="index.php">Login</a>
			</li>
			<li class="btn">
				<a class="link" href="pharmacy_reg.php">Pharmacy</a>
			</li>
			<li class="btn">
				<a class="active" href="doctor_reg.php">Doctor</a>
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
<div class="container" >
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
			</div>
			<div class="card-body">
				<form style= "text-align:center" action = "includes/login.inc.php" method ="post">
            		<div class="input-group form-group">
              			<div class="input-group-prepend">
                			<span class="input-group-text"><i class="fas fa-user"></i></span>
             		 	</div>
              			<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="text" placeholder="Enter Name" name="uname" required><br>
            		</div>
            		<div class="input-group form-group">
  						<div class="input-group-prepend">
  							<span class="input-group-text"><i class="fas fa-key"></i></span>
  						</div>
  						<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="text" placeholder="Enter e-mail" name="email" required><br>
  			    	</div>
            		<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"><i class="fas fa-key"></i></span>
  							</div>
  							<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="password" placeholder="Enter Password" name="psw" required><br>
  					</div>
            		<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"><i class="fas fa-key"></i></span>
  							</div>
  							<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="password" placeholder="Repeat password" name="reppsw" required><br>
  					</div>
            		<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"><i class="fas fa-key"></i></span>
  							</div>
  							<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="text" placeholder="Enter Your PID" name="pid" required><br>
  					</div>
            		<div class="form-group">
  						<button class="btn float-right login_btn" type="submit" name="register-submit">Register</button>
  					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
