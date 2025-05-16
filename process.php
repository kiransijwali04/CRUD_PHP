<?php
// Include DB connection
include 'config/db.php';

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

// Insert into database
$sql = "INSERT INTO contacts (name, phone, email, address) 
        VALUES ('$name', '$phone', '$email', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "<script >
        alert('Contact added successfully!');
        window.location.href='add.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>