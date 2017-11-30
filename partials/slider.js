var slider_red = document.getElementById("redRange");
var output_red = document.getElementById("redValue");

var slider_green = document.getElementById("greenRange");
var output_green = document.getElementById("greenValue");

var slider_blue = document.getElementById("blueRange");
var output_blue = document.getElementById("blueValue");

output_red.innerHTML = slider_red.value;
output_green.innerHTML = slider_green.value;
output_blue.innerHTML = slider_blue.value;

slider_red.oninput = function () {
    output_red.innerHTML = this.value;
    document.getElementById("colorPreview").style.backgroundColor = "rgb(" + slider_red.value + "," + slider_green.value + "," + slider_blue.value + ")";
};

slider_green.oninput = function () {
    output_green.innerHTML = this.value;
    document.getElementById("colorPreview").style.backgroundColor = "rgb(" + slider_red.value + "," + slider_green.value + "," + slider_blue.value + ")";
};

slider_blue.oninput = function () {
    output_blue.innerHTML = this.value;
    document.getElementById("colorPreview").style.backgroundColor = "rgb(" + slider_red.value + "," + slider_green.value + "," + slider_blue.value + ")";
};