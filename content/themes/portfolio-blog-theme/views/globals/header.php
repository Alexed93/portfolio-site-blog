<?php

/**
 ***************************************************************************
 * Partial: Header
 ***************************************************************************
 *
 * This partial is used to define the markup for the site's global header
 * and navigation.
 *
 */

$twitter = get_field('twitter', 'options');
$linkedin = get_field('linkedin', 'options');

?>

<a href="#navigation" class="is-hidden">Skip to Navigation</a>

<header class="header | cf">
    <div class="header_fill"></div>
    <div class="container">
        <button class="c-hamburger | c-hamburger--htla | hamburger | u-float-right" type="button">
            <span class="hamburger-styling">toggle menu</span>
        </button>
        <ul class="socialmedia | u-float-left">
            <li class="socialmedia-icon">
                <a href="mailto:alexeddesign@gmail.com">
                    <i class="socialmedia-icon__font | fa | fa-envelope"></i>
                </a>
            </li>
            <li class="socialmedia-icon">
                 <a href="<?php echo $twitter ?>" target=_blank>
                     <i class="socialmedia-icon__font | fa | fa-twitter"></i>
                </a>
            </li>
            <li class="socialmedia-icon">
                 <a href="<?php echo $linkedin ?>" target=_blank>
                     <i class="socialmedia-icon__font | fa | fa-linkedin"></i>
                </a>
            </li>
            <!-- <li class="socialmedia-icon">
                 <a href="https://www.behance.net/alexed" target=_blank>
                     <i class="socialmedia-icon__font | fa | fa-behance"></i>
                </a>
            </li> -->
        </ul>
        <nav class="nav nav--primary" id="navigation" role="navigation">
            <ul class="nav_list">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'items_wrap' => '%3$s') ); ?>
            </ul>
        </nav>
    </div>
</header>

<div class="header--secondary">
    <div class="container | cf">
        <?php if( !is_page( array(337, 358, 222) ) && !is_singular( 'project' ) ): ?>
            <div class="breadcrumbcont"><?php get_template_part('views/vendors/breadcrumb'); ?></div>
        
            <nav class="nav nav--secondary" id="secondary_navigation" role="navigation">
                <ul class="nav_list">
                    <?php wp_nav_menu( array('theme_location' => 'secondary', 'items_wrap' => '%3$s') ); ?>
                </ul>
            </nav>
        <?php endif; ?>
    </div>
</div>
