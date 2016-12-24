<?php
get_header();
?>

<?php 
    $args = array( 'post_type' => 'project' );
    $the_query = new WP_Query( $args ); 

    $attachments = get_posts( $args );
?>
    
<div class="section | single-project">
    <div class="container | cf">
        <div class="single-project-bio">
            <h1>
                <?php the_title(); ?> <br>
                <?php $subjectarea = get_field( "subject_area" ); echo $subjectarea ?><br>
                <?php $projectyear = get_field( "project_year" ); echo $projectyear ?>
            </h1>
            <a href="<?php $projecturl = get_field( "project_url" ); echo $projecturl ?>" target="_blank" class="button_work | u-align-center">
                <button>More details</button>
            </a>
            <a href="<?php echo home_url(); ?>" class="button_work | u-align-center">
                <button>Back</button>
            </a>
        </div>

        <div class="single-project-images | is-visible--bp2">
            <div class="grid | grid--compact | project-images">
                <?php while( have_rows('project_screenshots') ): the_row(); 
                    $projectscreenshot = get_sub_field('project_screenshot'); 
                ?>
                <div class="grid__item grid__item--6-12-bp2 | single-project-screen">
                    <a href="<?php echo $projectscreenshot['url']; ?>" rel="lightbox-work" title="<?php echo $projectscreenshot['alt']; ?>">
                        <img src="<?php echo $projectscreenshot['url']; ?>" alt="<?php echo $projectscreenshot['alt']; ?>"> 
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="images | u-push-top | is-hidden--bp2">
            <div class="slick-carousel-wrap">
                <div class="slick_carousel">
                    <?php while( have_rows('project_screenshots') ): the_row(); 
                        $projectscreenshot = get_sub_field('project_screenshot'); 
                    ?>
                        <div class="attatchment">
                            <a href="<?php echo $projectscreenshot['url']; ?>" title="<?php echo $projectscreenshot['alt']; ?>" data-lity>
                               <img src="<?php echo $projectscreenshot['url']; ?>" alt="<?php echo $projectscreenshot['alt']; ?>"> 
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


        <div class="section | single-project-body">
            <h2>Brief</h2>
            <h3 class="highlight"><?php $projectbrieftitle = get_field( "project_brief_title" ); echo $projectbrieftitle ?></h3>
            <p><?php $projectyear = get_field( "project_brief_content" ); echo $projectyear ?></p>
            <br>
            <h2>Approach</h2>
            <h3 class="highlight">How it was tackled</h3>
            <p><?php $projectapproachcontent = get_field( "project_approach_content" ); echo $projectapproachcontent ?></p>
        </div>
    </div>
</div>


<?php get_footer(); ?>
