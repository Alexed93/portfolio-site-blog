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

$graphics_title = get_field('Sidebar_graphics_title', 'options');
$graphics_subtitle = get_field('Sidebar_graphics_subtitle', 'options');
$graphics_blurb = get_field('Sidebar_graphics_blurb', 'options');

?>

<h1><?php single_cat_title(); ?>.</h1>
<h2 class="highlight"><?php echo $graphics_subtitle ?></h2>
<h3 class="u-push-top/2 charlie"><?php echo $graphics_blurb ?></h3>
