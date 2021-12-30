@extends('layouts.master')

@section('title')
    OUR-TEAM
@endsection

@section('content')

  <div id="parallax" class="paralax" style="background-image: url('{{ asset("images/Our-team/hero_inner_team.jpg") }}')">

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
        <img src="{{ asset("images/transparent_team_1.png") }}" alt="LEADER" />
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
          <img src="{{ asset("images/signature_01.png") }}" alt="SIGNATURE" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="white">
  <div class="containerrr">
    <div class="team">
      <div class="human reveal">
        <div class="text">
          <h3>Justin Vernon</h3>
          <p>
            Agile leverage frameworks to provide a robust synopsis for high
            level overviews. Iterative approaches to corporate strategy
            foster collaborative thinking to further the overall value
            proposition.
          </p>
          <div class="link">
            <a href="#">VIEW MORE</a>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="image">
          <img src="{{ asset("images/team_1.jpg") }}" alt="TEAM" />
        </div>
      </div>

      <div class="human reveal">
        <div class="text">
          <h3>Aaron Kowalski</h3>
          <p>
            Bring to the table win-win survival strategies to ensure
            proactive domination. At the end of the day, going forward, a
            new normal that has evolved from generation x is on the runway
            heading towards.
          </p>
          <div class="link">
            <a href="#">VIEW MORE</a>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="image">
          <img src="{{ asset("images/team_2.jpg") }}" alt="TEAM" />
        </div>
      </div>

      <div class="human">
        <div class="human reveal">
          <div class="text">
            <h3>Vanessa Vernon</h3>
            <p>
              Collaboratively administrate empowered markets via
              plug-and-play networks. Dynamically procrastinate B2c users
              after installed base benefits. Dramatically visualize customer
              directed convergence.
            </p>
            <div class="link">
              <a href="#">VIEW MORE</a>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>

          <div class="image">
            <img src="{{ asset("images/team_3.jpg") }}" alt="TEAM" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @include('inc.paralax-no3')
  
@endsection





