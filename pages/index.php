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
    // echo "Connected to the PostgreSQL database successfully!";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<head>
    <link rel="stylesheet" href="/assets/css/index.css" />
</head>

<section id="hero">
    <h2>Welcome to Kurai Blog!</h2>
    <p>This is a temporary landing page.</p>
    <button type="button">Coming Soon...</button>
</section>