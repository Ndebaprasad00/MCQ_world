<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ_World</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
    </style>
</head>

<body>
    <nav>
        <a href="http://localhost/MCQ_world/"><img src="./image/4esyzR-LogoMakr.png" alt="Logo"></a>
        
        <div>
            <a href="">Home</a>
            <a href="">History</a>
            <div class="user-dropdown">
            <?php
                require_once 'config.php';
                // Check if the user ID is present in the URL
                if (isset($_GET['id'])) {
                    // Assume you have a function to retrieve user details by ID
                    // Modify this according to your database structure
                    $userId = $_GET['id'];
                    $userDetails = getUserDetailsById($userId);

                    if ($userDetails) {
                        $firstName = htmlspecialchars($userDetails['first_name']);
                        $firstLetter = substr($firstName, 0, 1);

                        // Display the avatar image
                        echo '<img src="https://via.placeholder.com/40/000/fff?text='.$firstLetter.'" alt="User Avatar" class="user-avatar" title="'.$firstLetter.'">';
                    }
                }
                
            ?>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        </div>
    </nav>

    <header id='second'>
        <h1>MCQ World</h1>
    </header>

    <main id='first'>
        <p id='third'>Welcome to Your Beautiful Website! This is the main content of your landing page.</p>
    </main>

    <footer>
        <?php
            $currentYear = date("Y");
        ?>
        <div class="footer-content">
            <p>Contact Us: <a href="mailto:mcqassessment@gmail.com" style="text-decoration:none">mcqassessment@gmail.com</a></p>
        </div>
        <p>Copyright &copy; <?php echo $currentYear; ?> MCQ_World</p>
        <a href="" style="text-decoration:none; color:white">Feedback</a>
        <div class="social-icons">
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-google"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-telegram"></i></a>
        </div>
    </footer>

</body>

</html>
