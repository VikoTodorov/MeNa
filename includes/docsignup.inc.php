<?php
if(isset($_POST['register-submit-doc'])){
  require 'dbhandler.inc.php';

  $name = $_POST['hname'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $passwordRep = $_POST['rpass'];
  $phone = $_POST['telephone'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z\s]*$/",$name) && !preg_match("/^[0-9]*$/",$phone)) {
    header("Location: ../doctor_reg.php?error=invalidemailunamephone");
    exit();
  }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../doctor_reg.php?error=invalidemail&uname=".$name);
    exit();
  }else if (!preg_match("/^[a-zA-Z\s]*$/",$name)) {
    header("Location: ../doctor_reg.php?error=invaliduname&email=".$email);
    exit();
  }else if (!preg_match("/^[0-9\s\+]*$/",$phone)) {
    header("Location: ../doctor_reg.php?error=invalidphone&email=".$email."&uname=".$name);
    exit();
  }else if ($password !== $passwordRep) {
    header("Location: ../doctor_reg.php?error=passwordcheck&email=".$email."&uname=".$name);
    exit();
  }else {
    $sql = "SELECT emailDoctors FROM doctors WHERE emailDoctors=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../doctor_reg.php?error=sqlerror");
      exit();
    }else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultChek = mysqli_stmt_num_rows($stmt);
      if ($resultChek> 0) {
        header("Location: ../doctor_reg.php?error=emailtaken&uname=".$name);
        exit();
      }else {
        $sql = "INSERT INTO doctors (emailDoctors, nameDoctors, passDoctors, phone) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../doctor_reg.php?error=sqlerror");
          exit();
        }else {
          $hashedpass = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssss", $email, $name, $hashedpass, $phone);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?register=success");
          exit();

        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else{
  header("Location: ../doctor_reg.php");
  exit();
}
