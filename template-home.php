<?php 
/* Template Name: Home Page */ 
?>


<!-- header includes -->
<?php get_header(); ?>


<!-- containers for search and filter dropdowns -->
<div>
	<div>
<!-- search field -->
<input type="text" class="quicksearch" placeholder="SEARCH" />

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
	echo '<div class="filterItem" data-filter=".';
	echo removeBadStuff($choice); 
	echo '">';
	echo $choice;
	echo '</div>';
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

<!-- Home Hero image - curretntly we display Bodymovin json file in there via shortcode -->
<div id="homeHero"  >
	<?php the_content(); ?>
</div>
<!-- end of hero -->

<!-- start of Works tab -->
<div id="workSection">
<!-- wrapper for masonry. This is where the grid starts, styling for it in grid.scss -->
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
	echo removeBadStuff(get_field('project_type')); 
	echo '">';
	echo '<a href="';
	echo the_permalink();
	echo '">';
	echo '<div class="mainPhoto" style="background-image:url(';
	the_field('featured_image');
	echo ');">';
	echo '</div>';
	echo '<div class="text"><h3>';
	echo '<span class="name">';
	echo removeBadStuff(the_field('project_title'));
	echo '</span>';
	echo '</h3>';
	echo '<p>';
	the_field('project_type'); 
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
<div id="studentSection" >
	
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
		echo '<span class="focus"> • ';
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
<!--this is where masonry grid ends -->
<!-- start of Event tab -->
<div id="eventSection">
	<!-- section-1 yellow -->
<div class="section yellow border-bottom">
    <div class="rowEvent">
        <div class="cellEvent">
        <h3 class="scca">SEATTLE CENTRAL CREATIVE ACADEMY</h3>
        <h4>presents</h4>
        <h1 class="pop">POP UP STUDIO!</h1>
        <p class="para-yellow">The graduating class of Seattle Central Creative Academy is proud to present Portshowlio 2018. This group of talented graduates is anything but one-dimensional. This show captures the many facets of their collaboration and dedication.</p>
        
        </div>
    </div>
</div>
<!-- end section-1 yellow -->
<!-- section-2 pink -->
    <div class="pink border-bottom">
    <div class="rowEvent">
        <div class="cellEvent red section-map" style="background-image: url(<?php bloginfo('template_url'); ?>/img/9map.jpg);">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.507347307381!2d-122.32377288437408!3d47.616268379185264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906accc351c149%3A0xdc1a5c338dd4395c!2sSeattle+Central+College!5e0!3m2!1sen!2sus!4v1526579163184" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="cellEvent section section-pink border-left">
            <h3>Seattle Central College</h3>
            <h5 class="space-top">1701 Broadway Ave<br>Seattle, WA 98122</h5>
            <p class="space-top">The Creative Academy portshowlio show is located on the 5th floor of Seattle Central College. We are easily accessed from the Capitol Hill Lightrail station one block away, or the Seattle Street Car. You can also find paid parking in the lot. See you soon!</p>
			
				<span class='buttonDirections'>
				<div class="buttonWrapper">
					<strong><a href="#">Directions</a></strong>
					</div>
			</span>
					
        </div>
</div>
    </div>
<!-- end section-2 pink -->
<!-- section-3 white -->
<div class="container section white section-white border-bottom">
    <div class="rowEvent">
        <div>
        <h3>Floor Plan</h3>
        <img src="<?php bloginfo('template_url'); ?>/img/floorplan.jpg" class="floorplan-img">
        </div>
    </div>
</div>
</div>
<!-- end of Event tab -->

<!-- JavaScript block starts here -->


<!-- THIS IS THE INITIAL CODE FOR FILTERS AND SEARCH-->
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

$('#filters').on( 'click', '.filterItem', function() {
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
  $buttonGroup.on( 'click', '.filterChoiceCont', function() {
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


<!-- THIS IS A VERY COMPLICATED NAVIGATION. IT IS COMPLICATED BECAUSE WE HAVE TO HIDE AND RESET DIFFERENT THINGS DEPENDING ON WHAT WE JUST CLICKED AND WHAT WAS OPEN BUT IT IS SIMPLE IN IT'S NATURE :) -->

<script>
//homepage navigation
	
//if you click on Students
$('#studentLink').click(function() {
		$('.workSection').css('display','none');
		$('.studentSection').css('display','inherit');
		$('#eventSection').css('display','none');
		$('.filterContainer').css('display','none');
		$('.searchContainer').css('display','none');
		$('#workLink').css('cursor','pointer');
		$('#studentLink').css('cursor','default');
		$('#studentLink').css('background-color','#6EC6EA');
		$('#workLink').css('background-color','white');
		$('#eventLink').css('background-color','white');
	$('.searchButton').css('background-color','white');
	$('.filterButton').css('background-color','white');
	$('#filters').css('display','none');
	$('.quicksearch').css('display','none');
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
		$('#eventSection').css('display','none');
		$('.filterContainer').css('display','none');
		$('body').css('background','white');
	$('.searchButton').css('background-color','white');
	$('.filterButton').css('background-color','white');
	$('#filters').css('display','none');
	$('.quicksearch').css('display','none');
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
		$('#eventSection').css('display','inherit');
		$('.filterContainer').css('display','none');
	$('.searchContainer').css('display','none');
		$('.sidebar').removeClass('sidebarBlackout');
		$('body').css('background','white');
	$('.searchButton').css('background-color','white');
	$('.filterButton').css('background-color','white');
	$('#filters').css('display','none');
	$('.quicksearch').css('display','none');
		//var $filtersJoin = $filters.join(', ');
		//$grid.isotope({ filter: $filtersJoin });
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

<!-- code for Search and filter buttons in the navigation-->
<script>

// Search button JavaScript
	
// first we hide search input field
	$('.quicksearch').css('display','none');
	$('.buttonTitle').addClass('buttonTitleBefore');
	var qsRegex;
	

//click on search button in the nav
$('.searchButton').click(function() {
		
		if($('.quicksearch').css('display') === 'flex'){
			
			//if the button was already on and search input field displayed, then
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
		
		//if button was off and search input field was hidden, then
		$('.quicksearch').css('display','flex');
		$('.buttonTitle').addClass('buttonTitleAfter');
		$('.buttonTitle').removeClass('buttonTitleBefore');
		$('.searchButton').css('background-color','#FACED6');
		$('.filterButton').css('background-color','white');
		$('#homeHero').css('display','none');
		$('#filters').css('display','none');
		$('.filterTitle').addClass('filterTitleBefore');
			$('.filterTitle').removeClass('filterTitleAfter');
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
	
// first, hide the filters dropdown
	$('#filters').css('display','none');
	$('.filterTitle').addClass('filterTitleBefore');
	
var buttonFilter;
	
	
	
//click on Filter button in the main nav
$('.filterButton').click(function() {
		
	if($('#filters').css('display') === 'block'){
			//if filter was on and filter dropdown was displayed
			$('#filters').css('display','none');
			$('.filterTitle').addClass('filterTitleBefore');
			$('.filterTitle').removeClass('filterTitleAfter');
			$('.filterButton').css('background-color','white');
			
//reset filters - WE DECIDED NOT TO RESET FILTERS WHEN YOU CLOSE THE FILTER DROPDOWN SO IT IS COMMENTED NOW
		
/*var buttonFilter;
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
$('.is-checked').removeClass('is-checked'); */
		}
else {
			//if filter was off and filter dropdown was hidden, then

			$('.is-checked').removeClass('is-checked');
			$('#filters').css('display','block');
			$('.filterTitle').addClass('filterTitleAfter');
			$('.filterTitle').removeClass('filterTitleBefore');
			$('.filterButton').css('background-color','#FACED6');
			$('.quicksearch').css('display','none');
			$('#homeHero').css('display','none');
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

			
$('#filters').on( 'click', '.filterItem', function() {
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