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
    <div class="container">
    <?php get_sidebar(); ?>

        <div class="grid | grid--compact | grid--posts" onclick="">
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="grid__item | grid__item--3-12-bp4">
                        <?php the_title(); ?>

                        <?php if ( $post->post_excerpt ): ?>
                            <?php echo get_the_excerpt(); ?>
                        <?php endif; ?>

                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part('views/errors/404-posts'); ?>
            <?php endif; ?>
        </div>
    </div> <!-- .container -->
</main>

<?php get_footer(); ?>
