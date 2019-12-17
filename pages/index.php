
<html>
<head>
    <title>Peges</title>
<link rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <h2>Название компании</h2>
</div>
<?php
include 'menu.php';
?>
<br>
<?php
$currentPAGE = $_GET["page"] ? $_GET["page"] : "main";
$filename = 'contents/' . $currentPAGE;
if (file_exists($filename)){
    include $filename;
    } else {
    echo 'Страница не найдена';
    }
?>
    <div class="foot">
    </div>
</div>
<div class="footer">
    <h2>Здесь может быть ваша реклама</h2>
</div>
</body>
</html>
