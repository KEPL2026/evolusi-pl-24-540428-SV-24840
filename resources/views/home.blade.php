{{-- File: resources/views/home.blade.php --}}
@extends('layouts.app')

@section('content')

<section class="hero-section">
    <div class="container hero-container">
        <div class="hero-text">
            <h1>Pamper Your Mind, Body, and Soul</h1>
            <p>Temukan ketenangan dan kemewahan dalam setiap sentuhan perawatan kami. Didedikasikan untuk meremajakan diri Anda dari luar dan dalam dengan layanan profesional dan suasana yang menenangkan.</p>
            <a href="services.php" class="btn">Book Appointment</a>
        </div>
        <div class="hero-image-gallery">
            <img src="{{ asset('images/home/Screenshot 2025-06-08 230610.png') }}" alt="Hairstyling">
            <img src="{{ asset('images/home/Screenshot 2025-06-08 230622.png') }}" alt="Facial mask">
            <img src="{{ asset('images/home/Screenshot 2025-06-08 230804.png') }}" alt="Manicure">
            <img src="{{ asset('images/home/Screenshot 2025-06-08 230555.png') }}" alt="Eyelash">
            <img src="{{ asset('images/home/Screenshot 2025-06-08 230704.png') }}" alt="Body massage">
            <img src="{{ asset('images/home/Screenshot 2025-06-08 230741.png') }}" alt="Relaxing face">
        </div>
    </div>
</section>

<section class="features-section">
    <div class="container">
        <div class="section-header">
            <h2>Special Feature</h2>
        </div>
        <div class="features-grid">
            @forelse($features as $feature)
                <div class="feature-box">
                    <img src="{{ asset($feature->url_gambar_layanan ?? 'images/placeholder.png') }}" alt="{{ $feature->nama_layanan }}" class="feature-icon">
                    <h3>{{ $feature->nama_layanan }}</h3>
                </div>
            @empty
                <p>Fitur unggulan akan segera hadir.</p>
            @endforelse
        </div>
    </div>
</section>

<section class="feedback-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Customer Feedback</h2>
        </div>
        
        @forelse ($feedback as $item)
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    {{ $i <= $item->rating ? '★' : '☆' }}
                                @endfor
                            </div>
                            @if (!empty($item->komentar))
                                <p class="testimonial-quote">"{{ $item->komentar }}"</p>
                            @endif
                            <div class="customer-profile">
                                <span class="customer-name">{{ $item->nama_pengguna }}</span>
                            </div>
                            <p class="reviewed-service">
                                Ulasan untuk layanan: <strong>{{ $item->daftar_layanan }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        @empty
            <p style="text-align: center;">Belum ada testimoni untuk ditampilkan.</p>
        @endforelse
    </div>
</section>
@endsection