<?php
include_once '../../database/dbconnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT status FROM faculty WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $newStatus = $row['status'] == 1 ? 0 : 1;

        $updateQuery = "UPDATE faculty SET status = ? WHERE id = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("ii", $newStatus, $id);
        $updateStmt->execute();

        if ($updateStmt->affected_rows > 0) {
            echo "Faculty status updated successfully.";
        } else {
            echo "Failed to update faculty status.";
        }
    } else {
        echo "Faculty not found.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>