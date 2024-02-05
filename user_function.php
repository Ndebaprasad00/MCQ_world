<?php
// user_functions.php

require_once 'config.php';

function logoutUser() {
    session_start();
    session_destroy();
    
    // Redirect to the login page or homepage after logout
    header("Location: http://localhost/MCQ_world/");
    exit();
}
?>
