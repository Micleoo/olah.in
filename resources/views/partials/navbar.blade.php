<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Olah.in" style="height: 25px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title ?? '' === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title ?? '' === 'Kursus' ? 'active' : '' }}" href="/Kursus">Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title ?? '' === 'Marketplace' ? 'active' : '' }}" href="/Marketplace">Market
                        Place</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a href="/Keranjang" class="nav-link {{ $title ?? '' === 'Keranjang' ? 'active' : '' }}">
                        <i class="bi bi-cart"></i>
                    </a>
                    <div class="dropdown-menu">
    <nav class="col-lg-9">
        <h5 class="text-dark font-weight-bold mb-3">Keranjang</h5>
        <hr class="hr-line">
        <ul class="list-unstyled d-flex flex-column gap-2">
            @foreach ($keranjang ?? [] as $item)
            <li>
                <a href="#" class="btn d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                    <img src="{{ asset('storage/' . $item->product->foto_produk) }}" width="40" height="40"
                        alt="{{ $item->product->nama_produk }}">
                    <div>
                        <span class="fw-bold">{{ $item->product->nama_produk }}</span><br>
                        <span>Jumlah: {{ $item->jumlah }}</span><br>
                        <span class="text-muted">Harga: {{ $item->product->harga }}</span>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
    <div class="col-lg-auto pe-3">
        <nav>
            <ul class="d-flex flex-column gap-3 list-unstyled small">
                <li><a href="{{ route('keranjang.index') }}" class="link-offset-2">Lihat Keranjang</a></li>
            </ul>
        </nav>
    </div>
</div>

                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li>
                                <form action="/" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item ms-auto">
                        <a href="/Login" class="nav-link {{ $title ?? '' === 'Login' ? 'active' : '' }}"><i
                                class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link {{ $title ?? '' === 'Sign-up' ? 'active' : '' }}" href="/Sign-up">Sign-up</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
