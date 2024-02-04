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
                    <form id='login' class='input-group-login'>
                        <input type='text'class='input-field'placeholder='Email Id' required >
                        <input type='password'class='input-field'placeholder='Enter Password' required>
                        <input type='checkbox'class='check-box'><span>Remember Password</span>
                        <button type='submit'class='submit-btn'>Log in</button>
                    </form>
                    <form id='register' class='input-group-register'>
                        <input type='text'class='input-field'placeholder='First Name' required>
                        <input type='text'class='input-field'placeholder='Last Name ' required>
                        <input type='email'class='input-field'placeholder='Email Id' required>
                        <input type='password'class='input-field'placeholder='Enter Password' required>
                        <input type='password'class='input-field'placeholder='Confirm Password'  required>
                        <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
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
            modal.style.display = "none";
            document.getElementById('first').style.display='block';
        });

        window.onclick = function(event) {
            var modal = document.getElementById('login-form');
            if (event.target == modal) {
                modal.style.display = "none";
                document.getElementById('first').style.display='block';
            }
        }
        </script>

    </section>

    <main id='first'>

    <header id='second'>
        <h1>MCQ World</h1>
    </header>


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
            <button class="loginbtn1"><i class="fa-solid fa-unlock"></i></button>
            <!-- Add more social media icons as needed -->
        </div>
    </footer>

</body>

</html>
