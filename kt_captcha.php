<?php 
$width = 200;
$height = 80;
$sign = 6;
$kt_code = '';

session_start();

$letters = array(
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", 
    "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", 
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", 
    "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",
    '0','1','2','3','4','5','6','7','8','9'  
);


$col = array(66, 63, 74, 78, 65, 88, 100, 115, 12);

$img = imagecreatetruecolor($width, $height);
$fon = imagecolorallocate($img, 153, 165, 40); 
imagefill($img, 0, 0, $fon);

$letter_Width = intval((0.9 * $width) / $sign);

for($i = 0; $i < $width; $i++){
    for($j = 0; $j < ($height * $width) / 600; $j++){
        $keys = array_rand($col, 3);
        $color = imagecolorallocatealpha($img, $col[$keys[0]], $col[$keys[1]], $col[$keys[2]], rand(10, 30));
        imagesetpixel($img, rand(0, $width), rand(0, $height), $color);
    }
}

for($i = 0; $i < $sign; $i++){
    $keys = array_rand($col, 3);
    $color = imagecolorallocatealpha($img, $col[$keys[0]], $col[$keys[1]], $col[$keys[2]], rand(10, 30));
    
    $letter = $letters[rand(0, sizeof($letters) - 1)];

if(empty($x)){
    $x = intval($letter_Width * 0.2);
}else{
    if(rand(0, 1))
        $x = $x + $letter_Width + rand(0, intval($letter_Width * 0.1));
    else
        $x = $x + $letter_Width - rand(0, intval($letter_Width * 0.1));
}

$y = rand(intval($height * 0.4), intval($height * 0.6));
$size = rand(intval(0.4 * $height), intval(0.5 * $height));
$angle = rand(0, 30) - 15;                    
$kt_code .= $letter;
imagettftext($img, $size, $angle, $x, $y, $color, "arialbd.ttf", $letter);
}
$_SESSION["kt_code"] = $kt_code;

header("Content-type: image/jpeg");
imagejpeg($img);
?>