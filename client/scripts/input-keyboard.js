// Thanks to the UnixPapa tutorial for help with this
// http://unixpapa.com/js/testkey.html

if (document.addEventListener) {
    document.addEventListener("keydown", keyDown, false);
    document.addEventListener("keypress",keyPress, false);
    document.addEventListener("keyup", keyUp, false);
} else if (document.attachEvent) {
    document.attachEvent("onkeydown", keyDown);
    document.attachEvent("onkeypress", keyPress);
    document.attachEvent("onkeyup", keyUp);
} else {
    document.onkeydown = keyDown;
    document.onkeypress = keyPress;
    document.onkeyup = keyUp;
}


function suppressDefault(e) {
    if (e.preventDefault) {
        e.preventDefault();
    }
    if (e.stopPropagation) {
        e.stopPropagation();
    }
    return true;
}

function doInputAction(e) {
    if (e.keyCode >= 32 && e.keyCode < 127) {
        switch (e.keyCode) {
            case '37':
                alert('left');
                break;
            case '38':
                alert('up');
                break;
            case '39':
                alert('right');
                break;
            case '40':
                alert('down');
                break;
        }
    }
}

function keyDown(e) {
    if (!e) e = event;
    doInputAction(e);
    return suppressDefault(e);
}

function keyUp(e) {
    if (!e) {
        e = event;
    }
    return suppressDefault(e);
}

function keyPress(e) {
    if (!e) {
        e = event;
    }
    doInputAction(e);
    return suppressDefault(e);
}