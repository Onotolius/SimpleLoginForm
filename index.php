<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
</head>

<body>
    <div class="auth-main">
        <div class="container">
            <div class="auth__wrapper">
                <h1 class="auth__title">Sign In</h1>
                <p class="auth__subtitle">
                    Sign in for academic process insight. Stay informed, track succes,
                    and build brighter future together
                </p>
                <form class="auth__forms" method="post" action="/includes/formHndler.php">
                    <label for="email-box" class="auth__email">Email or Phone Number</label><img src="/imgs/user.svg"
                        class="email-image" width="20" height="20" />
                    <input id="email-box" type="email" class="input-email" placeholder="Enter your email" />
                    <label for="password-box" class="auth__password">Passowrd</label><img src="/imgs/lock.svg"
                        class="pass-image" width="20" height="20" />
                    <input id="password-box" type="password" class="input-pass" placeholder="Enter your password"
                        required />
                </form>
                <div class="auth__help">
                    <label id="checkbox">Remeber me</label><input type="checkbox" />
                    <a class="auth__help-link">Forgot Password ?</a>
                </div>
                <button class="sign-btn" type="submit">Sign In</button>
                <p class="registration">
                    Don't have an account ? <a>Get access</a>
                </p>
            </div>
        </div>
    </div>
    </div>
</body>

</html>