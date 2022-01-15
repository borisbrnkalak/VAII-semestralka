@extends('layouts.master')

@section('title')
    TESTIMONIALS
@endsection

@section('content')

    <div id="parallax" class="paralax"
        style="background-image: url('{{ asset('images/Testimonials/hero_inner_beer_05.jpg') }}')">

        @include('inc.menu-transparent')

        <div class="paralax container">
            <div class="paralax-text black-text">
                <p>What people say</p>
                <h1 style="
                                                  font-family: 'Roboto Condensed';
                                                  font-weight: 800;
                                                  font-size: 3.1em;
                                                  margin-bottom: 1em;
                                                ">
                    WE DO WHAT WE<br />
                    DO BEST
                </h1>
                <span style="line-height: 1.8; font-weight: 400; font-size: 15px">Now and then, a crank case falls in love
                    with the<br />
                    Long Ale a pool table makes love to an Alaskan<br />
                    burglar ale.</span>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="containerr">
            <div class="connoisseurs">
                <h3>Testimonials</h3>
                <h1>FROM THE TRUE CONNOISSEURS</h1>

                <div class="feedbacks">

                    @foreach ($feedbacks as $feedback)
                        @include('items.feedback-item', compact('feedback'))
                    @endforeach

                </div>



                @auth
                    <form action="{{ route('testimonials.store') }}" method='POST' class="feedback-form reveal">
                        @csrf
                        @if ($errors->any())
                            <div class="error-wrapper">
                                <h2 class="error-wrapper-heading">Form is filled wrong</h2>
                                <ol class="error-wrapper-list">
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            <p class="error-item">{{ $error }}</p>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        @endif
                        <div class="err-feed">
                            <p></p>
                        </div>
                        <input name="subject" type="text" class="feedback_topic" placeholder="TOPIC">
                        <textarea name="message" rows="10" class="feedback_text" placeholder="YOUR OPINION"></textarea>
                        <button name="feedback-submit" type="submit">SUBMIT</button>
                    </form>
                @endauth


                <div class="samples-of-beers">
                    <div class="one-beer reveal">
                        <div class="beer-link">
                            <a href="#"><img src="{{ asset('images/Testimonials/beer_highlight_01.png') }}"
                                    alt="BEER" /></a>
                        </div>
                        <div class="text">
                            <h3>BERNARD RED</h3>
                            <p>Organically grow the holistic.</p>
                        </div>
                    </div>

                    <div class="one-beer reveal">
                        <div class="beer-link">
                            <a href="#"><img src="{{ asset('images/Testimonials/beer_highlight_02.png') }}"
                                    alt="BEER" /></a>
                        </div>
                        <div class="text">
                            <h3>GOLDEN ALE</h3>
                            <p>Used generated content in time.</p>
                        </div>
                    </div>

                    <div class="one-beer reveal">
                        <div class="beer-link">
                            <a href="#"><img src="{{ asset('images/Testimonials/beer_highlight_03.png') }}"
                                    alt="BEER" /></a>
                        </div>
                        <div class="text">
                            <h3>RED DUNKEL</h3>
                            <p>Efficiently unleash cross-media.</p>
                        </div>
                    </div>

                    <div class="one-beer reveal">
                        <div class="beer-link">
                            <a href="#"><img src="{{ asset('images/Testimonials/beer_highlight_07.png') }}"
                                    alt="BEER" /></a>
                        </div>
                        <div class="text">
                            <h3>LONDON PRIDE</h3>
                            <p>Taking seamless key performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="movable-parallax" class="parallax"
        style="background-image: url('{{ asset('images/Testimonials/hero_testimonials.jpg') }}')">
        <div class="containerrr">
            <div class="end-words">
                <h3>Testimonials</h3>
                <h1>A WORD FROM OUR CUSTOMERS</h1>
                <div class="changeable-text">
                    <div class="link">
                        <a href="#"><i class="fas fa-quote-right"></i></a>
                    </div>
                    <h3>Great organization</h3>
                    <p>
                        My godness - that was quick! I received my order at approx. 15min.
                        Anyway - well done indeed. I'm impressed.
                    </p>
                    <img src="{{ asset('images/Testimonials/signature_03.png') }}" alt="SIGNATURE" />
                    <h2>Josephine Lee</h2>
                    <span>Manager</span>
                </div>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="containerrr">
            <div class="follow-us">
                <h2>FOLLOW US</h2>
                <ul class="social-links">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-tumblr"></i></a>
                    </li>
                </ul>
                <div id="mov-img" class="image">
                    <img src="{{ asset('images/Testimonials/inner_horizontal_footer_clear_01.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

@endsection
