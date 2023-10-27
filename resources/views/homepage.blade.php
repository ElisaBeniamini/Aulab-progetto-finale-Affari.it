<x-layout>
    <x-navbar />
    <!-- Header homepage -->
    <header>
        <img width="100%" src="\img\wepik-export-20231019192724xBK2.png" style="max-width:100%; height:auto;"
            alt="Donna Shopping">
    </header>

    <!-- Start Card ultimi sei annunci -->
    <div class="container bg-light pt-5 px-5 rounded-4 my-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="row">
            <div id="cards_landscape_wrap-2">
                <h2 class="text-dark" style="font-weight:bold;">
                    {{ __('ui.ultimi-sei-annunci') }}
                </h2>
                <div class="row">
                    @foreach ($announcements as $announcement)
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                                <div class="card-flyer">
                                    <div class="text-box">
                                        <div class="image-box">
                                            <img class="img-card"
                                                src="{{ !$announcement->images()->get()->isEmpty()? Storage::url($announcement->images()->first()->path): '\img\default-image.jpg' }}"
                                                {{-- $announcement->images()->first()->getUrl(400, 300)  per il resize --}} class="p-3 rounded">
                                        </div>
                                        <div class="text-container p-3">
                                            <!-- Title + Category -->
                                            <div>
                                                <h5 class="text-dark">
                                                    {{ $announcement->title }} <br>
                                                    <span style="font-size: 13px" class="text-muted">
                                                        {{ $announcement->category->name }}
                                                    </span>
                                                </h5>
                                            </div>
                                            <!-- Price -->
                                            <div>
                                                <h6 class="text-dark">
                                                    € {{ $announcement->price }}
                                                </h6>
                                            </div>
                                            <hr>
                                            <!-- Pubblicato Da  -->
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img class="img-pubblicataDa" src="/img/img-pubblicatada.jpeg"
                                                            alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="title-user-card text-start">
                                                            {{ __('ui.pubblicato-da') }}
                                                            {{ $announcement->user->name ?? '' }} <br>
                                                            <p class="m-0 pt-1">
                                                                {{ __('ui.il') }}
                                                                {{ $announcement->created_at->format('d/m/y') }}
                                                            </p>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    {{--

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
                                @foreach ($itOnly->where('is_accepted', true) as $item)
                                    <!--START-CARD-->
                                    <a class="link-card" href="">
                                        <div class="containerCard px-2 py-3">
                                            <div>
                                                <img class="img-card px-0 card-over-flow"
                                                    src="{{ !$announcement->images()->get()->isEmpty()? Storage::url($announcement->images()->first()->path): '\img\default-image.jpg' }}"
                                                    alt="">
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
                                @foreach ($motorsOnly->where('is_accepted', true) as $item)
                                    <!--START-CARD-->
                                    <a class="link-card" href="">
                                        <div class="containerCard px-2 py-3">
                                            <div>
                                                <img class="img-card px-0 card-over-flow" src="/macchina-uno.avif"
                                                    alt="">
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
                                {{ __('ui.selezione-prezzi-bassi') }}
                            </h4>
                        </div>
                    </div>
                    <div class="container-overflow-homepage mb-4">
                        <div class="content-overflow-homepage">
                            <div class="d-flex">
                                @foreach ($smartphoneMinors->where('is_accepted', true) as $item)
                                    <!--START-CARD-->
                                    <a class="link-card" href="">
                                        <div class="containerCard px-2 py-3">
                                            <div>
                                                <img class="img-card px-0 card-over-flow" src="/macchina-uno.avif"
                                                    alt="">
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
    <!--END SEZIONE TELEFONO < DI 600€--> --}}


















    <x-footer />
</x-layout>
