<?php

// Get the header
get_header();
?>

<main class="section">
    <div class="container | cf">
    <?php get_sidebar('sidebar'); ?>
    <?php get_template_part('tpl-sideproject_loop'); ?>
    </div> <!-- .container -->
</main>

<?php get_footer(); ?>
