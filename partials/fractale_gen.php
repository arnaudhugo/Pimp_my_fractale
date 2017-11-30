<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fractal Generator</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Geo" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
</head>
<body>
<div id="sampleDiv" style="width: 100px; background-color: Gray;">
    <img src="fractal.png">
</div>
<p>Fractal information: </p>
<p>Generation time: <?= $_SESSION['load_duration']; ?> seconds</p>
<p>Size: <?= $_SESSION['width']; ?>x<?= $_SESSION['height'] ?></p>
<p>Iteration: <?= $_SESSION['iteration']; ?></p>
<p>Degree: <?= $_SESSION['degree']; ?></p>
<?php include_once '../index.php' ?>
</body>
</html>