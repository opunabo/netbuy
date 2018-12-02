<?php

$servername = "cpanel.freehosting.com";
$username = "netbuygh_admin";
$password = "123456789";
// password = 123456789
$dbname = "netbuygh_schema main";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

// Check connection
return $conn;








?>