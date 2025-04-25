<?php
include_once '../../database/dbconnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];

        if (!empty($image)) {
            $targetDir = '../../images/';
            $targetFile = $targetDir . basename($image);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $query = "UPDATE faculty SET name = ?, image = ? WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssi", $name, $image, $id);
            } else {
                echo "Failed to upload image.";
                exit;
            }
        } else {
            $query = "UPDATE faculty SET name = ? WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("si", $name, $id);
        }

        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: faculty.php");
            exit;
        } else {
            echo "Failed to update faculty.";
        }

        $stmt->close();
    } else {
        $query = "SELECT * FROM faculty WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode($result->fetch_assoc());
        } else {
            echo "Faculty not found.";
        }

        $stmt->close();
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>