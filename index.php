<?php
session_start();

$cislo_1 = rand(0, 9);
$cislo_2 = rand(0, 9);

if ($_POST['submit']){
    if (is_numeric($_POST['captcha'])) {
        if ($_SESSION['result'] == $_POST['captcha']) {
            echo 'Верно!';
        } else {
            echo "Неверно!";
        }
    } else {
        echo "Введите число!";
    }
}

$_SESSION['result'] = $cislo_1 + $cislo_2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Captcha на PHP</title>
    <style>
        input[name=submit] {
            background-color: #39b5cc;
            color: #fff;
            border-radius: 3px;
            border: none;
            padding: 6px 10px;
            margin: 10px 0 10px 0;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name_text"><br>
        <span><?php echo "$cislo_1 + $cislo_2 ="; ?></span><br>
        <input type="text" name="captcha" placeholder="Введите ответ!"><br>
        <input type="submit" name="submit" value="Отправить"><br>
    </form>
</body>

</html>