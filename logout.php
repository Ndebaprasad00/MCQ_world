<?php
// logout.php
session_start();
// session_destroy();

// Redirect to the login page or homepage after logout
header("Location: http://localhost/MCQ_world/");
exit();
?>
