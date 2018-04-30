<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portshowlio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portshowlio' ); ?></a>

	<header >
<div id="logonav" style="background-image: url(<?php the_field('logonav');?>);">
	
		</div>
<div id="topnav">
<div class="row01">
<a id="workLink" class="header-link border">
	<p>works</p>
        </a>
	
<a id="studentLink" class="header-link border">
	<p> students</p>
        </a>
	
<a id="eventLink" class="header-link border">
	<p> event</p>
        </a>
	</div>	
<div class="row02">
<a class="header-link-2 border">
	<p>filter</p>
        </a>
	
<a class="header-link-2 border">
	<p> search</p>
        </a>
	
	</div>
</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
