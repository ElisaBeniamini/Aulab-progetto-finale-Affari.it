<x-layout>
    <x-navbar />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 text-center mt-5">
                <h1>Categoria {{ $category->name }}</h1>
            </div>
        </div>


        <div class="row  justify-content-center ">
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
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 col-md-6 mt-5 text-center">
                    <h1 class="text-danger">Non sono persenti annunci per la categoria {{ $category->name }}</h1>
                    <h2 class="mt-5">Aggiungi subito un'annuncio!</h2>
                    <a class="btn btn-outline-primary fs-4  text-decoration-none"
                        href="{{ route('announcement.create') }}">
                        Crea Nuovo Annuncio
                    </a>


                </div>
        </div>
        @endforelse
    </div>








    <x-footer />
</x-layout>
