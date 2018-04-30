<?php
 /*
PostType Page Template: students
 */
get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>
<h1>header goes here</h1>


<!-- student card -->  
<div class="row">
  
    
<div class="cell five">
    <div class="studentcard">
    <img src="<?php the_field('student_photo'); ?>" alt="student picture" class="studentimg" >
    <div class="descriptionblock">
    <h2><?php the_field('student_name'); ?></h2>
    <p><a href="#"><?php the_field('student_website'); ?></a></p>
    <p><a href="#"><?php the_field('student_category_1'); ?></a>/<a href="#"><?php the_field('student_category_2'); ?></a>/<a href="#"><?php the_field('student_category_3'); ?></a></p>
        <ul>
            <li><a href="<?php the_field('student_twitter'); ?>" target="_blank">TW</a></li>
              <li><a href="<?php the_field('student_facebook'); ?>" target="_blank">FB</a></li>
              <li><a href="<?php the_field('student_pinterest'); ?>" target="_blank">Pt</a></li>
            <li><a href="<?php the_field('student_instagram'); ?>" target="_blank">IG</a></li>
        
        </ul>
    </div>
    </div>
    </div>

</div>


<!-- student card --> 
<div class="row justify-end projectdesc">
<div class="cell three">
    <h1><?php the_field('project_1_title'); ?></h1>
	<a href="<?php the_field('project_1_collaborator'); ?>"><h4>Collaborator:<br></a>
    <?php the_field('project_1_collaborator'); ?></h4>
    <p><?php the_field('project_1_description'); ?></p>
    
    </div>
</div>

<!-- Project 1 -->
<div class="row">
    <div class="cell six align-top">
    <img src="<?php the_field('project_1_image_1'); ?>" class="projectimagehalf">
    </div>
    <div class="cell six align-top">
     <img src="<?php the_field('project_1_image_2'); ?>" class="projectimagehalf">
    </div>
    </div>
    <div class="row ">
    <div class="cell align-top">
     <img src="<?php the_field('project_1_image_3'); ?>" class="projectimagefull">
    </div>
    </div>
 
<div class="row justify-end projectdesc">
<div class="cell three">
    <h1><?php the_field('project_1_title'); ?></h1>
    <h4>Collaborator:<br>
    <?php the_field('project_1_collaborator'); ?></h4>
    <p><?php the_field('project_1_description'); ?></p>
    
    </div>
</div>

<!-- Project 2 -->
<div class="row">
    <div class="cell six align-top">
    <img src="<?php the_field('project_2_image_1'); ?>" class="projectimagehalf">
    </div>
    <div class="cell six align-top">
     <img src="<?php the_field('project_2_image_2'); ?>" class="projectimagehalf">
    </div>
    </div>
    <div class="row ">
    <div class="cell align-top">
     <img src="<?php the_field('project_2_image_3'); ?>" class="projectimagefull">
    </div>
    </div>

<div class="row justify-end projectdesc">
<div class="cell three">
    <h1><?php the_field('project_1_title'); ?></h1>
    <h4>Collaborator:<br>
    <?php the_field('project_1_collaborator'); ?></h4>
    <p><?php the_field('project_1_description'); ?></p>
    
    </div>
</div>

<!-- Project 3 -->
<div class="row">
    <div class="cell six align-top">
    <img src="<?php the_field('project_3_image_1'); ?>" class="projectimagehalf">
    </div>
    <div class="cell six align-top">
     <img src="<?php the_field('project_3_image_2'); ?>" class="projectimagehalf">
    </div>
    </div>
    <div class="row ">
    <div class="cell align-top">
     <img src="<?php the_field('project_3_image_3'); ?>" class="projectimagefull">
    </div>
    </div>
 
 




