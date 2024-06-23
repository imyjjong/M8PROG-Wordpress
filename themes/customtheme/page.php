<?php get_header(); ?>

<main class="main">
    <?php the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post__title"><?php the_title(); ?></h2>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>
