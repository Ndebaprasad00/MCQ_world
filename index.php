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
        <button class='loginbtn' onclick='openlogin()' style="width:auto;">Sign Up</button>
           
        </div>
    </nav>

    <!-- Login and Register Form -->
    <section>
        
        <div id='login-form'class='login-page'>
                <div class="form-box">
                    <div class='button-box'>
                        <div id='btn'></div>
                        <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                        <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                    </div>
                    <form id='login' class='input-group-login' method='post' action='#'>
                        <input type='text'class='input-field'placeholder='Email Id' name='emailid' required >
                        <input type='password'class='input-field'placeholder='Enter Password' name='passwordl' required>
                        <div class='loginf'>
                            <input type='checkbox'class='check-box'><span>Remember Password</span>
                            <a href="forgot_password.php" class='forget'><span>Forgot Password</span></a>
                        </div>
                        <button type='submit'class='submit-btn'>Log in</button>
                    </form>
                    <form id='register' class='input-group-register' method='post' action='#'>
                        <input type='text'class='input-field'placeholder='First Name' name='first_name' required>
                        <input type='text'class='input-field'placeholder='Last Name ' name='last_name' required>
                        <input type='email'class='input-field'placeholder='Email Id' name='email'  required>
                        <input type='password'class='input-field'placeholder='Enter Password' name='password' required>
                        <input type='password'class='input-field'placeholder='Confirm Password' name='confirm_password' required>
                        <!-- <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span> -->
                        <button type='submit'class='submit-btn'>Register</button>
                    </form>
                </div>
        </div>

           <!-- Login and Register Form Scripts for popup open and close-->
            <script>
            var x=document.getElementById('login');
            var y=document.getElementById('register');
            var z=document.getElementById('btn');
            var m=document.getElementById('first');
            var h=document.getElementById('second');
            var p=document.getElementById('third');

            function openlogin(){
                document.getElementById('login-form').style.display='block';
                document.getElementById('first').style.display='none';
                document.getElementById('second').style.display='none';
                // document.getElementById('adminlogin-form').style.display='none';

            }

            function register()
            {
                x.style.left='-400px';
                y.style.left='50px';
                z.style.left='110px'; 
            }
            function login()
            {
                x.style.left='50px';
                y.style.left='450px';
                z.style.left='0px';
                
            }
        </script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('login-form');
            // var almodel=document.getElementById('adminlogin-form');
            modal.style.display = "none";
            // almodel.style.display = "none";
            document.getElementById('first').style.display='block';
            document.getElementById('second').style.display='block';
            // document.getElementById('adminlogin-form').style.display='none';
            // console.log("Hellloooo");


        });

        window.onclick = function(event) {
            var modal = document.getElementById('login-form');
            // var almodel=document.getElementById('adminlogin-form');
            if (event.target == modal) {
                modal.style.display = "none";
                // almodel.style.display = "none";
                document.getElementById('first').style.display='block';
                document.getElementById('second').style.display='block';
                // console.log("Hiiiii");

            }
        }
        </script>

    </section>




    <header id='second'>
        <h1>MCQ World</h1>
    </header>


    <main id='first'>


        <!-- Your main content goes here -->
        <p id='third'>Welcome to Your Beautiful Website! This is the main content of your landing page.</p>
    </main>


    <footer >

    <?php
        // Example of dynamic content using PHP
        $currentYear = date("Y");
        ?>

            <div class="footer-content">
                <p>Contact Us: <a href="mailto:mcqassesment@gmail.com" style="text-decoration:none">mcqassesment@gmail.com</a></p>
            </div>
            <p>copyright &copy; <?php echo $currentYear; ?> MCQ_World</p>
          <!-- Social media icons for login -->
          <div class="social-icons">
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-google"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-telegram"></i></a>
            <button class="loginbtn1" onclick='adminlogin()'><i class="fa-solid fa-unlock"></i></button>
            <!-- Add more social media icons as needed -->
        </div>
    </footer>

</body>

</html>

<?php

    include("register_handle.php");

?>


<?php
    include("login_handle.php");

    if(isset($_POST['emailid'])){
        $email=$_POST['emailid'];
        $pwd=$_POST['passwordl'];

        $query = "SELECT * FROM user Where email=$email AND password=$pwd";
        $data = mysqli_query($conn,$query);

        $total = mysqli_num_rows($data);
        if($total== 1){
            // header('location:http://localhost/MCQ_world/');
            ?>
            <meta http-equiv = "refresh" content = "0; url = location:http://localhost/MCQ_world/"/>
            <?php
        }
        else{
            echo "Login failed";
        }

    }
?>