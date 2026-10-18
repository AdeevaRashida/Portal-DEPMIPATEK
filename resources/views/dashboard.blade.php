@extends('layouts.app')

@section('title', 'Akses Layanan | AKSARA DEPMIPATEK')

@section('navbar')
    @include('partials.navbar-auth')
@endsection

@section('content')

<section class="section">
    <div class="container">
        <h1 class="section-heading">Akses Layanan DEPMIPATEK</h1>

        <div class="service-grid">
            @foreach($services as $service)
            <a href="{{ $service['url'] }}" class="service-card">{{ $service['title'] }}</a>
            @endforeach
        </div>
    </div>
</section>

@include('partials.faq')

@endsection
