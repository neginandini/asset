<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.includes.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('admin.includes.nav')
 @include('admin.includes.sidebar')
        <main class="py-4">
            @yield('content')
            <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  @include('admin.includes.foot')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </main>
    </div>
</body>
</html>
