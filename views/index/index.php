
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
        <div class="error"></div>
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
            beforeSend: function () {
                $(".loader").fadeIn();
            },
            success: function (e) {
                e = e.trim();
                if (e == "no") $(".error").html("Invalid user name or password").slideDown();
                else if (e == "yes") window.location.href = "/profile";

                // Hide error after 5 seconds
                setTimeout(function () { $(".error").slideUp().html("&nbsp;"); }, 5000);
            },
            complete: function () {
                $(".loader").fadeOut();
            }
        })

        return false;
    })
</script>
