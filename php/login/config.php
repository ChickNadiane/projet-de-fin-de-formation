<?php
  $hostname = "localhost";
  $username = "";
  $password = "";
  $dbname = "un don une vie";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
