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
	<div class="title" style = "margin-bottom:5%">
		<h1>MeNa</h1>
	</div>
<nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-bottom">
  <ul class="navbar-nav">
	<li class="nav-item">
      <a class="nav-link active" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pharmacy_reg.php">Pharmacy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="doctor_reg.php">Doctor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="patient_reg.php">Patient</a>
    </li>
  </ul>
</nav>
<div style = "text-align:center">
<div class="container" >
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form style= "text-align:center" action = "includes/doclogin.inc.php" method ="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="email" class="form-control" placeholder="E-mail">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="psw" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<button type="submit" name="login-submit" class="btn float-right login_btn">Login</button>
					</div>
				</form>
				<?php
					if (isset($_SESSION['userId'])){
						echo '<p style="color: white" class="login-status">You are logged in!</p>';
					}
					else{
						echo '<p style="color: white" class="login-status">You are logged out!</p>';
					}
				?>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<input type="radio" name="object" value="Patient">Patient  <br>
					<input type="radio" name="object" value="Doctor">Doctor  <br>
					<input type="radio" name="object" value="Pharmacy">Pharmacy  <br>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
