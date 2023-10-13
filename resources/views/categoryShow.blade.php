<x-layout>
    <x-navbar />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 text-center">
                <h1> Dettaglio Categoria {{ $category->name }}</h1>
            </div>
        </div>


        <div class="row">
            @forelse ($category->announcements as $announcement)
                <div class=" col-12 col-md-4 ">
                    <div class="card-container">
                        <div class="card">
                            <img src="https://m.media-amazon.com/images/I/61ubg48TFnS._AC_UY780_.jpg" class="card-img-top"
                                alt="Immagine 1">
                            <div class="card-text">
                                <h5>Titolo - {{ $announcement->title }}</h5>
                                <p>Descrizione - {{ $announcement->description }}</p>
                                <p>€ {{ $announcement->price }}</p>
                                <p>{{ $announcement->categoy }}</p>
                                <!--quando inserisco   ->name   su category  da errore null -->
                                <p>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }} - Autore
                                    :{{ $announcement->user->name ?? '' }}</p>
                            </div>
                            <!--  <a href="  //route('announcement.show') }}">Dettagli</a> -->
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 col-md-12">
                    <p>Non sono persenti annunci per questa categoria</p>
                    <p>Aggiungi subito l annuncio <a class="custom-purple-button"
                            href="{{ route('announcement.create') }}"></a></p>

                </div>
        </div>
        @endforelse
        <div class="col-12 col-md-12 text-center">




        </div>
    </div>
    </div>







    <x-footer />
</x-layout>
