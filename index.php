<?php
$host = 'postgres';
$db = 'kuraiorg';
$user = 'kuraiorg';
$pass = 'password';
$port = '5432';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;";
try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "Connected to the PostgreSQL database successfully!";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
