<?php

// echo "Today is = " . date('d-m-F-L'). "<br>";
// echo "Today is = " . date('d-m-I'). "<br>";
// echo "Today is = " . date('d-m-Y'). "<br>";
// echo "Today is = " . date('d-m-M'). "<br>";
// echo "Today is = " . date('d-m-M-a-z'). "<br>";


// $today = getdate();
// echo "The Day of month = ". $today["mday"] . "<br>";
// echo "День = ". $today["mday"] ."<br>";
// echo "Day of week = ". $today["wday"] . "<br>";
// echo "Day of year = ". $today["yday"] . "<br>";
// echo $today["mon"] . "<br>";
// echo $today["month"] . "<br>";
// echo $today["year"] . "<br>";
// echo $today["hours"] . "<br>";
// echo $today["minutes"] . "<br>";
// echo $today["seconds"] . "<br>";
// echo $today["weekday"] . "<br>";

// echo $today["0"] . "<br>";


?>

<!-- ////////////////////////////////////////////////// -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="" method="post">
        Нажмите Enter для открытия папки: <input type="text" name="str"> <br/><br/>
        <input type="submit" name="Submit1" value="Read Files" id="">

    </form>
    <?php
    // if(isset($_POST["Submit1"])){
    //     $dir = opendir($_POST["str"]);
    //     while($file = readdir($dir)) {
    //        echo $file."<br/>";
    // }};
    ?>
</body>
</html> -->



<?php
session_start();

// Проверяем введённый код
if (isset($_POST["kt_code"]) && isset($_SESSION["kt_code"])) {
    if ($_POST["kt_code"] == $_SESSION["kt_code"]) {
        $_SESSION["simple_captcha"] = '<b style="color: green;">Защитный код верен!</b>';
    } else {
        $_SESSION["simple_captcha"] = '<b style="color: red;">Неверный защитный код!</b>';
    }
    // Не перенаправляем, так как на той же странице обрабатываем форму
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Капча</title>
</head>
<body>
<h1>Регистрация</h1>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <img src="kt_captcha.php" alt="Капча"><br>
    <label for="">Введите строку </label><input type="text" name="kt_code" required><br>
    <input type="submit" name="submit" value="Ok">
</form>

<!-- Выводим сообщение о результате -->

<?= $_SESSION["simple_captcha"] ?? '' ?>

<?php 
// Сбрасываем сессионные переменные после вывода сообщения
unset($_SESSION["simple_captcha"], $_SESSION["kt_code"]);
?>

</body>
</html>