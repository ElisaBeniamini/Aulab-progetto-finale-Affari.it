<x-layout>
    <x-navbar />

    <div class="row">
        <h2 class="display-4 text-center mt-5">
            {{ $announcement_to_check ? __('ui.revisione-annunci-pieno') : __('ui.revisione-annunci-vuoto') }}
        </h2>
    </div>

    @if ($announcement_to_check)
        <div class="container">
            <div class="it-carousel-wrapper it-carousel-landscape-abstract-three-cols splide" data-bs-carousel-splide>
                @if ($announcement_to_check->images)
                    @foreach($announcement_to_check->images as $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img src="{{ Storage::url($image->path) }}" class="img-fluid"/>
                        </div>
                    @endforeach
                @endif

                <div class="card-body shadow rounded col-6 mx-auto p-3 text-center mt-3">
                    <h5 class="card-title">
                        {{ __('ui.titolo') }}: {{ $announcement_to_check->title }}
                    </h5>
                    <p class="card-text">
                        {{ __('ui.descrizione') }}: {{ $announcement_to_check->body }}
                    </p>
                    <p class="card-footer">
                        {{ __('ui.pubblicato-da') }} : {{ $announcement_to_check->user->name }} <br>
                        {{ __('ui.il') }} {{ $announcement_to_check->created_at->format('d/m/Y') }}
                    </p>

                    <div class="justify-content-center d-flex">
                        <form
                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow mx-2"> {{ __('ui.accetta') }}</button>
                        </form>
                        <form
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow"> {{ __('ui.rifiuta') }}</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        </div>
        </li>
        </ul>
        </div>
        </div>
        <!-- Add carousel controls here -->
        </div>
    @endif


</x-layout>
