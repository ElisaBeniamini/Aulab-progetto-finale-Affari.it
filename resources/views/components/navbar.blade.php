<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="Logo Presto.png" alt="Logo" width="200"></a>

        <div class="d-flex justify-content-end align-items-center">
            <a class="btn btn-outline-primary" href="{{ route('announcement.create') }}">Inserisci annuncio</a>
            <div class="messaggio">Bentornato, Username <br> Logout</div>
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
                    href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
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

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                    checked />
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>
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

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4 custom-checkbox-container">
                        <input class="form-check-input me-2 custom-checkbox" type="checkbox" value=""
                            id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn custom-purple-button btn-block mb-4">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
