<?php
// register_handle.php
require_once 'config.php';

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
            // User already exists
            echo 'User already exists.';
            header("Location: http://localhost/MCQ_world/");
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