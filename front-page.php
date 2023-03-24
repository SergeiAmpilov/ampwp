<?php get_header('front'); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col xl3 l3 m12">
                <img
                        class="circle responsive-img"
                        src="<?php echo get_template_directory_uri() . '/assets/images/asy.png' ?>"
                        alt="Программист Ампилов"
                        width="220px"
                >
            </div>
            <div class="col xl9 l9 m12">
                <h1>Персональный сайт программиста</h1>
            </div>
        </div>
        <p>
            Добро пожаловать! Здесь вы можете заказать услуги по созданию сайтов и веб-приложений, а также узнать как стать программистом
        </p>
        <div class="row">
            <?php /*
                <div class="col s12 m6 l4">
                    <a href="/cv">Резюме</a>
                </div>

                <div class="col s12 m6 l4">Создание сайтов на платнформе Bitrix</div>
                <div class="col s12 m6 l4">
                    <a href="ksp.html">Блог - Как стать программистом</a>
                </div>
                */ ?>
        </div>
    </div>
</main>
<?php get_footer('front'); ?>