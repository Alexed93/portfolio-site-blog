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



?>

<aside class="sidebar | cf" role="complementary">
    <article class="sidebar__section">
        <div class="sidebar--text">
            <h1><?php single_cat_title(); ?>.</h1>
            <h2 class="highlight">Projects with an artsy theme.</h2>
            <h3 class="u-push-top/2">I'm often partial to trying out a new illustrator, testing my own skills in Photoshop and Illustrator to try and create something a little more on the visual side. Quite often, these projects will be based on a tutorial posted by <a href="http://blog.spoongraphics.co.uk/">Chris Spooner</a>.</h3>
        </div>
            <a href="http://alexedwards.co.uk"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/logo.svg" class="logo"></a>
    </article> <!-- .sidebar__section -->
</aside>
