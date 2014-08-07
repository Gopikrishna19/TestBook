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


<script>
    $(function () {
        var register = $(".register");
        var error = 0;
        function toggleError(ele, cond) {
            if (cond) {
                ele.next().slideDown();
                error += 1;
            }
            else {
                ele.next().slideUp();
            }
        }
        $(".register").submit(function () {
            error = 0;
            toggleError($("#uname", register), $("#uname", register).val().trim() == "");
            toggleError($("#email", register), !/^[0-9a-zA-Z._]+@[a-z0-9A-Z._]+\.[a-z]{2,5}$/.test($("#email", register).val()));
            toggleError($("#cmail", register), $("#email", register).val() != $("#cmail", register).val());
            toggleError($("#upass", register), !/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,}$/.test($("#upass", register).val()));
            console.log(error);
            if (error > 0) {
                event.preventDefault();
                return false;
            }
            
        })
        $(".login").submit(function (e) {

            e.preventDefault();
            var login = $(".login");
            $.ajax({
                url: "/index/xhrLogin/",
                data: {
                    email: $("#email", login).val(),
                    upass: $("#upass", login).val()
                },
                beforeSend: function () {
                    $(".loader").fadeIn();
                },
                success: function (e) {
                    e = e.trim();
                    if (e == "no") $(".right .error").slideDown();
                    else if (e == "yes") window.location.href = "/profile";

                    // Hide error after 5 seconds
                    setTimeout(function () { $(".right .error").slideUp(); }, 5000);
                },
                complete: function () {
                    $(".loader").fadeOut();
                }
            })

            return false;
        });
    })

</script>
