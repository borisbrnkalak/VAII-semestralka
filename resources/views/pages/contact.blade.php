@extends('layouts.master')

@section('title')
    CONTACT
@endsection

@section('content')

<div id="parallax" class="paralax" style="background-image: url('{{ asset("images/hero_inner_blog.jpg") }}')">
  
  @include('inc.menu-transparent')

  <div class="paralax container">
    <div class="paralax-text">
      <p>Who are we</p>
      <h1 style="
              font-family: 'Roboto Condensed';
              font-weight: 800;
              font-size: 3.1em;
            ">
        GET IN TOUCH<br />
        WITH US
      </h1>
      <span>Brewing is our life, beer is our water so don’t waste time
        drinking<br />
        all kind of other things which won’t make your life better.
      </span>
    </div>
  </div>
</div>


<div class="white">
  <div class="containerr">
    <div class="formular-wrapper reveal">
      <div class="formular-text">
        <h1>Get in touch</h1>
        <p>
          Leverage agile frameworks to provide a robust synopsis for high
          level overviews. Iterative approaches to corporate strategy foster
          collaborative thinking to further the overall value proposition
          organically.
        </p>
      </div>
      <div class="formular-element">
        <form action="services/contact-data.php" method="POST" class="formular">
          <div class="contact-info">
            <p>
              <?php/* echo $_SESSION['contact-result']*/ ?>
            </p>
          </div>
          <div class="inputs">
            <input type="email" name="email" placeholder="YOUR EMAIL" value="<?php /*echo isset($_COOKIE['is-logged']) ?  $user->getMail() : ""*/ ?>" />
            <input type="text" name="name" placeholder="YOUR NAME" value="<?php /*echo isset($_COOKIE['is-logged']) ?  $user->getFullName() : "" */?>" />
          </div>

          <textarea name="message" rows="10" placeholder="MESSAGE"></textarea>

          <button type="submit" name="submit">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>
  @include('inc.paralax-no3')
  
@endsection


