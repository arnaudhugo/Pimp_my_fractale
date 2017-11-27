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
        <label class="form-label">Couleur rouge : <p id="redValue">50</p></label>
        <input type="range" min="1" max="255" value="50" name="red" class="slider" id="redRange">
    </div>
    <div class="form-group">
        <label class="form-label">Couleur bleu : <p id="blueValue">50</p></label>
        <input type="range" min="1" max="255" value="50" name="blue" class="slider" id="blueRange">
    </div>
    <div class="form-group">
        <input type="submit" value="Valider">
    </div>
    <script type="text/javascript">
        var slider_red = document.getElementById("redRange");
        var output_red = document.getElementById("redValue");

        output_red.innerHTML = slider_red.value;

        slider_red.oninput = function () {
            output_red.innerHTML = this.value;
        }

    </script>
    <script type="text/javascript">
        var slider_blue = document.getElementById("blueRange");
        var output_blue = document.getElementById("blueValue");

        output_blue.innerHTML = slider_blue.value;

        slider_blue.oninput = function () {
            output_blue.innerHTML = this.value;
        }
    </script>
</form>
</body>
</html>