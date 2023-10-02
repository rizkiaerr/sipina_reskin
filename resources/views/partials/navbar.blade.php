        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="m-0"><img class="img-responsive logo" src="{{ asset('img/sipinaicon.png') }}" alt="Logo">SIPINA</h1>

                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        @If($active=='home')
                        <a href="/#resi" class="nav-item nav-link">Cek Resi</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="/#overview" class="nav-item nav-link">Overview</a>
                        <a href="/#testimonial" class="nav-item nav-link">FAQ</a>
                        <a href="/#contact" class="nav-item nav-link">Contact</a>
                        @endif
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pelayanan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/posts"><i class="bi bi-list-check"></i> Semua</a></li>
                                    <li><a class="dropdown-item" href="/categories"><i class="bi bi-megaphone-fill"></i> Pengumuman</a></li>
                                    <li><a class="dropdown-item" href="/book/create"><i class="bi bi-book-fill"></i> Daftar Kunjungan Online</a></li>
                                    {{-- <li><a class="dropdown-item" href="/book/create"><i class="bi bi-bag-fill"></i> Daftar Titipan Online</a></li> --}}
                                </ul>
                            </li>
                        @endauth
                    </div>
                    @auth
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="/logout" method="get">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout </button>
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        @else
                            {{-- <a href="/book/create" class="nav-item nav-link btn btn-light rounded-pill py-2 px-4 ms-3">Daftar</a> --}}
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pelayanan Kami
                                        </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/posts"><i class="bi bi-list-check"></i> Semua</a></li>
                                        <li><a class="dropdown-item" href="/categories"><i class="bi bi-megaphone-fill"></i> Pengumuman</a></li>
                                        <li><a class="dropdown-item" href="/book/create"><i class="bi bi-book-fill"></i> Daftar Kunjungan</a></li>
                                        {{-- <li><a class="dropdown-item" href="/book/create_titipan"><i class="bi bi-bag-fill"></i> Daftar Titipan</a></li> --}}
                                    </ul>
                                </li>
                            </ul>
                        @endauth
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
