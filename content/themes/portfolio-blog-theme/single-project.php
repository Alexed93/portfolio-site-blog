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
            <a href="index.php#work" class="button_work | u-align-center">
                <button>Back</button>
            </a>
        </div>
        <div class="work_images">
            <div class="grid grid--compact">
                <?php while( have_rows('project_screenshots') ): the_row(); 
                    $projectscreenshot = get_sub_field('project_screenshot'); 
                ?>
                <div class="grid__item grid__item--6-12-bp2 | work_screen">
                    <a href="<?php echo $projectscreenshot; ?>" rel="lightbox-work" title="">
                        <img src="<?php echo $projectscreenshot; ?>" alt=""> 
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
        <h3 class="highlight">Working collaboratively in a group, launch a new music festival.</h3>
        <p class="u-push-top/2">You have been approached by an international events company to help them launch a new music festival. The festival will take place in an attractive location in another European country. It is expected that the festival will have a number of different music stages, each of these focussing on one music genre. The events company is keen to see new ideas and gives you some freedom with your campaign.</p>
        <br>
        <h2>Approach</h2>
        <h3 class="highlight">How it was tackled</h3>
        <p class="u-push-top/2">The name "Pamabest" was derived from the first two characters of four popular major european cities - "Paris", "Madrid", "Berlin" and "Stockholm". As such, the logo is representative of these four individual cities but united through the use of gradient and merged circles. Working collaboratively in a group allowed each member to specialise into their desired skill. As such, I was tasked with the creation of an app to be used prior and during the festival, as well as a design of two potential ticket types - a specific city one and a "season" pass style. These ticket designs were well recived and the app was praised for it's depth.</p>
    </div>
</div>

<?php get_footer(); ?>
