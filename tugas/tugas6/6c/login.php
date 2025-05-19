<?php
session_start();

if (isset($_POST["submit"])) {
    if ($_POST["username"] === "admin" && $_POST["password"] === "admin") {
        $_SESSION["admin"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://use.fontawesome.com/releases/v5.12.0/css/all.css');

        * {
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
        }

        input[type=checkbox] {
            margin-right: 5px;
            cursor: pointer;
            width: auto;
        }

        a {
            text-decoration: none;
            color: rgb(53, 41, 161);
            cursor: pointer;
        }

        a:hover {
            text-decoration: underline;
        }

        body {
            margin: 0;
            padding: 0;
        }

        #main-container {
            min-width: 450px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "calibri";
            position: relative;
            overflow: hidden;
            z-index: 0;
        }

        #main-container::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: url('gambarlogin.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: brightness(0.5);
            z-index: -1;
        }

        .form-container {
            width: 400px;
            height: 500px;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
            z-index: 1;
        }

        .login-form,
        .signup-form {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 20px;
            overflow: hidden;
            text-align: center;
            position: absolute;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.95);
            animation: .8s ease-in-out forwards;
        }

        .login-form {
            transform: translate3d(0px, 0, 0px);
        }

        .signup-form {
            transform: translate3d(0px, 0, -200px);
        }

        .login-form::before,
        .signup-form::before {
            content: "";
            position: absolute;
            left: -50%;
            bottom: -5%;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 30px;
            transform: rotate(45deg);
            background-color: rgba(214, 214, 214, 0.24);
        }

        .title {
            font-size: 30px;
            color: #1a1a1a;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .field {
            position: relative;
            margin-top: 50px;
        }

        form input {
            border: none;
            border-bottom: 1px solid black;
            background: transparent;
            width: 100%;
            padding: 0 30px 5px 0;
        }

        .field label {
            left: 0;
            bottom: 5px;
            cursor: text;
            transition: .3s;
            position: absolute;
        }

        .field .fa {
            right: 1%;
            top: 0;
            position: absolute;
        }

        .field input:focus+label,
        .field input:not(:placeholder-shown)+label {
            bottom: 25px;
        }

        section {
            display: flex;
            justify-content: space-between;
            margin: 5px 0 50px 0;
            font-size: 15px;
        }

        section label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: rgba(0, 0, 0, 0.856);
        }

        .login-btn,
        .signup-btn {
            width: 100%;
            border: none;
            font-size: 20px;
            position: relative;
            cursor: pointer;
            border-radius: 10px;
            transition: .3s;
            color: white;
            background: #1a1a1a;
            padding: 10px;
        }

        .login-btn {
            margin: 0 0 35px 0;
        }

        .login-btn:hover,
        .signup-btn:hover {
            opacity: .9;
        }

        .bottom {
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .other {
            margin: 10px 0 30px;
        }

        .separator {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            gap: 10px;
        }

        .separator::before,
        .separator::after {
            content: '';
            background: rgba(0, 0, 0, 0.349);
            width: 40%;
            height: 1px;
        }

        .alternatives span {
            margin: 0 2px;
            cursor: pointer;
            transition: .3s;
            font-size: 25px;
            padding: 10px;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .alternatives span:hover {
            transform: scale(0.9);
        }

        .signup-form .field {
            margin-top: 40px;
        }

        .signup-form section {
            margin: 20px 0 10px 0;
        }

        .signup-btn {
            margin: 20px 0;
        }

        .signup-form .bottom {
            justify-content: flex-end;
            margin-top: 20px;
        }

        .above {
            animation-name: above;
        }

        .below {
            animation-name: below;
        }

        .error {
            text-align: center;
            color: #ff4b5c;
            margin-top: 10px;
        }

        @keyframes above {
            0% {
                transform: translate3d(0, 0, -500px);
            }

            50% {
                transform: translate3d(70%, 0, -100px);
            }

            100% {
                transform: translate3d(0px, 0, 0px);
            }
        }

        @keyframes below {
            0% {
                transform: translate3d(0, 0, 0);
            }

            50% {
                transform: translate3d(-70%, 0, 0px);
            }

            100% {
                transform: translate3d(0px, 0, -200px);
            }
        }
    </style>
</head>
<body>
<div id="main-container">
    <div class="form-container">
        <div class="login-form">
            <div class="title">LOGIN</div>
            <form method="POST">
                <div class="field">
                    <input type="text" name="username" placeholder=" " required autocomplete="on">
                    <label for="username">Username</label>
                    <i class="fa fa-user"></i>
                </div>

                <div class="field">
                    <input type="password" name="password" required placeholder=" " autocomplete="on">
                    <label for="password">Password</label>
                    <i class="fa fa-lock"></i>
                </div>

                <section>
                    <label for="remember"><input type="checkbox" id="remember">Remember Me</label>
                    <a href="#">Forget Password?</a>
                </section>

                <button class="login-btn" type="submit" name="submit">Login</button>
            </form>

            <?php if (isset($error)) : ?>
                <p class="error">Username atau password salah!</p>
            <?php endif; ?>

            <div class="bottom">
                <div class="other">
                    <div class="separator">Or</div>
                    <div class="alternatives">
                        <a href="#"><i class="bx bxl-google"></i></a>
                        <a href="#"><i class="bx bxl-dropbox"></i></a>
                        <a href="#"><i class="bx bxl-github"></i></a>
                        <a href="#"><i class="bx bxl-microsoft"></i></a>
                        <a href="#"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
                <div>Don't have an Account?&nbsp;<a class="signup-switch" onclick="swapPos(this)">Sign up</a></div>
            </div>
        </div>

        <div class="signup-form">
            <div class="title">SIGN UP</div>
            <form>
                <div class="field">
                    <input type="text" id="name" placeholder=" " required>
                    <label for="name">Name</label>
                    <i class="fa fa-user"></i>
                </div>

                <div class="field">
                    <input type="email" id="user-email" placeholder=" " required autocomplete="on">
                    <label for="user-email">Email</label>
                    <i class="fa fa-envelope"></i>
                </div>

                <div class="field">
                    <input type="password" id="password" required placeholder=" " autocomplete="off">
                    <label for="password">Password</label>
                    <i class="fa fa-lock"></i>
                </div>

                <div class="field">
                    <input type="password" id="confirm-pass" required placeholder=" " autocomplete="off">
                    <label for="confirm-pass">Confirm Password</label>
                    <i class="fa fa-lock"></i>
                </div>

                <section>
                    <label for="agree"><input type="checkbox" id="agree">I agree to all&nbsp;<a href="#">Terms & Conditions</a></label>
                </section>
                <button class="signup-btn" type="button">Register</button>
            </form>

            <div class="bottom">
                <span>Already Registered?&nbsp;<a class="login-switch" onclick="swapPos(this)">Login</a></span>
            </div>
        </div>
    </div>
</div>

<script>
    const loginForm = document.querySelector('.login-form');
    const signupForm = document.querySelector('.signup-form');

    function swapPos(btn) {
        const isSignupSwitch = btn.classList.contains('signup-switch');
        signupForm.classList.toggle('above', isSignupSwitch);
        loginForm.classList.toggle('above', !isSignupSwitch);
        signupForm.classList.toggle('below', !isSignupSwitch);
        loginForm.classList.toggle('below', isSignupSwitch);
    }
</script>
</body>
</html>