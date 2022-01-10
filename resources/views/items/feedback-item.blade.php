 <div class="specific reveal">
     <div class="header">
         <h3>{{ $feedback->subject }}</h3>
         <i class="fas fa-quote-right"></i>
     </div>
     <div class="text">
         <p>
             {{ $feedback->message }}
         </p>
     </div>
     <div class="footer-specific">
         <div class="footer-text">
             <h3>{{ $feedback->user->name }}</h3>
         </div>

         @auth

             @if (auth()->user()->id == $feedback->user->id || auth()->user()->is_admin == 1)
                 <div class="footer-icons">

                     <form action="{{ route('testimonials.destroy', $feedback->id) }}" method="post">
                         @csrf
                         @method("DELETE")
                         <button type="submit"><i class="fas fa-trash"></i></button>
                     </form>


                     @if (auth()->user()->id == $feedback->user->id)
                         <a href="{{ route('testimonials.edit', $feedback->id) }}"><i class="fas fa-edit"></i></a>
                     @endif

                 </div>
             @endif
         @endauth
     </div>

 </div>
