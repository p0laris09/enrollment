<?php
require_once '../../database/dbconnection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    try {
        $query = "SELECT name, email, phone, message, status, created_at FROM contactus WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $feedback = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($feedback) {
            echo json_encode($feedback);
        } else {
            echo json_encode(['error' => 'Feedback not found']);
        }
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>