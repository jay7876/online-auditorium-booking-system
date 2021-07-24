<?php
$server="localhost";
$username="root";
$password="";
$database="users";

    
$mysqli = new mysqli($server,$username,$password,$database);


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>