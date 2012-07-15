// Thanks to the UnixPapa tutorial for help with this
// http://unixpapa.com/js/testkey.html

if (document.addEventListener) {
    document.addEventListener("keydown",keydown,false);
    document.addEventListener("keypress",keypress,false);
    document.addEventListener("keyup",keyup,false);
} else if (document.attachEvent) {
    document.attachEvent("onkeydown", keydown);
    document.attachEvent("onkeypress", keypress);
    document.attachEvent("onkeyup", keyup);
} else {
    document.onkeydown= keydown;
    document.onkeypress= keypress;
    document.onkeyup= keyup;
}
