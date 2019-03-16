	<?php
		require "dbhandler.inc.php";
    session_start();
    //print $_SESSION['userId'];
		//$query = mysqli_query($conn, "SELECT * from doctors WHERE doctorID = ?") or die(mysqli_error($conn));
    $stmt = $conn->prepare("SELECT * from doctors WHERE idDoctors = ?");
    $stmt->bind_param("s", $_SESSION['userId']);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) exit('No rows');
    while($row = $result->fetch_assoc()) {
      $_SESSION['isActive'] = $row['isActive'];
    }
    $stmt->close();
		/*while ($row = mysqli_fetch_array($query)){
			$_SESSION['isActive'] = $row['isActive'];
		}
    //print $_SESSION['isActive'];*/
	?>
