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
                 <a href="https://twitter.com/AlexEd93" target=_blank>
                     <i class="socialmedia-icon__font | fa | fa-twitter"></i>
                </a>
            </li>
            <li class="socialmedia-icon">
                 <a href="https://www.linkedin.com/in/alex-edwards-bb261610b?trk=hp-identity-photo" target=_blank>
                     <i class="socialmedia-icon__font | fa | fa-linkedin"></i>
                </a>
            </li>
            <!-- <li class="socialmedia-icon">
                 <a href="https://www.behance.net/alexed" target=_blank>
                     <i class="socialmedia-icon__font | fa | fa-behance"></i>
                </a>
            </li> -->
        </ul>
        <nav class="nav | " id="navigation" role="navigation">
            <ul class="nav_list">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'items_wrap' => '%3$s') ); ?>
            </ul>
        </nav>
    </div>
</header>

