<?php
/*
Объявить переменную $time
Присвоить переменной $time значение текущего времени (часы). Получить можно с помощью вызова функции date('H')
Обьявить еще одну переменную, в которой будет храниться css класс элемента body
Проверить с помощью if else, если время с 6 до 18 присвоить значение 'day', если с 18 до 6 - значение 'night'
Вывести значение переменной в атрибуте class элемента body
В итоге должна получиться светлая и темная тема страницы, в зависимости от времени суток
*/

?>

<!DOCTYPE html>
<?php
    $color = $_GET["style"];
print_r($color);
    if ($color == 'night') {
        setcookie('style', 'night');
    } else {
        if ($color == 'day')
            setcookie('style', 'day');
    }
    if(!empty($_COOKIE)){
    $color = $_COOKIE['style'];}
print_r($color);
?>
<html>
<head>
    <title>Конструкция if</title>
    <style>
        body.night {
            background-color: #202020;
            color: #ffffff;
        }
        body.day {
            background-color: #ffffff;
            color: #202020;
        }
    </style>
</head>
<body class="<?php echo $color;?>">
<li><a href="?style=day" style="color:red">Светлый</a><li>
<li><a href="?style=night" style="color:red">Темный</a><li>
    <h1>Основы языка PHP</h1>
    <p>
        PHP, расшифровывающийся как "PHP: Hypertext Preprocessor" - «PHP: Препроцессор Гипертекста»,
        является распространенным интерпретируемым языком общего назначения с открытым исходным кодом.
        PHP создавался специально для ведения web-разработок и код на нем может внедряться непосредственно в HTML-код.
        Синтаксис языка берет начало из C, Java и Perl, и является легким для изучения.
        Основной целью PHP является предоставление web-разработчикам возможности быстрого создания динамически генерируемых
        web-страниц, однако область применения PHP не ограничивается только этим.
    </p>
</body>
</html>
