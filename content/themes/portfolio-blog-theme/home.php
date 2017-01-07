<?php

/**
 ***************************************************************************
 * Home Template
 ***************************************************************************
 *
 * This template is used to show the posts landing, assuming its not already
 * the Front Page of the site, in which case `front-page.php` would take
 * priority.
 *
 */



// Get the header
get_header();

?>


<div class="container | cf | u-top-bottom-space--more">
    <?php get_sidebar('front'); ?>
    <?php get_template_part('sideproject_loop'); ?>
</div> <!-- .container -->

<?php get_footer(); ?>
