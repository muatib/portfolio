


    {{-- <div class="background-container">
        <img src="{{ asset('img/background.jpg') }}" alt="background" class="background-image">
        <div class="gradient-overlay"></div>
    </div> --}}

    <h2 class="contact-ttl">Contact</h2>

    <section class="contact-container">


        @if (session('success'))
            <div class="alert success">
                {{ session('success') }}
            </div>
        @endif

        <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" required>
                @error('subject')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                @error('message')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="submit-container">
                <img class="button-img" src="{{ asset('img/arc.png') }}" alt="image envoyer">
                <button type="submit" class="submit-btn">Envoyer</button>
            </div>
            <div class="g-recaptcha" data-sitekey="{{ config('recaptcha.site_key') }}" data-theme="dark"></div>
        </form>
    </section>



