@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div id="parallax" class="paralax" style="background-image: url('{{ asset('images/hero_home_beer_01.jpg') }}')">

        @include('inc.menu-transparent')

        <div class="paralax container">
            <div class="paralax-text">
                <p>What we learned so far</p>
                <h1>THE BEST IDEAS EMERGE FROM THE SIMPLEST TOOLS</h1>
                <a href="#">VIEW MORE</a>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="container">
            <div class="beer-up reveal">
                <div class="image">
                    <img src="{{ asset('images/beer_transparent.png') }}" alt="BEER" />
                </div>

                <div class="text">
                    <h1>DETAILED BEER DRINKING INSTRUCTIONS</h1>
                    <div class="small-texts">
                        <section>
                            <i class="fa fa-beer" aria-hidden="true"></i>
                            <div class="content">
                                <h2>Best ingredients</h2>
                                <p>
                                    Leverage agile frameworks to provide a robust synopsis for
                                    high level overviews, iterative.
                                </p>
                            </div>
                        </section>
                        <section>
                            <i class="fas fa-beer"></i>
                            <div class="content">
                                <h2>Our process</h2>
                                <p>
                                    Corporate strategy foster collaborative thinking to further
                                    the overall value proposition.
                                </p>
                            </div>
                        </section>
                        <section>
                            <i class="fas fa-coffee"></i>
                            <div class="content">
                                <h2>Farming practices</h2>
                                <p>
                                    Organically grow the holistic world view of disruptive
                                    innovation via workplace diversity.
                                </p>
                            </div>
                        </section>
                        <section>
                            <i class="fas fa-wine-bottle"></i>
                            <div class="content">
                                <h2>Story behind</h2>
                                <p>
                                    Taking seamless key performance indicators offline to
                                    maximise the long tail keeping your eye.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-in-center-page-wrapper">
        <!-- style="background-image: url('img/hero_home_beer_01-story.jpg')" -->
        <img src="{{ asset('images/hero_home_beer_01-story.jpg') }}" class="parallax-middle" alt="" />
        <div class="containerr">
            <div class="story-in-the-beer">
                <div class="text">
                    <p>We work hard. We deliver.</p>
                    <h1>THERE IS A STORY BEHIND EVERY BEER</h1>
                    <a href="#">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="products reveal">
            <div class="containerr">
                <div class="header">
                    <h1>PRODUCT DESCRIPTIONS</h1>
                    <p>
                        We have a total irreverence for anything connected with society
                        except that which makes the roads safer and the beer stronger.
                    </p>
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

    <div class="gray">
        <div class="containerr">
            <div class="numbers reveal">
                <div class="math">
                    <i class="fas fa-balance-scale"></i>
                    <h1>1872</h1>
                    <p>BREWERY FOUNDED</p>
                </div>
                <div class="math">
                    <i class="fas fa-vial"></i>
                    <h1>100%</h1>
                    <p>CERTIFIED PROCESS</p>
                </div>
                <div class="math">
                    <i class="fas fa-wine-bottle"></i>
                    <h1>1500</h1>
                    <p>BOTTLES A DAY</p>
                </div>
                <div class="math">
                    <i class="fas fa-circle-notch"></i>
                    <h1>45%</h1>
                    <p>ONLINE SALES</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pictures">
        <div class="first-row">
            <div class="text-images">
                <div class="image">
                    <img src="{{ asset('images/ingredients_transparent_01.png') }}" alt="HOPS" />
                </div>
                <h3>Hops</h3>
                <p>
                    Craft Beer Co. put a modern<br />
                    take on classic pieces.
                </p>
                <a href="#">VIEW MORE</a>
            </div>

            <div class="full-image">
                <img src="{{ asset('images/ingredients_01.jpg') }}" alt="ING" />
            </div>

            <div class="text-images">
                <div class="image">
                    <img src="{{ asset('images/ingredients_transparent_02.png') }}" alt="Yeast" />
                </div>
                <h3>Yeast</h3>
                <p>
                    Inspiration drawn from vintage<br />
                    mountaineering.
                </p>
                <a href="#">VIEW MORE</a>
            </div>
        </div>

        <div class="second-row">
            <div class="full-image">
                <img src="{{ asset('images/ingredients_02.jpg') }}" alt="ING" />
            </div>

            <div class="text-images">
                <div class="image">
                    <img src="{{ asset('images/ingredients_transparent_03.png') }}" alt="Barley" />
                </div>
                <h3>Barley</h3>
                <p>
                    Taking seamless key performance<br />
                    from our history.
                </p>
                <a href="#">VIEW MORE</a>
            </div>

            <div class="full-image">
                <img src="{{ asset('images/ingredients_03.jpg') }}" alt="ING" />
            </div>
        </div>
    </div>

    <div class="gray">
        <div class="containerr">
            <div class="leader reveal">
                <div class="image">
                    <img src="{{ asset('images/transparent_team_1.png') }}" alt="LEADER" />
                </div>
                <div class="text">
                    <h2>
                        WE MAKE<br />
                        WHAT WE LOVE
                    </h2>
                    <h3>What we learned so far</h3>
                    <p>
                        Leverage agile frameworks to provide a robust synopsis for high
                        level overviews. Iterative approaches to corporate strategy foster
                        collaborative thinking to further the overall value proposition.
                        Organically grow the holistic world view of disruptive innovation
                        via workplace diversity and empowerment.
                    </p>
                    <span>Founder</span>
                    <div class="author">MARK COLLINS</div>

                    <div class="signature">
                        <img src="{{ asset('images/signature_01.png') }}" alt="SIGNATURE" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="containerrr">
            <div class="crew">
                <div class="header">
                    <h2>MEET THE CREW</h2>
                    <p>
                        Our guys are a knowledgeable, working hard<br />
                        and very talented people.
                    </p>
                </div>

                <div class="whole-crew">
                    <div class="specific-member reveal">
                        <div class="image">
                            <a href="#"><img src="{{ asset('images/team_2.jpg') }}" alt="CREW" /></a>
                        </div>
                        <div class="text">
                            <h3>Aaron Kowalski</h3>
                            <p>Quality Manager</p>
                            <div class="link">
                                <a href="#">VIEW MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="specific-member reveal">
                        <div class="image">
                            <a href="#"><img src="{{ asset('images/team_1.jpg') }}" alt="CREW" /></a>
                        </div>
                        <div class="text">
                            <h3>Justin Vernon</h3>
                            <p>Master Distiller</p>
                            <div class="link">
                                <a href="#">VIEW MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="specific-member reveal">
                        <div class="image">
                            <a href="#"><img src="{{ asset('images/team_3.jpg') }}" alt="CREW" /></a>
                        </div>
                        <div class="text">
                            <h3>Justin Vernon</h3>
                            <p>Cellar Operator</p>
                            <div class="link">
                                <a href="#">VIEW MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map" id="map">
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6565.39944471201!2d17.107207!3d48.144746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25d8fe21bc371af4!2sStomatologia%20Heudukova!5e1!3m2!1ssk!2ssk!4v1627660578699!5m2!1ssk!2ssk" width="2500" height="1000" style="border: 0" allowfullscreen="" loading="lazy"></iframe>-->


        <div class="melbourne">
            <img src="{{ asset('images/inner_1.jpg') }}" alt="INER" />
            <div class="text">
                <h3>
                    We’re in Melbourne,<br />
                    Australia
                </h3>
                <p>
                    Stop by, say hello,<br />
                    we are open every day<br />
                    from 2PM to 8PM.
                </p>
                <div class="link">
                    <a href="#"><i class="fas fa-map"></i>7 York St, Melbourne</a>
                    <a href="#"><i class="fas fa-hourglass-half"></i>2PM - 8PM</a>
                    <a href="#"><i class="fas fa-phone-alt"></i>+ 421 915 370 206</a>
                    <a href="#"><i class="fas fa-paper-plane"></i>borisbrnkalak@gmail.com</a>
                </div>
            </div>
        </div>
    </div>

    @include('inc.paralax-no3')

@endsection
