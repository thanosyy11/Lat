<?php
$host = 'localhost';  // Nama host
$dbname = 'portfolio'; // Nama database
$username = 'root';  // Username MySQL
$password = '';  // Password MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>