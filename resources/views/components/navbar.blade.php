<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="/Logo Presto.png" alt="Logo" width="200"></a>

        <div class="d-flex justify-content-end align-items-center">
            <a class="btn btn-outline-primary" href="{{ route('announcement.create') }}">Inserisci annuncio</a>
            <div class="messaggio">Bentornato, Username <br> Logout</div>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="#7069bc" class="btn bi bi-person-fill" type="image"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg> 
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
            <li class="nav-item px-1" role="presentation">
                <a class="nav-link active custom-purple-button" id="tab-login" data-mdb-toggle="pill"
                    href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item px-1" role="presentation">
                <a class="btn btn-outline-primary" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
        <div class="tab-pane show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="loginName" class="form-control" />
                        <label class="form-label" for="loginName">Email or username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control" />
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>

        
                    

                    <!-- Submit button -->
                    <button type="submit" class="btn custom-purple-button btn-block mb-4">Sign in</button>

                
                </form>
            </div>

            <div class="tab-pane" id="pills-register" role="tabpanel" aria-labelledby="tab-register">

                <form>
              

                   <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" class="form-control" />
                        <label class="form-label" for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control" />
                        <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn custom-purple-button btn-block mb-4">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
