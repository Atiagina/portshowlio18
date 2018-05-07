<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portshowlio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portshowlio' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'portshowlio' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'portshowlio' ), 'portshowlio', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- You should add Google Analytics here -->

<!-- code to toggle event, students and works -->

<script>
$('#studentLink').click(function() {
		$('.workSection').css('display','none');
		$('.studentSection').css('display','inherit');
		$('.eventSection').css('display','none');
		$('.filterContainer').css('display','initial');
		
		$('#workLink').css('cursor','pointer');
		$('#studentLink').css('cursor','default');

		$('#studentLink').css('background-color','#6EC6EA');
		$('#workLink').css('background-color','white');
		$('#eventLink').css('background-color','white');

		//var $filtersJoin = $filters.join(', ');
		//$grid.isotope({ filter: $filtersJoin });
	});

$('#workLink').click(function() {
		$('#studentLink').css('cursor','pointer');
		$('#workLink').css('cursor','default');
$('#eventLink').css('background-color','white');
		$('#workLink').css('background-color','#F4EF4A');
		$('#studentLink').css('background-color','white');
$('.studentSection').css('display','none');
		$('.workSection').css('display','inherit');
		
		$('.eventSection').css('display','none');
		$('.filterContainer').css('display','initial');
		$('.sidebar').removeClass('sidebarBlackout');
		$('body').css('background','white');

		//var $filtersJoin = $filters.join(', ');
		//$grid.isotope({ filter: $filtersJoin });
	});
	
	
$('#eventLink').click(function() {
		$('#studentLink').css('cursor','pointer');
		$('#workLink').css('cursor','default');

		$('#workLink').css('background-color','white');
		$('#studentLink').css('background-color','white');
$('.studentSection').css('display','none');
		$('.workSection').css('display','none');
		$('#eventLink').css('background-color','#00B686');
		$('.eventSection').css('display','flex');
		$('.filterContainer').css('display','initial');
		$('.sidebar').removeClass('sidebarBlackout');
		$('body').css('background','white');

		//var $filtersJoin = $filters.join(', ');
		//$grid.isotope({ filter: $filtersJoin });
	})
</script>

<!-- code to show the logo only when you scroll down-->

<script>
	$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
	  $('#logoNav').removeClass('hidelogo');
	  $('#logoNav').addClass('showlogo');
	 
  } else {
	  $('#logoNav').removeClass('showlogo');
	$('#logoNav').addClass('hidelogo');
	  
  }
});
	</script>

<?php wp_footer(); ?>

</body>
</html>
