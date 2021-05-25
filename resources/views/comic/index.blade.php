
      @extends('layout.app')
      @section('main')
      <main id="home">
        <div class="rettangolo">
          <p>CURRENT SERIES</p>
        </div>
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
                      <input type="submit" name="Delete" value="Si " >
                    </form>
                    <button type="button" name="button"  @click= "no_elimina()" v-if="id!=null">NO</button>
                  </div>

                </div>

              </div>
            </div>
            </a>
          @endforeach
          <a id="btn-create" href="{{route('comic.create')}}">Crea un nuovo fumetto</a>


        </div>
        <section class="banner-info">
          <div class="container">
            <ul>
              <li><img src="/images/buy-comics-digital-comics.png" alt="">DIGITAL COMICS </li>
              <li><img src="/images/buy-comics-merchandise.png" alt="">DC MERCHANDISE </li>
              <li><img src="/images/buy-comics-subscriptions.png" alt="">SUBSCRIPTION</li>
              <li><img id="local" src="/images/buy-comics-shop-locator.png" alt="">COMIC SHOP LOCATOR </li>
              <li><img src="/images/buy-dc-power-visa.svg" alt="">DC POWER VISA</li>
            </ul>
          </div>

        </section>
      </main>

      @endsection
