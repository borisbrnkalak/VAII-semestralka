<div class="parallax-no3" style="background-image: url('{{ asset('images/hero_footer_beer_01.jpg') }}')">
    <div class="containerr">
        <div class="footer">
            <div class="about-us">
                <h3>ABOUT US</h3>
                <span>Best craft beer.</span>
                <p>
                    Brewing is our life, beer is our<br />
                    water so don’t waste time<br />
                    drinking other things.
                </p>
            </div>

            <div class="contact">
                <div class="logo">
                    <img src="{{ asset('images/logo-footer-white.png') }}" alt="LOGO" />
                </div>
                <p>
                    +348 97 555 2360<br />
                    craft-beer@bold-themes.com<br />
                    7 York St, Melbourne, Australia
                </p>
            </div>

            <div class="links">
                <a href='{{ route('home-page') }}'>HOME</a>
                <a href="{{ route('our-team.index') }}">ABOUT US</a>
                <a href="{{ route('overview-page') }}">OVERVIEW</a>
                <a href="{{ route('testimonials.index') }}">BLOG</a>
                <a href="{{ route('products.index') }}">PRODUCT</a>
                <a href="{{ route('contact.index') }}">CONTACT</a>
            </div>
        </div>

        <div class="last-words">
            <p>Copyright by <a href="#">Bold Themes</a>. All rights reserved.</p>
        </div>
    </div>
</div>
