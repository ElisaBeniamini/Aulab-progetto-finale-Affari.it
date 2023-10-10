<layoyt>
<div class="container mt-5">
    <h2 class="mb-4">Carica un nuovo articolo</h1>
    <form>
        <!-- Titolo -->
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        
        <!-- Descrizione -->
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        
        <!-- Prezzo -->
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        
        <!-- Immagine -->
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>
        
        <!-- Pulsante di invio -->
        <button type="submit" class="btn custom-purple-button">Carica articolo</button>
    </form>
</div>
</layout>