<footer class="footer">

    <div class="footer-container">

        <div class="footer-brand">

            <div class="footer-logo">
                <img src="{{ asset('images/tomoro-icon.png') }}" alt="TOMORO COFFEE" class="footer-logo-img">
                <span>TOMORO</span>
            </div>

            <p>
                Good coffee, good moments.
                Discover the TOMORO COFFEE experience.
            </p>

        </div>

        <div class="footer-column">

            <h4>Explore</h4>

            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>

        </div>

        <div class="footer-column">

            <h4>Contact</h4>

            <p>908 Nicanor Reyes St., Sampaloc, Manila</p>
            <p>tomorocoffee.ph@gmail.com</p>
            <p>+63 900 000 0000</p>

        </div>

        <div class="footer-column">

            <h4>Follow Us</h4>

            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">TikTok</a>

        </div>

    </div>

    <div class="footer-bottom">

        <p>
            © {{ date('Y') }} TOMORO COFFEE. All rights reserved.
        </p>

        <p>
            Company Profile Website
        </p>

    </div>

</footer>