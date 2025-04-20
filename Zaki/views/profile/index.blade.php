@extends('layouts.main')

@section('container')
<h2 class="profile-title my-5">Profil Personil <a class="navbar-brand brand-profile fw-bold" style="font-size: 40px;">Kafka<span style="color: #c0d9d9;">Math</span>
    </a></h2>
    <div class="profile-container mb-5">
        @foreach($profiles as $profile)
            <div class="card">
                <img src="{{ asset($profile['photo']) }}" alt="Foto {{ $profile['name'] }}" class="card-img h-100">
                <div class="card-content h-100">
                    <h3>{{ $profile['name'] }}</h3>
                    <p><strong>NPM:</strong> {{ $profile['nim'] }}</p>
                    <p><strong>Institusi:</strong> {{ $profile['institution'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
