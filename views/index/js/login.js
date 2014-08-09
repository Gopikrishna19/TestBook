$(function () {
    var register = $(".register");
    var login = $(".login");
    var error = 0;

    function toggleError(ele, cond) {
        if (cond) {
            ele.next(".error").stop().slideDown();
            error += 1;
        }
        else {
            ele.next(".error").stop().slideUp();
        }
    }

    function checkUser() {
        var result = false;
        $.ajax({
            url: "/index/xhrUserExists/",
            async: false,
            data: {
                email: $("#email", register).val()
            },
            success: function (e) {
                e = e.trim();
                if (e == "yes") {
                    $("#already", register).show();
                    result = true;
                    error += 1;
                }
                else {
                    $("#already", register).hide();
                    result = false;
                }
            }
        });
        return result;
    }

    $("input", register).keypress(function () { $(this).next(".error").slideUp(); });
    $("input", register).change(function () { $(this).val($(this).val().trim()); });
    $("#cmail", register).change(function () { toggleError($(this), $("#email", register).val() != $(this).val()); });
    $("#email", register).change(function () {
        toggleError($(this), !/^[0-9a-zA-Z._]+@[a-z0-9A-Z._]+\.[a-z]{2,5}$/.test($(this).val()));
    });

    $(".register").submit(function (event) {
        error = 0;
        try {
            checkUser();
            toggleError($("#uname", register), $("#uname", register).val().trim() == "");
            toggleError($("#email", register), !/^[0-9a-zA-Z._]+@[a-z0-9A-Z._]+\.[a-z]{2,5}$/.test($("#email", register).val()));
            toggleError($("#cmail", register), $("#email", register).val() != $("#cmail", register).val());
            toggleError($("#upass", register), !/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,}$/.test($("#upass", register).val()));
        } catch (ex) {
            console.log(ex);
            event.preventDefault();
            return false;
        } finally {
            if (error > 0) {
                event.preventDefault();
                return false;
            }
        }
    });

    function authUser() {
        $.ajax({
            url: "/index/xhrLogin/",
            data: {
                email: $("#email", login).val(),
                upass: $("#upass", login).val()
            },
            beforeSend: function () {
                $(".right .loader").fadeIn();
            },
            success: function (e) {
                e = e.trim();
                console.log(e);
                if (e == "no") $(".right .error").slideDown();
                else if (e == "yes") window.location.href = "/profile";

                // Hide error after 5 seconds
                setTimeout(function () { $(".right .error").slideUp(); }, 5000);
            },
            complete: function () {
                $(".right .loader").fadeOut();
            }
        })
    }

    $(".login").submit(function (e) {
        e.preventDefault();
        authUser();
        return false;
    });
});