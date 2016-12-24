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

$front_title = get_field('Sidebar_blog_title', 'options');
$front_subtitle = get_field('Sidebar_blog_subtitle', 'options');
$front_blurb = get_field('Sidebar_blog_blurb', 'options');

?>

<aside class="sidebar | cf" role="complementary">
    <article class="sidebar__section">
        <div class="sidebar--text">
            <h1><?php echo $front_title ?></h1>
            <h2 class="highlight"><?php echo $front_subtitle ?></h2>
            <h3 class="u-push-top/2"><?php echo $front_blurb ?></h3>
        </div>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/logo.svg" class="logo | logo--sidebar"></a>
    </article> <!-- .sidebar__section -->
</aside>
