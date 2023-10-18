<x-layout>
    <main id="generalMain">
        <x-navbar />

        <!-- <div class="container-fuid">
        <div class="row">
            <div class="col-12 col-md-12 text-center mt-5">
                <h1>Annuncio {{ $announcement->title }}</h1>
            </div>
        </div>
       </div> -->

        <section>
            <div class="container-fluid my-5">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7 d-flex justify-content-center">
                        <div class="d-flex">
                            <div class="d-flex flex-column">
                                <div>
                                    <img class="img-piccole-show" src="/img/img-show-3.webp" alt="" onclick="cambiaOne()">
                                </div>
                                <div class="my-2">
                                    <img class="img-piccole-show" src="/img/img-show-quattro.webp" alt="" onclick="cambiaTwo()">
                                </div>
                                <div class="my-2">
                                    <img class="img-piccole-show" src="/img/img-show-cinque.webp" alt="" onclick="cambiaThree()">
                                </div>
                                <div class="my-2">
                                    <img class="img-piccole-show" src="/img/img-show.webp" alt="" onclick="cambiaFour()">
                                </div>
                            </div>
                            <div class="ps-2">
                                <div id="generalContainerImgShow" class="cic">
                                    <img class="img-show" src="/img/img-show.webp" alt="" id="container-img-small" onclick="openPanelShowxxxl()">
                                </div>
                                <div class="text-center">
                                    <p>
                                        Clicca per visualizzare a tutto schermo
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 px-5">
                        <div>
                            <h2 class="title-show">
                                {{ $announcement->title }}
                            </h2>
                        </div>
                        <div class="mt-3">
                            <h3 class="price-show">
                                {{ $announcement->price }} € iva inclusa
                            </h3>
                        </div>
                        <div class="my-3">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Descrizione
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="description-show">
                                                {{ $announcement->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img class="img-pubblicataDa" src="/img/img-pubblicatada.jpeg" alt="">
                                </div>
                                <div class="ps-2">
                                    <h6 class="title-user-card m-0">
                                        Pubblicato da {{ $announcement->user->name ?? '' }} <br>
                                        il {{ $announcement->created_at->format('d/m/y') }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--START POTREBBE INTERESSARTI-->
        <section>
            <div class="border-top">
                <h5 class="title-prodotti-correlati ps-5  m-0 py-4">
                    Scopri altri prodotti correlati a questa categoria
                </h5>
            </div>
            <div class="container-fluid px-4 pb-4 pt-4 container-slider-img-show">
                <div class="row">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <!--START-SECTION-ONE-CAROUSEL-->
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach($consigliati as $consigliato)
                                        <div class="col-12 col-md-2">
                                            <!--START-CARD-->
                                            <a class="link-card" href="{{ route('announcement.show', ['announcement' => $consigliato]) }}">
                                                <div class="containerCard px-3 py-3">
                                                    <div>
                                                        <img class="img-card" src="/img/img-show-3.webp" alt="">
                                                    </div>
                                                    <div class="cardBody mt-3">
                                                        <div>
                                                            <h6 class="title-card">
                                                                {{ $consigliato->title }}
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h6 class="price-card">
                                                                {{ $consigliato->price }} €
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h6 class="price-card">
                                                                {{ $consigliato->category->name }}
                                                            </h6>
                                                        </div>

                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <img class="img-pubblicataDa" src="/img/img-pubblicatada.jpeg" alt="">
                                                                </div>
                                                                <div class="ps-2">
                                                                    <h6 class="title-user-card m-0">
                                                                        Pubblicato da {{ $consigliato->user->name ?? '' }} <br>
                                                                        il {{ $consigliato->created_at->format('d/m/y') }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!--END-CARD-->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--END-SECTION-ONE-CAROUSEL-->

                            <!--START-SECTION-TWO-CAROUSEL-->
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach($consigliatiTwo as $consigliato)
                                        <div class="col-12 col-md-2">
                                            <!--START-CARD-->
                                            <a class="link-card" href="{{ route('announcement.show', ['announcement' =>  $consigliato]) }}">
                                                <div class="containerCard px-3 py-3">
                                                    <div>
                                                        <img class="img-card" src="/img/img-show-3.webp" alt="">
                                                    </div>
                                                    <div class="cardBody mt-3">
                                                        <div>
                                                            <h6 class="title-card">
                                                                {{ $consigliato->title }}
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h6 class="price-card">
                                                                {{ $consigliato->price }} €
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h6 class="price-card">
                                                                {{ $consigliato->category->name }}
                                                            </h6>
                                                        </div>

                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <img class="img-pubblicataDa" src="/img/img-pubblicatada.jpeg" alt="">
                                                                </div>
                                                                <div class="ps-2">
                                                                    <h6 class="title-user-card m-0">
                                                                        Pubblicato da {{ $consigliato->user->name ?? '' }}
                                                                        il {{ $consigliato->created_at->format('d/m/y') }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!--END-CARD-->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--START-SECTION-TWO-CAROUSEL-->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!--START POTREBBE INTERESSARTI-->
        <!--START CLICK IMG-SMALL-XXXL-->
        <section class="d-flex justify-content-center">
            <div class="container-fluid container-show-xxxl bg-white panel-show-xxxl" id="panelXXXL">
                <div class="row">
                    <div class="col-12 px-4">
                        <div class="d-flex justify-content-between border-bottom">
                            <div class="pt-3 ps-3">
                                <h4>
                                    {{ $announcement->title }}
                                </h4>
                            </div>
                            <div class="pt-2 pe-1">
                                <span>
                                    <i class="bi bi-x-lg fs-4 icon-close-container-xxxl" onclick="closePanelShowxxxl()"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12 col-md-9 pe-0">
                        <div>
                            <img class="img-show-small-xxxl px-4 pe-0 py-4" src="/img/img-show-3.webp" alt="" id="container-img-xxxl">
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="row">
                            <div class="text-center">
                                <p class="py-4 description-show">
                                    {{ $announcement->description }}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="px-1">
                                    <img class="img-piccole-show-xxxl border" src="/img/img-show-3.webp" alt="" onclick="cambiaUno()">
                                </div>
                                <div class="px-1">
                                    <img class="img-piccole-show-xxxl border" src="/img/img-show-quattro.webp" alt="" onclick="cambiaDue()">
                                </div>
                                <div class="px-1">
                                    <img class="img-piccole-show-xxxl border" src="/img/img-show-cinque.webp" alt="" onclick="cambiaTre()">
                                </div>
                                <div class="px-1">
                                    <img class="img-piccole-show-xxxl border" src="/img/img-show.webp" alt="" onclick="cambiaQuattro()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--END CLICK IMG-SMALL-XXXL-->

    <!--SCRIPT PER CLICK CAMBIA IMG + ZOOM-->
    <script>
        function cambiaOne() {

            document.getElementById("container-img-small").src = "/img/img-show-3.webp";
        }

        function cambiaTwo() {
            document.getElementById("container-img-small").src = "/img/img-show-quattro.webp";
        }

        function cambiaThree() {
            document.getElementById("container-img-small").src = "/img/img-show-cinque.webp";
        }

        function cambiaFour() {
            document.getElementById("container-img-small").src = "/img/img-show.webp";
        }

        const containerShow = document.getElementById("generalContainerImgShow");
        const img = document.getElementById("container-img-small");

        containerShow.addEventListener("mousemove", onZoom);
        containerShow.addEventListener("mouseover", onZoom);
        containerShow.addEventListener("mouseleave", offZoom);

        function onZoom(e) {
            const x = e.clientX - e.target.offsetLeft;
            const y = e.clientY - e.target.offsetTop;

            img.style.transformOrigin = `${x}px ${y}px`;
            img.style.transform = "scale(6)";
        }

        function offZoom(e) {
            img.style.transformOrigin = `center center`;
            img.style.transform = "scale(1)";
        }

        //ARPI PANEL SHOW-XXXL
        function openPanelShowxxxl() {
            let open = document.getElementById("panelXXXL");
            let opacityBackgroun = document.getElementById("generalMain");
            open.style.display = "block";
        }

        function closePanelShowxxxl() {
            let close = document.getElementById("panelXXXL");
            let opacityBackgroun = document.getElementById("generalMain");
            close.style.display = "none";
        }
        //CAMBIA IMG AL CLIK N.B. PANEL-SHOW-XXXL
        function cambiaUno() {

            document.getElementById("container-img-xxxl").src = "/img/img-show-3.webp";
        }

        function cambiaDue() {
            document.getElementById("container-img-xxxl").src = "/img/img-show-quattro.webp";
        }

        function cambiaTre() {
            document.getElementById("container-img-xxxl").src = "/img/img-show-cinque.webp";
        }

        function cambiaQuattro() {
            document.getElementById("container-img-xxxl").src = "/img/img-show.webp";
        }
    </script>
    <!--SCRIPT PER CLICK CAMBIA IMG + ZOOM-->

    <!-- <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Titolo - {{ $announcement->title }}</h1>
                <h3>Descrizione - {{ $announcement->description }}</h3>
                <h3>€ {{ $announcement->price }}</h3>
                <h3>{{ $announcement->categoy }}</p>
                <h3>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}</h3>
            </div>
        </div>
    </div> -->
    <x-footer />
</x-layout>