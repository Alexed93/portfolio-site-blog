<?php

// Get the header
get_header();
?>

<main class="section">
    <div class="container | cf">
    <?php get_sidebar('front'); ?>
    <?php if (is_category('web')) : ?>
    <?php get_sidebar('web'); ?>
    <?php elseif (is_category('graphics')) : ?>
    <?php get_sidebar('graphics'); ?>
    <?php elseif (is_category('blogs')) : ?>
    <?php get_sidebar('blogs'); ?>
    <?php endif; ?>

        <div class="section__content">
            <div class="grid | grid--compact | grid--posts" onclick="">
                <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ): ?>
                        <?php the_post(); ?> 

                            <div class="grid__item grid__item--6-12 | grid__item--4-12-bp3 | grid__item--3-12-bp6">
                                <div class="sideproject_item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="sideproject_image" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>');">
                                            <div class="sideproject_overlay">
                                                <div class="sideproject_overlay--text">     
                                                    <h2 class="u-style-uppercase | beta"><?php the_title(); ?></h2>
                                                    <?php if ( $post->post_excerpt ): ?><?php the_excerpt(); ?><?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
