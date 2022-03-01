<html>
  <head>
    <title>@yield('title')</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    >

  </head>
  <body>
    @include('partials.navbar')
    @if(session('status_message'))
      <div class="alert alert-info">{{session('status_message')}}</div>
      <br/>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-2">
              @include('partials.sidebar')
            </div>
            <div class="col-md-10">
              @yield('content')
            </div>
        </div>
    </div>
  </body>
</html>
