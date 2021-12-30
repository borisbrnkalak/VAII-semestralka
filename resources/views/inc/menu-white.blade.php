<div class="header-variant-white" id="white-menu">
  <div class="header-white">
    <div class="logo">
      <img src="{{ asset("images/logo-black.png") }}" alt="LOGO" />
    </div>

    <div class="hamburger-white">
      <div class="line middle">
        <div class="line top"></div>
        <div class="line bottom"></div>
      </div>
    </div>

    <div class="links">
      <ul class="nav-links">
        <li class="list-login"><a class="login-btn" href="#">
            @auth
            {{ auth()->user()->email }}
              @else
              LOGIN
          @endauth
          </a></li>
         @auth

          <li class="list-logout">
          <form class="logout-form" action="services/logout.php" method="POST">
            <button name="logout-btn" type="submit" class="logout-btn ">LOGOUT</button>
          </form>
        </li>
      @endauth

     <li class="{{ Request::routeIs("home-page") ? "selected" : "" }}"><a href="{{ route("home-page") }}">HOME</a></li>
      <li class="{{ Request::routeIs("overview-page") ? "selected" : "" }}"><a href="{{ route("overview-page") }}">OVERVIEW</a></li>
      <li class="{{ Request::routeIs("our-team-page") ? "selected" : "" }}"><a href="{{ route("our-team-page") }}">OUR TEAM</a></li>
      <li class="{{ Request::routeIs("testimonials-page") ? "selected" : "" }}"><a href="{{ route("testimonials-page") }}">TESTIMONIALS</a></li>
      <li class="{{ Request::routeIs("contact-page") ? "selected" : "" }}"><a href="{{ route("contact-page") }}">CONTACT</a></li>
      <li class="{{ Request::routeIs("product-page") ? "selected" : "" }}"><a href="{{ route("product-page") }}">PRODUCT</a></li>
      </ul>

      <ul class="social">
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-pinterest"></i></a>
        </li>
        <li>
          <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="login">
    <a class="login-btn" href="#">
      @auth
            {{ auth()->user()->email }}
              @else
              LOGIN
          @endauth
    </a>
    @auth
        <form class="logout-form" action="services/logout.php" method="POST">
        <button name="logout-btn" type="submit" class="logout-btn ">LOGOUT</button>
      </form>
    @endauth
  </div>


</div>