<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//Функция select option
function selectItems($items, $selected = 0) {
    $text = "";
    foreach ($items as $k => $v) {
        if ($k === $selected)
            $ch = " selected";
        else
            $ch = "";
        $text .= "<option$ch value='$k'>$v</option>\n";
    }
    return $text;
}

//массив
$names = [
    "Переходченко" => "Станислав",
    "Капустянов" => "Сергей",
    "Анисимов" => "Филипп",
];

//если был выбран элемент, вывести информацию
if (isset($_REQUEST['surname'])) {
    $name = $names[$_REQUEST['surname']];
    echo "Вы выбрали: {$_REQUEST['surname']}, {$name} ";
}
?>
<!--форма для выбора имени-->
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    Выберите имя:
    <select name="surname">
        <?=selectItems($names, $_REQUEST['surname'])?>
    </select><br>
    <input type="submit" value="узнать фамилию">
</form>
</body>
</html>