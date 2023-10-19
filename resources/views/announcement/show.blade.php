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
                                <div class="text-center mt-2">
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
                            {{ $announcement->description }}
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
                            <div class="mt-5">
                                <h6 class="title-user-card m-0">
                                    Contatta {{ $announcement->user->name ?? '' }}
                                </h6>
                                <a target="blank" class="mb-5" href=mailto:{{ $announcement->user->email ?? '' }}>{{ $announcement->user->email ?? '' }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--START POTREBBE INTERESSARTI-->
        <section>
            <div class="border-top bg-light">
                <h5 class="title-prodotti-correlati ps-5  m-0 pt-4">
                    Scopri altri prodotti correlati a questa categoria
                </h5>
            </div>
            <div class="container-fluid px-4 pb-4 pt-4 container-slider-img-show bg-light">
                <div class="row">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <!--START-SECTION-ONE-CAROUSEL-->
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach($consigliati as $consigliato)
                                        <div class="col-12 col-md-2 px-0">
                                            <!--START-CARD-->
                                            <a class="link-card" href="{{ route('announcement.show', ['announcement' => $consigliato]) }}">
                                                <div class="containerCard px-3 py-3">
                                                    <div>
                                                        <img class="img-card px-0" src="/img/img-show-3.webp" alt="">
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
                                        <div class="col-12 col-md-2 px-0">
                                            <!--START-CARD-->
                                            <a class="link-card" href="{{ route('announcement.show', ['announcement' =>  $consigliato]) }}">
                                                <div class="containerCard px-3 py-3">
                                                    <div>
                                                        <img class="img-card px-0" src="/img/img-show-3.webp" alt="">
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
                        <button class="carousel-control-prev justufy-content-start" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark  rounded-3 px-2 py-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark  rounded-3 px-2 py-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!--END POTREBBE INTERESSARTI-->

        <!--START SECTION PRODOTTI MINORI DI 50€-->
        <section>
            <div class="border-top bg-light">
                <h5 class="title-prodotti-correlati ps-5  m-0 pt-4 pb-5">
                    Ecco a te una selezione di articoli a basso costo
                </h5>
            </div>
            <div class="container-fluid bg-light">
                <div class="row d-flex justify-content-center">
                    <div class="container-overflow mb-5">
                        <div class="content-overflow py-2">
                            <div class="d-flex">
                                @foreach($ineferioridicianquanta as $item)
                                <!--START-CARD-->
                                <a class="link-card" href="{{ route('announcement.show', ['announcement' =>   $item]) }}">
                                    <div class="containerCard px-3 py-3">
                                        <div>
                                            <img class="img-card px-0 card-over-flow" src="/img/img-show-3.webp" alt="">
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
                                                    {{ $item->category->name }} €
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
        </section>
        <!--START SECTION PRODOTTI MINORI DI 50€-->



        <!--START CLICK IMG-SMALL-XXXL-->
        <section class="d-flex justify-content-center">
            <div class="container-fluid container-show-xxxl bg-white panel-show-xxxl" id="panelXXXL">
                <div class="row">
                    <div class="col-12 px-4">
                        <div class="d-flex justify-content-between">
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
        <!--START PANNELLO DELLE ACCESSIBILITA-->
        <div class="container-usabilità">
            <img class="iconAc" src="/icons8-accessibilità-2-50.png" onclick="openAccessibilita()" alt="">
        </div>

        <div class="container-accessibilità border" id="panelAcess">
            <div>
                <div class="d-flex justify-content-end mt-2 me-2">
                    <div>
                        <i class="bi bi-x-lg fs-5" class="closeIcon" onclick="closePanelAcess()"></i>
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="m-0 mb-3">
                        Gestisci i tuoi gusti
                    </h5>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="mx-1">
                    <button class="btn-dark-light" onclick="darkColor()">
                        <i class="bi bi-moon fs-5 paragraf-icon-dark-light"></i> <br>
                        <p class="m-0">
                            dark-zone
                        </p>
                    </button>
                </div>
                <div class="mx-1">
                    <button class="btn-dark-light" onclick="lightColor()">
                        <i class="bi bi-sun fs-5"></i> <br>
                        <p class="m-0 paragraf-icon-dark-light">
                            light-zone
                        </p>
                    </button>
                </div>
            </div>
        </div>
        <!--END PANNELLO DELLE ACCESSIBILITA-->
    </main>
    <!--END CLICK IMG-SMALL-XXXL-->



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

        //PANNELLO ACCESSIBILITA
        function openAccessibilita() {
            let x = document.getElementById("panelAcess");

            x.style.display = "block";
        }

        function closePanelAcess() {
            let y = document.getElementById("panelAcess");

            y.style.display = "none";
        }

        function darkColor() {
            let t = document.getElementsByClassName("darkLight");
            let p = document.getElementsByClassName("lightZone");

            for (let i = 0; i < t.length; i++) {
                t[i].style.backgroundColor = "#212529";
                t[i].style.transition = "0.5s";
            }


            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "#f5f5f5";
                p[i].style.transition = "0.5s";
            }

        }

        function lightColor() {
            let z = document.getElementsByClassName("darkLight");
            let o = document.getElementsByClassName("lightZone");

            for (let i = 0; i < z.length; i++) {
                z[i].style.backgroundColor = "#f5f5f5";
                z[i].style.transition = "0.5s";
            }


            for (let i = 0; i < o.length; i++) {
                o[i].style.color = "#212529";
                o[i].style.transition = "0.5s";
            }

        }
    </script>
    <!--SCRIPT PER CLICK CAMBIA IMG + ZOOM-->
</x-layout>