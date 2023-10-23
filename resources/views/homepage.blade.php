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
                    Ultimi sei annunci pubblicati
                </h2>
                <div class="row">
                    @foreach ($announcements as $announcement)
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                                <div class="card-flyer">
                                    <div class="text-box">
                                        <div class="image-box">
                                            <img class="img-card" src="/img/img-show-3.webp" alt="">
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
                                                            Pubblicato da {{ $announcement->user->name ?? '' }} <br>
                                                            <p class="m-0 pt-1">
                                                                il {{ $announcement->created_at->format('d/m/y') }}
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
    <!--End  Card ultimi sei annunci -->













    <x-footer />
</x-layout>
