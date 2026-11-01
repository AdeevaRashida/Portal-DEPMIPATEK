@extends('layouts.app')

@section('title', 'AKSARA DEPMIPATEK')

@section('content')

<section class="hero hero-landing" style="background-image: url('{{ asset('images/hero-depmipatek.png') }}');">
    <div class="container">
        <h1 class="hero-title">AKSARA DEPMIPATEK</h1>
        <p class="hero-subtitle">
            Platform terintegrasi untuk mengelola informasi dan layanan akademik bagi Taruna,
            Dosen, dan Civitas Akademika di lingkungan Akademi Militer, khususnya DEPMIPATEK.
        </p>

        <a href="{{ route('login') }}" class="btn btn-light hero-login">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            Login
        </a>

        <div class="hero-divider">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 2 3 14h7l-1 8 10-12h-7z"></path></svg>
            Akses Cepat
        </div>

        <div class="hero-quicklinks">
            <a href="https://www.akmil.ac.id/" class="btn btn-outline" target="_blank" rel="noopener">Website Akademi</a>
            <a href="#about" class="btn btn-outline">Informasi Website</a>
        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="container">
        <div class="about">
            <div class="about-body">
                <h2 class="section-heading">Tentang AKSARA</h2>
                <p>
                    AKSARA adalah sistem yang dirancang untuk mengintegrasikan berbagai
                    layanan akademik dalam satu platform digital.
                </p>
                <p>
                    Sistem ini memudahkan Taruna, Dosen, dan Civitas Akademika dalam
                    mengakses informasi akademik secara cepat, akurat, dan terintegrasi.
                </p>
            </div>

            <div class="feature-box">
                <div class="feature-box-item">
                    <span class="feature-box-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span>Informasi akademik terintegrasi</span>
                </div>
                <div class="feature-box-item">
                    <span class="feature-box-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span>Akses mudah dan cepat</span>
                </div>
                <div class="feature-box-item">
                    <span class="feature-box-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span>Mendukung proses pendidikan yang efektif</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-heading">Alur Akses Layanan AKSARA</h2>

        <div class="flow">
            <div class="flow-step">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                <span>Masuk Dengan Akun</span>
            </div>

            <div class="flow-arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>

            <div class="flow-step">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M12 11h4"></path><path d="M12 16h4"></path><path d="M8 11h.01"></path><path d="M8 16h.01"></path></svg>
                <span>Pilih Layanan Akademik</span>
            </div>

            <div class="flow-arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>

            <div class="flow-step">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="21" y1="4" x2="14" y2="4"></line><line x1="10" y1="4" x2="3" y2="4"></line><line x1="21" y1="12" x2="12" y2="12"></line><line x1="8" y1="12" x2="3" y2="12"></line><line x1="21" y1="20" x2="16" y2="20"></line><line x1="12" y1="20" x2="3" y2="20"></line><line x1="14" y1="2" x2="14" y2="6"></line><line x1="8" y1="10" x2="8" y2="14"></line><line x1="16" y1="18" x2="16" y2="22"></line></svg>
                <span>Akses Layanan Sesuai Kebutuhan</span>
            </div>

            <div class="flow-arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>

            <div class="flow-step">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                <span>Selesaikan Keperluan Dengan Mudah</span>
            </div>
        </div>
    </div>
</section>

<section class="section" id="tentang-depmipatek">
    <div class="container">
        <h2 class="section-heading">Tentang DEPMIPATEK</h2>

        <div class="about">
            <div class="about-media">
                <img src="{{ asset('images/tentang-depmipatek.jpg') }}" alt="Gedung Depmipatek" width="799" height="477" loading="lazy">
            </div>
            <div class="about-body">
                <p>
                    Departemen Matematika Ilmu Pengetahuan Alam dan Teknologi (Depmipatek)
                    merupakan departemen di bawah Lembaga Pendidikan Akademi Militer yang
                    menyelenggarakan pendidikan di jajaran TNI AD. Depmipatek berperan dalam
                    pembinaan teknis dan akademis pendidikan, pengajaran, serta pelatihan di
                    bidang matematika, ilmu pengetahuan alam, dan teknologi.
                </p>
                <a href="{{ route('depmipatek') }}" class="btn btn-ghost-dark">Info Depmipatek</a>
            </div>
        </div>
    </div>
</section>

@include('partials.faq')

@endsection
