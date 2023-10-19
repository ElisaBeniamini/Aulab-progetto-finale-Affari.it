<x-layout>
    <x-navbar />
    <!-- Header homepage -->

    <header>
        <img width="100%" src="\img\img-header.jpg" style="max-width:100%; height:auto;" alt="Donna Shopping">
    </header>


    <section>
        <!--Foreach-1 -->
        @foreach ($categories as $category)
            <div class="container-fluid mt-5">
                <div class="row">
                    <h1 class="text-muted h1-carousel-category">{{ $category->name }}</h1>
                    <div id="carouselExample-{{ $category->id }}" class="carousel slide">
                        <div class="carousel-inner">
                            <!-- Foreach 1 -->
                            @foreach ($category->announcementMaxN(15) as $announcement)
                                <div class="carousel-item active">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-md-2">
                                                <!-- start card -->
                                                <div class="containerCard px-3 py-1">
                                                    <div>
                                                        <img class="img-card" src="/img/img-show-3.webp" alt="">
                                                    </div>
                                                    <div class="cardBody mt-3">
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
                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <img class="img-pubblicataDa"
                                                                        src="/img/img-pubblicatada.jpeg" alt="">
                                                                </div>
                                                                <div class="ps-2">
                                                                    <h6 class="title-user-card m-0">
                                                                        Pubblicato da
                                                                        {{ $announcement->user->name ?? '' }}
                                                                        il
                                                                        {{ $announcement->created_at->format('d/m/y') }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Foreach 2 -->
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExample-{{ $category->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExample-{{ $category->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
            </div>
        @endforeach
    </section>









    <a class="btn btn-outline-primary btn-inserisci-annuncio" href="{{ route('announcement.index') }}"> Vedi tutti gli
        Annunci</a>









    <x-footer />
</x-layout>
