<x-layout>
    <x-navbar />

    <div class="row">
        <h1 class="display-2">{{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}</h1>
    </div>

    @if($announcement_to_check)
    <div class="container">
        <div class="it-carousel-wrapper it-carousel-landscape-abstract-three-cols splide" data-bs-carousel-splide>
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="it-single-slide-wrapper">
                            <div class="card-wrapper">
                                <div class="card card-img no-after">
                                    <div class="img-responsive-wrapper">
                                        <div class="img-responsive">
                                            <div class="img-wrapper">
                                                <img src="https://via.placeholder.com/480x360/ebebeb/808080/?text=Immagine1" title="titolo immagine" alt="descrizione immagine">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-3 px-md-4">
                                        <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</h5>
                                        <a class="read-more" href="#">
                                            <span class="text">Leggi di più <span class="visually-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span></span>
                                            <svg class="icon">
                                                <use href="/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Add more carousel slides here -->
                </ul>
            </div>
        </div>
        <!-- Add carousel controls here -->
    </div>
    @endif

    <h5 class="card-title">Titolo: {{ $announcement_to_check->title }}</h5>
    <p class="card-text">Descrizione: {{ $announcement_to_check->body }}</p>
    <p class="card-footer">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>

    <div class="col-12 col-md-6">
        <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-success shadow">Accetta</button>
        </form>
    </div>

    <div class="col-12 col-md-6 text-end sa">
        <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
        </form>
    </div>
</x-layout>
