<x-layout>
    <x-navbar />

    <!-- <div class="container-fuid">
        <div class="row">
            <div class="col-12 col-md-12 text-center mt-5">
                <h1>Annuncio {{ $announcement->title }}</h1>
            </div>
        </div>
    </div> -->


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
                            <img class="img-show" src="/img/img-show.webp" alt="" id="container-img-small">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
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
                                Pubblicato da {{ $announcement->user->name ?? '' }}
                                il {{ $announcement->created_at->format('d/m/y') }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    </script>

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