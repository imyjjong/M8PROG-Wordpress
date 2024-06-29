<?php get_header(); ?>

<main class="main main__project">
    <?php the_post(); ?>
    <section class="project">
        <div class="project__content">
            <?php
                $content = get_the_content();

                preg_match('/<img[^>]+>/', $content, $matches);

                if (!empty($matches)) {
                    echo $matches[0];
                }
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
            ?>
            <h2 class="project__title"><?php the_title(); ?></h2>
        </div>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="project__information">
                <p class="project__information--avatar"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 80 ); ?></p>
                <div class="project__information--wrapper">
                    <p class="project__information--author">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                            <?php echo get_the_author(); ?>
                        </a>
                    </p>
                    <p class="project__information--date"><?php the_date(); ?></p>
                    <p class="project__information--description"><?php the_author_meta( 'description' ); ?></p>
                    <p class="project__information--category">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            foreach ( $categories as $category ) {
                                echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a> ';
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="project__content">
                <?php
                function filter_content_images( $content ) {
                    return preg_replace( '/<img[^>]+\>/i', '', $content );
                }
                
                $content = apply_filters( 'the_content', get_the_content() );
                $content = filter_content_images( $content );
                echo $content;
                ?>
            </div>
        </article>
    </section>

</main>

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
<?php get_footer(); ?>