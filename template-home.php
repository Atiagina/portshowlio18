<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>

<div class="home_video" style="background-image: url(<?php the_field('background_image');?>);"  >
	
		

</div>


<div class="grid workSection" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 0, "fitWidth": "true" }'>
	<?php
        //remove_all_filters('posts_orderby');
        $args = array(
            'post_type' => array('student'),
            'posts_per_page' => 100,
            'orderby'        => 'rand',
        );
        $query = new WP_Query($args);
      
    ?>
	 <?php while ($query->have_posts()) : $query->the_post(); ?>

		<div class="grid-item" style="background-image:url(<?php the_field('project_1_image_1');?>);">
<a href='<?php the_permalink() ?>'>
				<span class="text">
					<h1><?php the_field('project_1_title');?></h1>
					<p><?php the_field('project_1_description');?></p>
					</span>
</a>
			</div>
					
	

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
        
    
	</div>




	<div class="grid studentSection" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 0, "fitWidth": "true" }'>
	<?php
        //remove_all_filters('posts_orderby');
        $args = array(
            'post_type' => array('student'),
            'posts_per_page' => 100,
            'orderby'        => 'rand',
        );
        $query = new WP_Query($args);
      
    ?>
	 <?php while ($query->have_posts()) : $query->the_post(); ?>

		<div class="grid-item" style="background-image:url(<?php the_field('student_photo');?>);">
<a href='<?php the_permalink() ?>'>
				<span class="text">
					<h1><?php the_field('student_name');?></h1>
					<p><?php the_field('student_website');?></p>
					</span>
</a>
			</div>
					
	

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
</div>


<div class="container mainArea eventSection">
	
</div>

<script>
$('#studentLink').click(function() {
		$('.workSection').css('display','none');
		$('.studentSection').css('display','inherit');
		$('.eventSection').css('display','none');
		$('.filterContainer').css('display','initial');
		$('.sidebar').removeClass('sidebarBlackout');
		$('body').css('background','white');

		$('#workLink').css('cursor','pointer');
		$('#studentLink').css('cursor','default');

		$('#studentLink').css('color','#999999');
		$('#workLink').css('color','black');

		//var $filtersJoin = $filters.join(', ');
		//$grid.isotope({ filter: $filtersJoin });
	});

$('#workLink').click(function() {
		$('#studentLink').css('cursor','pointer');
		$('#workLink').css('cursor','default');

		$('#workLink').css('color','#999999');
		$('#studentLink').css('color','black');

		$('.workSection').css('display','inherit');
		$('.studentSection').css('display','none');
		$('.eventSection').css('display','none');
		$('.filterContainer').css('display','initial');
		$('.sidebar').removeClass('sidebarBlackout');
		$('body').css('background','white');

		//var $filtersJoin = $filters.join(', ');
		//$grid.isotope({ filter: $filtersJoin });
	})
</script>
<script>
	$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
	  $('#logonav').removeClass('hidelogo');
	  $('#logonav').addClass('showlogo');
	 
  } else {
	  $('#logonav').removeClass('showlogo');
	$('#logonav').addClass('hidelogo');
	  
  }
});
	</script>
<?php get_footer(); ?>