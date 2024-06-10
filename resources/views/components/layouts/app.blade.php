<!DOCTYPE html>
<html lang="en">

<head>
  @include('components.layouts.partials.head')
</head>

<body>
  <script src="/template/assets/static/js/initTheme.js"></script>
  <div id="app">
    <div id="main" class="layout-horizontal">
      <header class="mb-3 mb-sm-5">
        @include('components.layouts.partials.navbar')
      </header>
      <div class="content-wrapper container">
        {{ $slot }}
      </div>
      <footer>
        @include('components.layouts.partials.footer')
      </footer>
    </div>
  </div>
  @include('components.layouts.partials.script')
</body>

</html>
