<!DOCTYPE html>
<html>
    <head>
        <title>Testbook | Login</title>
        <link href="common/css/master.css" type="text/css" rel="stylesheet">
        <link href="views/index/css/login.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="center-it">
                <h2>Testbook</h2>
            </div>
        </div>
        <div class="content">
            <div class="center-it">
                <div class="article">
                    Welcome to Testbook! Connect and share your thoughts with your friends.
                </div>
                <div class="left">
                    <h4>Register</h4>
                    <form class="register">
                        <input type="text" name="uname" placeholder="Your Name" class="txt">
                        <input type="text" name="email" placeholder="Your Email" class="txt">
                        <input type="text" name="cmail" placeholder="Confirm Email" class="txt">
                        <input type="password" name="upass" placeholder="Password" class="txt">
                        <input type="submit" value="Register" class="btn">
                    </form>
                </div>
                <div class="right">
                    <h4>Sign In</h4>
                    <form class="login">
                        <input type="text" name="email" placeholder="Email" class="txt">
                        <input type="password" name="upass" placeholder="Password" class="txt">
                        <label for="keep"><input type="checkbox" name="ukeep" id="keep"> Remember Me</label>
                        <input type="submit" value="Sign In" class="btn">
                        <?php ActionLink::create("Forgot your password?","#"); ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            &copy; Copyright, 2014. All rights reserved
        </div>
    </body>
</html>
