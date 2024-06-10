<!DOCTYPE html>
<html lang="en">

<head>
  @include('components.layouts.partials.head')
</head>

<body>
  <script src="{{ asset('template/dist') }}assets/static/js/initTheme.js"></script>
  <div id="app">
    @include('components.layouts.partials.sidebar')
    <div id="main">
      @include('components.layouts.partials.navbar')

      {{ $slot }}

      <footer>
        @include('components.layouts.partials.footer')
      </footer>
    </div>
  </div>

  @include('components.layouts.partials.script')
</body>

</html>
