<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js<?php if ( is_404() ) { ?> error404<?php } ?>"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <?php //mobile meta ?>
    <meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	
	<?php //hide iOS browser bar ?>
	<meta name="apple-mobile-web-app-capable" content="yes" />

    <?php //Stylesheet imports ?> 
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/styles.css" type="text/css" media="screen" /> 
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 

    <?php //Font imports ?>
    <!-- <script src=" "></script>-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap">

    <?php get_template_part( 'lib/menu' ); ?>
    