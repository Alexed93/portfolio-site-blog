<?php

/**
 ***************************************************************************
 * Front Page Template
 ***************************************************************************
 *
 * This template is used to show the front page of a WordPress website,
 * regardless of whether or not its a Static Page or Posts landing.
 * More info can be found here:
 * http://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 */



// Get the header
get_header();
?>



<main class="section | section__main">
    <div class="container | cf">
    <?php get_sidebar(); ?>
        <div class="section__content">
            <div class="grid | grid--compact | grid--posts" onclick="">
                <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ): ?>
                        <?php the_post(); ?>
                        
                            <div class="grid__item | grid__item--4-12-bp4 | grid__item--3-12-bp6">
                                <div class="work_item">
                                    <div class="work_image" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>');"></div>
                                    <div class="work_overlay">
                                        <div class="work_overlay--text">     
                                            <h2 class="u-style-uppercase | beta"><?php the_title(); ?></h2>
                                            <?php if ( $post->post_excerpt ): ?><div class="delta"><?php the_excerpt(); ?></div><?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    <?php endwhile; ?>
                <?php else: ?>
                    <?php get_template_part('views/errors/404-posts'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div> <!-- .container -->
</main>

<?php get_footer(); ?>
