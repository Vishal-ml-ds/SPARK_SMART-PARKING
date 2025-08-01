<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login and Sign Up Page</title>
    <link rel="stylesheet" href="assets/css/login.css" />
</head>

<style>
<?php include "headercss.php";
?>
</style>

<body>
    <script src="assets/js/login.js"></script>
    <?php include "header.php"; ?>

    <div class="login-container">
        <h2 id="form-title">Login</h2>
        <div id="login-form" class="login-form">
            <form action="login.php" id="login-formid" method="post" onsubmit="return validateLoginForm()">
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="login-email" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" />
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
            <p>
                Don't have an account?
                <button class="toggle-btn" onclick="toggleForm()">Sign Up</button>
            </p>
        </div>

        <div id="signup-form" class="signup-form" style="display: none">
            <form method="post" action="register.php" onsubmit="return validateSignupForm()">
                <div class="form-group">
                    <label for="new-username">Username</label>
                    <input type="text" id="new-username" name="CustomerName" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="Email_id" />
                </div>
                <div class="form-group">
                    <label for="new-password">Password</label>
                    <input type="password" id="new-password" name="Password" />
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" />
                </div>
                <div class="form-group">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
            <p>
                Already have an account?
                <button class="toggle-btn" onclick="toggleForm()">Login</button>
            </p>
        </div>
    </div>
</body>

</html>