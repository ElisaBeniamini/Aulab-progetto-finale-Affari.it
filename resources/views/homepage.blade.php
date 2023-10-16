<x-layout>
    <x-navbar />

    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="card p-4 mt-3">
                    <h3 class="heading mt-5 text-center">Hi! How can we help You?</h3>
                    <div class="d-flex justify-content-center px-5">
                        <div class="search"> <input type="text" class="search-input" placeholder="Search..."
                                name=""> <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a>
                        </div>
                    </div>
                    <div class="row mt-4 g-1 px-4 mb-5">
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                    src="https://i.imgur.com/Mb8kaPV.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Account</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                    src="https://i.imgur.com/ueLEPGq.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Payments</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                    src="https://i.imgur.com/tmqv0Eq.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Delivery</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                    src="https://i.imgur.com/D0Sm15i.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Product</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                    src="https://i.imgur.com/Z7BJ8Po.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Return</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                    src="https://i.imgur.com/YLsQrn3.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Guarantee</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Section index 6 annunci
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

    -->









    <x-footer />
</x-layout>
