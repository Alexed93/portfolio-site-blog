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

<main class="section">
    <div class="container | cf">

    <?php if (is_category('web')) : ?>
    <?php get_sidebar('web'); ?>
    <?php elseif (is_category('graphics')) : ?>
    <?php get_sidebar('graphics'); ?>
    <?php elseif (is_category('blog')) : ?>
    <?php get_sidebar('blogs'); ?>
    <?php endif; ?>

        <div class="section__content">
            <div class="grid | grid--compact | grid--posts" onclick="">
                <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ): ?>
                        <?php the_post(); ?> 

                            <div class="grid__item grid__item--6-12 | grid__item--4-12-bp3 | grid__item--3-12-bp6">
                                <div class="work_item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="work_image" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>');">
                                            <div class="work_overlay">
                                                <div class="work_overlay--text">     
                                                    <h2 class="u-style-uppercase | beta"><?php the_title(); ?></h2>
                                                    <?php if ( $post->post_excerpt ): ?><div class="delta"><?php the_excerpt(); ?></div><?php endif; ?>
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
