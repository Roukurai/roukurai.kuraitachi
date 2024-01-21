<?php
define("DB_SERVER","192.168.1.13");
define("DB_USERNAME","root");
define("DB_PASSWORD","Sama4CA2*");
define("DB_NAME","kuraiorg");

// Create connection
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>