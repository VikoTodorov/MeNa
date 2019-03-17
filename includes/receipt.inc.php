<?php
if(isset($_POST['receipt-submit'])){
  require 'checkActive.inc.php';
  //session_start();
  $pid = $_POST['pat_pid'];
  $date = $_POST['pat_date'];
  $content = $_POST['receipt'];
  $patientid = NULL;
  $doctorid = $_SESSION['userId'];
  $active = $_SESSION['isActive'];

  $con = new mysqli("localhost", "root", "", "menadb");
  if ($active == 0) {
    mysqli_close($con);
    header("Location: ../index.php?error=nopermission");
    exit();
  }
  $stmt = $con->prepare("SELECT * FROM patients WHERE pid=?");
  $stmt->bind_param("s", $pid);
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows === 0) exit('No rows');
  while($row = $result->fetch_assoc()) {
    $patientid = $row['idPatients'];
  }
  $stmt->close();

  $sql = "INSERT INTO receipts (receiptContent, patientID, doctorID, dateValidation) VALUES (?, ?, ?, ?)";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../receipt.php?error=sqlerror");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt, "ssss", $content, $patientid, $doctorid, $date);
    mysqli_stmt_execute($stmt);
    header("Location: ../receipt.php?register=success");
    exit();
  }
}
else{
  header("Location: ../index.php");
  exit();
}
