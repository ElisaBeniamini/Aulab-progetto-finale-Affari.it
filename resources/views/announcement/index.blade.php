<x-layout>
    <x-navbar />
    <!--Start Card Announcement -->
    <div class="gridCard my-5 px-2" id="grid">
        @forelse ($announcements as $announcement)
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
        @empty
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h5>
                            Spiacenti il prodotto da te cercato non è presente , prova con altro...
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
