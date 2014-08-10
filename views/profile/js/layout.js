var url = window.location.href;
url = url.split('?', 1)[0];
url = url.split('/', 5);
var myclass = url[4];
if (!myclass) myclass = "index";
$("." + myclass).addClass("selected");