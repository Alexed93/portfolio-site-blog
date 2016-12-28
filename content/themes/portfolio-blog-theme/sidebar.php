<?php

/**
 ***************************************************************************
 * Sidebar - Side-projects
 ***************************************************************************
 *
 * The sidebar is used to define any side-information to be presented
 * for the side-projects. Think categories from a blog listing template and
 * related/children for pages.
 *
 */

?>

<aside class="sidebar | cf" role="complementary">
    <article class="sidebar__section">
        <div class="sidebar--text">
            <?php if (is_category('web')) : ?>
                <?php get_template_part('views/sidebar/sidebar-web'); ?>
            <?php elseif (is_category('graphics')) : ?>
                <?php get_template_part('views/sidebar/sidebar-graphics'); ?>
            <?php elseif (is_category('blogs')) : ?>
                <?php get_template_part('views/sidebar/sidebar-blogs'); ?>
            <?php endif; ?>
        </div>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/logo.svg" class="logo | logo_sideproject"></a>
    </article> <!-- .sidebar__section -->
</aside>
