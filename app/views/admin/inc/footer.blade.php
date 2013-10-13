<!-- BEGIN FOOTER -->
	<div class="footer">
		2013 &copy; Bunt.gr.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	{{HTML::script("adminas/assets/plugins/jquery-1.10.1.min.js")}}
	{{HTML::script("adminas/assets/plugins/jquery-migrate-1.2.1.min.js")}}
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<!--[if lt IE 9]>
	<script src="adminas/assets/js/excanvas.js"></script>
	<script src="adminas/assets/js/respond.js"></script>	
	<![endif]-->	
	{{HTML::script("adminas/assets/plugins/breakpoints/breakpoints.js")}}		
	{{HTML::script("adminas/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js")}}	
	{{HTML::script("adminas/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}
	{{HTML::script("adminas/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js")}}
	{{HTML::script("adminas/assets/plugins/bootstrap/js/bootstrap.min.js")}}
	{{HTML::script("adminas/assets/plugins/jquery.blockui.min.js")}}	
	{{HTML::script("adminas/assets/plugins/jquery.cookie.min.js")}}
	{{HTML::script("adminas/assets/plugins/jqvmap/jqvmap/jquery.vmap.js")}}	
	{{HTML::script("adminas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js")}}
	{{HTML::script("adminas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js")}}
	{{HTML::script("adminas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js")}}
	{{HTML::script("adminas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js")}}
	{{HTML::script("adminas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js")}}
	{{HTML::script("adminas/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js")}}	
	{{HTML::script("adminas/assets/plugins/flot/jquery.flot.js")}}
	{{HTML::script("adminas/assets/plugins/flot/jquery.flot.resize.js")}}
	{{HTML::script("adminas/assets/plugins/gritter/js/jquery.gritter.js")}}
	{{HTML::script("adminas/assets/plugins/uniform/jquery.uniform.min.js")}}	
	{{HTML::script("adminas/assets/plugins/jquery.pulsate.min.js")}}
	{{HTML::script("adminas/assets/plugins/bootstrap-daterangepicker/date.js")}}
	{{HTML::script("adminas/assets/plugins/bootstrap-daterangepicker/daterangepicker.js")}}	
	{{HTML::script("adminas/assets/scripts/app.js")}}	
	<script>
		jQuery(document).ready(function() {		
			//App.setPage("dashboard");  // set current page
			App.init(); // init the rest of plugins and elements
		});
	</script>
	<!-- END JAVASCRIPTS -->