<div class="contact-post">
    <div class="one-row">
        <div class="name-column">
            <p>{{ $contact->name }}</p>
        </div>
        <div class="email-column">
            <p>{{ $contact->email }}</p>
        </div>
        <div class="message-column">
            <p>{{ $contact->message }}</p>
        </div>
        <div class="delete-column">
            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <button class="del-btn" type="submit" name="submit"><i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>
</div>
