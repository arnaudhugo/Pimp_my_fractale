<?php
session_start();

include_once '../index.php';
?>

<div id="sampleDiv" style="width: 100px; background-color: Gray;">
    <img src="fractal.png">
</div>
<p>Fractal information: </p>
<p>Generation time: <?= $_SESSION['load_duration']; ?> seconds</p>
<p>Size: <?= $_SESSION['width']; ?>x<?= $_SESSION['height'] ?></p>
<p>Iteration: <?= $_SESSION['iteration']; ?></p>
<p>Degree: <?= $_SESSION['degree']; ?></p>