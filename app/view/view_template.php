<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>{_}}</title>
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/style.css"/>
</head>
<body>

<header>
    <div class="logo">
        <a href="/main"><img src="../../images/logo.jpg"></a>
    </div>
    <div class="el">
        <ul>
<!--            TODO: Чекать сессию - если есть то выход из пользователя если нет то логин или регистр-->
            <?php session_start();
            if (isset($_SESSION['name'])){
                echo '<li>Привет, '.$_SESSION['name'].'</li>';
            }?>

            <li><a href="/main">Главная</a></li>

            <?php
            if (isset($_SESSION['name'])){
                echo '<li><a href="/logout">Выйти</a></li>';
            }else{
                echo '<li><a href="/registration">Регистрация</a></li>';
                echo '<li><a href="/login">Войти</a></li>';
            }?>
            <li><a href="/contacts">Контакты</a></li>
        </ul>
    </div>
</header>

<?php include "app/view/".$content_view;?>


</body>
</html>