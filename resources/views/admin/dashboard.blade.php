<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{ asset('vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	
	<div class="wrapper">
		@include('admin.navbar')
		@include('admin.sidebar')

		@include('admin.content')
		{{-- @yield('content') --}}
		
		@include('admin.controlbar')
		@include('admin.footer')
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="{{ asset('vendor/plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- overlayScrollbars -->
	<script src="{{ asset('vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('js/adminlte.js') }}"></script>

	<!-- OPTIONAL SCRIPTS -->
	{{-- <script src="{{ asset('js/demo.js') }}"></script> --}}
	<!-- PAGE PLUGINS -->
	<!-- jQuery Mapael -->
	<script src="{{ asset('vendor/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
	<script src="{{ asset('vendor/plugins/raphael/raphael.min.js') }}"></script>
	<script src="{{ asset('vendor/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
	<script src="{{ asset('vendor/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
	<!-- ChartJS -->
	<script src="{{ asset('vendor/plugins/chart.js/Chart.min.js') }}"></script>
</body>
</html>
