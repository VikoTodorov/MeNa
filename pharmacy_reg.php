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
	<style>
		p{
			color: white;		
		}	
	</style>
</head>
<body class="background">
	<nav class="top">
		<a href="index.php" class="title"><MeNa</a>
		<ul class="my_navbar">
			<li class="btn">
				<a class="link" href="index.php">Login</a>
			</li>
			<li class="btn">
				<a class="active" href="pharmacy_reg.php">Pharmacy</a>
			</li>
			<li class="btn">
				<a class="link" href="doctor_reg.php">Doctor</a>
			</li>
			<li class="btn">
				<a class="link" href="patient_reg.php">Patient</a>
			</li>
		</ul>
	</nav>
<div style = "text-align:center">
  <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
      <form style= "text-align:center" action = "pharmacy_reg.php" method ="post">
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"></span>
          </div>
          <input type="text" name="pid" style="border-top-right-radius: 0.25rem;border-bottom-right-radius: 0.25rem;" class="form-control" placeholder="PID:">
        </div>
        <div class="form-group">
          <button type="submit" name="pid-submit" class="btn login_btn">Submit</button>
        </div>
      </form>
      <?php
        if(isset($_POST['pid-submit'])){
          require "./includes/pharmacy.inc.php";
          $query = mysqli_query($con, "SELECT * FROM receipts WHERE patientID = $patientid ORDER BY idReceipts DESC LIMIT 1") or die(mysqli_error($con));
          while ($row = mysqli_fetch_array($query)){
            echo "
            <p>{$row['receiptContent']}</p>
            <p>Valid until: {$row['dateValidation']}</p>
            \n";
          }
        }
      ?>
		</div>
	</div>
</div>
</body>
</html>
