<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omnifood
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="description" content="Omnidfood is a premium food delivery services with the mission to bring affordable many people as possible">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/resources/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/resources/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/resources/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/resources/favicons/favicon.ico">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'omnifood' ); ?></a>

    <!-- End Header -->
    <header>
        <nav>
            <div class="row">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/img/logo-white.png" alt="Omnifood logo" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/img/logo.png" alt="Omnifood logo" class="logo-black">
                <ul class="main-nav js--main-nav">
                    <li><a href="#features">Food delivery</a></li>
                    <li><a href="#works">How it works</a></li>
                    <li><a href="#cities">Our cities</a></li>
                    <li><a href="#plans">Sign up</a></li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Goodbye junk food. <br> Hello super healthy meals.</h1>
            <a class="btn btn-full js--scroll-to-plans" href="#">I’m hungry</a>
            <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
        </div>
    </header><!-- # End Header -->

	<div id="content" class="site-content">
