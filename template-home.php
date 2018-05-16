<?php 
/* Template Name: Home Page */ 
?>


<!-- header includes -->
<?php get_header(); ?>


<!-- container for search and filter dropdowns -->
<div>
	<div>
<!-- search field -->
<input type="text" class="quicksearch" placeholder="Search" />

<!-- filters group -->
<div id="filters" class="button-group">
	<?php
        //remove_all_filters('posts_orderby');
        $args = array(
            'post_type' => array('student'),
            'posts_per_page' => 1,
            'orderby'        => 'rand',
        );
//display all the filters that we have in our custom field 
        $query = new WP_Query($args);
        //$fieldobjects = get_field_objects();
		if( $query->have_posts() ):
         while ($query->have_posts()) : $query->the_post();
$fields = get_field_objects();

$field = get_field_object('focus');
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
<!-- end of search and filter container -->


<!-- container for the main image or background video displayed via background image -->
<div class="homeHero" style="background-image: url(<?php the_field('background_image');?>);"  >
	
</div>
<!-- end of hero -->

<!-- start of Works tab -->
<div id="workSection" style="padding-top: 99px;">
<!-- wrapper for masonry -->
<div class="grid gridHome workSection" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 0, "fitWidth": "true" }'>
<!-- start the loop for projects containers -->
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
	// start project container //
	echo '<div class="grid-item itemHome ';
	
	$focus = get_field('focus');
		if( $focus ): 
		foreach( $focus as $focus ): 
		echo removeBadStuff($focus); 
		echo ' ';
		endforeach;
		endif; 
	echo ' ';
	echo removeBadStuff(get_field('project_type')); 
	echo '" style="background-image:url(';
	the_field('featured_image');
	echo ');">';
	echo '<a href="';
	echo the_permalink();
	echo '"><div class="textProject"><h2>';
	the_field('project_title');
	echo '</h2>';
	echo '<p>';
	the_field('project_type'); 
	echo '</p>';
	echo '<h4>';
	echo '<span class="nameContainer">';
	echo '<span class="name">';
	echo split_name(get_the_title())[0];
	echo '</span> ';
	echo '<span class="name">';
	echo split_name(get_the_title())[1]; 
	echo '</span> </span>';
	echo '</h4>';
	echo '<p>';
	
	
	$focus = get_field('focus');
		if( $focus ):
		foreach( $focus as $focus ): 
	    echo ' / ';
		echo removeBadStuff($focus); 
		
		endforeach;
		echo ' / ';
		endif; 
	
	echo '</p>';
	echo '</div>';
	echo '</a> </div>';
	//end project container 				
	?>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
 <!-- exit php loop for project containers-->
    
	</div>
</div>	
<!-- end of Works wrapper-->

<!-- start of Students tab -->
<div id="studentSection" style="padding-top: 99px;">
	
	<!-- wrapper for Student containers -->
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
	// start individual student container
	echo '<div class="grid-item itemHome ';
	$focus = get_field('focus');
		if( $focus ): 
		foreach( $focus as $focus ): 
		echo removeBadStuff($focus); 
		echo ' ';
		endforeach;
		endif; 
	echo ' ';
	echo removeBadStuff(get_the_title()); 
	echo '">';
	echo '<a href="';
	echo the_permalink();
	echo '">';
	echo '<div class="mainPhoto" style="background-image:url(';
	the_field('headshot');
	echo ');">';
	echo '</div>';
	echo '<div class="hoverPhoto" style="background-image:url(';
	the_field('headshot_hover');
	echo ');">';
	echo '</div>';
    echo '<div class="text">';
	echo '<h3>';
	echo '<span class="nameContainer">';
	echo '<span class="name">';
	echo split_name(get_the_title())[0];
	echo '</span>&nbsp;';
	echo '<span class="name">';
	echo split_name(get_the_title())[1]; 
	echo '</span> </span>';
		
	echo '</h3>';
	echo '<p>'; 
	$focus = get_field('focus');
		if( $focus ): 
		foreach( $focus as $focus ): 
		echo '<span class="focus">';
		echo $focus; 
		echo '</span>&nbsp;';
		endforeach;
		endif; 
	echo '</p>';
	echo '</div>';
		echo '</a>';
	echo '</div>';
	// end individual student container			
	?>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
<!-- exit loop-->
</div>
</div>
<!-- end of Works wrapper and tab-->

<!-- start of Event tab -->
<div class="grid eventSection" id="eventSection">
	test empty page
</div>
<!-- end of Event tab -->

<!-- JavaScript block start here -->
<script>
// global variables
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
//homepage navigation
	
//if you click on Students
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
	$('.studentSection').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 0,
		fitWidth: true
});
	var buttonFilter;
			var qsRegex;
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
		 
			$grid.isotope({filter: '*'});
			$quicksearch.val('');
        searchFilter();
	});
	
//if you click on Works
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
		$('body').css('background','white');
	$('.searchButton').css('background-color','white');
	$('.filterButton').css('background-color','white');
	$('.workSection').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 0,
		fitWidth: true
});
var buttonFilter;
			var qsRegex;
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
		 
			$grid.isotope({filter: '*'});
			$quicksearch.val('');
        searchFilter();
});	
	
//if you click on Events
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

<!-- code for Search and filter-->
<script>

// Search button JavaScript
	$('.quicksearch').css('display','none');
	$('.buttonTitle').addClass('buttonTitleBefore');
	var qsRegex;
	
$('.searchButton').click(function() {
		
		if($('.quicksearch').css('display') === 'flex'){
			//if button was already on then
			$('.quicksearch').css('display','none');
			$('.buttonTitle').addClass('buttonTitleBefore');
			$('.buttonTitle').removeClass('buttonTitleAfter');
			$('.searchButton').css('background-color','white');
	//code to reset search
			var buttonFilter;
			var qsRegex;
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
		 
$grid.isotope({filter: '*'});
$quicksearch.val('');
searchFilter();
        
				
	} else {
		//if button was off then
		$('.quicksearch').css('display','flex');
		$('.buttonTitle').addClass('buttonTitleAfter');
		$('.buttonTitle').removeClass('buttonTitleBefore');
		$('.searchButton').css('background-color','#FACED6');
		$('.filterButton').css('background-color','white');
		$('.homeHero').css('display','none');
		$('#filters').css('display','none');
		var buttonFilter;
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
		
		
							var $quicksearch = $('.quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  $grid.isotope();
}) );
							 }
	});
	</script>


<script>
//Filter button JavaScript
	$('#filters').css('display','none');
	$('.filterTitle').addClass('filterTitleBefore');
	
var buttonFilter;
	
$('.filterButton').click(function() {
		
	if($('#filters').css('display') === 'flex'){
			//if filter was on
			$('#filters').css('display','none');
			$('.filterTitle').addClass('filterTitleBefore');
			$('.filterTitle').removeClass('filterTitleAfter');
			$('.filterButton').css('background-color','white');
			
//reset filters
var buttonFilter;
var qsRegex;
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
   
$grid.isotope({filter: '*'});
$quicksearch.val('');
searchFilter();
$('.is-checked').removeClass('is-checked');
		}
else {
			//if filter was off then
			$('.is-checked').removeClass('is-checked');
			$('#filters').css('display','flex');
			$('.filterTitle').addClass('filterTitleAfter');
		$('.filterTitle').removeClass('filterTitleBefore');
			$('.filterButton').css('background-color','#FACED6');
			$('.quicksearch').css('display','none');
			$('.homeHero').css('display','none');
			$('.searchButton').css('background-color','white');
			$('.buttonTitle').addClass('buttonTitleBefore');
			$('.buttonTitle').removeClass('buttonTitleAfter');
			var buttonFilter;
			

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