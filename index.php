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

<?php
if ($_SESSION['active'] == 'true') {
    ?>
    <div id="sampleDiv" style="width: 100px; background-color: Gray;">
        <img src="partials/fractal.png">
    </div>
    <p>Fractal information: </p>
    <p>Generation time: <?= $_SESSION['load_duration']; ?> seconds</p>
    <p>Size: <?= $_SESSION['width']; ?>x<?= $_SESSION['height'] ?></p>
    <p>Iteration: <?= $_SESSION['iteration']; ?></p>
    <p>Degree: <?= $_SESSION['degree']; ?></p>
    <?php
    $_SESSION['active'] = 'false';
}
?>

<script type="text/javascript" src="partials/slider.js"></script>
<script type="text/javascript" src="partials/loading.js"></script>
</body>
</html>