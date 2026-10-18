<header class="navbar">
    <div class="container">
        <a href="{{ route('dashboard') }}" class="navbar__brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Depmipatek" class="navbar__logo">
            <span class="navbar__title">DEPMIPATEK</span>
        </a>

        <div class="navbar__profile">
            <span class="navbar__avatar">
                @if(!empty($user['photo']))
                <img src="{{ asset($user['photo']) }}" alt="Foto profil">
                @else
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <circle cx="12" cy="10" r="3"></circle>
                    <path d="M6.2 18.4a7 7 0 0 1 11.6 0"></path>
                </svg>
                @endif
            </span>
            <span class="navbar__name">{{ $user['name'] ?? 'Nama User' }}</span>
            <a href="{{ route('home') }}" class="navbar__btn">Sign Out</a>
        </div>
    </div>
</header>
