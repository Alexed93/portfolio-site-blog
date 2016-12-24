<?php

/**
 ***************************************************************************
 * Sidebar - Default
 ***************************************************************************
 *
 * The sidebar is used to define any side-information to be presented
 * for a template. Think categories from a blog listing template and
 * related/children for pages.
 *
 */

$web_title = get_field('Sidebar_web_title', 'options');
$web_subtitle = get_field('Sidebar_web_subtitle', 'options');
$web_blurb = get_field('Sidebar_web_blurb', 'options');

?>

<h1><?php single_cat_title(); ?>.</h1>
<h2 class="highlight"><?php echo $web_subtitle ?></h2>
<h3 class="u-push-top/2"><?php echo $web_blurb ?></h3>
        
