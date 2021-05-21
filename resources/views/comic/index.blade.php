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
          <div class="card">
            <a href="{{route('comic.show',['comic'=>$value->id])}}">
              <div class="image">
                <img src="{{$value['thumb']}}" alt="{{$value->title}}">
              </div>
            <div class="text">
              <p>{{$value['series']}}</p>
              <a href="{{route('comic.edit',['comic'=>$value->id])}}">edit</a>
              <form class="" action="{{route('comic.destroy',['comic'=>$value->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" name="Delete" value="Delete" >
              </form>
            </div>
          </div>
          </a>
        @endforeach
        <a href="{{route('comic.create')}}">Crea</a>
      </div>
    </main>
    <footer>

    </footer>

  </body>
</html>
