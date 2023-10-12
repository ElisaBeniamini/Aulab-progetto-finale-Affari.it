<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="Logo Presto.png" alt="Logo" width="200"></a>

        <div class="d-flex justify-content-end align-items-center">
            <a class="btn btn-outline-primary" href="{{ route('announcement.create') }}">Inserisci annuncio</a>
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="btn" type="image"
                width="50" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight">
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active custom-purple-button" id="tab-login" data-mdb-toggle="pill"
                    href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Entra</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Registrati</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <div class="tab-pane show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form method="POST" action="{{ route('login') }}">
                @csrf <!-- Aggiungi il token CSRF -->
        
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus />
                    <label class="form-label" for="email">Email</label>
                </div>
        
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" required />
                    <label class="form-label" for="password">Password</label>
                </div>
        
                <!-- 2 column grid layout -->
                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember"> Ricordati di me </label>
                        </div>
                    </div>
        
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="{{ route('password.request') }}">Ho dimenticato la password</a>
                    </div>
                </div>
        
                <!-- Submit button -->
                <button type="submit" class="btn custom-purple-button btn-block mb-4">Registrazione</button>
        
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Non sei un membro? <a href="{{ route('register') }}">Registrati</a></p>
                </div>
            </form>
        </div>
@auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn">Disconnetti</button>
    </form>
@endauth
