<?php

$iteration_n = ((isset($_POST['n'])) ? $_POST['n']:50);
$degree_k = ((isset($_POST['k'])) ? $_POST['k']:2);

$zoom = 200;

$min_x = -2.1; //ab min
$max_x = 0.6; //ab max
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
    $colors[$i] = imagecolorallocate($img, 0, $i * 255 / $iteration_n, 0);
}

$start = microtime(true);

for ($x = 0; $x < $img_width; $x++) {
    for ($y = 0; $y < $img_height; $y++) {

        $c_r = $x / $zoom + $min_x;
        $c_i = $y / $zoom + $min_y;
        $z_r = 0;
        $z_i = 0;
        $i = 0;

        do {
            $tmp = $z_r;
            $z_r = $z_r * $z_r - $z_i * $z_i + $c_r;
            $z_i = 2 * $tmp * $z_i + $c_i;
            $i++;
        } while ($z_r * $z_r + $z_i * $z_i < 4 && $i < $iteration_n);

        if ($i == $iteration_n) {
            imagesetpixel($img, $x, $y, $black);
        } else {
            $randcolor = random_int(0, 255);
            imagesetpixel($img, $x, $y, $colors[$randcolor]);
        }
    }
}

$temps = round(microtime(true) - $start, 3);

imagestring($img, 3, 1, 1, $temps, $white);

header('Content-type: image/png');

imagepng($img);
imagedestroy($img);