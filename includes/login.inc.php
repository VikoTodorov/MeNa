<?php
	//$selectOption = $_POST['opt-log'];
	//if($selectOption == 1){

	if(isset($_POST['login-submit'])){
		require 'dbhandler.inc.php';

		$email = $_POST['email'];
		$password = $_POST['psw'];


		if(isset($_POST['opt-log'])){

	    $select = $_POST['opt-log'];

        if($select == 1) {
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
														$_SESSION['role'] = 'patient';
                            $_SESSION['mail'] = $row['emailPatients'];

                            header("Location: ../receipts_display.php");
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
        } elseif($select == 2) {

                $sql = "SELECT * FROM doctors WHERE emailDoctors=?;";
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
                        $pwdCheck = password_verify($password, $row['passDoctors']);
                        if ($pwdCheck == false){
                            header("Location: ../index.php?error=wrongpwd");
                            exit();
                        }
                        else if($pwdCheck == true){
                            session_start();
                            $_SESSION['userId'] = $row['idDoctors'];
														$_SESSION['role'] = 'doctor';
                            $_SESSION['mail'] = $row['emailDoctors'];

                            header("Location: ../receipt.php");
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
        } else {
            print "Unsupported case";
        }

	    }
		}
		else {
			header("Location: ../index.php");
			exit();
		}

		/*f(isset($_POST['login-submit'])){
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

						header("Location: ../receipts_display.php");
						echo '
						<nav class="top">
							<span class="title">MeNa</span>
								<ul class="my_navbar">
									<li class="btn">
										<a class="link" href="/includes/logout.inc.php">Log out</a>
									</li>
								</ul>
						</nav>
						';
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
			/*else{
				header("Location: ../index.php");
				exit();
			}*/
		//}
	//}elseif($selectOption == 2){
		/*if(isset($_POST['login-submit']) && $_POST['opt-log'] == 1){
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

						header("Location: ../receipt.php");
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
		/*else{
			header("Location: ../doc_signin.php");
			exit();
		}*/
	//}*/
