<link rel="stylesheet" href="../styles/navbar.css">
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow-sm p-3 mb-5 rounded" role="navigation">
    <div class="container-lg">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="logo" height="40px"
                class="navbar-brand object-fit-contain">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-lg-0 ms-auto justify-content-end">
                <div class="navbar-nav justify-content-center mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                            href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="beasiswa">Daftar Beasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('articles*') ? 'active' : '' }}"
                            href="hasil">Hasil</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
