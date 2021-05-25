<header>
  <nav>
    <div class="top-nav">
      <div class="container">
        <ul>
          <li><a href="#">dc power&#8480; visa &#174; </a></li>
          <li><a href="#">additional dc sites<i class="fas fa-caret-down"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="nav-bar container">

      <ul>
        <li>  <img src="/images/dc-logo.png" alt="logo"></li>
        <li><a href="#">characters</a></li>
        <li class="{{ Route::currentRouteName() == 'comic.index' ? 'active': 'c'}}"><a href="{{route('comic.index')}}">comic</a></li>
        <li><a href="#">movies</a></li>
        <li><a href="#">tv</a></li>
        <li><a href="#">games</a></li>
        <li><a href="#">collectibeles</a></li>
        <li><a href="#">videos</a></li>
        <li><a href="#">fans</a></li>
        <li><a href="#">news</a></li>
        <li><a href="#">shop<i class="fas fa-caret-down colore"></i></a></li>
        <li><input type="text" placeholder="Search"><i class="fas fa-search"></i></li>


      </ul>
    </div>
  </nav>
  <div class="jumbo">


  </div>
</header>
