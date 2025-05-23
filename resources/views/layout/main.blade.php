<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
<!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Inventor | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/uniform/css/uniform.default.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css") }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{{ asset("templates/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/fullcalendar/fullcalendar.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/jqvmap.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/morris/morris.css") }}" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="{{ asset("templates/assets/admin/pages/css/tasks.css") }}" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="{{ asset("templates/assets/global/css/components-rounded.css") }}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/css/plugins.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/admin/layout4/css/layout.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/admin/layout4/css/themes/light.css") }}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset("templates/assets/admin/layout4/css/custom.css") }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
@include('layout.asset.navbar')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	@include('layout.asset.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				@yield('header')
				<!-- END PAGE TITLE -->

				<!-- BEGIN PAGE TOOLBAR -->
				@include('layout.asset.toolbar')
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			@yield('page-breadcrumb')
			<!-- END PAGE BREADCRUMB -->

			<!-- BEGIN PAGE CONTENT-->
			@yield('page-content')
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('layout.asset.footer')
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ asset("templates/assets/global/plugins/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery-migrate.min.js") }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset("templates/assets/global/plugins/jquery-ui/jquery-ui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.blockui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.cokie.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/uniform/jquery.uniform.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/flot/jquery.flot.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/flot/jquery.flot.resize.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/flot/jquery.flot.categories.js") }}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{ asset("templates/assets/global/plugins/morris/morris.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/morris/raphael-min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.sparkline.min.js") }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset("templates/assets/global/scripts/metronic.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/layout4/scripts/layout.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/layout4/scripts/demo.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/pages/scripts/index3.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/pages/scripts/tasks.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/pages/scripts/ecommerce-index.js") }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
           EcommerceIndex.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
	@yield('scripts')
</body>
<!-- END BODY -->
</html>