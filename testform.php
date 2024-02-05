<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* style.css */
body {
    font-family: Arial, sans-serif;
}

.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.popup-content {
    max-width: 400px;
    margin: 0 auto;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

    </style>
</head>
<body>

<div class="popup" id="registerPopup">
    <div class="popup-content">
        <span class="close" onclick="closePopup('registerPopup')">&times;</span>
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="reg_username">Username:</label>
            <input type="text" id="reg_username" name="reg_username" required>
            <label for="reg_password">Password:</label>
            <input type="password" id="reg_password" name="reg_password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</div>

<div class="popup" id="loginPopup">
    <div class="popup-content">
        <span class="close" onclick="closePopup('loginPopup')">&times;</span>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="login_username">Username:</label>
            <input type="text" id="login_username" name="login_username" required>
            <label for="login_password">Password:</label>
            <input type="password" id="login_password" name="login_password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

<button onclick="openPopup('registerPopup')">Register</button>
<button onclick="openPopup('loginPopup')">Login</button>

<script>
    function openPopup(popupId) {
        document.getElementById(popupId).style.display = "block";
    }

    function closePopup(popupId) {
        document.getElementById(popupId).style.display = "none";
    }
</script>

</body>
</html>
