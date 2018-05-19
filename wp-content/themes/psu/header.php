<?php
/**
 * @package psu
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Oswald:300,400" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php if (is_page('Home')) echo 'Home | PSU LLC'; elseif (is_page('Buy My House')) echo 'Buy | PSU LLC'; elseif (is_page('Sell My House')) echo 'Sell | PSU LLC'; elseif (is_page('About Us')) echo 'About Us | PSU LLC'; elseif (is_page('Contact')) echo 'Contact | PSU LLC';?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site container-fluid">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'psu' ); ?></a>

	<header id="masthead" class="site-header row" role="banner">
		<div class="topbar">
			<div class="container">
				<!-- Email, phone custom setup! -->
				<p class="email pull-right"><i class="ss-mail ss-glyphish-filled"></i>hi@email.com</p>
				<p class="phone pull-right"><i class="ss-phone ss-glyphish-filled"></i>1-800-88H-OUSE</p>
				<p class="short-head pull-right hidden-xs">CONTACT US TODAY !</p>
			</div><!-- container -->
		</div><!-- .topbar -->
		<div class="container">
			<nav class="row">
				<div class="hidden-sm hidden-md hidden-lg col-xs-12">
					<a onclick="toggleNav()"><i id="menu-toggle" class="ss-menu ss-glyphish-filled"></i></a>
					<a class="site-logo block" href="<?php echo get_site_url(); ?>" rel="home"></a>
				</div>

				<div class="col-sm-12 hidden-xs no-pad">
					<a class="site-logo" href="<?php echo get_site_url(); ?>" rel="home"></a>
					<ul class="pull-right">
						<a href="<?php echo get_site_url(); ?>"><li class="<?php if (is_page('Home')) echo 'active'; ?>">HOME</li></a>
						<a href="<?php echo get_site_url(); ?>/the-process"><li class="<?php if (is_page(121)) echo 'active'; ?>">THE PROCESS</li></a>
						<a href="<?php echo get_site_url(); ?>/big-deals"><li class="<?php if (is_page('Big Deals')) echo 'active'; ?>">BIG DEALS</li></a>
						<a href="<?php echo get_site_url(); ?>/sell-my-house"><li class="<?php if (is_page('Sell My House')) echo 'active'; ?>">SELL MY HOUSE</li></a>
						<a href="<?php echo get_site_url(); ?>/about-us"><li class="<?php if (is_page('About Us')) echo 'active'; ?>">ABOUT US</li></a>
						<a href="<?php echo get_site_url(); ?>/contact"><li class="<?php if (is_page('Contact Us')) echo 'active'; ?>">CONTACT</li></a>
					</ul>
				</div>
			</nav><!-- .row -->
		</div><!-- container -->
	</header><!-- #masthead -->

	<div id="mobile-menu">
		<div class="container">
			<ul>
				<a href="<?php echo get_site_url(); ?>"><li class="<?php if (is_page('Home')) echo 'active'; ?>">HOME</li></a>
				<a href="<?php echo get_site_url(); ?>/big-deals"><li class="<?php if (is_page('Big Deals')) echo 'active'; ?>">BIG DEALS</li></a>
				<a href="<?php echo get_site_url(); ?>/sell-my-house"><li class="<?php if (is_page('Sell My House')) echo 'active'; ?>">SELL MY HOUSE</li></a>
				<a href="<?php echo get_site_url(); ?>/about-us"><li class="<?php if (is_page('About Us')) echo 'active'; ?>">ABOUT US</li></a>
				<a href="<?php echo get_site_url(); ?>/contact"><li class="<?php if (is_page('Contact Us')) echo 'active'; ?>">CONTACT</li></a>
			</ul>
		</div>
	</div>

	<div id="content-container">

		<div id="content" class="site-content">
