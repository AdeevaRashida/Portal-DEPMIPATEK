@extends('layouts.app')

@section('title', 'Tentang Depmipatek')

@section('content')

    <section class="hero hero--page" style="background-image: url('{{ asset('images/hero-depmipatek.png') }}');">
        <div class="container">
            <h1 class="hero__title">DEPMIPATEK</h1>
            <span class="hero__rule"></span>
            <p class="hero__subtitle">Departemen Matematika, IPA, dan Teknologi</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="about">
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
                    <p>
                        Depmipatek terletak di Magelang, tepatnya di Jl. Gatot Subroto 1. Di
                        bidang operasional pendidikan, Depmipatek mengampu mata pelajaran Prodi
                        Teknik Mesin Pertahanan, Prodi Teknik Elektro Pertahanan, dan Ilmu Dasar
                        Matematika Ilmu Pengetahuan Alam.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--tight" style="clamp(32px, 7vw, 56px);">
        <div class="container">
            <h2 class="section-heading">VISI</h2>
            <p class="visi-text">
                Mewujudkan Program Studi Teknik Mesin Pertahanan, Teknik Elektronika Pertahanan
                dan Ilmu Dasar Matematika Ilmu Pengetahuan Alam sebagai Center of Excellence
                yang dapat menghasilkan Perwira lulusan Akmil yang profesional di bidang
                tugasnya, memiliki keunggulan di bidang Teknik Mesin, Teknik Elektronika dan
                Pengetahuan Ilmu Dasar Matematika Ilmu Pengetahuan Alam, yang kompetitif,
                handal maupun mampu beradaptasi terhadap perkembangan teknologi serta dicintai
                dan mencintai rakyat.
            </p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="container-misi">
            <h2 class="section-heading">MISI</h2>

            <div class="misi-slider" data-misi-slider>
                <div class="misi-track-wrap">
                    <div class="misi-track" data-misi-track>
                        @foreach($misi->chunk(2) as $pair)
                            <div class="misi-slide">
                                @foreach($pair as $item)
                                    <div class="misi-item">
                                        <span class="misi-item__number">{{ $item['number'] }}</span>
                                        <p>{{ $item['text'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="misi-controls">
                    <button type="button" class="misi-arrow" data-misi-prev aria-label="Sebelumnya">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <div class="misi-dots" data-misi-dots></div>

                    <button type="button" class="misi-arrow" data-misi-next aria-label="Berikutnya">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--tight">
        <div class="container">
            <h2 class="section-heading">Struktur Organisasi</h2>
            <figure class="struktur-figure">
                <img src="{{ asset('images/struktur-organisasi.png') }}" alt="Struktur Organisasi Depmipatek">
                <!-- <figcaption>Bagan struktur organisasi Departemen Matematika, IPA, dan Teknologi</figcaption> -->
            </figure>
        </div>
    </section>

    <section class="section section--tight">
        <div class="container">
            <h2 class="section-heading">Program Studi Depmipatek</h2>

            <div class="prodi-grid">
                <div class="prodi-card">
                    <h3 class="prodi-card__title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                        Teknik Elektro Pertahanan
                    </h3>
                    <ul>
                        <li>Rangkaian Listrik</li>
                        <li>Jaringan, Antena dan Telekomunikasi</li>
                        <li>Teknik Digital</li>
                        <li>Sistem Kontrol</li>
                        <li>Aerodinamika dan Propulsi</li>
                        <li>Sistem Mikrokontroler</li>
                        <li>Operational Amplifier</li>
                    </ul>
                </div>

                <div class="prodi-card">
                    <h3 class="prodi-card__title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L19.5 9h-4L21 15h-4.5L22 21H2l5.5-6H3l5.5-6h-4L12 2z"></path>
                        </svg>
                        Ilmu Dasar MIPA
                    </h3>
                    <ul>
                        <li>Matematika</li>
                        <li>Balistika</li>
                        <li>Statistika</li>
                        <li>Fisika Terapan</li>
                        <li>Kimia Handak</li>
                        <li>Pengetahuan Dasar Cyber</li>
                        <li>Teknologi Informasi</li>
                    </ul>
                </div>

                <div class="prodi-card">
                    <h3 class="prodi-card__title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.6 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.6a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                        Teknik Mesin Pertahanan
                    </h3>
                    <ul>
                        <li>Menggambar Teknik</li>
                        <li>Bahan Teknik</li>
                        <li>Termodinamika</li>
                        <li>Mekatronika</li>
                        <li>Elemen Mesin</li>
                        <li>Motor Bakar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--tight">
        <div class="container-lab">
            <h2 class="section-heading">Fasilitas Laboratorium</h2>

            <div class="lab-grid">
                <div class="lab-card">
                    <h3>Lab. Teknik Elektro Pertahanan</h3>
                    <p class="lab-lead">Sebagai sarana dan prasarana praktikum:</p>
                    <ol>
                        <li>Rangkaian Listrik</li>
                        <li>Jaringan, Antena dan Telekomunikasi</li>
                        <li>Teknik Digital</li>
                        <li>Sistem Kontrol</li>
                        <li>Aerodinamika dan Propulsi</li>
                        <li>Sistem Mikrokontroler</li>
                        <li>Operational Amplifier</li>
                    </ol>
                </div>

                <div class="lab-card">
                    <h3>Lab. MIPA</h3>
                    <p class="lab-lead">Sebagai sarana dan prasarana praktikum:</p>
                    <ol>
                        <li>Fisika Terapan</li>
                        <li>Kimia Handak</li>
                        <li>Pengetahuan Dasar Cyber dan Teknologi Informasi</li>
                    </ol>
                </div>

                <div class="lab-card">
                    <h3>Lab. Teknik Mesin Pertahanan</h3>
                    <p class="lab-lead">Sebagai sarana dan prasarana praktikum:</p>
                    <ol>
                        <li>Menggambar Teknik</li>
                        <li>Bahan Teknik</li>
                        <li>Motor Bakar</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

@endsection