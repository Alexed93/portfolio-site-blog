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

$blogs_title = get_field('Sidebar_blogs_title', 'options');
$blogs_subtitle = get_field('Sidebar_blogs_subtitle', 'options');
$blogs_blurb = get_field('Sidebar_blogs_blurb', 'options');

?>

<h1><?php single_cat_title(); ?>.</h1>
<h2 class="highlight"><?php echo $blogs_subtitle ?></h2>
<h3 class="u-push-top/2"><?php echo $blogs_blurb ?></h3>

