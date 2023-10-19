<x-layout>
    <x-navbar />
    <!-- Header homepage -->

    <header>
        <img width="100%" src="/img/img-header.jpg" style="max-width:100%; height:auto;" alt="Donna Shopping">
    </header>


    <!-- START Carousel-0 Category-1-->
    <section>
        <h1 class="text-muted h1-carousel-category">Categoria-1</h1>

        <div class="container-fluid">
            <div class="row">

                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 d-flex justify-content-center">
                                    @foreach ($announcements->take(4) as $announcement)
                                        <div class="card mx-5" style="width: 18rem;">
                                            <img class="card-img-top" src="\img\informatica-carousel.jpg"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <div class="cardBody">
                                                    <div>
                                                        <h6 class="title-card">
                                                            {{ $announcement->title }}
                                                        </h6>
                                                    </div>
                                                    <div>
                                                        <h6 class="price-card">
                                                            {{ $announcement->price }} €
                                                        </h6>
                                                    </div>
                                                    <div>
                                                        <h6 class="price-card">
                                                            {{ $announcement->category->name }}
                                                        </h6>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 d-flex justify-content-center">
                                    @foreach ($announcements->slice(4, 4) as $announcement)
                                        <div class="card mx-5" style="width: 18rem;">
                                            <img class="card-img-top" src="\img\informatica-carousel.jpg"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <div class="cardBody">
                                                    <div>
                                                        <h6 class="title-card">
                                                            {{ $announcement->title }}
                                                        </h6>
                                                    </div>
                                                    <div>
                                                        <h6 class="price-card">
                                                            {{ $announcement->price }} €
                                                        </h6>
                                                    </div>
                                                    <div>
                                                        <h6 class="price-card">
                                                            {{ $announcement->category->name }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
    </section>
    <!-- END Carousel-0 Category-1-->










    <a class="btn btn-outline-primary btn-inserisci-annuncio" href="{{ route('announcement.index') }}"> Vedi tutti gli
        Annunci</a>









    <x-footer />
</x-layout>
