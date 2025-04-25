<?php
include_once '../../database/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $subject = $_POST['subject'];
    $grade = $_POST['grade'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    $targetDir = '../../images/';
    $targetFile = $targetDir . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        // Insert query
        $query = "INSERT INTO faculty (name, age, subject, grade, image, status) VALUES (?, ?, ?, ?, ?, 1)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sisss", $name, $age, $subject, $grade, $image);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: faculty.php");
            exit;
        } else {
            echo "Failed to add faculty.";
        }

        $stmt->close();
    } else {
        echo "Failed to upload image.";
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>