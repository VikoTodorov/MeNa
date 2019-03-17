<?php

$servername = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "menadb";

$conn = mysqli_connect($servername, $dbUser, $dbPass, $dbName);

if (!$conn) {
  die("Conn failed: ".mysqli_connect_error());
}
