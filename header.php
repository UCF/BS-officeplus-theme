<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js<?php if ( is_404() ) { ?> error404<?php } ?>"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<?php //mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	
	<?php //hide iOS browser bar ?>
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/style.css" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php /* <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/library/images/favicon.png" /> */ ?>
	
	<?php /* TypeKit */ ?>
	<script src="https://use.typekit.net/zpc6gqm.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap">
	
	<?php get_template_part( 'template-parts/menu' ); ?>

