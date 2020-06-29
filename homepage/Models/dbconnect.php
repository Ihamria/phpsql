<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservationvols";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Database not connect: ' . mysqli_error($con));
} 
?>

