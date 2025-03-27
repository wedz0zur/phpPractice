<?php

$width = 150;
$height = 50;
$sign = 5; // кол-во символов
$img_code = "";

session_start();

//Символы , которые будут использованы в защитном коде
$letters = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
//Компоненты, использование при создании для RGB-цвета
$col = array(44, 66, 88, 111, 133, 177, 199);

$img = imagecreatetruecolor($width, $height);
$fon = imagecolorallocate($img, 255, 255, 255); // белый фон изображения
imagefill($img, 0, 0, $fon);

$letter_Width = intval((0.9 * $width) / $sign); // ширина под 1 символ

for ($i = 0; $i < $width; $i++) { // Заливка фона пикселями
    for ($j = 0; $j < ($height * $width) / 600; $j++) {
        // генерация случайново цвета
        $keys = array_rand($col, 3);
        $color = imagecolorallocatealpha($img, $col[$keys[0]], $col[$keys[1]], $col[$keys[2]], rand(10, 30));
        // выводим случайного цвета
        imagesetpixel($img, rand(0, $width), rand(0, $height), $color);
    }
}


// накладываем защитный код
for ($i = 0; $i < $sign; $i++) {
    $keys = array_rand($col, 3);
    $color = imagecolorallocatealpha($img, $col[$keys[0]], $col[$keys[1]], $col[$keys[2]], rand(10, 30));
    $letter = $letters[rand(0, sizeof($letters) - 1)]; // генерируем случайный символ
    $x;
    $y;
    // координаты вывода символа
    if (empty($x)) {
        $x = intval($letter_Width * 0.2);
    } else {
        if (rand(0, 1))
            $x = $x + $letter_Width + rand(0, intval($letter_Width * 0.1));
        else
            $x = $x + $letter_Width - rand(0, intval($letter_Width * 0.1));
    }

    $y = rand(intval($height * 0.7), intval($height * 0.8));
    $size = rand(intval(0.4 * $height), intval(0.5 * $height));
    $angle = rand(0, 50) - 25;
    $img_code .= $letter;
    // Выводим сгенирированный символ на изображение 
    imagettftext($img, $size, $angle, $x, $y, $color, 'arialb.ttf', $letter);
}

$_SESSION['img_code'] = $img_code;

header('Content-type: image/jpeg');
imagejpeg($img);

?>