<?php include 'includes/header.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f3f4f6;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 40px auto;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 15px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        font-size: 14px;
    }

    textarea {
        resize: vertical;
        height: 80px;
    }

    input[type="submit"] {
        background: #007bff;
        color: white;
        border: none;
        padding: 12px;
        margin-top: 20px;
        border-radius: 6px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        transition: background 0.3s;
    }

    input[type="submit"]:hover {
        background: #0056b3;
    }
</style>

<div class="container">
    <h2>Add New Contact</h2>

    <form action="process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="address">Address:</label>
        <textarea name="address" required></textarea>

        <input type="submit" value="Add Contact">
    </form>
</div>

<?php include 'includes/footer.php'; ?>
