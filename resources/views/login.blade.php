@extends('layouts.auth')

@section('title', 'Login | AKSARA DEPMIPATEK')

@section('content')

<div class="login">
    <form id="login-form" data-redirect="{{ route('dashboard') }}" novalidate>
        <h1>Sistem Autentikasi Akmil</h1>

        <div class="login__alert" id="login-alert" role="alert" hidden>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
            <span id="login-alert-text"></span>
        </div>

        <div class="login__field">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" autocomplete="username" aria-describedby="username-error" required>
            <p class="login__error" id="username-error" hidden>Username wajib diisi.</p>
        </div>

        <div class="login__field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="current-password" aria-describedby="password-error" required>
            <p class="login__error" id="password-error" hidden>Password wajib diisi.</p>
        </div>

        <button type="submit">Sign In</button>
    </form>
</div>

@endsection