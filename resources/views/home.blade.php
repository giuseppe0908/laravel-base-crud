<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <head>

    </head>
    <main id="home">
      <div class="container">
        @foreach ($comics as  $value)
          <a href="{{route('Comic.show')}}">
          <div class="card">
              <div class="image">
                <img src="{{$value['thumb']}}" alt="{{$value->title}}">
              </div>
            <div class="text">
              <p>{{$value['series']}}</p>
            </div>
          </div>
          </a>
        @endforeach
      </div>
    </main>
    <footer>

    </footer>

  </body>
</html>
