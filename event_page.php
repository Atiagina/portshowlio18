<?php
/**
 * Template Name: event-page
 */
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SCCA WEB TEAM">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/thimble.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
<style>
	
	
	
@font-face {
	
	font-family: HalisR;
    src: url('https://2018.portshowl.io/wp-content/themes/portshowlio18/fonts/HalisR-Medium.otf');
}
		
		 @font-face {
    font-family: HalisR;
    src: url(https://2018.portshowl.io/wp-content/themes/portshowlio18/fonts/halisr-regular-webfont.ttf),
		url(https://2018.portshowl.io/wp-content/themes/portshowlio18/fonts/halisr-regular-webfont.woff),
		url(https://2018.portshowl.io/wp-content/themes/portshowlio18/fonts/halisr-regular-webfont.woff2);
}
@font-face {
    font-family: HalisR-Bold;
    src: url(https://2018.portshowl.io/wp-content/themes/portshowlio18/fonts/halisr-bold-webfont.woff),
		url(https://2018.portshowl.io/wp-content/themes/portshowlio18/fonts/halisr-bold-webfont.woff2);
}
	
	
	

	
		
	/* added styles */
	* {
		font-family: 'HalisR', 'Gotham', 'Helvetica Neue', Helvetica, Arial, "sans-serif";}
	
.border-bottom {
    border-bottom: 5px solid black;
}
.border-top {
    border-top: 5px solid black;
}
.border-left {
    border-left: 5px solid black; 
}
.row {
    outline: none;
}

.section {
    padding: 5% 5% 10% 5%;
}
.pop {
    font-size: 110px;
    line-height: 1.1;
    padding-top: 24px;
    padding-bottom: 36px;
	font-family: HalisR-Bold;
}
.para-yellow {
    padding-right: 30%;
    font-size: 20px;
    line-height: 1.8;
    font-family: HalisR;
}

H5 {
    font-size: 20px;
    color: black;
    padding: 0;
    margin: 0;
    font-family: HalisR;
}
.space-top {
    padding-top: 18px;
}
/* added styles end */

H1 {
font-size: 44px;
color: black;
text-transform: capitalize;
font-family: HalisR-Bold;
padding: 0;
margin: 0;


}

H2 {
font-size: 44px;
color: black;
font-weight: bold;
font-family: HalisR-bold;
}

H3 {
    font-size: 28px;
    color: black;
    padding: 0;
    margin: 0;
    font-family: HalisR-bold;
    line-height: 1.1;

}
H4 {
    font-size: 24px;
    color: black;
    padding: 0;
    margin: 0;
    font-family: HalisR;
}

P {
    font-size: 14px;
    line-height: 1.6;
    color: black;
    padding: 0;
    margin: 0;
}

/*TABLET LANDSCAPE*/
@media all and (max-width: 991px) {
 /* added styles */ 
.pop {
    font-size: 90px;
    line-height: 1.1;
}
    .para {
    padding-right: 0%;
    font-size: 20px;
    line-height: 1.8;
    font-family: HalisR;
}
/* added styles end */ 

    H1 {
font-size: 36px;
color: black;
font-weight: bold;
text-transform: capitalize;
}

H2 {
font-size: 36px;
color: black;
font-weight: bold;
}
    
H3 {
    font-size: 28px;
    color: black;
    font-weight: medium;
}

P {
    font-size: 14px;
    line-height: 1.8;
    color: black;
    font-weight: book;
}
}
/*TABLET PORTRAIT*/
@media all and (max-width: 767px) 
{ 
    /* added styles */  
    .pop {
    font-size: 80px;
}
    .para {
        font-size: 16px;
    }
    .border-left {
    border-left: none; 
}
 /* added styles end */ 
    
}
/*MOBILE*/
@media all and (max-width: 480px) {
 /* added styles */  
    .pop {
    font-size: 80px;
}
    .para {
        font-size: 16px;
    }
    .border-left {
    border-left: none; 
}
 /* added styles end */    
    H1 {
font-size: 30px;
color: black;
font-weight: bold;
text-transform: capitalize;
}

H2 {
font-size: 30px;
color: black;
font-weight: bold;
}
    
H3 {
    font-size: 28px;
    color: black;
    font-weight: medium;
}

    h4 {
        font-size: 14px;
    }

P {
    font-size: 14px;
    line-height: 1.6;
    color: black;
    font-weight: book;
}
}

/*colors*/
.green {
    background-color: #00B686;
}
.light-blue {
    background-color: #6EC6EA;
}
.dark-blue {
    background-color: #0040B0;
}
.red {
    background-color: #DF3628;
}
.yellow {
    background-color: #F4EF4A;
}
.pink {
    background-color: #FACED6;
}

/*buttons*/
.button {
    background-color: white;
    border: 2px solid black;
    color: black;
    width: 150px;
    height: 50px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    cursor: pointer;
}
/* button click */
.button:focus {     
    background-color: ;    
}

/*border*/
.border {
    border: 2px solid black;
}
	</style>
	<?php the_post_thumbnail( 'category-thumb' ); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap.min.css">
   
	
<link rel=" icon" href="pop_icon.ico" sizes="16x16 32x32" type="image/png">
	<title>SCCA Portshowlio 2018</title>
</head>

<body>
	

	<!-- section-1 yellow -->
<div class="container section yellow border-bottom">
    <div class="row">
        <div class="cell">
        <h3>SEATTLE CENTRAL CREATIVE ACADEMY</h3>
        <h4>presents</h4>
        <h1 class="pop">POP UP STUDIO!</h1>
        <p class="para-yellow">The graduating class of Seattle Central Creative Academy is proud to present Portshowlio 2018. This group of talented graduates is anything but one-dimensional. This show captures the many facets of their collaboration and dedication.</p>
        
        </div>
    </div>
</div>
<!-- end section-1 yellow -->
<!-- section-2 pink -->
    <div class="container pink border-bottom">
    <div class="row">
        <div class="cell six section-map">
           <h2> map here</h2>
        </div>
        <div class="cell six section border-left">
            <h3>Seattle Central College</h3>
            <h5 class="space-top">1701 Broadway Ave<br>Seattle, WA 98122</h5>
            <p class="space-top">The Creative Academy portshowlio show is located on the 5th floor of Seattle Central College. We are easily accessed from the Capitol Hill Lightrail station one block away, or the Seattle Street Car. You can also find paid parking in the lot. See you soon!</p>
            <button class="button directions">Directions</button>
        </div>
</div>
    </div>
<!-- end section-2 pink -->
<!-- section-3 white -->
<div class="container section white border-bottom">
    <div class="row">
        <div class="cell event">
        <h3>Floor Plans</h3>
        <img src="https://2018.portshowl.io/wp-content/uploads/2018/06/new_map.jpg"/>
        </div>
    </div>
</div>
<!-- end section-3 white -->
   <div class="container section white border-bottom">
   <h3>MERCH!</h3>
   	 <?php echo do_shortcode('[print_responsive_thumbnail_slider]'); ?>
  
	</div>
    


</body>
</html>
