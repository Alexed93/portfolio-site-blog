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
/*get_header();

// Define fields from static 'blog' page in WordPress based on page ID
$home_title   = get_the_title( 1 );
$home_excerpt = wpst_get_excerpt_by_id( 1 );

?>

<?php */

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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
<main>
    <?php get_template_part( 'views/page/homepage/homepage-hero' ); ?>
    <?php get_template_part( 'views/page/homepage/homepage-projects' ); ?>
    <?php get_template_part( 'views/page/homepage/homepage-about' ); ?>
    <?php get_template_part( 'views/page/homepage/homepage-stats' ); ?>
    <?php get_template_part( 'views/page/homepage/homepage-testimonials' ); ?>
</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
