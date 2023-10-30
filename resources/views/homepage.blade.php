<x-layout>
    <x-navbar />

    <section class="section-one">
        <div class="container-fluid">
            <div class="row">
                @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4 d-flex justify-content-center py-2">
                    <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                        <div class="card">
                            <img class="img-card" height="300" width="400" src="{{ !$announcement->images->isEmpty() ? $announcement->images->first()->getUrl(400, 300) : asset('img/default-image.jpg') }}" {{-- $announcement->images()->first()->getUrl(400, 300)  per il resize --}}>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $announcement->title }}
                                </h5>
                                <p class="card-text">
                                    {{ $announcement->price }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


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
                                            <img class="img-card" height="300" width="400" src="{{ !$announcement->images->isEmpty() ? $announcement->images->first()->getUrl(400, 300) : asset('img/default-image.jpg') }}" {{-- $announcement->images()->first()->getUrl(400, 300)  per il resize --}}>
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
                                            <img class="img-card" src="{{ !$announcement->images->isEmpty() ? $announcement->images->first()->getUrl(400, 300) : asset('img/default-image.jpg') }}" {{-- $announcement->images()->first()->getUrl(400, 300)  per il resize --}}>
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
                                            <img class="img-card" src="{{ !$announcement->images->isEmpty() ? $announcement->images->first()->getUrl(400, 300) : asset('img/default-image.jpg') }}" {{-- $announcement->images()->first()->getUrl(400, 300)  per il resize --}}>
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