<?php
$host = "localhost";
$user = "root";
$pass = "hari1234";
$dbname = "dummy";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn){
  die("could not connect:".mysql_error());
};
?>