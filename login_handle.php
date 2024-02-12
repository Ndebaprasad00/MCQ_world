<?php
// login_handle.php
ob_start(); 
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['emailid'];
    $password = $_POST['passwordl'];

    try {
        $stmt = $conn->prepare("SELECT id, password, first_name FROM users WHERE email = ?");
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            header("Location: http://localhost/MCQ_world/home.php?id={$user['id']}");
            exit();
        } else {
            echo 'Invalid email or password.';
            header("Location: http://localhost/MCQ_world/home.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
ob_end_flush();
?>
