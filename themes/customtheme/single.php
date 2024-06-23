<?php get_header(); ?>

<main class="main">
    <?php the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post__title"><?php the_title(); ?></h2>
        <div class="post__information">
            <p><?php the_date(); ?></p>
            <p><?php echo get_avatar( get_the_author_meta('user_email'), '80', '-' ); ?></p>
            <p><?php the_author_meta('description'); ?></p>
        </div>
        <div class="post__content">
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
