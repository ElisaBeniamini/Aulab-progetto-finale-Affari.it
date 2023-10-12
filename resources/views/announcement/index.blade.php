<x-layout>
    <x-navbar />
    <div class="row text-center mt-3">
        <div class="col-12">
            <h1>Presto.it</h1>
            <h5 class="fw-bold">I nostri annunci</h5>
            <!--Start Card Announcement -->
            <div class="row">
                @foreach ($announcementes as $announcement)
                    <div class="container mt-5 my-0">
                        <div class="row">
                            <div class="col-md- ">
                                <div class="card-container">
                                    <div class="card">
                                        <img src="https://m.media-amazon.com/images/I/61ubg48TFnS._AC_UY780_.jpg"
                                            class="card-img-top" alt="Immagine 1">
                                        <div class="card-text">
                                            <h5>Titolo - {{ $announcement->title }}</h5>
                                            <p>Descrizione - {{ $announcement->description }}</p>
                                            <p>€ {{ $announcement->price }}</p>
                                            <p></p>{{ $announcement->categoy }}</p>
                                            <p>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}</p>
                                        </div>
                                        <a href="#">Dettagli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            <!--End Card Announcement -->
        </div>














        <x-footer />
</x-layout>
