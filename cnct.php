<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "bookworm"; //ikut nama database

$cnct = mysqli_connect($server,$username,$password,$database);
if(!$cnct) {
    echo "connection fail";
  }
?>
