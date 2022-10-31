<!DOCTYPE html>

<html lang="en">
<head>
@include('layouts.partials._head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layouts.partials._navbar')
@include('layouts.partials._sidebar')

  
  <div class="content-wrapper">
    @yield('content')
  </div>
 
@include('layouts.partials._footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('layouts.partials.footer-script')
</body>
</html>
