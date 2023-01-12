window.onload = function preload() {
    document.getElementById("body").style.visibility = "hidden";
    document.getElementById("bitcoin").style.display = "block";
    setInterval(function () {
        document.getElementById("bitcoin").style.display = "none";
        document.getElementById("body").style.visibility = "visible";
    }, 500);
}


