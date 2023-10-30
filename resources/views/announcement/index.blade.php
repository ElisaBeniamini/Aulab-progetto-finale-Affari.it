<x-layout>
    <x-navbar />
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h2>{{ __('ui.h2-tutti-gli-annunci') }}</h2>
        </div>
    </div>
    <!--Start Card Announcement -->
    <div class="gridCard my-5 px-2" id="grid">
        @forelse ($announcements as $announcement)
            <div>
                <a class="link-card" href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                    <div class="containerCard px-3 py-3">
                        <div>
                            <img class="img-card"
                                src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): '\img\default-image.jpg' }}"
                                alt="">
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
                                            {{ __('ui.pubblicato-da') }} {{ $announcement->user->name ?? '' }}
                                            il {{ $announcement->created_at->format('d/m/y') }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h5>
                            {{ __('ui.empty-category-announcement') }}
                        </h5>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    <!--End Card Announcement -->

    <div class="container-button-grid">
        <div class="button-grid">
            <button class="btn-grid-animation" onclick="gridSistem()">
                <i class="bi bi-grid-3x2-gap-fill fs-4"></i>
            </button>
            <button class="btn-grid-animationtwo" onclick="gridSistemTwo()">
                <i class="bi bi-grid-fill fs-4"></i>
            </button>
        </div>
    </div>
    <x-footer />
</x-layout>
