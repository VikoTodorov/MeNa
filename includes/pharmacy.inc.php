<?php
  if(isset($_POST['pid-submit'])){
    $patientid = NULL;
    $pid = $_POST['pid'];
    //require 'dbhandler.inc.php';
    $con = new mysqli("localhost", "root", "", "menadb");
    $stmt = $con->prepare("SELECT * FROM patients WHERE pid=?");
    $stmt->bind_param("s", $pid);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) exit('No rows');
    while($row = $result->fetch_assoc()) {
      $patientid = $row['idPatients'];
    }
    $stmt->close();
    //print "$patientid";


  }
  else{
    //header("Location: ../pharmacy.php");
    //exit();
  }
?>
