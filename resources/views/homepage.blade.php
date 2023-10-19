<x-layout>
    <x-navbar />
    <!-- Header homepage -->

    <header>
        <img width="100%" src="/img/img-header.jpg" style="max-width:100%; height:auto;" alt="Donna Shopping">
    </header>


    <!-- START Carousel-0 Category-2-->
    <section>
        <h1 class="text-muted h1-carousel-category">Informatica</h1>
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 d-flex justify-content-center">
                                    @foreach ($announcements->take(3) as $announcement)
                                    @if ($announcement->category_id = 2)
                                    <div class="card mx-5" style="width: 18rem;">
                                        <img class="card-img-top" src="\img\informatica-carousel.jpg" alt="Card image cap">
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
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 d-flex justify-content-center">
                                    @foreach ($announcements->slice(3, 3) as $announcement)
                                    @if ($announcement->category_id = 2)
                                    <div class="card mx-5" style="width: 18rem;">
                                        <img class="card-img-top" src="\img\informatica-carousel.jpg" alt="Card image cap">
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
                                                    <div>
                                                        <h6 class="price-card">
                                                            Categoria - {{ $announcement->category->name }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
    </section>
    <!-- END Carousel-0 Category-2-->

    <a class="btn btn-outline-primary btn-inserisci-annuncio" href="{{ route('announcement.index') }}"> Vedi tutti gli
        Annunci
    </a>


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

    <x-footer />

    <!--SCRIPT-->
    <script>
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
</x-layout>