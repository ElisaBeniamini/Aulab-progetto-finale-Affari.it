<div>
    <div class="row container-fluid mt-5">
        <div class="mt-2">

            <h2 class="text-center mb-4 title-real-time">
                {{ __('ui.inserisci-annuncio') }}
            </h2>
            <!-- Start Form inserimento annunci -->
            <div class="card-body shadow rounded col-6 mx-auto p-3">
                <form wire:submit.prevent="store">
                    @csrf
                    @if (session()->has('announcement'))
                        <div class="alert alert-success" role="alert">{{ session()->get('announcement') }}</div>
                    @endif
                    <!-- Titolo -->
                    <div class="mb-3 text-center ">
                        <label for="title" class="form-label">
                            {{ __('ui.titolo') }}
                        </label>
                        <input type="text" class="form-control input-register" id="title" wire:model="title"
                            required>
                        @error('title')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Descrizione -->
                    <div class="mb-3 text-center ">
                        <label for="description" class="form-label">
                            {{ __('ui.descrizione') }}
                        </label>
                        <textarea class="form-control" id="description" wire:model="description" rows="4" required></textarea>
                        @error('description')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <!-- Prezzo -->
                        <div class="mb-3 me-3 text-center">
                            <label for="price" class="form-label">
                                {{ __('ui.prezzo') }}
                            </label>
                            <input type="number" class="form-control input-register" id="price" wire:model="price"
                                step="0.01" required>
                            @error('price')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Scegli Categoria -->
                        <div class="mb-3">
                            <label for="category" class="form-label text-center">
                                {{ __('ui.scegli-categoria') }}
                            </label>
                            <select wire:model.defer="category" id="category"
                                class="seleziona category form-control input-register">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!--End-Scelta-Categorie-->

                    <!-- Pulsante di invio -->
                    <button type="submit" class="carica btn custom-purple-button btn-register mt-3 mb-5"><i
                            class="bi bi-upload"></i> {{ __('ui.carica-articolo') }}</button>
                </form>
                <!-- End Form inserimento annunci -->
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <h2 class="title-real-time">

                    </h2>
                </div>
                <div>
                    <p id="result" class="papa">

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
