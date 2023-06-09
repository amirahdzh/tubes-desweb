@extends('layouts.main')

@section('breadcrumb')
<li class="breadcrumb-item active">{{ $title }}</li>
@endsection

@section('container')
<div class="row">
    @foreach($games as $game)
    <div class="col-md-2 d-flex align-items-stretch my-3">
        <div class="card">
            <a href="{{ route('games.show', $game->slug) }}"><img src="{{ asset('img/'.$game->image) }}" class="card-img-top" alt="{{ $game->name }}"></a>
            <div class="card-body">
                <h5 class="card-title text-center">{{ $game->name }}</h5>
                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection