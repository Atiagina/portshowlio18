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

	<header>
		
<a id="logoNav" class="hidelogo" href="<?php echo esc_url( home_url( '/' )); ?>" rel="home" style="background-image: url(<?php echo header_image() ?>);" >
	
		</a>
		
	<?php
if ( is_page_template( 'template-home.php' ) ) {
    // This is a homepage
	echo '<div id="topNav">';
	echo '<div class="row01">';
	echo '<a id="workLink" href="';
	echo esc_url( home_url("/#workSection" ));
	echo '" class="headerLink border">';
	echo '<p>works</p></a>';
    echo '<a id="studentLink" href="';
	echo esc_url( home_url("/#studentSection" ));
	echo '" class="headerLink border">';
	echo '<p>students</p></a>';
	echo '<a id="eventLink" href="';
	echo esc_url( home_url("/#eventSection" ));
	echo '" class="headerLink border">';
	echo '<p>event</p></a>';
	echo '</div>';
	echo '<div class="row02">';
	echo '<a class="headerLink2 border">';
	echo '<p>filter</p></a>';
	echo '<a class="headerLink2 border">';
	//echo '<p><span class="search"><input type="text" class="quicksearch" placeholder="Search" /></span>';
	//echo '<span class="searchButton">';
	//echo '<span class="icon-search">';
	//echo '</span>';
	//echo '</span>';
	echo '<p>search</p></a>';
	//echo '</a>';
	echo '</div>';
	echo '</div>';

} else {
	echo '<div style="width: 100vw; background-color: white; display: flex;
	flex-direction: row; height: 80px; padding: 10px;">';
	
	echo '<h1>';
	echo the_field('student_name');
	echo '</h1>';
	echo '<img src="';
	echo the_field('student_photo');
	echo '" alt="photo" style="width: 80px;">';
	echo '</div>';
    // This is not a homepage
}
?>


		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
