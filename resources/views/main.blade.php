<!DOCTYPE html>
<html>

<head>
  @include('partials._head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('partials._nav')
    @include('partials._sidebar')

    <div class="content-wrapper">
      <section class="content mt-4">
        @include('partials._notification')
        @yield('content')
      </section>
    </div>

    @include('partials._footer')
  </div>

  @include('partials._scripts')
</body>

</html>