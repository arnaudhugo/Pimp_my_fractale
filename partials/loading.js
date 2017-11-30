var form = document.getElementById("form");
var loader = document.getElementById("load");
var button = document.getElementById("buttonSub");

button.onclick = function () {
    form.style.opacity = 0;
    loader.style.opacity = 1;
}