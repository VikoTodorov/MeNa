<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div style = "text-align:center">
	<h1>MeNa</h1>
	<h2>Registration form for Pharmacy:</h2>
	</div>
	<form action = "">
		<label for="nameph"><b>Pharmacy name:</b></label>
		<input type="text" placeholder="Enter Pharmacy" name="nameph" required><br>
		<label for="email"><b>E-mail:</b></label>
		<input type="text" placeholder="Enter e-mail" name="email" required><br>
		<label for="psw"><b>Password:</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required><br>
		<label for="reppsw"><b>Repeat password:</b></label>
		<input type="password" placeholder="Repeat password" name="reppsw" required><br>
		<label for="adress"><b>Adress:</b></label>
		<input type="text" placeholder="Enter adress" name="adress" required><br>
		<label for="tph"><b>Telephone:</b></label>
		<input type="text" placeholder="Enter Phone number" name="tph" required><br>
		<label for="ID"><b>Unique ID:</b></label>
		<input type="text" placeholder="Enter Your Special ID" name="ID" required><br>
		<input type="submit" value="Register">
	</form>
</body>
</html>