<section id="adminlogin-form" >
        <div >
            <div class="form-box">
            <div class='button-box'>
                        <div id='btn'></div>
                        <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                        <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                    </div>
                    <form id='login' class='input-group-login'>
                        <input type='text'class='input-field'placeholder='Email Id' required >
                        <input type='password'class='input-field'placeholder='Enter Password' required>
                        <div class='loginf'>
                            <input type='checkbox'class='check-box'><span>Remember Password</span>
                            <a href="http://localhost/MCQ_world/" class='forget'><span>Forget Password</span></a>
                        </div>
                        <button type='submit'class='submit-btn'>Log in</button>
                    </form>
                    <form id='register' class='input-group-register'>
                        <input type='text'class='input-field'placeholder='First Name' required>
                        <input type='text'class='input-field'placeholder='Last Name ' required>
                        <input type='email'class='input-field'placeholder='Email Id' required>
                        <input type='password'class='input-field'placeholder='Enter Password' required>
                        <input type='password'class='input-field'placeholder='Confirm Password'  required>
                        <!-- <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span> -->
                        <button type='submit'class='submit-btn'>Register</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var al=document.getElementById('adminlogin-form');
            function adminlogin(){
                al.style.display='block';
                document.getElementById('login-form').style.display='none';
                document.getElementById('first').style.display='none';
                document.getElementById('second').style.display='none';
                

            }

            var x=document.getElementById('login');
            var y=document.getElementById('register');
            var z=document.getElementById('btn');
            var m=document.getElementById('first');
            var h=document.getElementById('second');
            var p=document.getElementById('third');

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

           
    </section>