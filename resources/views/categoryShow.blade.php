<x-layout>
    <x-navbar />
    <!--START-TITOLO-CATEGORIA-->
    <main class="darkLight">
        <!--END-TITOLO-CATEGORIA-->
        <a class="btn btn-outline-primary btn-inserisci-annuncio m-4 mb-3 fs-5" href="{{ URL::previous() }}">
            <i class="bi bi-caret-left"> </i>
            Back
        </a>
        <!--START-CARD-->
        <section>
            <div class="container-fluid">
                <div class="row px-3">
                    @foreach ($category->announcements->where('is_accepted', true) as $announcement)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                            <div>
                                <a class="link-card"
                                    href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                                    <div class="containerCard px-3 py-4">
                                        <div class="containerImgCard">
                                            <img class="img-card"
                                                src="{{ !$announcement->images()->get()->isEmpty()? Storage::url($announcement->images()->first()->path): '\img\default-image.jpg' }}"
                                                alt="">
                                        </div>
                                        <div class="cardBody mt-3">
                                            <div>
                                                <h6 class="title-card lightZone">
                                                    {{ $announcement->title }}
                                                </h6>
                                            </div>
                                            <div>
                                                <h6 class="price-card lightZone">
                                                    {{ $announcement->price }} €
                                                </h6>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img class="img-pubblicataDa" id="borderLd"
                                                            src="/img/img-pubblicatada.jpeg" alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="title-user-card m-0 lightZone">
                                                            Pubblicato da {{ $announcement->user->name ?? '' }} <br>
                                                            Il {{ $announcement->created_at->format('d/m/y') }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--END-CARD-->

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
    <!--START-MESSAGGIO-NEL CASO NON ESISTA PRODOTTO-->

    <!--
    <div class="col-12 col-md-6 mt-5 text-center">
        <h1 class="text-danger">Non sono persenti annunci per la categoria {{ $category->name }}</h1>
        <h2 class="mt-5">Aggiungi subito un'annuncio!</h2>
        <a class="btn btn-outline-primary fs-4  text-decoration-none" href="{{ route('announcement.create') }}">
            Crea Nuovo Annuncio
        </a>
    </div> -->


    <!--END-MESSAGGIO-NEL CASO NON ESISTA PRODOTTO-->

    <!--FOOTER-->
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
