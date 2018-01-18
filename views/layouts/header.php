<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link href="/template/css/style.css" rel="stylesheet">
    </head><!--/head-->

    <body>
    <div class="wrapper">
        <div class="content">
        <header id="header"><!--header-->
            <a href="/" class="main"><h3>Главная</h3></a><br>

            <?php if (User::isGuest()): ?>
                <a href="/user/login/"><i class="cabinet login">Вход</i></a><br>
                <a href="/user/register/"><i class="cabinet register">Регистрация</i></a><br>
            <?php else: ?>
                <a href="/cabinet/"><i class="cabinet account">Аккаунт</i></a><br>
                <a href="/user/logout/"><i class="cabinet logout">Выход</i></a><br>
            <?php endif ?>
        </header><!--/header-->