<?php
include 'config/db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "Invalid contact ID.";
    exit;
}

$result = $conn->query("SELECT * FROM contacts WHERE id = $id");
$contact = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "UPDATE contacts SET 
                name = '$name',
                email = '$email',
                phone = '$phone',
                address = '$address'
            WHERE id = $id";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating contact: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 40px;
        }

        .container {
            width: 400px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .back-link {
            text-align: center;
            margin-top: 15px;
        }

        .back-link a {
            color: #333;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Contact</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $contact['name'] ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $contact['email'] ?>" required>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?= $contact['phone'] ?>" required>

        <label>Address:</label>
        <input type="text" name="address" value="<?= $contact['address'] ?>" required>

        <button type="submit">Update Contact</button>
    </form>

    <div class="back-link">
        <a href="index.php">&larr; Back to Contact List</a>
    </div>
</div>

</body>
</html>