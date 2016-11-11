<?php
get_header();
?>

<?php 
    $args = array( 'post_type' => 'project' );
    $the_query = new WP_Query( $args ); 
?>
    
<div class="section | section_introduction-work">
    <div class="container | cf">
        <div class="work_bio">
            <h1>
                <?php the_title(); ?> <br>
                <?php $subjectarea = get_field( "subject_area" ); echo $subjectarea ?><br>
                <?php $projectyear = get_field( "project_year" ); echo $projectyear ?>
            </h1>
            <a href="<?php $projecturl = get_field( "project_url" ); echo $projecturl ?>" target="_blank" class="button_work | u-align-center">
                <button>View</button>
            </a>
            <a href="<?php echo home_url(); ?>" class="button_work | u-align-center">
                <button>Back</button>
            </a>
        </div>
        <div class="work_images">
            <div class="grid grid--compact">
                <?php while( have_rows('project_screenshots') ): the_row(); 
                    $projectscreenshot = get_sub_field('project_screenshot'); 

                ?>
                <div class="grid__item grid__item--6-12-bp2 | work_screen">
                    <a href="<?php echo $projectscreenshot['url']; ?>" rel="lightbox-work" title="<?php echo $projectscreenshot['alt']; ?>">
                        <img src="<?php echo $projectscreenshot['url']; ?>" alt="<?php echo $projectscreenshot['alt']; ?>"> 
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<div class="section | work_body | work_1">
    <div class="container">
        <h2>Brief</h2>
        <h3 class="highlight"><?php $projectbrieftitle = get_field( "project_brief_title" ); echo $projectbrieftitle ?></h3>
        <p><?php $projectyear = get_field( "project_brief_content" ); echo $projectyear ?></p>
        <br>
        <h2>Approach</h2>
        <h3 class="highlight">How it was tackled</h3>
        <p><?php $projectapproachcontent = get_field( "project_approach_content" ); echo $projectapproachcontent ?></p>
    </div>
</div>

<?php get_footer(); ?>
