<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package portshowlio
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="logo404" style="background-image: url(<?php bloginfo('template_url'); ?>/img/logonav_blackzz.svg);">
					
				</div>
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops!', 'portshowlio' ); ?></h1>
					<h3>We can’t seem to find the page you’re looking for. <br>
						<a href="<?php echo esc_url( home_url( '/' )); ?>">Click here</a> to go back to homepage.</h3>
				</header><!-- .page-header -->

				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
