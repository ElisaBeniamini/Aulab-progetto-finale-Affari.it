<x-layout>
    <x-navbar />
    <!-- Header homepage -->
    <header>
        <img width="100%" src="\img\wepik-export-20231019192724xBK2.png" style="max-width:100%; height:auto;" alt="Donna Shopping">
    </header>
    <!--Start Section homepage -->
    <section class="container mb-5">
        <div class="row mt-5 ">
            <div class="col-12 text-center">
                <h1>Entra nel mondo di Presto.it! <br>
                    Ti aspettano milioni di Offerte!
                </h1>
                <a class="btn btn-outline-primary btn-inserisci-annuncio" href="{{ route('announcement.index') }}"> Vedi
                    tutti gli
                    Annunci
                </a>
                <h2 class="mt-5"> Le Categorie piu Visitate della settimana</h2>
            </div>
        </div>


        <div class="row my-3">
            <div class="col-6  position-relative">
                <img width="100%" src="\img\informatica-carousel.jpg" style="max-width:100%; height:auto;" class="img-fluid" alt="">
                <h1 style="position: absolute; top:240px; right:50px; color:rgba(255, 255, 255, 0.761) ">
                    Esplora la categoria Informatica

                </h1>
            </div>
            <div class="col-6  position-relative">
                <img width="100%" src="\img\mobili-carousel.jpg" style="max-width:100%; height:auto;" class="img-fluid" alt="">
                <h1 style="position: absolute; top:240px; right:80px; color:rgba(255, 255, 255, 0.761) ">
                    Esplora la categoria Mobili
                </h1>

            </div>
        </div>

        <div class="row my-3">
            <div class="col-6  position-relative">
                <img width="100%" src="\img\motori-homepage.jpg" style="max-width:100%; height:auto;" class="img-fluid" alt="">
                <h1 style="position: absolute; top:240px; right:80px; color:rgba(255, 255, 255, 0.852) ">
                    Esplora la categoria Motori
                </h1>

            </div>
            <div class="col-6  position-relative">
                <img width="100%" src="\img\Category-Game.jpg" style="max-width:100%; height:auto;" class="img-fluid" alt="">
                <h1 style="position: absolute; top:240px; right:80px; color:rgba(255, 255, 255, 0.761) ">
                    Esplora la categoria Giochi
                </h1>

            </div>
        </div>
    </section>
    <!--End Section homepage -->



   







   
   
   
   
    <!--START SEZIONE INFORMATICA-->
    <section>
        <div class="container-fluid px-5 my-5">
            <div class="row d-flex justify-content-center">
                <div class="containerHomepageSectionCategory">
                    <div class="d-flex align-items-center">
                        <div>
                            <i class="bi bi-laptop fs-1 ms-2"></i>
                        </div>
                        <div>
                            <h4 class="title-contaiener-overflow m-0 ps-2">
                                INFORMATICA
                            </h4>
                        </div>
                    </div>
                    <div class="container-overflow-homepage mb-4">
                        <div class="content-overflow-homepage">
                            <div class="d-flex">
                                @foreach($itOnly as $item)
                                <!--START-CARD-->
                                <a class="link-card" href="">
                                    <div class="containerCard px-2 py-3">
                                        <div>
                                            <img class="img-card px-0 card-over-flow" src="/macchina-uno.avif" alt="">
                                        </div>
                                        <div class="cardBody mt-3">
                                            <div>
                                                <h6 class="title-card">
                                                    {{ $item->title }}
                                                </h6>
                                            </div>
                                            <div>
                                                <h6 class="price-card">
                                                    {{ $item->price }} €
                                                </h6>
                                            </div>
                                            <div>
                                                <h6 class="price-card">
                                                    {{ $item->category->name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--END-CARD-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END SEZIONE INFORMATICA-->

    <!--START SEZIONE MOTORI-->
    <section>
        <div class="container-fluid px-5 my-5">
            <div class="row d-flex justify-content-center">
                <div class="containerHomepageSectionCategory">
                    <div class="d-flex align-items-center">
                        <div>
                            <i class="bi bi-car-front fs-1"></i>
                        </div>
                        <div>
                            <h4 class="title-contaiener-overflow m-0 ps-2">
                                MOTORI
                            </h4>
                        </div>
                    </div>
                    <div class="container-overflow-homepage mb-4">
                        <div class="content-overflow-homepage">
                            <div class="d-flex">
                                @foreach($motorsOnly as $item)
                                <!--START-CARD-->
                                <a class="link-card" href="">
                                    <div class="containerCard px-2 py-3">
                                        <div>
                                            <img class="img-card px-0 card-over-flow" src="/macchina-uno.avif" alt="">
                                        </div>
                                        <div class="cardBody mt-3">
                                            <div>
                                                <h6 class="title-card">
                                                    {{ $item->title }}
                                                </h6>
                                            </div>
                                            <div>
                                                <h6 class="price-card">
                                                    {{ $item->price }} €
                                                </h6>
                                            </div>
                                            <div>
                                                <h6 class="price-card">
                                                    {{ $item->category->name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--END-CARD-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END SEZIONE MOTORI-->

    <!--START SEZIONE TELEFONO < DI 600€-->
    <section>
        <div class="container-fluid px-5 my-5">
            <div class="row d-flex justify-content-center">
                <div class="containerHomepageSectionCategory">
                    <div class="d-flex align-items-center">
                        <div>
                            <i class="bi bi-phone fs-1"></i>
                        </div>
                        <div>
                            <h4 class="title-contaiener-overflow m-0 ps-1">
                                UNA SELEZIONE DI SMARTPHONE A PREZZI PIÙ BASSI
                            </h4>
                        </div>
                    </div>
                    <div class="container-overflow-homepage mb-4">
                        <div class="content-overflow-homepage">
                            <div class="d-flex">
                                @foreach($smartphoneMinors as $item)
                                <!--START-CARD-->
                                <a class="link-card" href="">
                                    <div class="containerCard px-2 py-3">
                                        <div>
                                            <img class="img-card px-0 card-over-flow" src="/macchina-uno.avif" alt="">
                                        </div>
                                        <div class="cardBody mt-3">
                                            <div>
                                                <h6 class="title-card">
                                                    {{ $item->title }}
                                                </h6>
                                            </div>
                                            <div>
                                                <h6 class="price-card">
                                                    {{ $item->price }} €
                                                </h6>
                                            </div>
                                            <div>
                                                <h6 class="price-card">
                                                    {{ $item->category->name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--END-CARD-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END SEZIONE TELEFONO < DI 600€-->




    <x-footer />
</x-layout>