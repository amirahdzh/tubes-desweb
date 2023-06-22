<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GameHub | </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
  @include('partials.navbar')
  <div class="container">
    <!-- Header -->
    <div class="header">
      <img src="{{ asset('img/'.$game->image) }}" alt="{{ $game->name }}" class="game-image">
      <h2 class="game-name">{{ $game->name }}</h2>
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-8">
          <!-- Top Up Container -->
          <div class="row mb-4">
            @yield('topup')

            <!-- Deskripsi Game Container -->
            <div class="row mb-4">
              @yield('desc')
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row mb-4">
            @yield('paymentmethod')
          </div>
          <!-- Form Pembelian Container -->
          <div class="row mb-4">
            @yield('form')
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>
  <script>
    function selectPaymentMethod(paymentMethod) {
        document.getElementById('summaryPaymentMethod').textContent = paymentMethod;
    }
    function selectTopUp(nominal, price) {
        document.getElementById('selectedNominal').value = nominal;
        document.getElementById('selectedPrice').value = price;
        document.getElementById('summaryPrice').innerText = price.toLocaleString('en-ID');
        document.getElementById('summaryNominal').innerHTML = nominal + ' {{ $game->currency }}';
    }
    function validateForm() {
        var email = document.getElementById('email').value;

        if (email === '') {
            alert('Field Email harus diisi');
            return false;
        }

        return true;
    }

    function showInvoice(nominal, price, paymentMethod) {
        var selectedNominal = document.getElementById('selectedNominal');
        var selectedPrice = document.getElementById('selectedPrice');
        var summaryNominal = document.getElementById('summaryNominal');
        var summaryPrice = document.getElementById('summaryPrice');
        var summaryPaymentMethod = document.getElementById('summaryPaymentMethod');

        selectedNominal.value = nominal;
        selectedPrice.value = price;
        summaryNominal.innerText = nominal + ' {{ $game->currency }}';
        summaryPrice.innerText = price;
        summaryPaymentMethod.innerText = paymentMethod;

        // Tampilkan invoice atau lakukan tindakan lain sesuai kebutuhan
        // Misalnya, munculkan modal dengan detail invoice
        // atau redirect pengguna ke halaman invoice
    }
  </script>
</body>

</html>