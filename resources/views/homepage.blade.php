<x-layout>
    <x-navbar />
    <!-- Header homepage -->
    <header>
        <div class="container-fluid mt-5">
            <div class="row text-center justify-content-center">
                <div class=" col-12 col-md-6 px-0">
                    <h1 class="px-0 mx-0">Presto.it - Homepage</h1>
                    <a class="btn btn-outline-primary" href="{{ route('announcement.index') }}"> Lista annunci
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Section index 6 annunci -->


    <section class="mt-5">
        <h1 class="text-center">
            Gli ultimi annunci pubblicati
        </h1>
        <div class="container-fluid mt- ">
            <div class="row">
                @foreach ($announcementes as $announcement)
                    <div class="col-12 col-md-3 py-2">
                        <div class="card-container">
                            <div class="card">
                                <img src="https://m.media-amazon.com/images/I/61ubg48TFnS._AC_UY780_.jpg"
                                    class="card-img-top" alt="Immagine 1">
                                <div class="card-text">
                                    <h5>Titolo - {{ $announcement->title }}</h5>
                                    <p>Descrizione - {{ $announcement->description }} leggi altro...</p>
                                    <p>€ {{ $announcement->price }}</p>
                                    <p></p>{{ $announcement->categoy }}</p>
                                    <p>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}</p>
                                </div>
                            </div>
                            <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                                Visualizza
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>











    <x-footer />
</x-layout>
