<?php get_header(); ?>

<main class="main">
    <?php the_post(); ?>
    <section class="project">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="project__title"><?php the_title(); ?></h2>
            <div class="project__information">
                <p class="project__information--date"><?php the_date(); ?></p>
                <p class="project__information--avatar"><?php echo get_avatar( get_the_author_meta('user_email'), '80', '-' ); ?></p>
                <p><?php the_author_meta('description'); ?></p>
            </div>
            <div class="project__content">
                <?php the_content(); ?>
            </div>
        </article>
    </section>

    <nav class="project-navigation">
        <?php
        the_post_navigation(
            [
                'prev_text' => __( '<', 'Text_Domain' ),
                'next_text' => __( '>', 'Text_Domain' ),
            ]
        );
        ?>
    </nav>
</main>

<?php get_footer(); ?>
