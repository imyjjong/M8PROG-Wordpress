<?php get_header(); ?>

<main class="container my-5">
    <?php the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="mt-5"><?php the_title(); ?></h1>
        <div class="meta">
            <p><?php the_date(); ?></p>
            <p><?php echo get_avatar( get_the_author_meta('user_email'), '80', '-' ); ?></p>
            <p><?php the_author_meta('description'); ?></p>
        </div>
        <div class="col-lg-8 px-0">
            <?php the_content(); ?>
        </div>
    </article>

    <nav class="post-navigation">
        <?php
        the_post_navigation(
            [
                'next_text' => __( 'Next post', 'Text_Domain' ),
                'prev_text' => __( 'Previous post', 'Text_Domain' ),
            ]
        );
        ?>
    </nav>
</main>

<?php get_footer(); ?>
