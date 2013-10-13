<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Bunt.gr</title>
	<!-- <meta name="robots" content="index,follow"> -->
	<meta name="description" content="Bunt - Underground Music Scene">
	<meta name="keywords" content=""/>
	<meta name="author" content="Bunt.gr">
	<link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}" type="image/x-icon" />

	<!-- ### Stylesheets ### -->
	{{HTML::style("/css/style.css" )}}
    {{HTML::style("/css/media-queries.css" )}}
	<!-- Fancybox styles -->
	{{HTML::style("css/fancybox.min.css" )}}


	{{HTML::style(URL::asset('css/newtv.css'))}}
	<!--  Revolution Slider styles -->
	{{HTML::style("/js/rs-plugin/css/settings.css" )}}
	<!-- Google fonts -->
	{{HTML::style("//fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,400,800")}}
	<!-- ### JavaScripts ### -->
	{{HTML::script("/js/jquery.min.js")}}
	<!-- Add HTML5 support for older IE browsers -->
	<!--[if lt IE 9]> 
		<script src="js/html5.min.js"></script>
		<script src="js/selectivizr-and-extra-selectors.min.js"></script>
	<![endif]-->
	{{HTML::script("/js/modernizr.custom.js")}}
	<!-- sound manager -->
	{{HTML::script(URL::asset('/js/jquery.mplayer.min.js'))}}
	<!-- /sound manager -->
	{{HTML::script("/js/respond.min.js")}}
	{{HTML::script("/js/jquery.fitvids.js")}}
	<!-- Sliders -->
	<!-- jQuery Nivo slider -->
	{{HTML::script("/js/jquery.nivo.slider.pack.js")}}
	 <!-- jQuery Revolution Slider  -->	
	{{HTML::script("/js/rs-plugin/js/jquery.themepunch.plugins.min.js")}}			
    {{HTML::script("/js/rs-plugin/js/jquery.themepunch.revolution.min.js")}}
	<!-- /Sliders -->
	{{HTML::script("/js/jquery.countdown.js")}}
	{{HTML::script("/js/jquery.easing-1.3.min.js")}}
	{{HTML::script("/js/jquery.isotope.min.js")}}
	{{HTML::script("/js/jquery.touchSwipe-1.2.5.min.js")}}
	{{HTML::script("/js/jquery.mixitup.min.js")}}
<!-- 	{{HTML::script("//maps.google.com/maps/api/js?sensor=false")}}
	{{HTML::script("js/jquery.gmap.min.js")}} -->
	{{HTML::script("/js/jquery.sharrre-1.3.2.min.js")}}
	<!-- Fancybox -->
	{{HTML::script("/js/jquery.fancybox-1.3.4.pack.js")}}
	<!-- /Fancybox -->
	<!-- custom scripts -->
	{{HTML::script("/js/custom.js")}}
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
  <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>

	{{HTML::script("/js/newtv.js")}}

</head>