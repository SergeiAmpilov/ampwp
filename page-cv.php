<?php get_header('cv'); ?>
    <main>
        <div class="container section" id="portfolio">
            <h4>Portfolio</h4>
            <div class="row portfolio__card grey lighten-4 grey-text text-darken-4">
                <div class="col m6 s12 center">

                    <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/webanner.jpg' ?>"
                        class="responsive-img portfoliom__card_img">
                </div>
                <div class="col m6 s12">
                    <h5>Интернет-магазин вина wineexpress.ru</h5>
                    <p>Онлайн-винтрина с функцией заказа доставки в пункт выдачи</p>
                    <div class="portfolio__card-badges">
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Php</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Bitrix</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Javascript</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">jQuery</span>
                    </div>
                    <div class="portfolio__links">
                        <a href="https://wineexpress.ru/" class="light-blue-text text-darken-4" target="_blank">
                            На сайт
                        </a>
                    </div>
                </div>
            </div>
            <div class="row portfolio__card grey lighten-4 grey-text text-darken-4">
                <div class="col m6 s12 center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar.png' ?>" class="responsive-img portfoliom__card_img">
                </div>
                <div class="col m6 s12">
                    <h5>Сайт программиста ampilovs.ru</h5>
                    <p>Персональный сайт программиста</p>
                    <div class="portfolio__card-badges">
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Php</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Slim</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Javascript</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Materialize.css</span>
                    </div>
                    <div class="portfolio__links">
                        <a href="https://github.com/SergeiAmpilov/ampilovs-ru" class="light-blue-text text-darken-4" target="_blank">
                            Github
                        </a>
                    </div>
                </div>
            </div>
            <div class="row portfolio__card grey lighten-4 grey-text text-darken-4">
                <div class="col m6 s12 center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/weathercli.png' ?>" class="responsive-img portfoliom__card_img">
                </div>
                <div class="col m6 s12">
                    <h5>CLI-утилита weather</h5>
                    <p>Утилита командной строки получает прогноз погоды и выводит его в консоль в красивом виде</p>
                    <div class="portfolio__card-badges">
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Node.js</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">CLI</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">API</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Npm</span>
                    </div>
                    <div class="portfolio__links">
                        <a href="https://github.com/SergeiAmpilov/weather-cli" class="light-blue-text text-darken-4 portfolio__links_link" target="_blank">
                            Github
                        </a>
                        <a href="https://www.npmjs.com/package/weather-cli-amp" class="light-blue-text text-darken-4 portfolio__links_link" target="_blank">
                            Go npmjs.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="row portfolio__card grey lighten-4 grey-text text-darken-4">
                <div class="col m6 s12 center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/how-to-learn.png' ?>" class="responsive-img portfoliom__card_img">
                </div>
                <div class="col m6 s12">
                    <h5>How to learn</h5>
                    <p>Как научиться учиться. Учебный проект на тему методик обучения и повышения эффективности</p>
                    <div class="portfolio__card-badges">
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">HTML</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">CSS</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">БЭМ</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Github</span>
                    </div>
                    <div class="portfolio__links">
                        <a href="https://github.com/SergeiAmpilov/how-to-learn" class="light-blue-text text-darken-4 portfolio__links_link" target="_blank">
                            Github
                        </a>
                        <?php /*
                        <a href="https://ampilovs.ru/demo/how-to-learn/" class="light-blue-text text-darken-4 portfolio__links_link" target="_blank">
                            Go Live
                        </a>
                        */ ?>
                    </div>
                </div>
            </div>
            <div class="row portfolio__card grey lighten-4 grey-text text-darken-4">
                <div class="col m6 s12 center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/rutravel.jpg' ?>" class="responsive-img portfoliom__card_img">
                </div>
                <div class="col m6 s12">
                    <h5>Russian travel</h5>
                    <p>Сайт посвящен путешествиям по Россия</p>
                    <div class="portfolio__card-badges">
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">HTML</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">CSS</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">БЭМ</span>
                        <span class="portfolio__card-badges_badge light-blue darken-4 grey-text text-lighten-4">Grid</span>
                    </div>
                    <div class="portfolio__links">
                        <a href="https://github.com/SergeiAmpilov/russian-travel" class="light-blue-text text-darken-4 portfolio__links_link" target="_blank">
                            Github
                        </a>
                        <a href="https://sergeiampilov.github.io/russian-travel/" class="light-blue-text text-darken-4 portfolio__links_link" target="_blank">
                            Go live
                        </a>
                        <?php /*
                        <a href="https://ampilovs.ru/demo/russian-travel/" class="light-blue-text text-darken-4 portfolio__links_link" target="_blank">
                            Go live
                        </a>
                        */ ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="light-blue darken-4 section contacts" id="contacts">
            <div class="container">
                <div class="row contacts__content">
                    <div class="col m6 s12">
                        <h4>Контакты</h4>
                        <p>Буду рад пообщаться по поводу вашего проекта или вакансии, пишите!</p>
                        <p>
                            <b>email:</b>
                            <a href="mailto:ampilov@list.ru" class="grey-text text-lighten-4">
                                ampilov@list.ru
                            </a>
                        </p>
                        <p>
                            Также, вы можете найти меня в социальных сетях:
                        </p>
                        <div class="contacts__link-list">
                            <div class="contacts__link-list_item">
                                <a href="https://www.linkedin.com/in/sergei-ampilov/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/lin500.png' ?>" alt="страница на linkedin" class="contacts__icon">
                                </a>
                            </div>
                            <div class="contacts__link-list_item">
                                <a href="https://github.com/SergeiAmpilov/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/github250.png' ?>" alt="профиль на github" class="contacts__icon">
                                </a>
                            </div>
                            <div class="contacts__link-list_item">
                                <a href="https://www.youtube.com/channel/UCXpXbD_W2W40TEmlahZx7sQ" target="_blank">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/youtube500.png' ?>" alt="Youtube Programmis Ampilov" class="contacts__icon">
                                </a>
                            </div>
                            <div class="contacts__link-list_item">
                                <a href="https://www.codewars.com/users/sergei.ampilov" target="_blank">
                                    <img src="https://www.codewars.com/users/sergei.ampilov/badges/small" class="show-on-large hide-on-med-and-down">
                                    <img src="https://www.codewars.com/users/sergei.ampilov/badges/micro" class="show-on-medium-and-down hide-on-med-and-up">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col m6 s12 center">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/asy.png' ?>" alt="Сергей Ампилов" class="responsive-img contacts__image">
                    </div>
                </div>
            </div>
        </div>
        <div class="technology section">
            <div class="container">
                <h4 class="">
                    Технологии 💻
                </h4>
                <p>
                    Набор технологий, с которыми я работаю
                </p>
                <div class="technology__section">
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/html.png' ?>"
                                alt="HTML"
                                class="technology__group_img">
                        <p class="technology__group_text">HTML</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/css.png' ?>"
                                alt="CSS"
                                class="technology__group_img">
                        <p class="technology__group_text">CSS</p>
                    </div>
                    <div class="technology__group">

                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/javascript.png' ?>"
                                alt="Javascript"
                                class="technology__group_img">
                        <p class="technology__group_text">Javascript</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/typescript.png' ?>"
                                alt="Typescript"
                                class="technology__group_img">
                        <p class="technology__group_text">Typescript</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/react.png' ?>"
                                alt="React"
                                class="technology__group_img">
                        <p class="technology__group_text">React</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/nodejs.png' ?>"
                                alt="Node.js"
                                class="technology__group_img">
                        <p class="technology__group_text">Node.js</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/expressjs.png' ?>"
                                alt="Express.js"
                                class="technology__group_img">
                        <p class="technology__group_text">Express.js</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/php.png' ?>"
                                alt="php"
                                class="technology__group_img">
                        <p class="technology__group_text">PHP</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/bitrix.png' ?>"
                                alt="Bitrix"
                                class="technology__group_img">
                        <p class="technology__group_text">Bitrix</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/bitrix24.png' ?>"
                                alt="Bitrix"
                                class="technology__group_img">
                        <p class="technology__group_text">Bitrix 24</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/mysql.png' ?>"
                                alt="MySQL"
                                class="technology__group_img">
                        <p class="technology__group_text">MySQL</p>
                    </div>
                    <div class="technology__group">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/techicons/mongodb.png' ?>"
                                alt="MongoDB"
                                class="technology__group_img">
                        <p class="technology__group_text">MongoDB</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="education section light-blue darken-4">
            <div class="container">
                <h4>Образование</h4>
                <div class="row">
                    <ul class="col m6 s12">
                        <li class="education__list_item">
                            03.2023 - 04.2023
                            <b>Webformyself</b>
                            <p class="education__list_item-name">
                                Микро фреймворк PHP-Slim
                            </p>
                        </li>
                        <li class="education__list_item">
                            02.2023 - 03.2023
                            <b>Udemy</b>
                            <p class="education__list_item-name">
                                Создание приложений на Node.js
                            </p>
                        </li>
                        <li class="education__list_item">
                            12.2022 - 02.2023
                            <b>Udemy</b>
                            <p class="education__list_item-name">
                                TypeScript с нуля - полный курс и паттерны проектирования
                            </p>
                        </li>
                        <li class="education__list_item">
                            10.2021 - 09.2022
                            <b>Яндекс.Практикум</b>
                            <p class="education__list_item-name">Web-разработчик</p>
                        </li>
                        <li class="education__list_item">
                            02.2020 - 05.2020
                            <b>Битрикс</b>
                            <p class="education__list_item-name">
                                Разработчик на Bitrix
                            </p>
                        </li>
                    </ul>
                    <ul class="col m6 s12">
                        <li class="education__list_item">
                            06.2019 - 09.2019
                            <b>WebForMyself</b>
                            <p class="education__list_item-name">
                                Разработка сайтов на платформе Bitrix
                            </p>
                        </li>
                        <li class="education__list_item">
                            06.2019 - 08.2019
                            <b>WebForMyself</b>
                            <p class="education__list_item-name">
                                Программист PHP
                            </p>
                        </li>
                        <li class="education__list_item">
                            01.2019 - 04.2019
                            <b>Hexlet</b>
                            <p class="education__list_item-name">
                                Программист PHP
                            </p>
                        </li>
                        <li class="education__list_item">
                            01.2019 - 04.2019
                            <b>Hexlet</b>
                            <p class="education__list_item-name">
                                Программист Javascript
                            </p>
                        </li>
                        <li class="education__list_item">
                            01.2019 - 02.2019
                            <b>Хуториум</b>
                            <p class="education__list_item-name">
                                Разработка Frontend с использованием библиотеки React
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h4>Сертификаты</h4>
                <ul class="sertificates__list">
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx3.jpg' ?>"
                                alt="Сертификат Битрикс Разрабоотчик Bitrix Framework"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx5.jpg' ?>"
                                alt="Сертификат Битрикс Многосайтовость"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx8.jpg' ?>"
                                alt="Сертификат Битрикс Интеграция с 1С"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx2.jpg' ?>"
                                alt="Сертификат Битрикс Установка и настройка"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx7.jpg' ?>"
                                alt="Сертификат Битрикс Технология композитный сайт"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx4.jpg' ?>"
                                alt="Сертификат Битрикс Продвижение сайта и маркетинг"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx6.jpg' ?>"
                                alt="Сертификат Битрикс Администратор Базовый"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx9.jpg' ?>"
                                alt="Сертификат Битрикс Администратор Модули"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx10.jpg' ?>"
                                alt="Сертификат Битрикс Администратор Бизнес"
                                class="sertificates__list_img">
                    </li>
                    <li class="sertificates__list_item">
                        <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/bxsert/bx1.jpg' ?>"
                                alt="Сертификат Битрикс Контент-менеджер"
                                class="sertificates__list_img" >
                    </li>
                </ul>
            </div>
        </section>
    </main>
<?php get_footer('cv'); ?>