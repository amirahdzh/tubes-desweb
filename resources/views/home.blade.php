@extends('layouts.main')

@section('container')

<div class="container">
    <h1>List of Games</h1>

    <div class="row">
        @foreach($games as $game)
        <div class="col-md-2 d-flex align-items-stretch my-3">
            <div class="card">
                <a href="{{ route('games.show', $game->slug) }}"><img src="{{ asset('img/'.$game->image) }}" class="card-img-top" alt="{{ $game->name }}"></a>
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $game->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection