</x-layout>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form action="{{ route('register') }}" method="POST">
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
                <div class="form-outline form-white mb-4">
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="form-control form-control-lg" />
                    <label class="form-label" required>Nome utente</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="email" name="email" value="{{ old('email') }}" id="typeEmailX"
                        class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX" required>Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX" required>Password</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" name="password_confirmation" id="typePasswordX"
                        class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX">Conferma Password</label>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Ho dimenticato la password ?</a></p>

                <button class=" gradient-custom btn btn-outline-light btn-lg px-5" type="submit">Registrati</button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

        </div>

        <div>
            <p class="mb-0">Non hai un account ?<a href="{{ route('login') }}"
                    class="text-white-50 fw-bold">Login</a>
            </p>
        </div>

        </form>
    </div>
</div>
</div>
</x-layout>
