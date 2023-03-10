<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Masyarakat") ? "active" : "" }}" href="/">Masyarakat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Barang") ? "active" : "" }}" href="/barang">Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Lelang") ? "active" : "" }}" href="/lelang">Lelang</a>
        </li>
        </ul>
    </div>
    </div>
</nav>
