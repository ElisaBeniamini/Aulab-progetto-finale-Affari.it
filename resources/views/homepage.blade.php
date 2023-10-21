<x-layout>
    <x-navbar />
    <!-- Header homepage -->
    <header>
        <img width="100%" src="\img\wepik-export-20231019192724xBK2.png" style="max-width:100%; height:auto;"
            alt="Donna Shopping">
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
                <img width="100%" src="\img\informatica-carousel.jpg" style="max-width:100%; height:auto;"
                    class="img-fluid" alt="">
                <h1 style="position: absolute; top:240px; right:50px; color:rgba(255, 255, 255, 0.761) ">
                    Esplora la categoria Informatica

                </h1>
            </div>
            <div class="col-6  position-relative">
                <img width="100%" src="\img\mobili-carousel.jpg" style="max-width:100%; height:auto;"
                    class="img-fluid" alt="">
                <h1 style="position: absolute; top:240px; right:80px; color:rgba(255, 255, 255, 0.761) ">
                    Esplora la categoria Mobili
                </h1>

            </div>
        </div>

        <div class="row my-3">
            <div class="col-6  position-relative">
                <img width="100%" src="\img\motori-homepage.jpg" style="max-width:100%; height:auto;"
                    class="img-fluid" alt="">
                <h1 style="position: absolute; top:240px; right:80px; color:rgba(255, 255, 255, 0.852) ">
                    Esplora la categoria Motori
                </h1>

            </div>
            <div class="col-6  position-relative">
                <img width="100%" src="\img\Category-Game.jpg" style="max-width:100%; height:auto;" class="img-fluid"
                    alt="">
                <h1 style="position: absolute; top:240px; right:80px; color:rgba(255, 255, 255, 0.761) ">
                    Esplora la categoria Giochi
                </h1>

            </div>
        </div>
    </section>
    <!--End Section homepage -->





    










    <x-footer />
</x-layout>
