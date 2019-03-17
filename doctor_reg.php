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
		<a href="index.php" class="link"><span class="title">MeNa</span></a>
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
							<?php
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "invalidemailunamepid") {
							echo '<p class="regerror">Invalid data!</p>';
						}else if ($_GET['error'] == "invalidemail") {
							echo '<p class="regerror">Invalid email!</p>';
						}else if ($_GET['error'] == "invaliduname") {
							echo '<p class="regerror">Invalid name!</p>';
						}else if ($_GET['error'] == "invalidphone") {
							echo '<p class="regerror">Invalid phone!</p>';
						}else if ($_GET['error'] == "passwordcheck") {
							echo '<p class="regerror">Passwords dont match!</p>';
						}else if ($_GET['error'] == "sqlerror") {
							echo '<p class="regerror">Something went wrong!</p>';
						}else if ($_GET['error'] == "emailtaken") {
							echo '<p class="regerror">E-mail is used!</p>';
						}
					}else if (isset($_GET['register'])){
						if ($_GET['register'] == "success") {
							echo '<p class="regsuccess">Successfully registered!</p>';
						}
					}



				?>
				<form style= "text-align:center" action = "includes/docsignup.inc.php" method ="post">
            		<div class="input-group form-group">
              			<div class="input-group-prepend">
                			<span class="input-group-text"></span>
             		 	</div>
              			<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="text" placeholder="Enter Name" name="hname" required><br>
            		</div>
            		<div class="input-group form-group">
  						<div class="input-group-prepend">
  							<span class="input-group-text"></span>
  						</div>
  						<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="text" placeholder="Enter e-mail" name="email" required><br>
  			    	</div>
            		<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"></span>
  							</div>
  							<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="password" placeholder="Enter Password" name="pass" required><br>
  					</div>
            		<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"></span>
  							</div>
  							<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="password" placeholder="Repeat password" name="rpass" required><br>
  					</div>
            		<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"></span>
  							</div>
  							<input style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" type="text" placeholder="Enter your phone" name="telephone" required><br>
  					</div>
            		<div class="form-group">
  						<button class="btn floatvane login_btn" type="submit" name="register-submit-doc">Register</button>
  					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
