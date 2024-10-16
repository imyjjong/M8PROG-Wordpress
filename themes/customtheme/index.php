<?php get_header(); ?>
    <main class="main main__posts">
        <?php echo do_shortcode( '[searchandfilter fields="category"]' ); ?>
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
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e( 'miss gaga' ); ?></p>
            <?php endif; ?>
        </section>
    </main>

<?php get_footer(); ?>