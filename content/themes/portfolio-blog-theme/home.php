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

    <?php get_template_part('tpl-sideproject_loop'); ?>


    </div> <!-- .container -->
</main>

<?php get_footer(); ?>
