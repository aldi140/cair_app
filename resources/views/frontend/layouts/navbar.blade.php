<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark align-items-center">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo-dark.png') }}" alt=""
                height="26"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i data-feather="menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto" id="mySidenav">
                <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item {{ Request::is('tentang-kami') ? 'active' : '' }}">
                    <a href="/tentang-kami" class="nav-link">Tentang Kami</a>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)" class="nav-link align-items-center" id="produkDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        BPKB Kendaraan
                        <i class="bi bi-chevron-down ms-1" id="dropdown-icon"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="produkDropdown">
                        <li>
                            <a class=" nav-item dropdown-item fw-bold f-14 mb-0 {{ Request::routeIs('bpkb-mobil') ? 'active' : '' }}"
                                href="{{ route('bpkb-mobil') }}">
                                Dana Gadai BPKB Mobil
                                <span class="d-block dropdown-text text-muted f-12 fw-normal mb-0">Pendanaan dengan
                                    jaminan mobil</span>
                            </a>
                        </li>
                        <li>
                            <a class=" nav-item dropdown-item fw-bold f-14 mb-0 {{ Request::routeIs('bpkb-motor') ? 'active' : '' }}"
                                href="{{ route('bpkb-motor') }}">
                                Dana Gadai BPKB Motor
                                <span class="d-block dropdown-text text-muted f-12 fw-normal mb-0">Pendanaan dengan
                                    jaminan motor</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item {{ Request::routeIs('properti') ? 'active' : '' }}">
                    <a href="{{ route('properti') }}" class="nav-link">Properti</a>
                </li>
                <li class="nav-item {{ Request::routeIs('sertifikasi') ? 'active' : '' }}">
                    <a href="{{ route('sertifikasi') }}" class="nav-link">Sertifikasi</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
