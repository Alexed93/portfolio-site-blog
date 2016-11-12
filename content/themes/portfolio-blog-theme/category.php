<?php

// Get the header
get_header();
?>

<main class="section">
    <div class="container | cf">
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
