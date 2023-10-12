<x-layout>
    <x-navbar />


    <div class="row text-center">
        <div class="col-12">
            <h1>Presto.it</h1>
            <h5 class="fw-bold">I nostri annunci</h5>
        </div>
        <div class="row">
            @foreach ($announcements as $announcement)
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card-container">
                                <div class="card">
                                    <img src="https://m.media-amazon.com/images/I/61ubg48TFnS._AC_UY780_.jpg"
                                        class="card-img-top" alt="Immagine 1">
                                    <div class="card-text">
                                        <h5>{{ $announcement->title }}</h5>
                                        <p>{{ $announcement->description }}</p>
                                        <p>{{ $announcement->price }}</p>
                                        <p>Categoria {{ $announcement->category->title }} </p>
                                        <p>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}
                                        </p>
                                    </div>
                                    <a href="#">Dettagli</a>

                                </div>
            @endforeach
        </div>


    </div>


</x-layout>
