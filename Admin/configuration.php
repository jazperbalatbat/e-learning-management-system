<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "jazperdatabase";

$connection = mysqli_connect($hostname, $username, $password, $database);

if(!$connection){
	die ("Connection Failed" . mysqli_connect_error());
}

 ?>