@extends('layouts.detail')

@section('topup')
<div class="col-md-4">
    @foreach ($topUps as $topUp)
    <div class="card">
        <!-- Card content -->
        <h4 class="card-title">{{ $topUp->nominal }}</h4>
        <p class="card-price">{{ $topUp->price }}</p>
        <button class="buy-button">Beli</button>
    </div>
    @endforeach

</div>
<!-- ... Add more cards as needed -->
</div>
@endsection

@section('desc')
<div class="col">
    <h3 class="container-title">Deskripsi Game</h3>
    <p class="game-description">{{ $game->description }}</p>
</div>
@endsection

@section('form')
<div class="col">
    <h3 class="container-title">Form Pembelian</h3>
    <!-- Form content -->
</div>
@endsection

@section('summary')
<div class="col">
    <h3 class="container-title">Ringkasan Pembelian</h3>
    <!-- Summary content -->
</div>
@endsection