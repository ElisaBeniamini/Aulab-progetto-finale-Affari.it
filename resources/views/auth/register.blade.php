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
                    <form action="{{ route('register') }}" method="POST" class="mt-4">
                        @csrf
                        @method('POST')

                        <!-- Inserisci Name input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerEmail">Nome</label>
                            <input type="text" id="name" name="name"
                                class="form-control input-register  @error('name') is-invalid @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Insersci Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerEmail">Email</label>
                            <input type="email" id="registerEmail" name="email"
                                class="form-control input-register @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Inserisci Password input -->
                        <div class="form-outline mb-4 input-password-register">
                            <label class="form-label" for="registerPassword">Password</label>
                            <input type="password" id="registerPassword" name="password"
                                class="form-control input-register  @error('email') is-invalid @enderror"
                                value="{{ old('password') }}" placeholder="Password minimo 8 caratteri" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Conferma Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerRepeatPassword">Conferma password</label>
                            <input type="password" id="registerRepeatPassword" name="password_confirmation"
                                class="form-control input-register  @error('password_confirmation') is-invalid @enderror"
                                value="{{ old('password_confirmation') }}" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit button Registrati-->
                        <a href="{{ route('announcement.create') }}">
                            <button type="submit"
                                class="btn custom-purple-button btn-block mt-4 btn-register">Registrati</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layout>
