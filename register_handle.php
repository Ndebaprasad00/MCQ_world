<?php
// register_handle.php
require_once 'config.php';

// Create the users table if it doesn't exist
try {
    $createTableSQL = "CREATE TABLE IF NOT EXISTS users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role VARCHAR(50) DEFAULT 'user' NOT NULL
    )";

    $conn->exec($createTableSQL);
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        // Check if the user already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            echo 'User already exists.';
            header("Location: http://localhost/MCQ_world");
            exit();
        } else {
            // Insert the new user into the database
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$firstName, $lastName, $email, $password]);

            // Set the registration success session variable
            session_start();
            $_SESSION['registration_success'] = true;

            // Redirect to index.php with the tick animation
            header("Location: http://localhost/MCQ_world/");
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
