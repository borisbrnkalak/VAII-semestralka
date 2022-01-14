@extends('layouts.master')

@section('title')
    EDIT-PRODUCT
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
                    PRODUCT EDIT
                </h1>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="containerr">

            <div class="err-prod">
                <p style="white-space: pre"></p>
            </div>
            <form action="{{ route('products.update', $product->id) }}" method="POST" class="edit-feedback product"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="first-row">
                    <input type="text" name="price" class="form_price" placeholder="Price"
                        value="{{ old('price', $product->price) }}">
                    <input type="text" name="name" class="form_name" placeholder="Name"
                        value="{{ old('name', $product->name) }}">
                </div>

                <div class="second-row">
                    <input type="text" name="country" class="form_country" placeholder="Country"
                        value="{{ old('country', $product->country) }}">
                </div>

                <textarea name="text" minlength="10" maxlength="75" class="form_text"
                    placeholder="Description">{{ old('text', $product->text) }}</textarea>
                <button type="submit" name="submit">SUBMIT</button>
            </form>
        </div>
    </div>


    @include('inc.paralax-no3')

@endsection
