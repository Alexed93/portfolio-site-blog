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

// Display media uploaded
$args =  array( 
    'post_type' => 'attachment',
    'post_parent' => get_the_ID(),
    'exclude' => get_post_thumbnail_id()
);

$attachments = get_posts( $args );
$size = 'projectimage';

// Project base url
$project_url = get_field('project_url');
?>

<main class="section">
    <div class="container | container--small">
    
    <div class="pagination-controls | cf">
        <?php 
            $prev_post = get_previous_post( true );
            if ( $prev_post ) : 
        ?>
            <div class="pagination-controls__link | pagination-controls__link--prev">
                <i class="a-bounce-left"><</i>
                <?php previous_post_link( '%link', 'Previous Post', true, [], 'category' ); ?>
            </div>
        <?php endif; ?>

        <?php 
            $next_post = get_next_post( true );
            if ( $next_post ) :
        ?>
            <div class="pagination-controls__link | pagination-controls__link--next">
                <?php next_post_link( '%link', 'Next Post', true, [], 'category' ); ?>
                <i class="a-bounce-right">></i>
            </div>
        <?php endif; ?>
    </div>

        <article class="post">
            <div class="post__introduction | u-align-center">
                <h1 class="post__title"><?php the_title(); ?></h1>
                <a class="post__url | highlight-red" href="<?php echo $project_url; ?>" target=_blank><?php echo $project_url; ?></a>
                <h2 class="post__date | highlight "><?php the_date('d-m-Y'); ?></h2>
                <?php if ( $post->post_excerpt ): ?><div class="post__excerpt | u-push-top@2"><?php the_excerpt(); ?></div><?php endif; ?>
            </div>

            <div class="post__content | u-push-top@2">
                <?php the_content(); ?>
                <?php get_template_part('socialmedia-sharing'); ?>
            </div>

            <?php if ( $attachments ) : ?>
                <div class="post__images | u-push-top">
            

                    <?php if ( have_posts() ): ?>
                        <?php while ( have_posts() ): ?>
                            <?php the_post(); ?>
                
                        <div class="slick_carousel">
                            <?php foreach ($attachments as $attachment) : ?>
                                <?php $attachment_id = $attachment->ID; ?>
                                    <div class="attatchment"><?php echo wp_get_attachment_image( $attachment_id, 'projectimage' ); ?></div>
                            <?php endforeach; ?>
                        </div>

                            <?php endwhile; ?>
                        <?php else: ?>
                            <?php get_template_part('views/errors/404-posts'); ?>
                        <?php endif; ?>
                            
          
                </div>
            <?php endif; ?>
        </article>

        <div class="post__user | u-push-top@2 | u-push-bottom@2">
            <div class="post__commentform | cf">
                <?php comment_form(); ?>
            </div>

            <div class="post__comments | u-push-top@2 ">
                <?php if (comments_open() || get_comments_number() ):
                    comments_template(); 
                endif ?>
            </div>
        </div>
    </div> <!-- .container -->
</main>

<?php get_footer(); ?>
