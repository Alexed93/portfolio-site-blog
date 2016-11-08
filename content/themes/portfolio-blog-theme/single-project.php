<?php
get_header();
?>

<main class="section">
    <div class="container | cf">
    <?php get_sidebar('front'); ?> 
        <div class="section__content">
            <div class="grid | grid--compact | grid--posts" onclick="">
                <?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 6 ) 
                    ); 
                while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="grid__item grid__item--6-12 | grid__item--4-12-bp3 | grid__item--3-12-bp6">
                            
                            </div>
                        
                <?php endwhile; wp_reset_query(); ?>
                <?php else: ?>
                    <?php get_template_part('views/errors/404-posts'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div> <!-- .container -->
</main>

<?php get_footer(); ?>
