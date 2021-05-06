<?php
$img_small = @imagecreatefrompng("img_small/image-small.png");
if (!$img_small) {
    $img = imagecreatefrompng("img/image.png");
    $img = imagescale($img, 200);
    $img_small = imagecrop($img, ['x' => 0, 'y' => 50, 'width' => 200, 'height' => 100]);
    imagepng($img_small, "img_small/image-small.png");
    imagedestroy($img);
}