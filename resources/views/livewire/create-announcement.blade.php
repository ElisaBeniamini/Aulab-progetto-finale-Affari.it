<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="mb-4 text-center">
                    {{ __('ui.inserisci-annuncio') }}
                </h2>
            </div>
            <!-- Start Form inserimento annunci -->
            <div>
                <form wire:submit.prevent="store">
                    @csrf
                    @if (session()->has('announcement'))
                    <div class="alert alert-success" role="alert">{{ session()->get('announcement') }}</div>
                    @endif
                    <!-- Titolo -->
                    <div class="mb-3 text-center">
                        <label for="title" class="form-label text-center">
                            {{ __('ui.titolo') }}
                        </label>
                        <input type="text" class="form-control input-register" id="title" wire:model="title" required>
                        @error('title')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Descrizione -->
                    <div class="mb-3 text-center">
                        <label for="description" class="form-label text-center">
                            {{ __('ui.descrizione') }}
                        </label>
                        <textarea class="form-control" id="description" wire:model="description" rows="4" required></textarea>
                        @error('description')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Prezzo -->
                    <div class="mb-3 me-3 text-center">
                        <label for="price" class="form-label">
                            {{ __('ui.prezzo') }}
                        </label>
                        <input type="number" class="form-control input-register" id="price" wire:model="price" step="0.01" required>
                        @error('price')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Scegli Categoria -->
                    <div class="mb-3">
                        <label for="category" class="form-label text-center">
                            {{ __('ui.scegli-categoria') }}
                        </label>
                        <select wire:model.defer="category" id="category" class="seleziona category form-control input-register">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Carica le tue immagini</label>
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="img"/>
                        @error('temporary_images.*')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @if(!empty($images))

                    <div class="row">
                        <div class="col-12 justify-content-center">
                            <p>
                                Anteprima
                            </p>
                            <div class="row border border-4 border-info rounded shadow py-4">
                                @foreach($images as $key => $image)
                                <div class="col mb-3">
                                    <img src="{{$image->temporaryUrl()}}"/>
                                    
                                    <div class="img-preview mx-auto shadow rounded"style="background-image: url({{$image->temporaryUrl()}});">
                                    </div>


                                    <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})">
                                        Cancella
                                    </button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <!--End-Scelta-Categorie-->
                    <!--Pulsante crea-->
                    <button type="submit" class="btn custom-purple-button btn-register mt-3 mb-5"> Crea</button>
                    <!-- Pulsante di invio -->
                    <button type="submit" class="carica btn custom-purple-button btn-register mt-3 mb-5"><i class="bi bi-upload"></i> {{ __('ui.carica-articolo') }}</button>
                </form>
                <!-- End Form inserimento annunci -->
            </div>
        </div>
    </div>
</div>