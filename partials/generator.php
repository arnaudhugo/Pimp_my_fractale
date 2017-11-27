<?php

$iteration_n = ((isset($_POST['n'])) ? $_POST['n'] : 50);
$degree_k = ((isset($_POST['k'])) ? $_POST['k'] : 2);

$red_value = ((isset($_POST['red'])) ? $_POST['red'] : 125);
$green_value = ((isset($_POST['green'])) ? $_POST['green'] : 125);
$blue_value = ((isset($_POST['blue'])) ? $_POST['blue'] : 125);

$zoom = 200;

$min_x = -2.1; //ab min
$max_x = 2.1; //ab max
$min_y = -1.2; //ord min
$max_y = 1.2; //ord max

$img_width = ($max_x - $min_x) * $zoom;
$img_height = ($max_y - $min_y) * $zoom;

$img = imagecreatetruecolor($img_width, $img_height);

$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);

imagefill($img, 0, 0, $white); //img background default

$colors = array();
for ($i = 0; $i < $iteration_n; $i++) {
    $colors[$i] = imagecolorallocate($img, $i * $red_value / $iteration_n, $i * $green_value / $iteration_n, $i * $blue_value / $iteration_n);
}

$start = microtime(true);

for ($x = 0; $x < $img_width; $x++) {
    for ($y = 0; $y < $img_height; $y++) {

        $c_r = $x / $zoom + $min_x;
        $c_i = $y / $zoom + $min_y;
        $z_r = 0;
        $z_i = 0;
        $i = 0;

        while ($z_r * $z_r + $z_i * $z_i < 4 && $i < $iteration_n) {

            $mod = sqrt(($z_r * $z_r) + ($z_i * $z_i));
            $arg = atan2($z_i, $z_r);
            $z_r = pow($mod, $degree_k) * cos($degree_k * $arg) + $c_r;
            $z_i = pow($mod, $degree_k) * sin($degree_k * $arg) + $c_i;

            $i++;
        }

        if ($i == $iteration_n) {
            imagesetpixel($img, $x, $y, $black);
        } else {
            imagesetpixel($img, $x, $y, $colors[$i]);
        }
    }
}

$temps = round(microtime(true) - $start, 3);

imagestring($img, 3, 1, 1, $temps, $white);

header('Content-type: image/png');

imagepng($img);
imagedestroy($img);

include_once '../index.php';