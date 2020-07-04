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

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Larahub Chat</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        @yield('content')
      </section>
    </div>

    @include('partials._footer')
  </div>

  @include('partials._scripts')
</body>

</html>