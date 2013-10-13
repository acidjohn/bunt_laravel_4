<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.1.2
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	@yield('meta')
	<meta charset="utf-8" />
	<title>Bunt.gr | Admin </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
  
	{{HTML::style("adminas/assets/plugins/bootstrap/css/bootstrap.min.css")}}
	{{HTML::style("adminas/assets/css/style-metro.css")}}
	{{HTML::style("adminas/assets/plugins/bootstrap/css/bootstrap-responsive.min.css")}}
	{{HTML::style("adminas/assets/plugins/font-awesome/css/font-awesome.css")}} 
	{{HTML::style("adminas/assets/css/style.css")}}
	{{HTML::style("adminas/assets/css/style-responsive.css")}}
	{{HTML::style("adminas/assets/css/themes/default.css")}}
	{{HTML::style("adminas/assets/plugins/gritter/css/jquery.gritter.css")}}
	{{HTML::style("adminas/assets/plugins/uniform/css/uniform.default.css")}}
	{{HTML::style("adminas/assets/plugins/bootstrap-daterangepicker/daterangepicker.css")}}
	{{HTML::style("adminas/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css")}}
	{{HTML::style("adminas/assets/plugins/jqvmap/jqvmap/jqvmap.css")}}
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" />
	@yield('extrastyles')
</head>
<!-- END HEAD -->