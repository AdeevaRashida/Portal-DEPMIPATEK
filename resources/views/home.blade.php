@extends('layouts.app')

@section('title', 'AKSARA DEPMIPATEK')

@section('content')

<section class="hero hero--landing" style="background-image: url('{{ asset('images/hero-landing.jpg') }}');">
    <div class="container">
        <h1 class="hero__title">AKSARA DEPMIPATEK</h1>
        <span class="hero__rule"></span>
        <p class="hero__subtitle">
            Platform terintegrasi untuk mengelola informasi dan layanan akademik bagi Taruna,
            Dosen, dan Civitas Akademika di lingkungan Akademi Militer, khususnya DEPMIPATEK.
        </p>

        <a href="{{ route('login') }}" class="btn btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            Login
        </a>

        <div class="hero__divider">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2 3 14h7l-1 8 10-12h-7z"/></svg>
            Akses Cepat
        </div>

        <div class="hero__quicklinks">
            <a href="#" class="btn btn-outline">Website Akademi</a>
            <a href="#tentang-depmipatek" class="btn btn-outline">Informasi Website</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about">
            <div class="about__body">
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
            <div class="about__media">
                <img src="{{ asset('images/tentang-aksara.jpg') }}" alt="Ilustrasi AKSARA">
            </div>
        </div>

        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                </div>
                <h3>Informasi Akademik</h3>
                <p>Jadwal kuliah, nilai, dan rekap kehadiran dalam satu tempat.</p>
            </div>

            <div class="feature-card">
                <div class="feature-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg>
                </div>
                <h3>Jadwal Kegiatan</h3>
                <p>Agenda perkuliahan dan kegiatan departemen yang selalu terkini.</p>
            </div>

            <div class="feature-card">
                <div class="feature-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-5v12L3 14v-3z"></path><path d="M11.6 16.8a2 2 0 0 1-3.4-2"></path></svg>
                </div>
                <h3>Pengumuman</h3>
                <p>Informasi resmi dari departemen tersampaikan tepat waktu.</p>
            </div>

            <div class="feature-card">
                <div class="feature-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.68 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0 1 22 16.92z"></path></svg>
                </div>
                <h3>Kontak Layanan</h3>
                <p>Hubungi bagian akademik Depmipatek dengan mudah.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section--tight" id="tentang-depmipatek">
    <div class="container">
        <div class="about about--reverse">
            <div class="about__media">
                <img src="{{ asset('images/tentang-depmipatek.jpg') }}" alt="Gedung Depmipatek">
            </div>
            <div class="about__body">
                <h2 class="section-heading">Tentang DEPMIPATEK</h2>
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

<section class="section section--tight">
    <div class="container">
        <div class="faq">
            <h2 class="faq__heading">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.5 9a2.5 2.5 0 0 1 5 0c0 1.5-2.5 2-2.5 3.5"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                Frequently Asked Questions (FAQ)
            </h2>

            <div class="faq__list">
                @foreach($faqs as $faq)
                <div class="faq__item" data-open="false">
                    <button type="button" class="faq__question">
                        <span>{{ $faq['question'] }}</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="faq__answer">
                        <p>{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="faq__footer">
                <a href="#" class="btn btn-outline">Lihat semua FAQ</a>
            </div>
        </div>
    </div>
</section>

@endsection
