<?php

/**
 ***************************************************************************
 * Single
 ***************************************************************************
 *
 Page template used for single side-project pages
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
$size = 'sideprojectimage';
// sideProject base url
$sideproject_url = get_field('project_url');
?>

<main class="section">
    <div class="container | container--small">
    <div class="post-controls | cf">
        <?php 
            $prev_post = get_previous_post( true );
            if ( $prev_post ) : 
        ?>
        <div class="post-controls-link | post-controls-link--prev">
            <i class="a-bounce-left"><</i>
            <?php previous_post_link( '%link', 'Previous Post', true, [], 'category' ); ?>
        </div>
        <?php endif; ?>
        <?php 
            $next_post = get_next_post( true );
            if ( $next_post ) :
        ?>
        <div class="post-controls-link | post-controls-link--next">
            <?php next_post_link( '%link', 'Next Post', true, [], 'category' ); ?>
            <i class="a-bounce-right">></i>
        </div>
        <?php endif; ?>
    </div>

        <article class="post">
            <div class="introduction | u-align-center">
                <h1><?php the_title(); ?></h1>
                <a class="url | highlight-red" href="<?php echo $sideproject_url; ?>" target=_blank><?php echo $sideproject_url; ?></a>
                <h2 class="date | highlight "><?php the_date('d-m-Y'); ?></h2>
                <?php if ( $post->post_excerpt ): ?><div class="excerpt | u-push-top@2"><?php the_excerpt(); ?></div><?php endif; ?>
            </div>

            <div class="content | u-push-top@2">
                <?php the_content(); ?>
                <?php get_template_part('socialmedia-sharing'); ?>
            </div>

            <?php if ( $attachments ) : ?>
                <div class="images | u-push-top">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="slick-carousel-wrap">
                            <div class="slick_carousel">
                                <?php foreach ($attachments as $attachment) : ?>
                                    <?php $attachment_id = $attachment->ID; ?>
                                        <div class="attatchment">
                                        <a href="<?php echo wp_get_attachment_image_url( $attachment_id, 'large' ); ?>" data-lity>
                                            <?php echo wp_get_attachment_image( $attachment_id, 'sideprojectimage' ); ?>
                                        </a>
                                        </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-arrows | cf">
                                <div class="carousel_arrow | carousel_arrow--left" id="carouselPrevArrow"><</div>
                                <div class="slick-dots-container"></div>
                                <div class="carousel_arrow | carousel_arrow--right" id="carouselNextArrow">></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <?php get_template_part('views/errors/404-posts'); ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </article>

        <div class="user | u-push-top@2 | u-push-bottom@2">
            <div class="commentform | cf">
                <?php comment_form(); ?>
            </div>

            <div class=" u-push-top@2 ">
                <?php if (comments_open() || get_comments_number() ):
                    comments_template(); 
                endif ?>
            </div>
        </div>
    </div> <!-- .container -->
</main>

<?php get_footer(); ?>
