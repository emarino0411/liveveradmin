<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('app.blocks.metadata')
    <script type="text/javascript">
      //<![CDATA[
      var APPLICATION_URL = "{{ url('/') }}";
      var CSRF_TOKEN      = "{{ csrf_token() }}";
      //]]>
    </script>
  </head>
  <body>
    @include('app.blocks.header')
    <main role="main">
      @yield('content')
    </main>
    @include('app.blocks.footer')
    @include('app.blocks.assets')
  </body>
</html>
