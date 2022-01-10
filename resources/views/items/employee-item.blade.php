<div class="human reveal">
    <div class="text">
        <h3>{{ $employee->name }}</h3>
        <p>
            {{ $employee->text }}
        </p>
        <div class="link">
            <a href="#">VIEW MORE</a>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>

                @auth
                    @if (auth()->user()->is_admin == 1)
                        <form action="{{ route('our-team.destroy', $employee->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    @endif
                @endauth


            </div>
        </div>
    </div>

    <div class="image">
        <img src="{{ asset('storage/' . $employee->filename) }}" alt="TEAM" />
    </div>
</div>
