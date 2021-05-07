<?php
// создаём новое изображение из файла используя библеотеку GD
$img_small = @imagecreatefrompng("img_small/image-small.png");

// если файл изображения отсутствует берем изображение 20000х20000px
if (!$img_small) {
    $img = imagecreatefrompng("img/image.png");

    // масштабируем изображение
    $img = imagescale($img, 200);

    // кадрируем изображение
    $img_small = imagecrop($img, ['x' => 0, 'y' => 50, 'width' => 200, 'height' => 100]);

    // сохраняем уменьшеное изображение
    imagepng($img_small, "img_small/image-small.png");
    imagedestroy($img);
}