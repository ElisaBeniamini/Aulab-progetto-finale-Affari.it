<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Carica un nuovo Annuncio</h2>
            <!-- Start Form inserimento annunci -->
            <form wire:submit.prevent="store">
                @csrf
                @if (session()->has('announcement'))
                {{ session()->get('announcement') }}
                @endif
                <!-- Titolo -->
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" wire:model="title" required>
                    @error('title')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Descrizione -->
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" wire:model="description" rows="4" required></textarea>
                    @error('description')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Prezzo -->
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" wire:model="price" step="0.01" required>
                    @error('price')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!--Start-Scelta-Categorie-->
                <div class="mb-3">
                    <label for="category" class="form-label">Scegli Categoria</label>
                    <select wire:model.defer="category" id="category" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--End-Scelta-Categorie-->

                <!-- Pulsante di invio -->
                <button type="submit" class="btn custom-purple-button">Carica articolo</button>
            </form>
            <!-- End Form inserimento annunci -->
        </div>
        <div class="col-md-6">
        <div class="immagine"><img
            src="/ecommerce.jpg">
    </div>
        </div>
    </div>
</div>
<!-- Include i tuoi collegamenti JavaScript e altri script qui -->