<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exam Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/login.css">
    </head>

    <body>
        <div class="signup-container">
            <div class="form-container">
                <div class="form-header">
                    <p class="p1">Register Account</p>
                    <p class="p2">Hello new user, hope you’ll have
                    a greatful journey! 😊</p>
                </div>

                <form>
                    <input type="text" placeholder="First name" name="fname">
                    <input type="text" placeholder="Last name" name="lname">
                    
                    <input class="username" type="text" placeholder="Username" name="uname">
                    <div class="acc-requirement">
                        <p>Username must include:</p>
                        <!-- Check username requirement -->
                        <ul>
                            <li>at least 2 characters</li>
                            <li>at least 1 letter and (or) digit(s) and (or) underscore(s)</li>
                            <li>no special characters</li>
                        </ul>
                    </div>

                    <input type="email" placeholder="Email" name="email">
                    
                    <div class="password-container">
                        <input class="password" type="password" placeholder="Password" name="password">
                        <!-- Show/Hide password + change the icon -->
                        <img src="images/visible.png" class="toggle-password" 
                        width="20" height="20" alt="visible icon" onclick="togglePassword(this)">
                    </div>

                    <div class="acc-requirement">
                        <p>Password must include:</p>
                        <ul>
                        <!-- Check password requirement  -->
                            <li>at least 8 characters</li>
                            <li>both letter(s) and digit(s) and (or) special characters</li>
                        </ul>
                    </div>
                    <div class="password-container">
                        <input class="password-cf" type="password" placeholder="Confirm password" name="password">
                        <!-- Show/Hide password + change the icon -->
                        <img src="images/visible.png" class="toggle-password-cf"
                        width="20" height="20" alt="visible icon" onclick="togglePassword(this)">
                    </div>

                    <button type="submit">
                        Create account
                    </button>
                </form>

                <p>Already has an account? &nbsp;
                    <span> <a href="sign-in.php">Login</a></span>
                </p>
            </div>
        </div>
    </body>
</html>

<script>
    function togglePassword(eyeicon) {
        var password = eyeicon.previousElementSibling;
        if (password.type === "password") {
            password.type = "text";
            eyeicon.src = "images/invisible.png";
        } else {
            password.type = "password";
            eyeicon.src = "images/visible.png";
        }
    }
</script>