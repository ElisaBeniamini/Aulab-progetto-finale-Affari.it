<header>
    <nav class="navbar navbar-expand-lg  border-bottom darkLight">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}"><img src="/Logo Presto.png" alt="Logo"
                    width="200"></a>
        </div>

        <!--Start Se utente non è registrato fai vedere questo form-->
        @guest
            <div class="d-flex me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" fill="#7069bc"
                    class="btn bi bi-person-fill pe-3" type="image" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>
            </div>
            <!--End Se utente non è registrato fai vedere questo form-->




            <!--START - Senno se utente è registrato fai vedere nome + logout-->
            <!--START button inserisci annuncio-->
        @else
            <div class="d-flex justify-content-end align-items-center me-3">
                <a class="btn btn-outline-primary btn-inserisci-annuncio" href="{{ route('announcement.create') }}">
                    Inserisci annuncio
                </a>
            </div>
            @if (Auth::user()->is_revisor)
                <a class="nav-link btn btn-outline-succes btn-sm position-relative" aria-current="page"
                    href="{{ route('revisor.index') }}">
                    Zona revisore
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ App\Models\Announcement::toBeRevisionedCount() }}
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>
            @endif
            <!--END button inserisci annuncio-->

            <div class="dropdown">
                <button class="btn dropdown-toggle btn-logout d-flex  align-items-center fs-5" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="messaggio m-0 pe-4">Ciao , {{ Auth::user()->name }}</p>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/logout"
                                onclick="event.preventDefault();getElementById('form-logout').submit()">
                                <div class="d-flex  align-items-center border-bottom">
                                    <i class="bi bi-box-arrow-right ps-1 fs-5"></i>
                                    <p class="title-logout m-0 ps-3">
                                        Esci
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
        @endguest
        <!--END - Senno se utente è registrato fai vedere nome + logout-->

    </nav>
</header>
<nav class="nav-two-show-category border-bottom darkLight">
    <ul class="list-category-nav d-flex justify-content-center align-items-center m-0 py-3">
        @foreach ($categories as $category)
            <li class="px-4">
                <a class="link-navbar-two" href="{{ route('categoryShow', compact('category')) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
<!--START CANVAS PER LOGIN E REGISTRAZIONE-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-3">
        <!-- Pills navs -->

        <div class="text-center">
            <h4 class="title-login-canvas">
                Login
            </h4>
        </div>

        <!-- Pills navs -->

        <!-- Pills content -->
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
                    Non hai un account? registrati
                </p>
                <a href="{{ route('register') }}">
                    <button class="gradient-custom btn btn-register-canvas px-5" type="submit">
                        Registrati
                    </button>
                </a>
            </div>
        </div>
        <div>
        </div>
    </div>
    <!--Se utente non è registrato fai vedere questo form-->

</div>
<!--START CANVAS PER LOGIN E REGISTRAZIONE-->
