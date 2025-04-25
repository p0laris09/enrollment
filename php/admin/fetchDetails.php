<?php
// Include the database connection
include_once '../../database/dbconnection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare the SQL query to fetch enrollee details
    $sql = "SELECT * FROM enrollment WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Output enrollee details
        echo "<p><strong>Surname:</strong> " . htmlspecialchars($row['surname']) . "</p>";
        echo "<p><strong>Firstname:</strong> " . htmlspecialchars($row['firstname']) . "</p>";
        if (!empty($row['middlename'])) {
            echo "<p><strong>Middlename:</strong> " . htmlspecialchars($row['middlename']) . "</p>";
        }
        echo "<p><strong>Gender:</strong> " . htmlspecialchars(ucfirst($row['gender'])) . "</p>";
        echo "<p><strong>Birthplace:</strong> " . htmlspecialchars($row['birthplace']) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($row['dob']) . "</p>";
        echo "<p><strong>Street:</strong> " . htmlspecialchars($row['street']) . "</p>";
        echo "<p><strong>City:</strong> " . htmlspecialchars($row['city']) . "</p>";
        echo "<p><strong>Province:</strong> " . htmlspecialchars($row['province']) . "</p>";
        echo "<p><strong>Zipcode:</strong> " . htmlspecialchars($row['zipcode']) . "</p>";
        echo "<p><strong>Parent's Surname:</strong> " . htmlspecialchars($row['parentSurname']) . "</p>";
        echo "<p><strong>Parent's Firstname:</strong> " . htmlspecialchars($row['parentFirst']) . "</p>";
        echo "<p><strong>Parent's Middlename:</strong> " . htmlspecialchars($row['parentMiddle']) . "</p>";
        echo "<p><strong>Parent's Phone:</strong> " . htmlspecialchars($row['parentPhone']) . "</p>";
        echo "<p><strong>Parent's Email:</strong> " . htmlspecialchars($row['parentEmail']) . "</p>";
        echo "<p><strong>Parent's Occupation:</strong> " . htmlspecialchars($row['parentOccupation']) . "</p>";
    } else {
        echo "<p>No details found for this enrollee.</p>";
    }

    $stmt->close();
} else {
    echo "<p>Invalid request. No ID provided.</p>";
}

// Close the database connection
$conn->close();
?>