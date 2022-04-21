<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php" ?>
    <link rel="stylesheet" href="./css/login.css">
</head>


<body>

    <div id="main-login-container">
        <div id="login-background">
        </div>
        <div id="login-container">
            <a id="login-return" href="/">
                Return to main site
            </a>
            <div id="login-logo">
                <img src="./Images/logo.svg" alt="">
            </div>
            <div id="login-header">
                The VRcycle Portal
            </div>
            <form id="login-form">
                <div id="login-email-title">
                    EMAIL ADDRESS
                </div>
                <input id="login-email-input" type="text" name="username"></input>
                <div id="login-password-title">
                    PASSWORD
                </div>
                <input id="login-password-input" type="password" name="password"></input>
                <a id="login-forgot-password" href="/">
                    Forgot your password?
                </a>
                <button id="login-button" class="shadow" type="submit">
                    Login
                </button>
            </form>
            <div id="login-signup-prompt">
                Not registered with Fresh Tracks?
            </div>
            <a id="login-signup" href="/">
                Sign Up
</a>
        </div>
    </div>

</body>

</html>