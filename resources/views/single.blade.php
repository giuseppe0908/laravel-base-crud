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
    <main id="single">
  <div class="img">
    <span id="comic">COMIC BOOK</span>
    <img src="{{$comic['thumb']}}" alt="ok">
    <span id="view">VIEW GALLERY</span>

  </div>
  <div class="bg-blue">

  </div>
  <div class="container">
    <div class="text">
      <h2>{{$comic['title']}}</h2>
      <div class="prezzo">
        <div class="price">
          <p>U.S.Price:<span class="speciale">{{$comic['price']}}</span></p>
        </div>
        <div class="check">
          <p id="border">AVAILABLE</p>
          <p class="speciale">Check Available<i class="fas fa-caret-down"></i></p>
        </div>
      </div>
      <p id="color-gray">{{$comic['description']}}</p>
    </div>
    <div class="copertina">
      <p>ADVERTISEMENT</p>
      <img src="/images/adc.jpg" alt="turuzzu">
    </div>
  </div>
    <section class="specifiche">
      <div class="container">

        <div class="specs">
          <h3>Specs</h3>
          <div class="series">
            <div class="-by">
              <span>Series:</span>
            </div>
            <div class="art-txt">
              <p id="colorato">{{$comic['series']}}</p>
            </div>
          </div>

          <div class="series">
            <div class="-by">
              <span>U.S.Price:</span>
            </div>
            <div class="art-txt">
              <p>{{$comic['price']}}</p>
            </div>
          </div>
          <div class="series border-bt">
            <div class="-by">
              <span>On Sale Date:</span>
            </div>
            <div class="art-txt">
            <p>{{ date('M j, Y', strtotime($comic['sale_date'])) }}</p>
            </div>
          </div>
          </div>
      </div>


    </section>




</main>
    <footer>

    </footer>

  </body>
</html>
