<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/images/icon.png' ?>" type="image/x-icon">
    <title>Резюме - Программист Ампилов</title>
</head>
<body class="page grey darken-4 grey-text text-lighten-4">
<header class="header" id="home">
    <div class="navbar-fixed">
        <nav class="light-blue darken-4">
            <div class="nav-wrapper container">
                <a href="#home" class="brand-logo">
                    /home
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#portfolio">Портфолио</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1>Резюме: Full-stack web developer</h1>
        <div class="row promo__row">
            <div class="col m8 s12">
                <h4>
                    Здравствуйте! Меня зовут Сергей 👋
                </h4>
                <p>
                    Я программист, занимаюсь веб-разработкой и веду блог об ИТ.
                    В данный момент работаю над проектом ampilovs.ru - Персональный сайт программиста
                    и прохожу обучение на курсе [Webformyself] Микро фреймворк PHP-Slim
                </p>
                <p>
                    <a class="btn light-blue darken-4 button" href="#contacts">Связаться</a>
                    <a class="btn light-blue accent-4 button" href="#portfolio">Портфолио</a>
                </p>
            </div>
            <div class="col m4 s12">
                <img
                    class="responsive-img"
                    src="<?php echo get_template_directory_uri() . '/assets/images/avatar.png' ?>"
                    alt="Avatar">
            </div>
        </div>
    </div>
    <div class="cv__scroll-down"></div>
</header>