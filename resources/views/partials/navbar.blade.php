<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/Logo.png') }}" alt="GameHub" class="nav-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Memberikan margin kanan dan kiri secara horizontal -->
                <li class="nav-item ">
                    <a class="nav-link me-4" href="/top-up">Top Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="/voucher">Voucher</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success rounded-pill" type="submit">Search</button>
        </form>
    </div>
</nav>