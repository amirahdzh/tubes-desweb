@extends('layouts.detail')

@section('topup')
@foreach ($topUps as $topUp)
<div class="col-md-4">
    <div class="card" onclick="selectTopUp({{ $topUp->nominal }}, {{ $topUp->price }})">
        <!-- Card content -->
        <h4 class="card-title">{{ $topUp->nominal }} {{ $game->currency }}</h4>
        <p class="card-price">Rp. {{ number_format($topUp->price, 0, ',', '.') }}</p>
        <button class="buy-button">Beli</button>
    </div>
</div>
@endforeach
@endsection

@section('desc')
<div class="col">
    <h3 class="container-title">Deskripsi Game</h3>
    <p class="game-description">{!! $game->description !!}</p>
</div>
@endsection

@section('paymentmethod')
@foreach ($paymentMethods as $pm)
<div class="col-md-6">
    <div class="card" onclick="selectPaymentMethod('{{ $pm->name }}')">
        <!-- Card content -->
        <h6 class="card-title">{{ $pm->name }}</h6>
        <button class="buy-button">Beli</button>
    </div>
</div>
@endforeach
@endsection

@section('form')
<div class="col">
    <!-- Form content -->
    <form action="{{ route('invoice', ['slug' => $game->slug, 'token' => Str::random(8)]) }}" method="POST" onsubmit="return validateForm()">
        @csrf
        @if ($game->form === "ID Server")
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="mb-3">
            <label for="server" class="form-label">Server</label>
            <input type="text" class="form-control" id="server" name="server">
        </div>
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <input type="hidden" id="selectedPayment" name="selectedPayment">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
            <p>Metode Pembayaran: <span id="summaryPaymentMethod"></span></p>
        </div>
        @elseif ($game->form === "ID")
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <input type="hidden" id="selectedPayment" name="selectedPayment">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
            <p>Metode Pembayaran: <span id="summaryPaymentMethod"></span></p>
        </div>
        @elseif ($game->form === "Email")
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <input type="hidden" name="topup_id" value="{{ $topUp->id }}">
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <input type="hidden" id="selectedPayment" name="selectedPayment">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
            <p>Metode Pembayaran: <span id="summaryPaymentMethod"></span></p>
        </div>
        @endif
        <button type="submit" class="btn btn-primary">Beli Sekarang</button>
    </form>
</div>
@endsection