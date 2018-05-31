<?php get_header(); ?>

<?php  function split_name($name) {
				$name = trim($name);
				$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
				$first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
				return array($first_name, $last_name);
} ?>

<?php  function removeBadStuff($object) {
				return str_replace(",", "",str_replace(".", "",str_replace(":", "",str_replace("&", "",str_replace("+", "",str_replace("'", "",str_replace('/','_', str_replace(' ', '-', strtolower($object)))))))));
} ?>

<div class="studentPage">

	<div class='projectSelector'>
		<?php if( have_rows('projects') ): ?>
			<?php while ( have_rows('projects') ) : the_row(); ?>
				<?php if( get_row_layout() == 'project' ): ?>
					<span id='<?php echo removeBadStuff(get_sub_field('project_title')); ?>' class='projectSelectorName'>
						<?php the_sub_field('project_title'); ?>
					</span>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>


<div class="container mainArea">

<div class="container marginFix">
<div class="row">

				<?php if( have_rows('projects') ): ?>
					<?php $i = 0 ?>
					<?php while ( have_rows('projects') ) : the_row(); ?>
						<?php if( get_row_layout() == 'project' ): ?>
<!--remove bootstrap-->
							<div class="dash col-xl-6 col-lg-8 col-md-12">

							<?php $i++ ?>
							<?php if($i==1): ?>
		        				<h3 id='<?php echo removeBadStuff(get_sub_field('project_title')); ?>Location' class="projectTitle firstProject"><?php the_sub_field('project_title'); ?></h3>
							<?php else: ?>
								<h3 id='<?php echo removeBadStuff(get_sub_field('project_title')); ?>Location' class="projectTitle"><?php the_sub_field('project_title'); ?></h3>
							<?php endif; ?>
									<!-- Figure out how to output project types with commas -->
		        			<p class="category">Category: <?php the_sub_field('project_type'); ?></p>

									<?php if( get_sub_field('collaborators') ): ?>
										<p class="collaboratorTitle">Collaborators: 
 									<?php endif; ?>
									<?php $post_objects = get_sub_field('collaborators'); if( $post_objects ): ?>
										<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						        	<?php setup_postdata($post); ?>
						        	<a class="collaborators graylink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						    		<?php endforeach; ?>
						    	</p>
						    	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
								<?php endif; ?>


								<!--<hr>-->

								<p class="projectDescription">Project Description: <?php the_sub_field('project_description'); ?></p>

						</div><!--col 6 close -->
						<div class="col-lg-12 col-md-0">
						</div>



						<?php if( have_rows('project_images') ): ?>
							<?php while ( have_rows('project_images') ) : the_row(); ?>

								<!--3 COLUMN PORTRAIT -->
				        <?php if( get_row_layout() == 'portrait_3_column' ): ?>

									<?php if( have_rows('images') ): ?>
										<?php  while( have_rows('images') ) : the_row(); ?>

										 <div class="col-lg-4 imageGrid">
											 <?php $imageurl = get_sub_field('image'); ?>
									    	<img src="<?php echo $imageurl; ?>" />
											</div><!--col 4 close -->

										<?php endwhile; ?>
									<?php endif; ?>

								<!--2 COLUMN PORTRAIT -->
				        <?php elseif( get_row_layout() == 'portrait_2_column' ): ?>
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

											<div class="col-lg-6 imageGrid">
												<?php $imageurl = get_sub_field('image'); ?>
												<img src="<?php echo $imageurl; ?>" />
											</div>

										<?php endwhile; ?>
									<?php endif; ?>

								<!--1 COLUMN PORTRAIT -->
								<?php elseif( get_row_layout() == 'portrait_1_column' ): ?>

									<?php /*
										$img = get_sub_field('image');
										$img_title = $img['title'];
										$img_alt = $img['alt'];
										$img_caption = $img['caption'];
										$img_desc = $img['description'];
										$img_url = $img['url'];
										$img_thumb = $img['sizes']['medium'];*/
									?>
									<div class="col-lg-3"></div>
									<div class="col-lg-6 col-lg-offset-3 imageGrid">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
									<div class="col-lg-3"></div>

								<!--Landscape -->
				        <?php elseif( get_row_layout() == 'landscape_image' ): ?>
				        	<?php /*
										$img = get_sub_field('image');
										$img_title = $img['title'];
										$img_alt = $img['alt'];
										$img_caption = $img['caption'];
										$img_desc = $img['description'];
										$img_url = $img['url'];
										$img_thumb = $img['sizes']['medium']; */
									?>


						 		<div class="col-lg-12 imageGrid">
									<?php $imageurl = get_sub_field('image'); ?>
									 <img src="<?php echo $imageurl; ?>" />
								 </div><!--col 12 close -->

								<!--Video -->
				        <?php elseif( get_row_layout() == 'video' ): ?>
									<div class="col-lg-12 imageGrid video">
				        		<?php the_sub_field('video'); ?>

									</div>

				        <?php endif; ?>
				    	<?php endwhile; ?>

						<?php else : ?>
				   		<!-- nothing found -->
						<?php endif; ?>





        	<?php elseif( get_row_layout() == 'download' ): ?>

        	<?php endif; ?>
				<span id='<?php echo removeBadStuff(get_sub_field('project_title')); ?>Height' > </span>
    		<?php endwhile; ?>

			<?php else : ?>
   		<!-- nothing found -->
			<?php endif; ?>
			<div class='hr'></div>

			<div class='row' style='width:100%;'>
				<span class='nextStudent'>
					<?php next_post_link() ?>
				</span>
				<span class='previousStudent'>

					<?php previous_post_link() ?>

				</span>
			</div>
	</div>

</div>



</div>

<script>
	$(window).resize(function() {
		if( $(window).width() > '768' && $(window).height() > 600) {
			$('.headshot').css('display','block');
			$('.website').css('display','block');
			$('.focus').css('display','block');
			$('.socialSection').css('display','block');
			$('.sidebar').css('height','100vh');
			$('.clickArrow').css('display','none');
			$('.sidebar').removeClass('sidebarBlackout');
			$('.nameContainer').removeClass('topFixed');
			$('.studentSidebar').removeClass('justifyCenter');
			$('.socialIcon').removeClass('socialBlackout');
			$('.clickArrow').removeClass('rotateBack');
			$('.fakeBottom').css('display','none');
		} else if( $(window).width() <='768') {
			$('.headshot').css('display','none');
			$('.website').css('display','none');
			$('.focus').css('display','none');
			$('.socialSection').css('display','none');
			$('.sidebar').css('height','86');
			$('.clickArrow').css('display','block');
		} else if( $(window).width() > '768' && $(window).height() <= 600) {
			$('.headshot').css('display','none');
			$('.website').css('display','none');
			$('.focus').css('display','none');
			$('.socialSection').css('display','none');
			$('.sidebar').css('height','86');
			$('.clickArrow').css('display','block');
		}
	})

	$(".studentSidebar").click(function() {
		console.log($(window).height());
	if (	$(window).width() <= '768' &&  $('.sidebar').height() < 100) {
		$('.headshot').css('display','block');
		$('.website').css('display','block');
		$('.focus').css('display','block');
		$('.socialSection').css('display','block');
		$('.sidebar').css('height','100vh');
		$('.sidebar').addClass('sidebarBlackout');
		$('.nameContainer').addClass('topFixed');
		$('.studentSidebar').addClass('justifyCenter');
		$('.socialIcon').addClass('socialBlackout');
		$('.clickArrow').addClass('rotateBack');
		$('.fakeBottom').css('display','block');
	} else if ( 	$(window).width() <= '768' &&  $('.sidebar').height() >= 100 ) {
		$('.sidebar').css('height','86px');
		$('.headshot').css('display','none');
		$('.website').css('display','none');
		$('.focus').css('display','none');
		$('.socialSection').css('display','none');
		$('.sidebar').removeClass('sidebarBlackout');
		$('.nameContainer').removeClass('topFixed');
		$('.studentSidebar').removeClass('justifyCenter');
		$('.socialIcon').removeClass('socialBlackout');
		$('.clickArrow').removeClass('rotateBack');
		$('.fakeBottom').css('display','none');
	} else if ( $(window).height() <= '600' &&  $('.sidebar').height() >= 100 ) {
		$('.sidebar').css('height','86px');
		$('.headshot').css('display','none');
		$('.website').css('display','none');
		$('.focus').css('display','none');
		$('.socialSection').css('display','none');
		$('.sidebar').removeClass('sidebarBlackout');
		$('.nameContainer').removeClass('topFixed');
		$('.studentSidebar').removeClass('justifyCenter');
		$('.socialIcon').removeClass('socialBlackout');
		$('.clickArrow').removeClass('rotateBack');
		$('.fakeBottom').css('display','none');
	} else if ( $(window).height() <= '600' &&  $('.sidebar').height() <= 100 ) {
		$('.headshot').css('display','block');
		$('.website').css('display','block');
		$('.focus').css('display','block');
		$('.socialSection').css('display','block');
		$('.sidebar').css('height','100vh');
		$('.sidebar').addClass('sidebarBlackout');
		$('.nameContainer').addClass('topFixed');
		$('.studentSidebar').addClass('justifyCenter');
		$('.socialIcon').addClass('socialBlackout');
		$('.clickArrow').addClass('rotateBack');
		$('.fakeBottom').css('display','block');
	}



	})



		<?php if( have_rows('projects') ): ?>
			<?php while ( have_rows('projects') ) : the_row(); ?>
				<?php if( get_row_layout() == 'project' ): ?>

				$(".mainArea").scroll(function() {
					$scroll = $(".mainArea").scrollTop();

					$startHeight = $('#<?php echo removeBadStuff(get_sub_field('project_title')); ?>Location').offset().top + $(".mainArea").scrollTop() - 50;
					$endHeight = $('#<?php echo removeBadStuff(get_sub_field('project_title')); ?>Height').offset().top + $(".mainArea").scrollTop() + $('#<?php echo removeBadStuff(get_sub_field('project_title')); ?>Height').height();
					console.log($scroll, $startHeight,$endHeight);

					if($scroll >= $startHeight  && $scroll < $endHeight) {
						$('#<?php echo removeBadStuff(get_sub_field('project_title')); ?>').css("text-decoration","underline")
					} else {
						$('#<?php echo removeBadStuff(get_sub_field('project_title')); ?>').css("text-decoration","none")
					}


						})

				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>


	<?php if( have_rows('projects') ): ?>
		<?php while ( have_rows('projects') ) : the_row(); ?>
			<?php if( get_row_layout() == 'project' ): ?>

				$('#<?php echo removeBadStuff(get_sub_field('project_title')); ?>').click(function() {

					$scrollto = $('#<?php echo $FileName = removeBadStuff(get_sub_field('project_title')); ?>Location').offset().top + $(".mainArea").scrollTop() - 15;
					console.log($scrollto);
					$('.mainArea').clearQueue();
				    $(".mainArea").animate({
				        scrollTop: $scrollto
				    }, 2000);
				});


			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>



</script>

<!--sidebar-->
<div class="sidebar">

	<div id='logoBig' class='Logo'>
        <a href="/" class="logolink"><span class="icon-port-logo_black-nockout-ps-full"></span></a>
    </div>
    <div id='logoSmall' class='Logo'>
        <a href="/" class="logolink"><span class="icon-logo_med">
        </span></a>
    </div>

    <div class='hr'></div>

	<div class='studentSidebar'>
		
		<!--<div class='fakeBottom'></div>-->

		<img class='headshot' src='<?php the_field('headshot'); ?>' />
          <div class="studentInfo">
           <span class='nameContainer'>
			<span class='name'><?php echo split_name(get_the_title())[0]; ?></span>
			<span class='name'><?php echo split_name(get_the_title())[1]; ?></span>
			<span class='clickArrow'>INFO</span></span>
		</span>
		<p>URL:</p><a class='website graylink' href="http://<?php the_field('portfolio_site'); ?>" target='_blank'><?php the_field('portfolio_site'); ?></a>
		</div>

		<!-- Insert Focus objects here -- you can see 2015 theme to write this if you'd like. or look at ACF website -->

		<?php $focus = get_field('focus');
			if( $focus ): ?>
			<?php foreach( $focus as $focus ): ?>
					<span class='focus'><?php echo $focus; ?></span>
			<?php endforeach; ?>
		<?php endif; ?>

		<!-- Insert social icons -- copy from 2016 single page -->

		<div class='socialSection'>
			<?php if( get_field('facebook_page') ): ?>
				<a class='socialIcon' href='<?php the_field('facebook_page')?>' target='_blank'><span class='icon-facebook'></span></a>
			<?php endif; ?>
			<?php if( get_field('linkedin_page') ): ?>
				<a class='socialIcon' href='<?php the_field('linkedin_page')?>' target='_blank'><span class='icon-linkedin'></span></a>
			<?php endif; ?>
			<?php if( get_field('twitter_page') ): ?>
				<a class='socialIcon' href='<?php the_field('twitter_page')?>' target='_blank'><span class='icon-twitter'></span></a>
			<?php endif; ?>
			<?php if( get_field('instagram_page') ): ?>
				<a class='socialIcon' href='<?php the_field('instagram_page')?>' target='_blank'><span class='icon-instagram'></span></a>
			<?php endif; ?>
			<?php if( get_field('tumblr_page') ): ?>
				<a class='socialIcon' href='<?php the_field('tumblr_page')?>' target='_blank'><span class='icon-tumblr'></span></a>
			<?php endif; ?>
			<?php if( get_field('pinterest_page') ): ?>
				<a class='socialIcon' href='<?php the_field('pinterest_page')?>' target='_blank'><span class='icon-pinterest'></span></a>
			<?php endif; ?>
			<?php if( get_field('youtube_page') ): ?>
				<a class='socialIcon' href='<?php the_field('youtube_page')?>' target='_blank'><span class='icon-youtube'></span></a>
			<?php endif; ?>
			<?php if( get_field('vimeo_page') ): ?>
				<a class='socialIcon' href='<?php the_field('vimeo_page')?>' target='_blank'><span class='icon-vimeo'></span></a>
			<?php endif; ?>
		</div>

	</div>

</div>


<?php get_footer(); ?>

