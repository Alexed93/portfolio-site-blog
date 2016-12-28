<?php 

    $fields = get_fields(222);

?>

<div class="container_hero | container">
    <div class="hero">
        <div class="logo_portfolio">
            <a href="#enter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/purpsmall-01.svg">
            </a>
        </div>
        <div id="enter"></div>
        <div class="splash-text">
            <h1><?php echo $fields['splash_title'] ?></h1>
            <h2 class="highlight"><?php echo $fields['splash_subtitle'] ?></h2>
            <h3><?php echo $fields['splash_blurb'] ?></h3>
            <a href="#enter" class="btn | btn--primary btn--large | u-push-top">
                See my work
            </a>
        </div>
    </div>
</div>

