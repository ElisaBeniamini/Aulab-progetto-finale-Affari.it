<x-layout>
    <x-navbar />
    <!-- Header homepage -->

    <header>
        <img width="100%" src="\img\img-header.jpg" style="max-width:100%; height:auto;" alt="Donna Shopping">
    </header>


    <section>
        <div class="container my-3">
            @foreach ($categories as $category)
                <h1 class="mx-3">{{ $category->name }}</h1>
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel-{{ $category->id }}" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            @foreach ($category->announcements as $announcement)
                                <!-- -- $category->announcementMaxN(10) as $announcement --ho pensato: se questo carousel è a scorrimento infinito non serve il limite di annunci da mostrare. Ho commentato anche la parte inerente (sul Model: Category.php) -->
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <!--Start Card-->
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/img/img-show-3.webp" class="img-fluid">
                                            </div>

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
                                                            Categoria - {{ $announcement->category->name }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img class="img-pubblicataDa"
                                                                src="/img/img-pubblicatada.jpeg" alt="">
                                                        </div>
                                                        <div class="ps-2">
                                                            <h6 class="title-user-card m-0">
                                                                Pubblicato da {{ $announcement->user->name ?? '' }}
                                                                il {{ $announcement->created_at->format('d/m/y') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Card-->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev  w-aut" href="#recipeCarousel-{{ $category->id }}"
                            role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next  w-aut" href="#recipeCarousel-{{ $category->id }}"
                            role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        </a>
                    </div>
            @endforeach
        </div>



    </section>








    <a class="btn btn-outline-primary btn-inserisci-annuncio" href="{{ route('announcement.index') }}"> Vedi tutti gli
        Annunci</a>









    <x-footer />
</x-layout>
