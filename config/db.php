<?php
// MySQL credentials
$host = "localhost";
$user = "root";       // Default username for XAMPP
$pass = "";           // Leave blank unless you've set a MySQL password
$dbname = "contact_db";  // The name of your database

// Create a new connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// You can use $conn in other PHP files to run queries
?>
