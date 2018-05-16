<?php
/**
 * The header for portshowlio18
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portshowlio18
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
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	
<!-- add fonts here with php bloginfo function -->
	<style>
    @font-face {
    font-family: HalisR;
    src: url(<?php bloginfo('template_url'); ?>/fonts/halisr-regular-webfont.ttf),
		url(<?php bloginfo('template_url'); ?>/fonts/halisr-regular-webfont.woff),
		url(<?php bloginfo('template_url'); ?>/fonts/halisr-regular-webfont.woff2);
}
@font-face {
    font-family: HalisR-Bold;
    src: url(<?php bloginfo('template_url'); ?>/fonts/halisr-bold-webfont.woff),
		url(<?php bloginfo('template_url'); ?>/fonts/halisr-bold-webfont.woff2);
}
</style>
	
	<?php wp_head(); ?>
</head>
	

<!-- php functions for loops -->
<?php  function split_name($name) {
				$name = trim($name);
				$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
				$first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
				return array($first_name, $last_name);
} ?>

<?php  function removeBadStuff($object) {
				return str_replace(",", "",str_replace(".", "",str_replace(":", "",str_replace("&", "",str_replace("+", "",str_replace("'", "",str_replace('/','_', str_replace(' ', '-', strtolower($object)))))))));
} ?>


<body <?php body_class(); ?>>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portshowlio' ); ?></a>
	
<!-- start navigation -->	
	<nav>
		
<!-- logo for home page -->	
<a id="logoNav" class="hidelogo" href="<?php echo esc_url( home_url( '/' )); ?>" rel="home" style="background-image: url(<?php the_field('logonav'); ?>);" >
</a>
		
<!-- display different menus for different page template -->			
	<?php
if ( is_page_template( 'template-home.php' ) ) {
    // This is a homepage menu
	echo '<div id="topNav">';
	echo '<div class="row01">';
	echo '<a id="workLink" href="#workSection" class="headerLink">';
	echo '<p>works</p></a>';
    echo '<a id="studentLink" href="#studentSection" class="headerLink ">';
	echo '<p>students</p></a>';
	echo '<a id="eventLink" href="#eventSection" class="headerLink ">';
	echo '<p>event</p></a>';
	echo '</div>';
	echo '<div class="row02">';
	echo '<a class="filterButton headerLink2" id="filterLink" >';
	echo '<p class="filterTitle"></p></a>';
	echo '<a class="searchButton headerLink2 " >';
	echo '<p class="buttonTitle"></p> </a>';
	echo '</div>';
	echo '</div>';

} 
   elseif (is_singular( 'student' )) {
	//this is menu for single-student
	echo '<div style="width: 100vw; background-color: white; display: flex;
	flex-direction: row; align-content: center; height: 100px; padding: 10px; border: 5px solid black;">';
	//this is logo for single student that is displayed all the time
	echo '<a id="logoNavStudent" href="';
	echo esc_url( home_url()); 
	echo '" rel="home" style="background-image: url(';
	echo header_image();
	echo ';" > </a>';
	echo '<h1>';
	echo the_field('student_name');
	echo '</h1>';
	echo '<img src="';
	echo the_field('student_photo');
	echo '" alt="photo" style="width: 80px;">';
	echo '</div>';
    
} else {
	 //this is placeholder for the menu for all other pages
	echo '<div id="topNav">';
	 	echo '<div style="width: 100vw; background-color: white; display: flex;
	flex-direction: row; height: 80px; padding: 10px; border: 5px solid black;">';
	
	echo '<a id="logoNavDef" href="';
	echo esc_url( home_url()); 
	echo '" rel="home" style="background-image: url(';
	echo header_image();
	echo ';" > </a>';
	echo '<h1> Class of 2018</h1>';
	echo '</div>';
	echo '</div>';
}
?>
		 
  <?php wp_reset_query(); ?>

</nav><br>

<!-- end of navigation -->
	
	<div id="content" class="site-content">
