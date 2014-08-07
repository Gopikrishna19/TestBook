<div class="center-it">
    <div class="article">
        Welcome to Testbook! Connect and share your thoughts with your friends.
    </div>
    <div class="left">
        <h4>Register</h4>
        <form class="register" action="/index/register" method="post">
            <input type="text" name="uname" id="uname" placeholder="Your Name" class="txt">
            <div class="error">Username must not be empty</div>
            <input type="text" name="email" id="email" placeholder="Your Email" class="txt">
            <div class="error">Invalid email</div>
            <div class="error" id="already">Mail already exists.</div>
            <input type="text" name="cmail" id="cmail" placeholder="Confirm Email" class="txt">
            <div class="error">Emails do not match</div>
            <input type="password" name="upass" id="upass" placeholder="Password" class="txt">
            <div class="error">Password must contain atleast
                <ul>
                    <li>one uppercase</li>
                    <li>one lowercase</li>
                    <li>one numerical character</li>
                    <li>minimum six characters</li>
                </ul>
            </div>
            <input type="submit" name="register" value="Register" class="btn">
        </form>
    </div>
    <div class="right">
        <h4>Sign In</h4>
        <div class="error">Invalid Username or Password</div>
        <form class="login">
            <input type="text" id="email" placeholder="Email" class="txt" autocomplete="off">
            <input type="password" id="upass" placeholder="Password" class="txt">
            <label for="ukeep"><input type="checkbox" id="ukeep"> Remember Me</label>
            <input type="submit" value="Sign In" class="btn">
            <div class="loader"></div>
            <?php ActionLink::create("Forgot your password?","#"); ?>
        </form>
    </div>
</div>
<script src="/common/js/jquery.js"></script>
