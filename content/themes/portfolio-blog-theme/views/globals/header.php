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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85515476-2', 'auto');
  ga('send', 'pageview');

</script>

<a href="#navigation" class="is-hidden">Skip to Navigation</a>

<header class="header | cf">
    <div class="header_fill"></div>
    <div class="container">
        <button class="c-hamburger | c-hamburger--htla | hamburger | u-float-right" type="button">
            <span class="hamburger-styling">toggle menu</span>
        </button>
        <div class="socialmedia-container | u-float-left">
            <ul class="socialmedia_list">
                <li class="icon_socialmedia">
                    <a href="mailto:alexeddesign@gmail.com">
                        <i class="icon_socialmedia_font | fa | fa-envelope"></i>
                    </a>
                </li>
                <li class="icon_socialmedia">
                     <a href="https://twitter.com/AlexEd93" target=_blank>
                         <i class="icon_socialmedia_font | fa | fa-twitter"></i>
                    </a>
                </li>
                <li class="icon_socialmedia">
                     <a href="https://www.linkedin.com/in/alex-edwards-bb261610b?trk=hp-identity-photo" target=_blank>
                         <i class="icon_socialmedia_font | fa | fa-linkedin"></i>
                    </a>
                </li>
                <!-- <li class="icon_socialmedia">
                     <a href="https://www.behance.net/alexed" target=_blank>
                         <i class="icon_socialmedia_font | fa | fa-behance"></i>
                    </a>
                </li> -->
            </ul>
        </div>

        <nav class="nav | " id="navigation" role="navigation">
            <ul class="nav_list">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'items_wrap' => '%3$s') ); ?>
            </ul>
        </nav>
    </div>
</header>

