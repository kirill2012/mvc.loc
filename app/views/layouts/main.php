<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">

</head>

<body>

<header>
    <div id="log">
        <?php
        if (!isset($_SESSION['username'])){?>
            <a href="/login"> Вход</a>
            <a href="/register">Регистрация</a>
        <?}else{?>
            <a href="#"><?=$_SESSION['username']?></a>
            <a href="/logout">Выход</a>
        <?}?>
    </div>
    <div id="menu">
        <h3>
            <a href="/">Main</a>
            <a href="/another">Another</a>
            <a href="/posts">Posts</a>
        </h3>
    </div>

<header>

<div id="content">
    <?=$content;?>
</div>

<footer>
    (c) 2016 Yevchenko Kirill
</footer>

</body>
</html>