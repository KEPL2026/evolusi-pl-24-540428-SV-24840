{{-- File: resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nin's Salon & Spa</title>

    {{-- Link to your local CSS file --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

<header class="main-header">
    <div class="container">
        <nav class="main-nav">
            <a href="{{ url('/') }}" class="logo">NINS</a>
            <ul class="nav-links">
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="{{url('/login')}}" class="btn btn-nav">Log In</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="main-footer">
    <div class="container footer-container">
        <div class="footer-col footer-logo-area">
            <a href="{{ url('/') }}" class="logo">NINS</a>
            <p class="copyright">&copy; {{ date('Y') }} Nin's Salon & Spa. All rights reserved.</p>
        </div>
        <div class="footer-col footer-subscribe-area">
            <h3>Subscribe to the Community</h3>
            <form class="subscribe-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </div>
        <div class="footer-col footer-links-area">
            <ul class="footer-links">
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</footer>

{{-- Memanggil Aset JS dari folder public --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>