<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pure Aesthetics
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <script type="text/javascript" src="http://localhost:48626/takana.js"></script> -->

<?php if ( $_SERVER['SERVER_NAME'] === 'pureaesthetics.com' ) { ?>
     <script type="text/javascript" src="http://localhost:48626/takana.js"></script>
     <script type="text/javascript">
       takanaClient.run({host: 'localhost:48626'});
     </script>
<?php } ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href="home">
				<div class="site-branding">
					
				</div><!-- .site-branding -->
			</a>
			<ul>
				<li class="home"><a href="home">Home</a></li>
				<li class="services"><a href="facial-services">Services</a>
					<div class="submenu">
						<a href="facial-services" class="submenu-link">Facial Services</a>
						<a href="laser-hair-removal" class="submenu-link">Laser Hair Removal</a>
						<a href="skin-tightening" class="submenu-link">Skin Tightening</a>
					</div>
				</li>
				<li class="about"><a href="about">About</a></li>
				<li class="contact"><a href="contact">Contact</a></li>
			</ul>

			<div id="trigger-overlay" style="display: none;"></div>

			<div class="overlay overlay-slidedown">
				<div class="overlay-close">Close</div>
				<nav>
					<ul>
						<li><a href="home">Home</a></li>
						<li><a href="facial-services">Facial Services</a></li>
						<li><a href="laser-hair-removal">Laser Hair Removal</a></li>
						<li><a href="skin-tightening">Skin Tightening</a></li>
						<li><a href="about">About</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
				</nav>
			</div>
		</nav><!-- #site-navigation -->

	</div><!-- #masthead -->

	<div id="content" class="site-content">
