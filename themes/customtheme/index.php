<?php get_header(); ?>

<main class="container my-5">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="mt-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="col-lg-8 px-0">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e( 'bestaat niet eweboipjo' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
