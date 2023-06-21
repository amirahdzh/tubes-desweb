@extends('layouts.main')

@section('container')

<div class="container">
    <h1>List of Games</h1>

    <div class="row">
        @foreach($games as $game)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('path/to/images/'.$game->image) }}" class="card-img-top" alt="{{ $game->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->name }}</h5>
                    <p class="card-text">{{ $game->description }}</p>
                    <a href="{{ route('games.show', $game->slug) }}" class="btn btn-primary">View Details</a>
                    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection