<x-layout>
    <x-navTwo />

    <!--Start Card Announcement -->
    <section class="section-index">
        <div class="container pe-3 ps-3 my-5 containerElettrodomesticiHome">
            <div class="row">
                <h2 class="text-center">{{ __('ui.h2-tutti-gli-annunci') }}</h2>
            </div>
            <div class="row ">
                @forelse ($announcements as $announcement)
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex justify-content-center px-1">
                        <!--CARD-->
                        <a class="linkShow" href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                            <div class="cardBox my-4">
                                <img class="img-card-official"
                                    src="{{ !$announcement->images->isEmpty() ? $announcement->images->first()->getUrl(215, 230) : asset('img/default-image.jpg') }}"
                                    {{-- $announcement->images()->first()->getUrl(400, 300)  per il resize --}}>
                                <div class="corpoCard pt-4 px-3 pb-1 bg-light">
                                    <p class="prezzoCard">
                                        {{ $announcement->price }} €
                                    </p>
                                    <h5 class="titoloCard mt-3">
                                        {{ $announcement->title }}
                                    </h5>
                                    <h6 class="pubblicatoCard mb-0">
                                        Pubblicato da {{ $announcement->user->name ?? '' }} <br>
                                        Il {{ $announcement->created_at->format('d/m/y') }}
                                    </h6>
                                </div>
                            </div>
                        </a>
                        <!--CARD-->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Card Announcement -->

    <!--PULSANTE-TORNA-SU-->
    <span onclick="tornaSu()">
        <div class="btnVaiSu" id="btnSu">
            <i class="bi bi-arrow-up-short fs-3 m-0 p-0 text-center"></i>
            <p class="m-0 paragrafovaiSu text-center">Top</p>
        </div>
    </span>
    <!--PULSANTE-TORNA-SU-->
    <x-footer />
</x-layout>
