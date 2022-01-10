<div class="single-post reveal">
    <div class="image">
        <img src="{{ asset('storage/' . $product->filename) }}" alt="Product">
    </div>
    <div class="text">
        <div class="price">
            <h2>{{ $product->price }}€ </h2>
        </div>
        <div class="name">
            <p style="font-weight: bold">{{ $product->name }}</p>
        </div>
        <div class="country">
            <p style="color: #464646">{{ $product->country }}</p>
        </div>
        <div class="desc" style="margin-bottom: 0.5em">
            <p style="word-break: break-all">{{ $product->text }}</p>
        </div>

    </div>
    <div class="link"><a href="#">Add to cart</a></div>
    @auth
        @if (auth()->user()->is_admin == 1)
            <div class="footer-icons">
                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit"><i class="fas fa-trash"></i></button>
                </form>
                <a href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
            </div>
        @endif
    @endauth
</div>
