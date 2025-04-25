<?php
// Database connection for SQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "wrtclc";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>