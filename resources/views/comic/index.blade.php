<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div id="root">
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
                <a class="mg-top" href="{{route('comic.edit',['comic'=>$value->id])}}">edit</a>


                <div class="elimina">
                  <button type="button" name="button" @click= "delete_comic({{$value->id}})">Delete</button>
                  <div class="si-no" v-if="{{$value->id}} == id">
                    <form class="" action="{{route('comic.destroy',['comic'=>$value->id])}}" method="post" v-if="id!=null">
                      @csrf
                      @method('DELETE')
                      <input type="submit" name="Delete" value="Si" >
                    </form>
                    <button type="button" name="button"  @click= "no_elimina()" v-if="id!=null">NO</button>
                  </div>

                </div>

              </div>
            </div>
            </a>
          @endforeach
          <a id="create" href="{{route('comic.create')}}">Crea un nuovo fumetto</a>
        </div>
      </main>
      <footer>

      </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/app.js" charset="utf-8"></script>
  </body>
</html>
