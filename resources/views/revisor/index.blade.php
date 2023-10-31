<x-layout>
    <x-navbar />
    <!--reindirizzamemto non richiede una rotta; torna alla pagina precedente rispetto alla posizione dell utente -->
    <a class="btn btn-outline-primary btn-inserisci-annuncio m-4 mb-0 fs-5" href="{{ URL::previous() }}">
        <i class="bi bi-caret-left"> </i>
        Back
    </a>
   <!-- start container titolo pagina-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <h2 class="display-4 text-center">
                    {{ $announcement_to_check ? __('ui.revisione-annunci-pieno') : __('ui.revisione-annunci-vuoto') }}
                </h2>

            </div>
        </div>
    </div>
    <!-- start container dati annuncio da revisionare -->
    <div class="container-fluid p-3 ">
        <div class="row d-flex justify-content-center mt-2 align-items-center ">
            <!-- se c è l annuncio -->
            @if ($announcement_to_check)
                <div class="col-12 col-md-6 p-3 d-flex justify-content-end ">
                    <!--e SE  ci sono delle immagini caricate dall 'utente' allora mostra l immagine -->
                    @if ($announcement_to_check->images->isNotEmpty())
                        @foreach ($announcement_to_check->images as $image)
                            <div>
                                <img src="{{ $announcement_to_check->images->first()->getUrl(400, 300) }}"
                                    class="img-fluid rounded-3" />
                            </div>
                        @endforeach
                        <!-- div tags immagine -->
                        <div class="col-md-3 border-end">
                            <h5 class="mt-3">Tags</h5>
                            <div class="p-2">
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <p class="d-inline">{{ $label }},</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <!-- row semaforo -->
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5>Revisione Immagini</h5>
                                <p>Adulti : <span class="{{ $image->adult }}"></span></p>
                                <p>Satira : <span class="{{ $image->spoof }}"></span></p>
                                <p>Medicina : <span class="{{ $image->medical }}"></span></p>
                                <p>Violenza : <span class="{{ $image->violence }}"></span></p>
                                <p>Contenuto Ammiccante : <span class="{{ $image->racy }}"></span></p>
                            </div>
                        </div>

                        <!--Altrimenti mostra l immagine di default -->
                    @else
                        <div class="d-flex flex-column">
                            <img src="\img\default-image.jpg" class="img-fluid " alt="">
                            <span class="fs-5 text-center">Nessuna immagine caricata</span>

                        </div>

                    @endif
                </div>
                <!-- card dati utente -->
                <div class="col-12 col-md-6 d-flex flex-column p-3 align-items-center ">
                    <div class="card-body d-flex  align-items-start flex-column p-3 text-secondary ">
                        <span class="card-title mb-3 fs-1 text-capitalize ">
                            {{ __('ui.titolo') }}: {{ $announcement_to_check->title }}
                        </span>
                        <span class="card-description fs-2 ">
                            {{ __('ui.descrizione') }}: {{ $announcement_to_check->description }}
                        </span><br>
                        <span class="card-footer fs-2 ">
                            {{ __('ui.pubblicato-da') }} :
                            {{ $announcement_to_check->user->name ?? 'Autore Sconosciuto' }}

                        </span>
                        <span class="card-footer fs-2">
                            {{ __('ui.il') }} :
                            {{ $announcement_to_check->created_at->format('d/m/Y') }}
                        </span>

                        </p>
                    </div>
                    <!-- button accetta e cancella anuncio -->
                    <div class=" d-flex justify-content-start align-items-start mb-3">
                        <form
                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit"
                                class="btn btn-outline-success btn-lg mx-2 animate__animated animate__bounce">
                                {{ __('ui.accetta') }}</button>
                        </form>
                        <form
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit"
                                class="btn btn-outline-danger btn-lg animate__animated animate__bounce animate__delay-2s">
                                {{ __('ui.rifiuta') }}</button>
                        </form>
                    </div>

                </div>
            @endif
        </div>
    </div>

    <x-footer />
</x-layout>
