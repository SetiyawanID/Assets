<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  @include('includes.admin.style')
  @stack('addon-style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
      @include('includes.admin.navbar')

      @include('includes.admin.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>

      @include('includes.admin.footer')
    </div>
  </div>

  @include('includes.admin.script')
  @stack('addon-script')
</body>
</html>