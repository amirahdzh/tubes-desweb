@extends('layouts.main')

@section('breadcrumb')
<li class="breadcrumb-item active">{{ $title }}</li>
@endsection

@section('container')
<div class="row">
    @foreach($games as $game)
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('path/to/images/'.$game->image) }}" class="card-img-top" alt="{{ $game->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $game->name }}</h5>
                <p class="card-text">{{ $game->description }}</p>
                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection