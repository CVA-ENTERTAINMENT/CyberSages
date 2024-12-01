<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Register</title>
</head>
<body>
    <div class="login">
        <img src="./login-bg.png" alt="register image" class="login__img">

        <form action="register.php" method="post" class="container">
            <h1 class="login__title">Register</h1>

            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="email" name="email" required class="login__input" id="register-email" placeholder=" ">
                        <label for="register-email" class="login__label">Email</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="password" name="password" required class="login__input" id="register-pass" placeholder=" ">
                        <label for="register-pass" class="login__label">Password</label>
                        <i class="ri-eye-off-line login__eye" id="register-eye"></i> <!-- Eye icon -->
                    </div>
                </div>
            </div>

            <button type="submit" class="login__button">Register</button>
            
            <p class="login__register">
                Already have an account? <a href="index.html">Login</a>
            </p>
        </form>
    </div>

    <script>
        // Toggle password visibility for the register page
        const togglePassword = document.querySelector('#register-eye');
        const passwordField = document.querySelector('#register-pass');
        togglePassword.addEventListener('click', function () {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('ri-eye-off-line');
            this.classList.toggle('ri-eye-line');
        });

        // Navigate on button/link click
        document.querySelectorAll('a, button').forEach(element => {
            element.addEventListener('click', function (event) {
                event.preventDefault();
                const target = this.getAttribute('href') || this.getAttribute('formaction');
                if (target) {
                    window.location.href = target;
                } else {
                    document.querySelector('form').submit();
                }
            });
        });
    </script>
</body>
</html>
