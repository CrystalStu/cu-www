if(getCookie("ignoreMessage") == "SuspendByStudy") {
    $("#alertMain").remove();
}

function alertClosing() {
    setCookie("ignoreMessage", "SuspendByStudy", 7);
}