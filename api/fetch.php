<?php
include '../includes/db.php';

header('Content-Type: application/json');

$stmt = $pdo->query("SELECT * FROM gallery ORDER BY uploaded_at DESC");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
?>
