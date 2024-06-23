<?php get_header(); ?>

<main class="container my-5">
    <?php the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="mt-5"><?php the_title(); ?></h1>
        <div class="col-lg-8 px-0">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>
