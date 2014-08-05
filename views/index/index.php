
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
            <div class="error" style="color: #f00"></div>
            <input type="text" id="email" placeholder="Email" class="txt">
            <input type="password" id="upass" placeholder="Password" class="txt">
            <label for="ukeep"><input type="checkbox" id="ukeep"> Remember Me</label>
            <input type="submit" value="Sign In" class="btn">
            <?php ActionLink::create("Forgot your password?","#"); ?>
        </form>
    </div>
</div>
<script src="/common/js/jquery.js"></script>
<script>
    $(".login").submit(function (e) {
        
        e.preventDefault();
        var login = $(".login");
        $.ajax({
            url: "/index/xhrLogin/",
            data: {
                uname: $("#email", login).val(),
                upass: $("#upass", login).val()
            },
            success: function (e) {
                
                e = e.trim();
                console.log(e);
                if (e == "no") $(".login .error").html("Invalid user name or password");
                else if (e == "yes") window.location.href = "/profile";
            }
        })

        return false;
    })
</script>