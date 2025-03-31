<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exam Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/login.css">
    </head>

    <body>
        <div class="signin-container">
            <div class="form-container">
                <div class="form-header">
                    <p class="p1">Sign In</p>
                    <p class="p2">Welcome back!</p>
                </div>

                <form>                    
                    <input class="username" type="text" placeholder="Email or username" name="uname">
                    
                    <div class="password-container">
                        <input class="password" type="password" placeholder="Password" name="password">
                        <!-- Show/Hide password + change the icon -->
                        <img src="images/visible.png" class="toggle-password" width="20" height="20" alt="visible icon">
                    </div>

                    <button type="submit">
                        Sign In
                    </button>
                </form>

                <a class="forgot-password" href="reset-password.php">Forgot password?</a>
                    <p>Don't have an account? &nbsp;
                    <span> <a href="sign-up.php">Register Now</a></span>
                </p>
            </div>

        </div>

    </body>

</html>