<!DOCTYPE html>
<html lang="en">
<head>
@include('layout_user.head')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <!-- top bar -->
  @include('layout_user.topbar')
  <!-- /top bar -->

<!-- navbar -->
  @include('layout_user.navbar')
<!-- /navbar -->  

<!-- .page-banner -->
  @yield('banner')
    
   <!-- .page-banner -->
  </header>

  <main>
    <!-- MAIN CONTENT -->
			@yield('content')
			<!-- END MAIN CONTENT -->
  </main>

  <footer class="page-footer">
  @include('layout_user.footer')
  </footer>

  @include('layout_user.script')
  @include('sweetalert::alert')

</body>
</html>