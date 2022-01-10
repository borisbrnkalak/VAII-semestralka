<header class="header {{ Request::routeIs('testimonials*') ? 'white-header' : '' }}">
    <div class="logo">
        <img src=" {{ Request::routeIs('testimonials*') ? asset('images/logo-black.png') : asset('images/logo-white.png') }}"
            alt=" LOGO" />
    </div>

    <div class="hamburger">
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
                    <form class="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button name="logout-btn" type="submit" class="logout-btn ">LOGOUT</button>
                    </form>
                </li>
            @endauth

            <li class="{{ Request::routeIs('home-page') ? 'selected' : '' }}"><a
                    href="{{ route('home-page') }}">HOME</a></li>
            <li class="{{ Request::routeIs('overview-page') ? 'selected' : '' }}"><a
                    href="{{ route('overview-page') }}">OVERVIEW</a></li>
            <li class="{{ Request::routeIs('our-team.index') ? 'selected' : '' }}"><a
                    href="{{ route('our-team.index') }}">OUR TEAM</a></li>
            <li class="{{ Request::routeIs('testimonials.index') ? 'selected' : '' }}"><a
                    href="{{ route('testimonials.index') }}">TESTIMONIALS</a></li>
            <li class="{{ Request::routeIs('contact.index') ? 'selected' : '' }}"><a
                    href="{{ route('contact.index') }}">CONTACT</a></li>
            <li class="{{ Request::routeIs('products.index') ? 'selected' : '' }}"><a
                    href="{{ route('products.index') }}">PRODUCT</a></li>
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

    <div class="login transparent">
        <a class="login-btn" href="#">
            @auth
                {{ auth()->user()->email }}
            @else
                LOGIN
            @endauth
        </a>
        @auth
            <form class="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button name="logout-btn" type="submit" class="logout-btn ">LOGOUT</button>
            </form>
        @endauth
    </div>
</header>
