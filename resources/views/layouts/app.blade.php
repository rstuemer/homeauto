<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.head')
>
	<!--link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"-->
</head>

<body>
    @include('includes.headernav')
	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
		    @include('includes.sidebar')
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.html">Home</a>
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Dashboard</a></li>
				</ul>

				@yield('content')





			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

		</p>

	</footer>

	<script>
		$(function() {
			$(".gridster ul").gridster({
				widget_margins: [10, 10],
				widget_base_dimensions: [140, 140]
		})});

	</script>
	<!-- start: JavaScript-->

	<script src="{{ URL::asset('/assets/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{ URL::asset('/assets/js/jquery-migrate-1.0.0.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.ui.touch-punch.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/modernizr.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/bootstrap.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.cookie.js')}}"></script>

	<script src='{{ URL::asset('/assets/js/fullcalendar.min.js')}}'></script>

	<script src='{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}'></script>

	<script src="{{ URL::asset('/assets/js/excanvas.js')}}"></script>
	<script src="{{ URL::asset('/assets/js/jquery.flot.js')}}"></script>
	<script src="{{ URL::asset('/assets/js/jquery.flot.pie.js')}}"></script>
	<script src="{{ URL::asset('/assets/js/jquery.flot.stack.js')}}"></script>
	<script src="{{ URL::asset('/assets/js/jquery.flot.resize.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.chosen.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.uniform.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.cleditor.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.noty.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.elfinder.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.raty.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.iphone.toggle.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.uploadify-3.1.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.gritter.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.imagesloaded.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.masonry.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.knob.modified.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/jquery.sparkline.min.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/counter.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/retina.js')}}"></script>

	<script src="{{ URL::asset('/assets/js/custom.js')}}"></script>

		<script src="{{ URL::asset('/assets/js/jquery.gridster.js')}}"></script>
	<!-- end: JavaScript-->

</body>
</html>
