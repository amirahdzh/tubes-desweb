@extends('layouts.detail')

@section('topup')
@foreach ($paymentMethods as $pm)
<div class="col-md-4">
    
    <div class="card" onclick="selectTopUp({{ $pm->name }})">
        <!-- Card content -->
        <h4 class="card-title">{{ $pm->name }}</h4>
        <img src="{{ $paymentMethod->image }}" alt="{{ $paymentMethod->name }}" class="card-img">
        <p class="card-price">Rp. {{ number_format($topUp->price, 0, ',', '.') }}</p>
        <button class="buy-button">Beli</button>
    </div>
    

</div>
@endforeach
<!-- ... Add more cards as needed -->
</div>
@endsection

@section('desc')
<div class="col">
    <h3 class="container-title">Deskripsi Game</h3>
    <p class="game-description">{!! $game->description !!}</p>
</div>
@endsection

@section('form')
<div class="col">
    <!-- Form content -->
    @if ($game->form === "ID Server")
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">ID</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Server</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
        </div>
        <button type="submit" class="btn btn-primary">Beli</button>
    </form>
    @elseif ($game->form === "ID")
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">ID</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
        </div>
        <button type="submit" class="btn btn-primary">Beli</button>
    </form>
    @elseif ($game->form === "Email")
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Email</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
        </div>
        <button type="submit" class="btn btn-primary">Beli</button>
    </form>
    @endif
</div>
@endsection
