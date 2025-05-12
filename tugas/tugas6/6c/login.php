<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* CSS */
        @import url('https://use.fontawesome.com/releases/v5.12.0/css/all.css');

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

        #main-container {
            min-width: 450px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "calibri";
        }

        .form-container {
            width: 400px;
            height: 500px;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
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
            background: rgb(253, 253, 253);
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

        button {
            position: absolute;
            font-size: 2rem;
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
            padding: 5px;
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
            <form>
                <div class="field">
                    <input type="email" id="email-address" placeholder=" " required autocomplete="on">
                    <label for="email-address">Email</label>
                    <i class="fa fa-envelope"></i>
                </div>

                <div class="field">
                    <input type="password" id="create-pass" required placeholder=" " autocomplete="on">
                    <label for="create-pass">Password</label>
                    <i class="fa fa-lock"></i>
                </div>

                <section>
                    <label for="remember"><input type="checkbox" id="remember">Remember Me</label>
                    <a href="#">Forget Password?</a>
                </section>

                <button class="login-btn">Login</button>
            </form>

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
                    <label for="agree"><input type="checkbox" id="agree">I agree to all&nbsp;<a href="#">Terms &
                            Conditions</a></label>
                </section>
                <button class="signup-btn">Register</button>
            </form>

            <div class="bottom">
                <span>Already Registered?&nbsp;<a class="login-switch" onclick="swapPos(this)">Login</a></span>
            </div>
        </div>
    </div>
</div>
<script>
    // JavaScript
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