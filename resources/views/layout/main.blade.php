<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    @include('layout.head')
</head>
<!-- /Head -->

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
        @include('layout.navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layout.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			@yield('content')
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
        @include('layout.footer')
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	@include('layout.script')
	
	@include('sweetalert::alert')
</body>

</html>
