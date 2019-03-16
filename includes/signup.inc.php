<?php
if(isset($_POST['register-submit'])){
  require 'dbhandler.inc.php';

  $name = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $passwordRep = $_POST['reppsw'];
  $pid = $_POST['pid'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z\s]*$/",$name) && !preg_match("/^[0-9]*$/",$pid)) {
    header("Location: ../patient_reg.php?error=invalidemailunamepid");
    exit();
  }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../patient_reg.php?error=invalidemail&uname=".$name);
    exit();
  }else if (!preg_match("/^[a-zA-Z\s]*$/",$name)) {
    header("Location: ../patient_reg.php?error=invaliduname&email=".$email);
    exit();
  }else if (!preg_match("/^[0-9]*$/",$pid) || strlen($pid) != 10 ) {
    header("Location: ../patient_reg.php?error=invalidpid&email=".$email."&uname=".$name);
    exit();
  }else if ($password !== $passwordRep) {
    header("Location: ../dpatient_reg.php?error=passwordcheck&email=".$email."&uname=".$name);
    exit();
  }else {
    $sql = "SELECT emailPatients FROM patients WHERE emailPatients=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../patient_reg.php?error=sqlerror");
      exit();
    }else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultChek = mysqli_stmt_num_rows($stmt);
      if ($resultChek> 0) {
        header("Location: ../patient_reg.php?error=emailtaken&uname=".$name);
        exit();
      }else {
        $sql = "INSERT INTO patients (pid, emailPatients, passPatients, namePatients) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../patient_reg.php?error=sqlerror");
          exit();
        }else {
          $hashedpass = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssss", $pid, $email, $hashedpass, $name);
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
  header("Location: ../patient_reg.php");
  exit();
}
