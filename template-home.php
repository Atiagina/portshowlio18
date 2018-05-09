<?php 
/* Template Name: Home Page */ 
?>
<?php  function split_name($name) {
				$name = trim($name);
				$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
				$first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
				return array($first_name, $last_name);
} ?>

<?php  function removeBadStuff($object) {
				return str_replace(",", "",str_replace(".", "",str_replace(":", "",str_replace("&", "",str_replace("+", "",str_replace("'", "",str_replace('/','_', str_replace(' ', '-', strtolower($object)))))))));
} ?>

<?php get_header(); ?>


<div >
	
		<div >



	<div id="filters" class="button-group">
	<?php
        //remove_all_filters('posts_orderby');
        $args = array(
            'post_type' => array('student'),
            'posts_per_page' => 1,
            'orderby'        => 'rand',
        );
        $query = new WP_Query($args);
        //$fieldobjects = get_field_objects();
		if( $query->have_posts() ):
         while ($query->have_posts()) : $query->the_post();
$fields = get_field_objects();

$field = get_field_object('student_category_1');
$choices = $field['choices'];
foreach ($choices as $choice): 
	echo '<div class="filterChoiceCont">';
	echo '<button data-filter=".';
	echo removeBadStuff($choice); 
	echo '">';
	
	echo $choice;
		
	echo '</div>';

	endforeach; ?>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</div>

</div>
	</div>


<div class="homeHero" style="background-image: url(<?php the_field('background_image');?>);"  >
	
		

</div>



<div id="workSection" style="padding-top: 100px;">
<div class="grid gridHome workSection" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 0, "fitWidth": "true" }'>
<!--<div class="gridHome sectionHome workSection" data-masonry='{ "itemSelector": ".gridHome-item", "columnWidth": 0, "fitWidth": "true" }'>-->
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
<?php 
		echo '<div class="grid-item itemHome ';
	echo removeBadStuff(get_field('student_category_1')); 
	echo ' ';
	echo removeBadStuff(get_field('student_category_2')); 
	echo ' ';
	echo removeBadStuff(get_field('student_category_3'));  
	echo '" style="background-image:url(';
	the_field('project_1_image_1');
	echo ');">';
	echo '<a href="';
	echo the_permalink();
	echo '"><span class="text"><h1>';
	the_field('project_1_title');
	echo '</h1>';
	the_field('student_name');
	echo '<p>';
	the_field('student_category_1'); 
	echo ' / ';
	the_field('student_category_2');
	echo ' / ';
	the_field('student_category_3'); 
	echo '</p>';
	echo '</span>';
	echo '</a> </div>';
					
	?>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
        
    
	</div>
</div>	



<div id="studentSection" style="padding-top: 100px;">
	<div class="grid gridHome studentSection" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 0, "fitWidth": "true" }'>
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
<?php 
		echo '<div class="grid-item itemHome ';
	echo removeBadStuff(get_field('student_category_1')); 
	echo ' ';
	echo removeBadStuff(get_field('student_category_2')); 
	echo ' ';
	echo removeBadStuff(get_field('student_category_3'));  
	echo '">';
	echo '<a href="';
	echo the_permalink();
	echo '">';
	echo '<div class="mainPhoto" style="background-image:url(';
	the_field('student_photo');
	echo ');">';
	echo '</div>';
	echo '<div class="hoverPhoto" style="background-image:url(';
	the_field('student_hover_photo');
	echo ');">';
	echo '</div>';
    echo '<div class="text">';
	echo '<h3>';
	the_field('student_name');
	echo '</h3>';
	echo '<p>'; 
	the_field('student_category_1'); 
	echo ' / ';
	the_field('student_category_2'); 
	echo ' / ';
	the_field('student_category_3');
	echo '</p>';
	echo '</div>';
		echo '</a>';
	echo '</div>';
					
	?>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
</div>
</div>


<div class="grid eventSection" id="eventSection">
	test empty page
</div>



<script>
// quick search regex
var qsRegex;
var buttonFilter;

// init Isotope
var $grid = $('.gridHome').isotope({
  itemSelector: '.itemHome',
  //layoutMode: 'fitRows',
  filter: function() {
    var $this = $(this);
    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
    return searchResult && buttonResult;
  }
});

$('#filters').on( 'click', 'button', function() {
  buttonFilter = $( this ).attr('data-filter');
  $grid.isotope();
});

// use value of search field to filter
var $quicksearch = $('.quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  $grid.isotope();
}) );


  // change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
  

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  threshold = threshold || 100;
  return function debounced() {
    clearTimeout( timeout );
    var args = arguments;
    var _this = this;
    function delayed() {
      fn.apply( _this, args );
    }
    timeout = setTimeout( delayed, threshold );
  };
}

</script>
<script>
$('#studentLink').click(function() {
		$('.workSection').css('display','none');
		$('.studentSection').css('display','inherit');
		$('.eventSection').css('display','none');
		$('.filterContainer').css('display','none');
		$('.searchContainer').css('display','none');
		$('#workLink').css('cursor','pointer');
		$('#studentLink').css('cursor','default');
		$('#studentLink').css('background-color','#6EC6EA');
		$('#workLink').css('background-color','white');
		$('#eventLink').css('background-color','white');
	$('.searchButton').css('background-color','white');
	$('.filterButton').css('background-color','white');
	
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
		$('.searchContainer').css('display','none');
		$('.eventSection').css('display','none');
		$('.filterContainer').css('display','none');
		$('.sidebar').removeClass('sidebarBlackout');
		$('body').css('background','white');
	$('.searchButton').css('background-color','white');
	$('.filterButton').css('background-color','white');
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
		$('.filterContainer').css('display','none');
	$('.searchContainer').css('display','none');
		$('.sidebar').removeClass('sidebarBlackout');
		$('body').css('background','white');
	$('.searchButton').css('background-color','white');
	$('.filterButton').css('background-color','white');
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
<script>
	
	$('.searchButton').click(function() {
		if($('.quicksearch').css('display') === 'none'){
			$('.quicksearch').css('display','flex');
			$('.closeButton').css('display','flex');
			$('.closeButton').css('align-self','flex-end');
			$('.buttonTitle').css('display','none');
			$('.homeHero').css('display','none');
			$('.searchButton').css('background-color','white');
		}
		
	});
	</script>
<script>
		
$('.closeButton').click(function() {
		if($('.quicksearch').css('display') === 'flex'){
			$('.quicksearch').css('display','none');
			$('.closeButton').css('display','none');
		}
});
							 
	</script>

<script>
	
	$('#filters').css('display','none');
var buttonFilter;
	
	$('.filterButton').click(function() {
		if($('#filters').css('display') === 'flex'){
			$('#filters').css('display','none');
			$('.filterButton').css('background-color','white');
				var $grid = $('.gridHome').isotope({
  itemSelector: '.itemHome',
  //layoutMode: 'fitRows',
  filter: function() {
    var $this = $(this);
    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
    return searchResult && buttonResult;
  }
});
	
  $grid.isotope({ filter: '*' });

		 
   
		}
		else {
			$('#filters').css('display','flex');
			$('.filterButton').css('background-color','#FACED6');
			$('.homeHero').css('display','none');
			$('.searchButton').css('background-color','white');
			var $grid = $('.gridHome').isotope({
  itemSelector: '.itemHome',
  //layoutMode: 'fitRows',
  filter: function() {
    var $this = $(this);
    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
    return searchResult && buttonResult;
  }
});
			$('#filters').on( 'click', 'button', function() {
  buttonFilter = $( this ).attr('data-filter');
  $grid.isotope();
});
		}
		
		
	});
	
	// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  threshold = threshold || 100;
  return function debounced() {
    clearTimeout( timeout );
    var args = arguments;
    var _this = this;
    function delayed() {
      fn.apply( _this, args );
    }
    timeout = setTimeout( delayed, threshold );
  };
}

	
	
</script>

			

<?php get_footer(); ?>