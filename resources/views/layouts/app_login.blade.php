<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.head')


    <style type="text/css">
        body { background: url({{ URL::asset('assets/img/bg-login.jpg')}}) !important; }
    </style>
</head>

<body>
    @yield('content')
<!-- start:JavaScript-->

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
