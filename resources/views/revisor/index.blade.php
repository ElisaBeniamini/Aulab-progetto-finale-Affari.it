<x-layout>
    <x-navbar />

    <div class="row">
        <h2 class="display-4 text-center mt-5">
            {{ $announcement_to_check ? __('ui.revisione-annunci-pieno') : __('ui.revisione-annunci-vuoto') }}
        </h2>
    </div>

    <div class="container-fluid  shadow rounded">
        <div class="row d-flex">
            <div class="col-12 col-md-6 mx-auto p-3 text-center mt-3 mb-5">
                <!-- se c è l annuncio -->
                @if ($announcement_to_check)
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 col-md-6 d-flex justify-content-end">
                                <!--Se ci sono delle immagini nell annuncio allora mostra l immagine -->
                                @if ($announcement_to_check->images->isNotEmpty())
                                    @foreach ($announcement_to_check->images as $image)
                                        <div class="mx-2">
                                            <img src="{{ Storage::url($image->path) }}"
                                                class="img-fluid shadow rounded" />
                                        </div>
                                    @endforeach
                                    <!--Altrimenti mostra l immagine di default -->
                                @else
                                    <div>
                                        <img src="\img\default-image.jpg" class="img-fluid " alt="">
                                        <span>Nessuna immagine caricata</span>

                                    </div>
                                @endif
                            </div>
                            <!-- card dati utente -->
                            <div class="col-7 d-flex justify-content-start ">
                                <div class="card-body  col-6 mx-auto p-3 d-flex align-items-center flex-column mt-3">
                                    <h5 class="card-title mb-3">
                                        {{ __('ui.titolo') }}: {{ $announcement_to_check->title }}
                                    </h5>
                                    <p class="card-description">
                                        {{ __('ui.descrizione') }}: {{ $announcement_to_check->description }}
                                    </p>
                                    <p class="card-footer">
                                        {{ __('ui.pubblicato-da') }} :
                                        {{ $announcement_to_check->user->name ?? 'Autore Sconosciuto' }} <br>
                                        {{ __('ui.il') }} {{ $announcement_to_check->created_at->format('d/m/Y') }}
                                    </p>
                                    <div class="justify-content-center d-flex">
                                        <form
                                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success shadow mx-2">
                                                {{ __('ui.accetta') }}</button>
                                        </form>
                                        <form
                                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-danger shadow">
                                                {{ __('ui.rifiuta') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
