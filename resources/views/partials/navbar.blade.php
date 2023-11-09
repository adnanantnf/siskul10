<!-- Navbar Start -->
<div class="container-fluid bg-primary">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="/" class="navbar-brand">
                <h1 class="text-white fw-bold d-block mt-1 fs-3">SMKN 1<span class="text-secondary"> PUSAKANAGARA</span> </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="/" class="nav-item nav-link mt-1 {{ ($title === "Beranda") ? 'active' : '' }}">Beranda</a>
                    <a href="/tentang" class="nav-item nav-link mt-1 {{ ($title === "Tentang") ? 'active' : '' }}">Tentang</a>
                    <a href="/ekstrakulikuler" class="nav-item nav-link mt-1 {{ ($title === "Ekstrakulikuler") ? 'active' : '' }}">Ekstrakulikuler</a>
                    <a href="/prestasi" class="nav-item nav-link mt-1 {{ ($title === "Prestasi") ? 'active' : '' }}">Prestasi</a>
               <div class="nav-item nav-link sm-me-3">
                   <a href="#" class="btn btn-outline-success">Login</a>

            </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
