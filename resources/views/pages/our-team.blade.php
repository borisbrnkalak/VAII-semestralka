@extends('layouts.master')

@section('title')
    OUR-TEAM
@endsection

@section('content')

    <div id="parallax" class="paralax"
        style="background-image: url('{{ asset('images/Our-team/hero_inner_team.jpg') }}')">

        @include('inc.menu-transparent')
        <div class="paralax container">
            <div class="paralax-text">
                <p>About us</p>
                <h1 style="
                                                                          font-family: 'Roboto Condensed';
                                                                          font-weight: 800;
                                                                          font-size: 3.1em;
                                                                          margin-bottom: 1em;
                                                                        ">
                    WHO WE ARE
                </h1>
                <span>Brewing is our life, beer is our water so don’t waste time drinking
                    all kind of other<br />
                    things which won’t make your life better.</span>
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
            <div class="team">
                @foreach ($employees as $employee)
                    @include('items.employee-item', compact('employee'))
                @endforeach

            </div>
            @auth
                @if (auth()->user()->is_admin == 1)
                    <div class="addEmployee">
                        <h1>Add new employee</h1>
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


                        <div class="err-empl">
                            <p style="white-space: pre;"></p>
                        </div>

                        <form action="{{ route('our-team.store') }}" class="new-employee" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="name" placeholder="Employee name" class="employee_name">
                            <textarea name="text" rows="10" placeholder="Employee description"
                                class="employee_text"></textarea>
                            <input type="file" name="image" class="employee_picture">
                            <button type="submit" name="submit-emp">SUBMIT</button>
                        </form>
                    </div>
                @endif

            @endauth


        </div>
    </div>
    @include('inc.paralax-no3')

@endsection
