<?php
$mysqli = new mysqli("localhost","root","","web_mysqli");

// Check connection
if ($mysqli->connect_errno) {
  echo "Ket Noi MYSQLi Loi " . $mysqli->connect_error;
  exit();
}
?>
