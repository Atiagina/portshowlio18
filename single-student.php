<?php get_header(); ?>



<!-- Student Header starts - logo + simple navigation between projects -->
	
<div class="rowStudentHeader">
		<div class="tinylogo">
			<a href="<?php echo esc_url( home_url( '/' )); ?>" rel="home"> 
		<img src="https://2018.portshowl.io/wp-content/uploads/2018/04/favicon-1.png"  />
			</a>
		</div>
		
		
		<div class='projectSelectorHeader'>
		<?php if( have_rows('projects') ): ?>
			<?php while ( have_rows('projects') ) : the_row(); ?>
				<?php if( get_row_layout() == 'project' ): ?>
					<a href="#<?php echo $FileName = removeBadStuff(get_sub_field('project_title')); ?>"  class='projectSelectorNameHeader'>
						
						<?php the_sub_field('project_title'); ?>
						</a>
					
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
		
</div> <!-- end of Student Header-->


<!-- Main area where all the projects are displayed -->	

<div class="mainArea">
	
<!-- this is a container with student's photo and personal information -->
<div class="studentContainer">

<!-- Student photo goes here-->
<div class='headshot' style="background-image:url('<?php the_field('headshot'); ?>')" >
</div>
	
<!-- Personal information goes here -->
<div class="studentInfo">
           <span class='nameContainer'>
			<span class='name'><?php echo split_name(get_the_title())[0]; ?></span>
			<span class='name'><?php echo split_name(get_the_title())[1]; ?></span>
			<!--<span class='clickArrow'>INFO</span></span>-->
		</span>
<br/>
<a class='siteLink' href="http://<?php the_field('portfolio_site'); ?>" target='_blank'><?php the_field('portfolio_site'); ?></a>
<br/>
<!-- loop to get the focus for the student -->
<?php $focus = get_field('focus');
			if( $focus ): ?>
			<?php foreach( $focus as $focus ): ?>
					<span class='focus'><?php echo $focus; ?></span>
			<?php endforeach; ?>
		<?php endif; ?>
		<!-- Social media icons -->

		<div class='socialSection'>
			<?php if( get_field('facebook_page') ): ?>
				<a class='socialIcon fab fa-facebook-f' href='<?php the_field('facebook_page')?>' target='_blank'><span class='icon-facebook'></span></a>
			<?php endif; ?>
			<?php if( get_field('linkedin_page') ): ?>
				<a class='socialIcon fab fa-linkedin-in' href='<?php the_field('linkedin_page')?>' target='_blank'><span class='icon-linkedin'></span></a>
			<?php endif; ?>
			<?php if( get_field('twitter_page') ): ?>
				<a class='socialIcon fab fa-twitter' href='<?php the_field('twitter_page')?>' target='_blank'><span class='icon-twitter'></span></a>
			<?php endif; ?>
			<?php if( get_field('instagram_page') ): ?>
				<a class='socialIcon fab fa-instagram' href='<?php the_field('instagram_page')?>' target='_blank'><span class='icon-instagram'></span></a>
			<?php endif; ?>
			<?php if( get_field('tumblr_page') ): ?>
				<a class='socialIcon fab fa-tumblr' href='<?php the_field('tumblr_page')?>' target='_blank'><span class='icon-tumblr'></span></a>
			<?php endif; ?>
			<?php if( get_field('pinterest_page') ): ?>
				<a class='socialIcon fab fa-pinterest' href='<?php the_field('pinterest_page')?>' target='_blank'><span class='icon-pinterest'></span></a>
			<?php endif; ?>
			<?php if( get_field('youtube_page') ): ?>
				<a class='socialIcon fab fa-youtube' href='<?php the_field('youtube_page')?>' target='_blank'><span class='icon-youtube'></span></a>
			<?php endif; ?>
			<?php if( get_field('vimeo_page') ): ?>
				<a class='socialIcon fab fa-vimeo' href='<?php the_field('vimeo_page')?>' target='_blank'><span class='icon-vimeo'></span></a>
			<?php endif; ?>
			<?php if( get_field('dribble_page') ): ?>
				<a class='socialIcon fab fa-dribbble' href='<?php the_field('dribble_page')?>' target='_blank'><span class='icon-dribble'></span></a>
			<?php endif; ?>
		</div>
		</div>
		

	</div>
	
	
<!-- HERE WE START THE PROJECTS! -->

				<?php if( have_rows('projects') ): ?>
	
					<?php $i = 0 ?>
					<?php while ( have_rows('projects') ) : the_row(); ?>
						<?php if( get_row_layout() == 'project' ): ?>
	
<!-- create a link for the project. it will be used for the small navigation on top -->
	<div id='<?php echo removeBadStuff(get_sub_field('project_title')); ?>'>
		
<!-- first container of the project - description and collaborators -->
<div class="rowProject">
							<div class="aboutProject">

							<?php $i++ ?>
							<?php if($i==1): ?>
		        				<h3 id='<?php echo removeBadStuff(get_sub_field('project_title')); ?>Location' class="projectTitle firstProject"><?php the_sub_field('project_title'); ?></h3>
							<?php else: ?>
								<h3 class="projectTitle"><?php the_sub_field('project_title'); ?></h3>
							<?php endif; ?>
									<!-- Figure out how to output project types with commas -->
		        			<p class="category"><?php the_sub_field('project_type'); ?></p>

									<?php if( get_sub_field('collaborators') ): ?>
										<p class="collaboratortitle">Collaborators</p>
 									<?php endif; ?>
									<?php $post_objects = get_sub_field('collaborators'); if( $post_objects ): ?>
										<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						        	<?php setup_postdata($post); ?>
						        	<a class="collaborators siteLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						    		<?php endforeach; ?>
						    	
						    	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
								<?php endif; ?>


								<!--<hr>-->

								<span class="projectDescription"><?php the_sub_field('project_description'); ?></span>
	 
						</div><!-- end about project-->
						
	</div> <!-- end row project for about -->

<!-- a very long loop to check if there is any information about projects and what kind of flexible content was created -->
						<?php if( have_rows('project_images') ): ?>
							<?php while ( have_rows('project_images') ) : the_row(); ?>
	<div >
								<!--3 COLUMN PORTRAIT -->
				        <?php if( get_row_layout() == 'portrait_3_column' ): ?>
		<div class="rowProject">

									<?php if( have_rows('images') ): ?>

										<?php  while( have_rows('images') ) : the_row(); ?>

	

										 <div class="imageThird imageGrid">
											 <?php $imageurl = get_sub_field('image'); ?>
									    	<img src="<?php echo $imageurl; ?>" />
											</div><!--col 4 close -->
	
	

										<?php endwhile; ?>

									<?php endif; ?>
		</div>

								<!--2 COLUMN PORTRAIT -->
				        <?php elseif( get_row_layout() == 'portrait_2_column' ): ?>
		<div class="rowProject">
				        	<?php if(get_sub_field('images')): ?>
	
										<?php while(has_sub_field('images')): ?>

											<?php /*
												$img = get_sub_field('image');
												$img_title = $img['title'];
												$img_alt = $img['alt'];
												$img_caption = $img['caption'];
												$img_desc = $img['description'];
												$img_url = $img['url'];
												$img_thumb = $img['sizes']['medium']; */
											?>

											<div class="imageHalf">
												<?php $imageurl = get_sub_field('image'); ?>
												<img src="<?php echo $imageurl; ?>" />
											</div>

										<?php endwhile; ?>
	
									<?php endif; ?>
		</div>
								<!--1 COLUMN PORTRAIT -->
								<?php elseif( get_row_layout() == 'portrait_1_column' ): ?>
<div class="rowProject">
									<?php /*
										$img = get_sub_field('image');
										$img_title = $img['title'];
										$img_alt = $img['alt'];
										$img_caption = $img['caption'];
										$img_desc = $img['description'];
										$img_url = $img['url'];
										$img_thumb = $img['sizes']['medium'];*/
									?>
									
									<div class="">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
		</div>			

								<!--Landscape -->
				        <?php elseif( get_row_layout() == 'landscape_image' ): ?>
	<div class="rowProject">
				        	<?php /*
										$img = get_sub_field('image');
										$img_title = $img['title'];
										$img_alt = $img['alt'];
										$img_caption = $img['caption'];
										$img_desc = $img['description'];
										$img_url = $img['url'];
										$img_thumb = $img['sizes']['medium']; */
									?>
	
<!--Ivanna. Replace Bootstrap DONE-->
						 		<div class="">
									<?php $imageurl = get_sub_field('image'); ?>
									 <img src="<?php echo $imageurl; ?>" />
								 </div><!--col 12 close -->


		</div>
		<!--Video -->
				        <?php elseif( get_row_layout() == 'video' ): ?>
	<div class="rowProject">
									<div class="video">
				        		<?php the_sub_field('video'); ?>

									</div>

				        <?php endif; ?>
		</div>
				    	<?php endwhile; ?>
	
						<?php else : ?>
				   		<!-- nothing found -->
						<?php endif; ?>
		




        	<?php elseif( get_row_layout() == 'download' ): ?>

        	<?php endif; ?>
				<span id='<?php echo removeBadStuff(get_sub_field('project_title')); ?>Height' > </span>
		</div> <!-- end of project -->
		
		<!-- see if there is more projects -->
		

    		<?php endwhile; ?>

			<?php else : ?>
   		<!-- nothing found -->
			<?php endif; ?>

		
<!-- FINISH THE LOOP FOR ALL PROJECTS -->		
		
<!-- navigation between the projects - custom pop buttons -->
			<div class='rowProject betweenNav'>
				<span class='nextStudent'>
				<div class="buttonWrapper">
				
					<?php next_post_link( '<strong>%link</strong>' ); ?>
				
				</div>
					</span>
				<span class='previousStudent'>
						<div class="buttonWrapper">

					<?php previous_post_link('<strong>%link</strong>') ?>
</div>
				</span>
			</div>
	</div>



<!-- JAVASCRIPT FOR A SMALL CUSTOM NAV ON TOP WHERE IT CHANGES COLOR OF THE PROJECT TITLE AND SMOOTH SCROLLS TO IT -->
<script>
	
	// Cache selectors
var lastId,
 bigMenu = $("#studentNav"),
 bigMenuHeight = bigMenu.outerHeight(),
topMenu = $(".projectsNav")
 // All list items
 menuItems = topMenu.find("a"),
 // Anchors corresponding to menu items
 scrollItems = menuItems.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-bigMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+bigMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }                   
});
	
	var secondaryMenu = $(".projectSelectorHeader")
 // All list items
 menuItemsSec = secondaryMenu.find("a"),
 // Anchors corresponding to menu items
 scrollItemsSec = menuItemsSec.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItemsSec.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-bigMenuHeight+5;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});
		

	
</script>
	
<!-- Javascript for Student navigation appearance on scroll -->

<script>
	$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
	  $('#studentNav').removeClass('hideNav');
	  $('#studentNav').addClass('showNav');
	 
  } else {
	  $('#studentNav').removeClass('showNav');
	$('#studentNav').addClass('hideNav');
	  
  }
});
</script>
<?php get_footer(); ?>
