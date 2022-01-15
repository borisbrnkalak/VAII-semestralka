    <a href="#parallax" class="scrollup" id="scroll-up">
        <i class="fas fa-arrow-up scrollup-icon"></i>
    </a>
    @guest
        <div class="modal hidden">
            <button class="btn--close-modal">&times;</button>
            <div class="react-btn" id="login-react">
            </div>
        </div>
    @endguest

    {{-- <div class="register modal hidden">
        <button class="btn--close-modal">&times;</button>
        <h1>REGISTER</h1>
        <div class="err reg" disabled>
            <p></p>
        </div>
        <form action="{{ route('register') }}" method="POST" class="modal__form reg">
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
            <input name="name" type="text" class="fullname" placeholder="Full name">
            <input name="email" type="text" class="username" placeholder="Username(email)">
            <input name="password" type="password" placeholder="password atleast(6 chars)" class="password">
            <input name="password_confirmation" type="password" placeholder="confirm-password" class="confirm-password">
            <input type="text" class="error-message-register" value="" disabled>
            <button type="submit" name="register-btn" class='btn'>Done</button>
        </form>

    </div> --}}

    <div class="overlay hidden"></div>
