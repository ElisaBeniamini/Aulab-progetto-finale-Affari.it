<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
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
                    <div class="form-outline form-white mb-4">
                        <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                        <label class="form-label" for="typeEmailX">Email</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX">Password</label>
                    </div>

                    <button class=" gradient-custom btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>