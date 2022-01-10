@extends('layouts.master')

@section('title')
    OVERVIEW
@endsection

@section('content')

    <div id="parallax" class="paralax"
        style="background-image: url('{{ asset('images/Overview/hero_inner_beer_01.jpg') }}')">
        @include('inc.menu-transparent')

        <div class="paralax container">
            <div class="paralax-text">
                <p>We work hard. We deliver.</p>
                <h1 style="
                  font-family: 'Roboto Condensed';
                  font-weight: 800;
                  font-size: 3.1em;
                ">
                    A STORY<br />
                    BEHIND EVERY BEER
                </h1>
                <span>We have a total irreverence for anything connected with society
                    except that<br />
                    which makes the roads safer and the beer stronger.</span>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="images-wtext">
            <div class="first-row">
                <div class="padding-image reveal">
                    <img src="{{ asset('images/ingredients_01.jpg') }}" alt="ING" />
                </div>

                <div class="full-image reveal">
                    <img src="{{ asset('images/Overview/inner_vertical_transparent_01.png') }}" alt="BEER" />
                </div>

                <div class="text reveal">
                    <div class="flex-center">
                        <span>What we learned so far</span>
                        <h1>
                            THE CRUELEST<br />
                            WINTER ALE
                        </h1>
                        <p>
                            Efficiently unleash cross-media information without cross media
                            value. Quickly maximize timely deliverables for real time
                            schemas. Dramatically maintain clicks-and-mortar solutions
                            without functional solutions, completely synergize.
                        </p>
                    </div>
                </div>
            </div>

            <div class="second-row">
                <div class="text gray">
                    <div class="flex-center reveal">
                        <span>How we serve our beer</span>
                        <h1>
                            THE BEST WEISS<br />
                            BEER ON EARTH
                        </h1>
                        <p>
                            Podcasting operational change management inside of workflows to
                            establish a framework. Taking seamless key performance
                            indicators offline to maximise the long tail. Keeping your eye
                            on the ball while performing a deep dive on the start-up.
                        </p>
                    </div>
                </div>

                <div class="padding-image reveal">
                    <img src="{{ asset('images/ingredients_03.jpg') }}" alt="ING" />
                </div>

                <div class="full-image reveal">
                    <img src="{{ asset('images/Overview/inner_vertical_transparent_02.png') }}" alt="BEER" />
                </div>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="products reveal">
            <div class="containerr">
                <div class="header">
                    <span style="font-size: 1.3em; color: #b28564">Long tradition is our key</span>
                    <h1 style="
                    margin-top: 1em;
                    font-family: 'Roboto Condensed', sans-serif;
                    font-weight: 800;
                    font-size: 3.1em;
                  ">
                        SPOT THE DIFFERENCE
                    </h1>
                </div>

                <div class="mov-mechanic">
                    <div class="left-arrow">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                    </div>

                    <div class="all-products">
                        <div class="movable-products">
                            <div class="image">
                                <img src="{{ asset('images/inner_3_bottles_horizontal_01.jpg') }}" alt="BOTTLE" />
                            </div>
                            <div class="description-product">
                                <div class="price">
                                    <h2>€17.00</h2>
                                </div>
                                <div class="text">
                                    <h2>Limited edition American Pale Ale</h2>
                                    <p>
                                        The wasted pit viper plans an escape from a rolling rock
                                        near a mating ritual the stein beyond the power drill
                                        drink. When you see the paternal Long Trail Ale.
                                    </p>
                                </div>
                                <div class="link">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="movable-products">
                            <div class="image">
                                <img src="{{ asset('images/inner_3_bottles_horizontal_02.jpg') }}" alt="BOTTLE" />
                            </div>
                            <div class="description-product">
                                <div class="price">
                                    <h2>€18.00</h2>
                                </div>
                                <div class="text">
                                    <h2>Limited edition Golden Summer Ale</h2>
                                    <p>
                                        A knowingly gratifying bar stool shares a shower with
                                        another dude. Another tattered miller ruminates, but a
                                        slyly dry steam engine pours freezing cool booze.
                                    </p>
                                </div>
                                <div class="link">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-arrow">
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('inc.paralax-no3')

@endsection
