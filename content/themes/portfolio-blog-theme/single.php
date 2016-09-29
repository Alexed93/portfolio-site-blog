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
    'post_parent' => get_the_ID()
);

$attachments = get_posts( $args );
$size = 'medium';

// Project base url
$project_url = get_field('project_url');
?>

<main class="section">
    <div class="container | container--small">
        <article class="post">
            <div class="post__introduction | u-align-center">
                <h1 class="post__title"><?php the_title(); ?></h1>
                <a class="post__url" href="<?php echo $project_url; ?>" target=_blank><?php echo $project_url; ?></a>
                <h2 class="post__date | highlight "><?php the_date('d-m-Y'); ?></h2>
                <?php if ( $post->post_excerpt ): ?><div class="post__excerpt | u-push-top"><?php the_excerpt(); ?></div><?php endif; ?>
            </div>

            <div class="post__content | u-push-top@2">
                <p><?php the_content(); ?></p>
            </div>

            <?php if ( $attachments ) : ?>
                <div class="post__images | u-push-top@2">
                    <div class="grid | grid--compact">
                
                        <?php foreach ($attachments as $attachment) : ?>
                            <?php $attachment_id = $attachment->ID; ?>
                            <div class="grid__item grid__item--6-12 | grid__item--4-12-bp3 | grid__item--3-12-bp6">
                                <div class="">
                                    <?php echo wp_get_attachment_image( $attachment_id, $size ); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                            
                    </div>
                </div>
            <?php endif; ?>
        </article>

        <div class="post__user | u-push-top@2 | u-push-bottom@2 | cf">
            <div class="post__commentform">
                <?php comment_form(); ?>
            </div>
            <div class="post__sharing">
                <ul class="post__sharing--list">
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Mail</li>
                </ul>
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
