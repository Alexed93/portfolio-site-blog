<?php

// Get the header
get_header();
?>

<div class="container | cf | u-top-bottom-space--more">
    <?php get_sidebar('sidebar'); ?>
    <?php get_template_part('sideproject_loop'); ?>
</div> <!-- .container -->

<?php get_footer(); ?>
