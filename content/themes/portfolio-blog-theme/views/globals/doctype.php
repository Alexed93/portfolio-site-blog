<?php

/**
 ***************************************************************************
 * Partial: Doctype
 ***************************************************************************
 *
 * This partial is used to house all the information for the site's <head>
 * element. To be included into the `header.php`
 *
 */



?>

<!DOCTYPE html>
<!--[if IE]><html class="no-js ie lt-ie9 " lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js " lang="en"><!--<![endif]-->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Titles/Descriptions -->
    <title><?php wp_title() ?></title>
    <link rel="canonical" href="<?php echo get_bloginfo('url'); ?>" />

    <!-- Favicons -->
    <?php get_template_part( './favicons.php' ); ?>

    <!-- Styles -->
    <!--[if IE 9]><!-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/node_modules/slick-lightbox/dist/slick-lightbox.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/css/styles.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/css/ie.css" media="screen">
    <![endif]-->

    <!-- @font-face declarations -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'> -->

    <!-- Scripts -->
    <noscript><link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/grunticon/icons.fallback.css" rel="stylesheet"></noscript>

    <!-- wp_head -->
    <?php wp_head(); ?> 
</head>

<body class="debug">
