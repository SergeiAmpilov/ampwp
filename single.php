<?php get_header('category'); ?>
<main class="section">
    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) { the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <img
                    src="<?php the_post_thumbnail_url(); ?>"
                    class="responsive-img">
                <p><?php the_content(); ?></p>
            <?php } ?>
        </div>
    </div>
</main>
<?php get_footer('category'); ?>