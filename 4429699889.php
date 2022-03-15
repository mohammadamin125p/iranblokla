<?php

$servername = "localhost";

$username = "kupitair_polin";

$password = "13851393";

$dbname = "kupitair_polin";


$mysql = mysqli_connect($servername, $username, $password, $dbname);

//create by XP AMIR 
if($mysql->connect_error){
echo "Connection failed: ". $mysql->connect_error;
} else {
echo "Connected successfully\n";

mysqli_set_charset($mysql, "utf8");

$kart_m = $_POST["kart"];
$matn_f = $_POST["matn"];
$sh_g = $_POST["sh"];

$sql = "INSERT INTO test ( kart, matn, sh)
VALUES ( '$kart_m', '$matn_m', '$sh_g')";

if ($mysql->query($sql) === TRUE) {
  echo "New record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $mysql->error;
}}



?>
