<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $role = 'user'; // Set a default role for users

    // Your database connection code (replace with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password1 = "";
    $dbname = "MCQ_Assessment";

    $conn = new mysqli($servername, $username, $password1, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create a table if it doesn't exist
    $createTableSQL = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(50) NOT NULL,
        lname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role VARCHAR(50) NOT NULL
    )";

    $conn->query($createTableSQL);

    // Insert user data into the table
    $insertUserSQL = "INSERT INTO users (fname, lname, email, password, role)
                     VALUES ('$firstName', '$lastName', '$email', '$password', '$role')";

    if ($conn->query($insertUserSQL) === TRUE) {
        ?>
        <meta http-equiv = "refresh" content = "0; url = location:http://localhost/MCQ_world/"/>
        <?php
    } else {
        echo "Error: " . $insertUserSQL . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
