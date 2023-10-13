<x-layout>
    <x-navbar />

    <div class="container-fuid">
        <div class="row">
            <div class="col-12 col-md-12 text-center mt-5">
                <h1>Annuncio {{ $announcement->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">



            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/1/1200/500" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/3/1200/500" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/2/1200/500" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="text-center">
                <h1>Titolo - {{ $announcement->title }}</h1>
                <h3>Descrizione - {{ $announcement->description }}</h3>
                <h3>€ {{ $announcement->price }}</h3>
                <h3>{{ $announcement->categoy }}</p>
                    <h3>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}</h3>
            </div>


        </div>
    </div>








    <x-footer />
</x-layout>
