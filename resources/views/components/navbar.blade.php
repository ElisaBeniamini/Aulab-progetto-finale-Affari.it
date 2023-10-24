<!--START-NAVBAR-PRINCIPALE-->
<header>
    <div class="navBarPersonale d-flex justify-content-between">
        <div class="container-logo">
            <a class="navbar-brand logo" href="{{ route('homepage') }}">
                <img class="imgLogo" src="/Logo Presto.png" alt="Logo">
            </a>
        </div>
        <!-- Start div Bandierine  IT-ES-ENG-->
        <div>
            <x-_locale lang='it' nation='it' />
        </div>
        <div>
            <x-_locale lang='en' nation='gb' />
        </div>
        <div>
            <x-_locale lang='es' nation='es' />
        </div>
        <!-- End div Bandierine  IT-ES-ENG-->
        <div class="container-input-search">
            <!--START BARRA DI RICERCA-->
            <div>
                <form class="d-flex position-relative" role="search" action="{{ route('announcement.search') }}"
                    method="GET">
                    <input class="form-control me-2 input-search" type="search" name="searched"
                        placeholder="  {{ __('ui.ricerca') }}" aria-label="Search">
                    <button class="btn btn-search position-absolute end-0" type="submit">
                        <i class="bi bi-search text-light fs-5"></i>
                    </button>
                </form>
            </div>
            <!--END BARRA DI RICERCA-->
        </div>
        <div class="container-account">
            <!--Start Se utente non è registrato fai vedere questo form-->
            @guest
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" fill="#7069bc"
                        class="btn bi bi-person-fill pe-3" type="image" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                </div>
                <!--End Se utente non è registrato fai vedere questo form-->

                <!--START button inserisci annuncio-->
            @else
                <div class="px-1">
                    <button class="btnInserisciAnnuncio">
                        <a href="{{ route('announcement.create') }}">
                            <p class="text-light m-0">
                                {{ __('ui.inserisci-annuncio') }}
                            </p>

                        </a>
                    </button>

                </div>
                @if (Auth::user()->is_revisor)
                    <a class="revisore btn btn-outline-primary btn-inserisci-annuncio btn-sm position-relative"
                        aria-current="page" href="{{ route('revisor.index') }}">
                        {{ __('ui.zona-revisore') }}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ App\Models\Announcement::toBeRevisionedCount() }}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                @endif
                <!--END button inserisci annuncio-->
                <div class="container-btn-drop">
                    <div class="dropdown px-1">
                        <button class="btn dropdown-toggle btn-logout d-flex  align-items-center fs-5" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="messaggio m-0"> {{ __('ui.ciao') }} {{ Auth::user()->name }}</p>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/logout"
                                        onclick="event.preventDefault();getElementById('form-logout').submit()">
                                        <div class="d-flex  align-items-center border-bottom">
                                            <i class="bi bi-box-arrow-right ps-1 fs-5"></i>
                                            <p class="title-logout m-0">
                                                Logout
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <form id="form-logout" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                </form>
                            </ul>
                        </button>
                    </div>
                </div>
            @endguest
            <!--END - Senno se utente è registrato fai vedere nome + logout-->
        </div>
    </div>
</header>
<!--END-NAVBAR-PRINCIPALE-->

<!--START SOTTO NAVBAR LINK CATEGORIE-->
<nav class="navbar navbar-expand-lg nav-two-show-category py-0">
    <div class="container-fluid justify-content-end darkLight py-1">
        <button class="navbar-toggler my-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center rounded" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($categories as $category)
                    <li class="nav-item px-3 py-1">
                        <a class="nav-link py-1" href="{{ route('categoryShow', compact('category')) }}">
                            <p class="m-0 darkLight">
                                {{ $category->name }}
                            </p>
                        </a>
                    </li>
                @endforeach
                <a class="revisore btn btn-outline-primary btn-inserisci-annuncio btn-sm"
                    href="{{ route('announcement.index') }}">
                    {{ __('ui.btn-tutti-gli-annunci') }}</a>
            </ul>
        </div>
    </div>

</nav>
<!--END SOTTO NAVBAR LINK CATEGORIE-->

<!--START CANVAS PER LOGIN E REGISTRAZIONE-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-3">
        <div class="text-center">
            <h4 class="title-login-canvas">
                Login
            </h4>
        </div>
        <div class="tab-content">
            <div class="tab-pane show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    @method('POST')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-outline form-white mb-4 mt-2 pt-3">
                        <label class="form-label" for="typeEmailX">Email</label>
                        <input type="email" name="email" id="typeEmailX"
                            class="form-control form-control-lg input-email-password-canvas" />
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX">Password</label>
                        <input type="password" name="password" id="typePasswordX"
                            class="form-control form-control-lg input-email-password-canvas" />
                    </div>
                    <button class="gradient-custom btn btn-login-canvas px-5" type="submit">
                        Login
                    </button>
                </form>
            </div>
            <div class="mt-5">
                <p class="text-center">
                    {{ __('ui.non-hai-ancora-account') }}
                </p>
                <a href="{{ route('register') }}">
                    <button class="gradient-custom btn btn-register-canvas px-5" type="submit">
                        {{ __('ui.registrati') }}
                    </button>
                </a>
            </div>
        </div>
    </div>
    <!--end Se utente non è registrato fai vedere questo form-->
</div>
<!--END CANVAS PER LOGIN E REGISTRAZIONE-->
