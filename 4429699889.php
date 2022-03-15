<?php

$servername = "";

$username = "";

$password = "";

$dbname = "";


$mysql = mysqli_connect($servername, $username, $password, $dbname);

//create by XP AMIR 
if($mysql->connect_error){
echo "Connection failed: ". $mysql->connect_error;
} else {
echo "Connected successfully\n";

mysqli_set_charset($mysql, "utf8");

$test = $_POST["test"];


$sql = "INSERT INTO test ( test)
VALUES ( '$test')";

if ($mysql->query($sql) === TRUE) {
  echo "New record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $mysql->error;
}}



?>
