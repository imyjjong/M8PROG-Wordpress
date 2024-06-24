<?php get_header(); ?>

    <?php the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post__title"><?php the_title(); ?></h2>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
    </article>

<?php get_footer(); ?>
