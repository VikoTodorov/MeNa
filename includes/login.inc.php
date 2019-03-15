<?php
	if(isset($_POST['login-submit'])){
		require 'dbhandler.inc.php';
		$email = $_POST['email'];
		$password = $_POST['psw'];

		$sql = "SELECT * FROM patients WHERE emailPatients=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password, $row['passPatients']);
				if ($pwdCheck == false){
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
				else if($pwdCheck == true){
					session_start();
					$_SESSION['userId'] = $row['idPatients'];
					$_SESSION['mail'] = $row['emailPatients'];

					header("Location: ../index.php?login=success");
					exit();
				}
				else{
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}

			}
			else{
				header("Location: ../index.php?error=nouser");
				exit();
			}
		}
	}
	else{
		header("Location: ../index.php");
		exit();
	}