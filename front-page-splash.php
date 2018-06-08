<?php
/**
 * Template Name: front-page-splash
 */
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SCCA WEB TEAM">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
<!--	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">-->
	
<link rel=" icon" href="pop_icon.ico" sizes="16x16 32x32" type="image/png">
	<title>SCCA Portshowlio 2018</title>
	<style>
		
@import url('https://use.fontawesome.com/releases/v5.0.11/css/all.css');

@import "css/thimble.css";
@import "css/style.css";
/*

/*for single design template*/
/*modified by ERIK FOR IVANNA on 5/1/18*/

*{
	font-family: HalisR, Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
}
.row {

	justify-content: flex-start;
} 
.tinylogo img{
	margin-top: 20px;
	width: 100px;
}
.studentSidebar {
	width: 650px;
    height: 300px;
    text-transform: uppercase;
    color: black;
    font-size: 15px;
    font-weight: 500;
}
.sidebar {
    max-width: none;
	padding-left: 28px;
	display: flex;
	height: 80vh !important;
}

.headshot {
	    width: 300px;
    height: 300px;
    float: left;
    border: 5px black solid;
}
.studentInfo {
	width: 280px;
	height: 300px;
	float: left;
	margin-left: 20px;
}
.dash {
	float: left;
    text-align: left;
    width: 400px;
    margin-bottom: -2px;
    margin-right: 20px;
    margin-top: 130px;
}
.justify-end {
	justify-content: flex-end;
}
.projectTitle {
	font-weight: bold;
    font-size: 33px;
    color: black;
	    margin-bottom: 0px;
}
.projectSelector {
	position: fixed;
	top: 50px;
	right: 49px;
	height: 200px;
	z-index: 100;
}
.projectSelectorName {
	display: block;
	    height: auto;
    padding: 1px 5px;
   float: right;
    clear: both;
	border: 2px black solid;
	font-size: 17px;
    color: black;
    font-weight: 600;
	    margin: -2px 0 0 0;
}
.projectSelectorName:hover {
	background: #F4EF4A;
}

.collaboratorTitle {
}
.projectDescription {
	outline: thin red solid;
}
.name {
	font-size: 17px;
    color: black;
    font-weight: 600;
    text-transform: uppercase;
	
}
.socialIcon {
	display: block;
	height: 32px;
	width: 32px;
	float: left;
	margin-right: 20px;
}


span.nextStudent a {
    font-size: 29px;
    color: black;
	    border: 2px black solid;
    padding: 6px 17px;
}

span.nextStudent a:hover, span.nextStudent a:active {
	text-decoration: none;
}

p.category {
    text-transform: capitalize;
    color: black;
    font-size: 15px;
    font-weight: 500;
	margin-bottom: 5px;
	
}
p.collaboratortitle {
    color: black;
    font-size: 15px;
    font-weight: 600;
	margin: 0;
}

p {
    color: black;
    font-size: 14px;
    font-weight: 400;
}

.cell.twelve.imageGrid {
    padding: 0;
}

.ivannafooter{
	margin-top: 100px;
	border: solid black 4px;
}

.ivannafooter .fab {
	font-size: 30px;
}

.ivannafooter a .fab {
	color: black;
}
.ivannafooter a .fab:hover {
	color: black;
}
.footersocial {
	padding: 0px;
}

.socialoutline {
	border: solid black 4px;
	    height: 55px;
}

.red {background-color: #de3831;}
.green {background-color: #00b588;}
.blue {background-color: #73c7e7;}
.yellow {background-color: #f5ed59;}

/*end Ivanna*/
/*
@font-face {
    font-family: "NeueLight";
    src: url("./neueLight.otf") format("truetype");
}
@font-face {
    font-family: "NeueHeavy";
    src: url("./neueHeavy.otf") format("truetype");
}

body {
  font-family: "NeueLight", sans-serif;
  margin: 0;
  background-color:#000000;
}

.container{
	max-width: 35vw;
	margin:8vh auto;
    max-height: 85vh;
	//background-color:#ffffff;
	padding-left:40px;
	padding-right:40px;
	padding-bottom:5vh;
    transform: rotateY(  0deg ) translateZ( 75px );
    background-color:white;
}

.black{
	color:#000000;
}

.social{
	list-style:none;
}

.icons{
	float:left;
	padding:8px;}

h1{
    font-family: "NeueHeavy", sans-serif;
    font-size: 5vh;
    margin-top: 5vh;
    margin-bottom: 0vh;
    text-align: right;
}

h2{
    font-family: "NeueHeavy", sans-serif;
    margin-bottom: .4vh;
    margin-top: 2.5vh;
	font-size: 4vh;
}

h3{
	margin-top:0px;
	margin-bottom:0px;
	font-size: 3vh;
}

h4{
font-family: "NeueHeavy", sans-serif;
	margin-bottom:0px;
	font-size: 1.25vh;
	margin-top:5px;}

.time{
    margin-bottom: 2.5vh;
        font-size: 2vh;
        padding-left: 1px;
        margin-top: .2vh;
}

.fa-2x {
    font-size: 2.3vh;
}

p {
	margin-bottom:0vh;
	    font-size: 1.5vh;
}

.twenty {
    text-align: right;
    margin-top: -.5vh;
    font-size: 3vh;
}

hr{
	border:thin black solid;
	width:100%;
	margin-bottom:0px;
    display: inline-block;
    margin-top:0px;
}

.footer2{
	margin-top:2.5vh;
}

.logo {
    height:14vh;
    margin-top: 5vh;
margin-bottom: 5vh;
}

.scca {
    font-size: 2vh;
text-align: right;
margin-top: 5vh;
margin-bottom: 5vh;
}

.shape {
    perspective: 1000px;
    perspective-origin: 50% 50%;
    transform-style: preserve-3d;

}

ul {
    padding: 0px;
}

/* Background video */

/*

video {
    position: fixed;
    top: 50%;
    left: 50%;
    //min-width: 100%;
    //min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 	background: url('poster.jpg') no-repeat;
  	background-size: cover;
  	transition: 1s opacity;
}

 @media screen and (max-width: 1170px) {

.container{
	width: 420px;
    max-height: none;
	max-width:none;
}

h2{
	font-size: 22px;
	 }

h3{
	font-size: 18px;
	 }


}


@media only screen and (max-width: 768px){

.container{
	max-width: 50vh;
	width: 410px;
	margin:8vh auto;
	height:auto;
	max-height:none;
	padding-left:20px;
	padding-right:20px;
	padding-bottom:20px;
    transform: none;
}

.social{
	margin-left: -8px;
	}

.logo{
	margin-top:3vh;
    height:auto;
	}

}

*/

		@font-face {
	
	font-family: HalisR;
    src: url('<?php bloginfo('template_url');?>/fonts/HalisR-Medium.otf');
}
		
		 @font-face {
    font-family: HalisR;
    src: url(<?php bloginfo('template_url'); ?>/fonts/halisr-regular-webfont.ttf),
		url(<?php bloginfo('template_url'); ?>/fonts/halisr-regular-webfont.woff),
		url(<?php bloginfo('template_url'); ?>/fonts/halisr-regular-webfont.woff2);
}
@font-face {
    font-family: HalisR-Bold;
    src: url(<?php bloginfo('template_url'); ?>/fonts/halisr-bold-webfont.woff),
		url(<?php bloginfo('template_url'); ?>/fonts/halisr-bold-webfont.woff2);
}
body {
  /*color: $textcolor;*/
	/*width: 100%;*/
	/*height: auto;*/
	overflow-x: hidden;
  background: none;
  font-family: HalisR, Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
  text-transform: none;
	margin: 0;
}

div {
  margin: 0;
  padding: 0;
}

h2 {
  color: #f0816a;
}

ul {
  margin: 0 0 0 20;
}

.backgrounddiv {
  width: 90%;
  height: 100vh;
  display: flex;
	margin: 0;
  justify-content: center;
  align-content: center;
  padding: 5vh 5vw;
}

.infocontainer {
  width: 60%;
  height: 100%;
}

#helper {
  position: relative;
  z-index: 3;
}

.yellowblock {
 /* width: 100%;*/
  height: 50%;
  background-color: #f5ec5a;
  border: 10px solid black;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-content: space-between;
  padding: 2vh 2vw;
  color: black;
}

.yellowblock .logoblock {
  width: 50%;
  padding: 2vh 2vw;
}

.yellowblock .content {
  width: 50%;
  display: flex;
  flex-direction: column;
  align-self: flex-end;
}

.yellowblock .content .descriptionblock {
  width: 100%;
  align-self: baseline;
}

.yellowblock .content .socialblock {
  display: flex;
  justify-content: left;
}

.yellowblock .content .socialblock ul {
  list-style-type: none;
  width: 60%;
  margin: 10px 0;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: left;
  padding-left: 0;
}

.yellowblock .content .socialblock ul li a {
  color: black;
  text-decoration: none;
}

.yellowblock .content .socialblock ul li a:hover {
  color: white;
}

.blockrow,
.blockrow2 {
  width: 100%;
  display: flex;
  flex-direction: row;
}

.blockrow h1,
.blockrow2 h1 {
  text-transform: uppercase;
  font-size: 2em;
  margin-bottom: 0;
  line-height: 1em;
  font-family: HalisR-Bold;
}

.blockrow h3,
.blockrow2 h3 {
  line-height: .5em;
}

.blockrow .date,
.blockrow2 .date {
  width: 70%;
  height: auto;
  border: 10px solid black;
  border-top: none;
  padding: 2vh 2vw;
  height: 100%;
}

.blockrow .scca,
.blockrow2 .scca {
  background-image: url(<?php bloginfo('template_url');?>/img/pattern.svg);
  background-repeat: repeat;
  background-size: 40%;
  display: flex;
  align-content: center;
  justify-content: center;
  width: 30%;
  border: 10px solid black;
  border-top: none;
  border-left: none;
}

.blockrow .scca img,
.blockrow2 .scca img {
  /*width: 50%;
			object-fit:contain;*/
  display: none;
}

.blockrow .address,
.blockrow2 .address {
  width: 30%;
  padding: 2vh 2vw;
  background-color: #faced7;
  border: 10px solid black;
  border-top: none;
  border-left: none;
  display: flex;
  color: black;
}

.blockrow .address h4,
.blockrow2 .address h4 {
  font-size: 16px;
  align-self: center;
}

.profesh {
  background-color: #72c7e7;
  color: black;
}

.family {
  background-color: #de3831;
  border: 10px solid black;
  color: white;
}

/*wrapper for the red element and parent for our layers */
#wrapper {
  width: 100%;
  height: auto;
  position: relative;
}

#wrapper:before {
  content: '';
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 10px solid black;
  opacity: 0;
  -webkit-transition: opacity .4s, -webkit-transform .4s;
  transition: opacity .4s, -webkit-transform .4s;
  transition: opacity .4s, transform .4s;
  transition: opacity .4s, transform .4s, -webkit-transform .4s;
  z-index: 2;
  background-color: white;
}

#wrapper:after {
  content: '';
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 10px solid black;
  opacity: 0;
  -webkit-transition: opacity .4s, -webkit-transform .4s;
  transition: opacity .4s, -webkit-transform .4s;
  transition: opacity .4s, transform .4s;
  transition: opacity .4s, transform .4s, -webkit-transform .4s;
  z-index: 1;
  background-color: white;
}

/* hover code. we hover over the big element and move the red element. the rest stays where it was but becomes visible */
.infocontainer:hover .helper {
  transform: translate(-20px, -20px);
}

.infocontainer:hover #wrapper:after {
  opacity: 1;
  top: 40px;
  left: -40px;
  right: 40px;
  bottom: -40px;
}

.infocontainer:hover #wrapper:before {
  opacity: 1;
  top: 20px;
  left: -20px;
  right: 20px;
  bottom: -20px;
}

@media only screen and (max-width: 1000px) {
  .yellowblock {
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .yellowblock .logoblock {
    width: 50%;
  }
  .infocontainer {
    width: 100%;
    margin-left: 2vw;
  }
  .helper {
    transform: translate(-20px, -20px);
  }
  #wrapper:after {
    opacity: 1;
    top: 40px;
    left: -40px;
    right: 40px;
    bottom: -40px;
  }
  #wrapper:before {
    opacity: 1;
    top: 20px;
    left: -20px;
    right: 20px;
    bottom: -20px;
  }
  .yellowblock .content {
    width: 70%;
    margin: 10px auto;
  }
  .yellowblock .content .socialblock {
    display: flex;
    justify-content: center;
  }
  .yellowblock .content .socialblock ul {
    list-style-type: none;
    width: 70%;
    margin: 10px auto;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
  }
}

@media only screen and (max-width: 500px) {
  .blockrow h1,
  .blockrow2 h1 {
    text-transform: uppercase;
    font-size: 1.5em;
    margin-bottom: 0;
    line-height: 1em;
  }
  .blockrow h3,
  .blockrow2 h3 {
    font-size: 1.2em;
  }
  .blockrow2 {
    width: 90%;
    display: flex;
    flex-direction: column;
  }
  .blockrow2 .date {
    width: 100%;
  }
  .blockrow2 .address {
    width: 100%;
    border-left: 10px solid black;
  }
}
	</style>
</head>

<body>
	

	<div class="backgrounddiv">
		
	<div class="infocontainer">
<div id="wrapper">
<div id="helper">
	<div class="yellowblock">
		<div class="logoblock">
			<img class="logo" src="<?php bloginfo('template_url');?>/img/pop_logo.svg" >
		</div>
		<div class="content">
		<div class="descriptionblock"> <p id='description'><?php the_field('description'); ?></p>
		</div>
		
		<div class="socialblock">
			<ul class="social">
					<li class="icons"><a href="<?php the_field('facebook_link'); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-square fa-2x black"></i>

</a></li>
					<li class="icons"><a href="<?php the_field('insta_link'); ?>" target="_blank" title="Instagram"><i class="fab fa-instagram fa-2x black"></i>

</a></li>
					<li class="icons"><a href="<?php the_field('twitter_link'); ?>" target="_blank" title="Twitter"><i class="fab fa-twitter-square fa-2x black"></i>

</a></li>
				</ul>
		</div>
		</div>
	</div>

	<div class="blockrow">
		<div class="date profesh">
			<h1>Professional Night</h1>
			<h3><?php the_field('day_1_date'); ?></h3>
			<h3 class="time"><?php the_field('day_1_time'); ?></h3>
		</div>
		<div class="scca">
			<img src="<?php bloginfo('template_url');?>/img/pattern.svg" alt="scca">
		</div>
		</div>
		
		<div class="blockrow2">
		<div class="date family">
			<h1>Friends & Family Night</h1>
			<h3><?php the_field('day_2_date'); ?></h3>
			<h3 class="time"><?php the_field('day_2_time'); ?></h3>
		</div>
			<div class="address">
				
				<h4>1701 Broadway Ave Seattle, WA 98122</h4>
		</div>
		</div>
	</div>
		</div> <!-- end of wrapper -->

	</div>
	</div>
	<script>
	$(document).ready(function() {
		var videoRat = $('#bgvid').width()/$('#bgvid').height();
		var windowRat = $(window).width()/$(window).height();
			//console.log($('#bgvid').width()/$('#bgvid').height());
			//console.log($(window).width()/$(window).height());

			if (videoRat > windowRat) {
				console.log('>');
				 $("#bgvid").css("height", '100%');
			} else {
				console.log('<');
				$("#bgvid").css("width", '100%');
			}
	})
	$( window ).resize(function() {
		var videoRat = $('#bgvid').width()/$('#bgvid').height();
  	  	var windowRat = $(window).width()/$(window).height();
		//console.log($('#bgvid').width()/$('#bgvid').height());
		//console.log($(window).width()/$(window).height());

		  if ( videoRat > windowRat ) {
			 console.log('height100');
			 $("#bgvid").css("width", 'auto');
			  $("#bgvid").css("height", '100%');
		 } else {
			 console.log('width100');
			 $("#bgvid").css("height", 'auto');
			 $("#bgvid").css("width", '100%');
		 }

	});
	$(document).mousemove(function(e) {



		  //console.log(e.clientX/$(document).width(), " : ", e.clientY/$(document).height());

		  var max = 5
		  var min = -5
		  //var hper = 1-e.clientY/$(document).height();
		  var wper = e.clientX/$(document).width();
		  var xPer = (max-min)*wper+min;
		  //var yPer = (max-min)*hper+min;: ;
		  $(".container").css("transform", 'rotateY(' + xPer + 'deg ) translateZ( 75px )');
		  //console.log(xPer);

	})
	</script>


</body>
</html>
