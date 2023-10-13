<x-layout>
    <x-navbar />
    <div class="container">
        <div class="row text-center mt-3  ">

            <div class="col-12 col-md-12  d-flex flex-column">
                <h1>Presto.it</h1>

                <h5 class="fw-bold">I nostri annunci</h5>
                <!-- START select list category per lo show -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle btn-logout d-flex  align-items-center fs-5" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ricerca per categoria
                    </button>
                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                        @foreach ($categories as $category)
                            <li><a class="fs-5 text-decoration-none"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!--END select list category per lo show -->
            </div>
        </div>


        <!--Start Card Announcement -->
            
                <div class="container-fluid my-5">
                    <div class="row">
                        @foreach ($announcementes as $announcement)
                        <div class="col-12 col-md-3 py-2">
                            <div class="card-container">
                                <div class="card">
                                    <img src="https://m.media-amazon.com/images/I/61ubg48TFnS._AC_UY780_.jpg"
                                        class="card-img-top" alt="Immagine 1">
                                    <div class="card-text">
                                        <h5>Titolo - {{ $announcement->title }}</h5>
                                        <p>Descrizione - {{ $announcement->description }} leggi altro...</p>
                                        <p>€ {{ $announcement->price }}</p>
                                        <p></p>{{ $announcement->categoy }}</p>
                                        <p>Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
                                    Visualizza
                                </a>

                            </div>
                        </div>
                        @endforeach
                    </div>
            
        </div>
        <!--End Card Announcement -->
    </div>
    <x-footer />
</x-layout>
