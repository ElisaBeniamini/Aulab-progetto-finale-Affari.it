<x-layout>
    <x-navbar />

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card-container">
                    <div class="card">
                        <img src="https://m.media-amazon.com/images/I/61ubg48TFnS._AC_UY780_.jpg" class="card-img-top"
                            alt="Immagine 1">
                        <div class="card-text">
                            <h5>{{ $announcement->title }}</h5>
                            <p>{{ $announcement->description }}</p>
                            <p>{{ $announcement->price }}</p>
                            <p> {{ $announcement->$category->name }}</p>
                            <p>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}</p>
                        </div>
                        <a href="{{ route('announcement.show') }}">Dettagli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>







</x-layout>
