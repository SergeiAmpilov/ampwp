<?php get_header('category'); ?>






<main class="section">
    <div class="container">
        <div class="row">
            <h1>Как стать программистом</h1>
            <p>Бесплатные курсы программирования и практические приемы разработки</p>
        </div>

        <div class="row">
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
                <div class="col s12 m12 l12">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <span class="card-title"><?php the_title(); ?></span>
                        </div>
                        <div class="card-content grey-text text-darken-4">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="<?php the_permalink(); ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php } } else { ?>
                <p>Записей пока нет</p>
            <?php } ?>
        </div>
    </div>
</main>
<?php get_footer('category'); ?>