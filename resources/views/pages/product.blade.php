@extends('layouts.master')

@section('title')
    PRODUCT
@endsection

@section('content')

    <div id="parallax" class="paralax"
        style="background-image: url('{{ asset('images/hero_inner_beer_06.jpg') }}')">
        @include('inc.menu-transparent')

        <div class="paralax container">
            <div class="paralax-text">
                <p>Our best offer</p>
                <h1>WE OFFER ONLY THE BEST DRINKS</h1>
                <a href="#">VIEW MORE</a>
            </div>
        </div>
    </div>

    <div class="white">
        <div class="containerr">
            <div class="product-review">

                @foreach ($products as $product)
                    @include('items.product-item', compact('product'))
                @endforeach

            </div>

            @auth
                @if (auth()->user()->is_admin == 1)
                    <div class="addProduct reveal">
                        <h1>Add new product</h1>
                        <div class="err-prod">
                            <p style="white-space: pre"></p>
                        </div>
                        <form action="{{ route('products.store') }}" method="POST" class="new-product"
                            enctype="multipart/form-data">
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
                            <div class="first-row">
                                <input type="text" name="price" class="form_price" placeholder="Price">
                                <input type="text" name="name" class="form_name" placeholder="Name">
                            </div>

                            <div class="second-row">
                                <input type="text" name="country" class="form_country" placeholder="Country">
                                <input type="file" name="image" class="form_image">
                            </div>

                            <textarea name="text" minlength="10" maxlength="75" class="form_text"
                                placeholder="Description"></textarea>
                            <button type="submit" name="submit">SUBMIT</button>
                        </form>
                    </div>
                @endif
            @endauth

        </div>
    </div>

    @include('inc.paralax-no3')

@endsection
