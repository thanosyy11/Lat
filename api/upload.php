<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $imagePath = 'uploads/' . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], '../' . $imagePath)) {
        $stmt = $pdo->prepare("INSERT INTO gallery (title, image_path) VALUES (?, ?)");
        if ($stmt->execute([$title, $imagePath])) {
            echo json_encode(['status' => 'success', 'message' => 'Data berhasil diunggah']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan data']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal mengunggah file']);
    }
} else {
    http_response_code(405); // Method not allowed
}
?>
