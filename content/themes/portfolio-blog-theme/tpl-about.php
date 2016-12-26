<?php

/**
 * Template name:About
 */

// Get the header
get_header();

?>

<main >
    <?php get_template_part( 'views/page/about/about' ); ?>
    <?php get_template_part( 'views/page/about/stats' ); ?>
    <?php get_template_part( 'views/page/about/testimonials' ); ?>
</main>

<?php get_footer(); ?>
