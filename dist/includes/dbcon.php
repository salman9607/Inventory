<?php
$con = mysqli_connect("localhost","florist_site","B+wYPK0r1","stockms");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Asia/Manila"); 
?>

