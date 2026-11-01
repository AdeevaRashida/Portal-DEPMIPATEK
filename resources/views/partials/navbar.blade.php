<header class="navbar">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Depmipatek" class="navbar-logo">
            <span class="navbar-title">DEPMIPATEK</span>
        </a>

        <a href="{{ route('login') }}" class="navbar-login">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            <span>Login</span>
        </a>
    </div>
</header>
