<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fractal Generator</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Geo" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>
<body>
<div id="load" class="loader"></div>

<form id="form" action="partials/generator.php" method="POST">
    <div class="form-group">
        <label class="form-label">Nombre d'itération :</label>
        <input type="number" value="50" min="1" name="n">
    </div>
    <div class="form-group">
        <label class="form-label">Degré :</label>
        <input type="number" value="2" min="1" name="k">
    </div>
    <div class="form-group">
        <label class="form-label">Rouge : <label id="redValue">50</label></label>
        <input type="range" min="1" max="255" value="50" name="red" class="slider" id="redRange">
    </div>
    <div class="form-group">
        <label class="form-label">Vert : <label id="greenValue">50</label></label>
        <input type="range" min="1" max="255" value="50" name="green" class="slider" id="greenRange">
    </div>
    <div class="form-group">
        <label class="form-label">Bleu : <label id="blueValue">50</label></label>
        <input type="range" min="1" max="255" value="50" name="blue" class="slider" id="blueRange">
    </div>
    <div class="form-group">
        <div id="colorPreview" style="height: 20px; background-color: transparent;"></div>
    </div>
    <div class="form-group">
        <input id="buttonSub" type="submit" value="Valider">
    </div>
</form>

<script type="text/javascript">
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
    }

    slider_green.oninput = function () {
        output_green.innerHTML = this.value;
        document.getElementById("colorPreview").style.backgroundColor = "rgb(" + slider_red.value + "," + slider_green.value + "," + slider_blue.value + ")";
    }

    slider_blue.oninput = function () {
        output_blue.innerHTML = this.value;
        document.getElementById("colorPreview").style.backgroundColor = "rgb(" + slider_red.value + "," + slider_green.value + "," + slider_blue.value + ")";
    }

</script>
<script type="text/javascript">
    var form = document.getElementById("form");
    var loader = document.getElementById("load");
    var button = document.getElementById("buttonSub");

    button.onclick = function () {
        form.style.opacity = 0;
        loader.style.opacity = 1;
    }

</script>
</body>
</html>