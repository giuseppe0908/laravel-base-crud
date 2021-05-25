<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    <div id="root">

      @include('partials._header')

        @yield('main')

      <footer>
        @include('partials._footer')
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
