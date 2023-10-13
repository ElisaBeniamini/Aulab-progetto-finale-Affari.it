<x-layout>
    <x-navbar />
    <section class="pb-5">
        <div class="container-fluid mt-3 pt-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div>
                        <h2 class="title-register">
                            Iscriviti su PRESTO.IT
                        </h2>
                        <p class="paragraf-register pt-3">
                            Ricevi tutti i vantaggi di un epoca digitale più che mai<br>
                            scopri di più solla nostra piattaforma...
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 px-5">
                    <form action="{{route('register')}}" method="POST" class="mt-4">

                        @csrf
                        @method('POST')

                        <!-- Inserisci Name input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerEmail">Nome</label>
                            <input type="text" id="name" name="name" class="form-control input-register" />
                        </div>

                        <!-- Insersci Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerEmail">Email</label>
                            <input type="email" id="registerEmail" name="email" class="form-control input-register" />
                        </div>

                        <!-- Inserisci Password input -->
                        <div class="form-outline mb-4 input-password-register">
                            <label class="form-label" for="registerPassword">Password</label>
                            <input type="password" id="registerPassword" name="password" class="form-control input-register" placeholder="Password minimo 8 caratteri" />
                        </div>

                        <!-- Conferma Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerRepeatPassword">Conferma password</label>
                            <input type="password" id="registerRepeatPassword" name="password_confirmation" class="form-control input-register" />
                        </div>

                        <!-- Submit button Registrati-->
                        <a href="{{route('homepage')}}">
                            <button type="submit" class="btn custom-purple-button btn-block mt-4 btn-register">Registrati</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layout>