<?php get_header(); ?>

    <section class="posts">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php
                        $categories = get_the_category();
                        if(!empty($categories)){
                            foreach($categories as $category){
                                $category_class = '';
                                if(strtolower($category->name) === 'software developer'){
                                    $category_class = 'post__category--sd';
                                }else{
                                    $category_class = 'post__category--gd';
                                }
                                echo '<span class="post__category ' . esc_attr($category_class) . '">' . esc_html($category->name) . '</span>';
                            }
                        }
                        ?>
                    <div class="post__content">
                        <?php
                        $content = get_the_content();

                        preg_match('/<img[^>]+>/', $content, $matches);

                        if (!empty($matches)) {
                            echo $matches[0];
                        }
                        ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Geen berichten gevonden' ); ?></p>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>
