<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="./index.html">
                <img src="{{ asset('assets/img/tabler2.svg') }}" class="header-brand-img"
                    alt="tabler logo" />
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                    <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary"
                        target="_blank">Sertifikasi BNSP : Tugas II</a>
                </div>

                <div class="dropdown">
                    <a href="./profile.html" class="nav-link pr-0 leading-none">
                        <span class="avatar"
                            style="
                        background-image: url(./assets/img/fikrifahmiamin.jpeg);
                      "></span>
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">Fikri Fahmi Amin</span>
                            <small class="text-muted d-block mt-1">Web Developer</small>
                        </span>
                    </a>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0 text-center" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="/" @class(['nav-link', 'active' => request()->routeIs('/.*')])><i class="fa-solid fa-house"></i>
                            Dashboard</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="{{ route('kategori.index') }}" @class(['nav-link', 'active' => request()->routeIs('kategori.*')])><i class="fa-solid fa-layer-group"></i> Kategori
                            Buku</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buku.index') }}" @class(['nav-link', 'active' => request()->routeIs('buku.*')])><i class="fa-solid fa-book"></i> Buku</a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/index.html" class="nav-link"><i class="fa-solid fa-user-gear mr-2"></i>
                            Manajemen
                            Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
