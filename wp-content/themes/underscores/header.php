<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package underscores
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<strong class="logo col-xs-12"><a href="/">Mark David Hospitality</a></strong>

		<nav id="nav" class="col-xs-12 header-nav">
			<ul class="col-xs-9 menu-pages">
				<li><a href="/about.html">about</a></li>
				<li><a href="/contact.html">contact</a></li>
				<li><a href="/newsletter.html">newsletter</a></li>
            </ul>
            <ul class="social col-xs-3 menu-social">
				<li><a href="https://www.facebook.com/markdavidcatering"><img src="http://www.markdavidcatering.com/images/fb.jpg"></a></li>
                <li><a href="https://twitter.com/MDHospitality1"><img src="http://www.markdavidcatering.com/images/twt.jpg"></a></li>
                <li><a href="http://instagram.com/mdhospitality"><img src="http://www.markdavidcatering.com/images/insta.jpg"></a></li>
			</ul>
		</nav>

		<span class="slogan col-xs-12">experience proven luxury</span>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
