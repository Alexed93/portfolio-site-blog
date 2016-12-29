<?php
    get_header();
?>

<?php 
    $args = array( 'post_type' => 'project' );
    $the_query = new WP_Query( $args ); 
?>
    
<div class="container | cf | u-top-bottom-space">
    <div class="project_info">
        <h1><?php the_title(); ?></h1>
        <h2 class="highlight"><?php $subjectarea = get_field( "subject_area" ); echo $subjectarea ?></h2>
        <h3><?php $projectyear = get_field( "project_year" ); echo $projectyear ?></h3>
        <h4 class="u-push-top/2"><?php $excerpt = get_the_excerpt(); echo $excerpt; ?></h4>
        <div class="u-push-top">
            <?php $projectfile = get_field( "download_project" ); if($projectfile) : ?>
                <a href="<?php echo $projectfile ?>" target="_blank" class="btn | btn--primary btn--large">
                    Download Project
                </a>
            <?php else: ?>
            <?php endif; ?>
            <a href="<?php echo home_url(); ?>" class="btn | btn--primary btn--large btn_back">
                Back
            </a>
        </div>
    </div>

    <div class="grid | grid--spaced | project_images | is-visible--bp2 | u-push-bottom" onclick="">
        <?php while( have_rows('project_screenshots') ): the_row(); 
            $projectscreenshot = get_sub_field('project_screenshot'); 
        ?>
        <div class="grid__item | grid__item--3-12-bp2 | project_screen">
            <a href="<?php echo $projectscreenshot['sizes']['large']; ?>" data-caption="<?php echo $projectscreenshot['alt']; ?>">
                <img src="<?php echo $projectscreenshot['url']; ?>" data-caption="<?php echo $projectscreenshot['alt']; ?>"> 
            </a>
        </div>
        <?php endwhile; ?>
    </div>

    <div class="images | u-push-top | is-hidden--bp2">
        <div class="slick-carousel-wrap">
            <div class="slick_carousel">
                <?php while( have_rows('project_screenshots') ): the_row(); 
                    $projectscreenshot = get_sub_field('project_screenshot'); 
                ?>
                    <div class="attatchment">
                        <a href="<?php echo $projectscreenshot['sizes']['large']; ?>" data-caption="<?php echo $projectscreenshot['alt']; ?>" >
                           <img src="<?php echo $projectscreenshot['url']; ?>" data-caption="<?php echo $projectscreenshot['alt']; ?>"> 
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="carousel-arrows | cf">
                <div class="carousel_arrow | carousel_arrow--left" id="carouselPrevArrow"><</div>
                <div class="slick-dots-container"></div>
                <div class="carousel_arrow | carousel_arrow--right" id="carouselNextArrow">></div>
            </div>
        </div>    
    </div>


    <div class="project_body | u-push-top">
        <h3>Brief</h3>
        <h4 class="highlight"><?php $projectbrieftitle = get_field( "project_brief_title" ); echo $projectbrieftitle ?></h4>
        <p><?php $projectyear = get_field( "project_brief_content" ); echo $projectyear ?></p>
        <br>
        <h3>Approach</h3>
        <h4 class="highlight">How it was tackled</h4>
        <p><?php $projectapproachcontent = get_field( "project_approach_content" ); echo $projectapproachcontent ?></p>
    </div>
</div>

<?php get_footer(); ?>
