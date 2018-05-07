<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>

<div class="homeHero" style="background-image: url(<?php the_field('background_image');?>);"  >
	
		

</div>

<div id="workSection" style="padding-top: 100px;">
	
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
					<?php the_field('student_name');?>
					<?php the_field('project_1_description');?>
					
					</span>
</a>
			</div>
					
	

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
        
    
	</div>
</div>	



<div id="studentSection" style="padding-top: 100px;">
	<div class="grid studentSection"  data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 0, "fitWidth": "true" }'>
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
			<span class="hoverPhoto" style="background-image:url(<?php the_field('student_hover_photo');?>);">
			</span>

				<div class="text">
					<h3><?php the_field('student_name');?></h3>
					<p> <?php the_field('student_category_1'); ?>/<?php the_field('student_category_2'); ?>/<?php the_field('student_category_3'); ?> </p>
				</div>
</a>
			</div>
					
	

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
</div>
</div>


<div class="grid eventSection" id="eventSection">
	test empty page
</div>


<?php get_footer(); ?>