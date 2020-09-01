<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="js/libs/slick/slick.css">
  <link rel="stylesheet" href="js/libs/select2/select2.min.css">
  <link rel="stylesheet" href="css/styles.css?v=4">
  <title><?=$title?></title>
</head>

<body>

<header class="header">
    <div class="wrapper wrapper-header">
        <a href="#" class="logo">
            <img src="img/logo.svg" alt="">
        </a>
        <div class="header__menu">
            <div></div>
            <div></div>
        </div>
        <div class="header__right">
            <div class="messengers">
                <div class="messengers__el messengers__el-wp"></div>
                <div class="messengers__el messengers__el-tel"></div>
            </div>
            <a href="tel:+7(499)391-67-07" class="header__phone">+7 (499) 391-67-07</a>
            <div class="header__cart">
                <div class="header__counter">3</div>
            </div>
        </div>
    </div>
</header>

<nav class="header_menu">
    <div class="header_menu__close"></div>
    <a href="#" class="header_menu__nav">Меню 1</a>
    <a href="#" class="header_menu__nav">Меню 2</a>
    <a href="#" class="header_menu__nav">Меню 3</a>
</nav>

<div class="search">
    <div class="wrapper wrapper-search">
        <input class="search__input" name="search" placeholder="Поиск в каталоге" type="text" />
        <div class="search__results">
            <div class="search__result">Новинки</div>
            <div class="search__result">Люстры</div>
            <div class="search__result">Светильники и подвесной свет</div>
            <div class="search__result">Люстры для низких потолков</div>
        </div>
        <div class="search__results">
            <div class="search__result">Новинки</div>
            <div class="search__result">Люстры</div>
            <div class="search__result">Светильники и подвесной свет</div>
            <div class="search__result">Люстры для низких потолков</div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<div class="modal">
    <div class="modal__close"></div>
    <div class="modal__wrp">
        <div class="modal__title">СВЕТОДИЗАЙН И ИНДИВИДУАЛЬНЫЙ ПОДБОР</div>
        <div class="modal__text">Пожалуйста, предоставьте необходимую информацию о вашем проекте, чтобы мы могли связаться с вами после предаврительного ознакомления</div>
        <form class="modal__form">
            <input class="modal__input" name="name" placeholder="Имя" type="text" />
            <input class="modal__input" name="phone" placeholder="Контактный телефон" type="text" />
            <input class="modal__input" name="email" placeholder="Адрес электронной почты" type="email" />
            <textarea class="modal__textarea" name="description" placeholder="Описание проекта (если необходимо)"></textarea>
            <div class="modal__files">Файлы, относящиеся к вашему проекту</div>
            <div class="file">
                <input id="file" name="myFile" type="file">
                <label class="button button-dark button-file" for="file">Выбрать файл</label>
            </div>
            <div class="modal__bottom">
                <div class="button button-dark button-modal">ОТПРАВИТЬ</div>
                <div class="modal__under">Мы ни при каких обстоятельствах не передаем информацию третьим лица и используем ее исключительно для удобства связи с клиентами</div>
            </div>
        </form>
    </div>
</div>
