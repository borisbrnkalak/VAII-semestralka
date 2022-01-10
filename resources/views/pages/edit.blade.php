@extends('layouts.master')

@section('title')
    EDIT-FEEDBACK
@endsection

@section('content')
    <div id="parallax" class="paralax"
        style="background-image: url('{{ asset('images/hero_inner_beer_02-scaled.jpg') }}')">
        @include('inc.menu-transparent')

        <div class="paralax container">
            <div class="paralax-text black-text">
                <h1 style="
                                  font-family: 'Roboto Condensed';
                                  font-weight: 800;
                                  font-size: 3.1em;
                                  margin-bottom: 1em;
                                ">
                    FEEDBACK EDIT
                </h1>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="containerr">

            <form action="{{ route('testimonials.update', $feedback->id) }}" method="POST" class="edit-feedback">
                @csrf
                @method('PUT')
                <input type="text" name="subject" placeholder="EDIT TOPIC"
                    value="{{ old('subject', $feedback->subject) }}">
                <textarea name="message" rows="10"
                    placeholder="EDIT MESSAGE">{{ old('message', $feedback->message) }}</textarea>
                <button name="edited-submit" type="submit">SUBMIT</button>
            </form>
        </div>
    </div>


    @include('inc.paralax-no3')

@endsection
