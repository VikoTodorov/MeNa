<?php
	if(isset($_POST['login-submit'])){
		require 'dbhandler.inc.php';
		$email = $_POST['email'];
		$password = $_POST['psw'];

		$sql = "SELECT * FROM doctors WHERE emailDoctors=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../doc_signin.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password, $row['passDoctors']);
				if ($pwdCheck == false){
					header("Location: ../doc_signin.php?error=wrongpwd");
					exit();
				}
				else if($pwdCheck == true){
					session_start();
					$_SESSION['userId'] = $row['idDoctors'];
					$_SESSION['mail'] = $row['emailDoctors'];

					header("Location: ../doc_signin.php?login=success");
					exit();
				}
				else{
					header("Location: ../doc_signin.php?error=wrongpwd");
					exit();
				}

			}
			else{
				header("Location: ../doc_signin.php?error=nouser");
				exit();
			}
		}
	}
	else{
		header("Location: ../doc_signin.php");
		exit();
	}
