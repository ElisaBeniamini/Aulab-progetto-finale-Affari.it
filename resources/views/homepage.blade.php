<x-layout>
    <x-navbar />
    <!-- Header homepage -->
    <header>
        <img class="img-fluid" src="\img\img-header.jpg" style="width: 100%; height: 50%;" alt="shopping">
    </header>





    <a class="btn btn-outline-primary btn-inserisci-annuncio" href="{{ route('announcement.index') }}"> Vedi tutti gli
        Annunci</a>






    <!-- Section index 6 annunci -->
    <div class="gridCard my-5 px-2" id="grid">
        @foreach ($announcementes as $announcement)
            <div>
                <a class="link-card" href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                    <div class="containerCard px-3 py-3">
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
                </a>
            </div>
        @endforeach
    </div>
    </section>










    <x-footer />
</x-layout>
