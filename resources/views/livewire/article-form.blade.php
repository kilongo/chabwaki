<div id="formContainer">
    @if (session()->has('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
     @endif
    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <input class="input" type="text" wire:model="prix" placeholder="Prix de l'article">
        </div>
        <div class="form-group">
            <input class="input" type="text" wire:model="quantite" placeholder="Quantité de l'article">
        </div>
        <div class="form-group">
            <input class="input" type="text" wire:model="marque" placeholder="Marque de l'article">
        </div>
        <div class="form-group">
            <input class="input" type="text" wire:model="taille" placeholder="Taille de l'article">
        </div>
        <div class="form-group">
            <input class="input" type="text" wire:model="couleur" placeholder="Couleur de l'article">
        </div>
        <div class="form-group">
            <input class="input" type="text" wire:model="poids" placeholder="Poids de l'article">
        </div>
        <div class="form-group">
            <textarea class="input"  wire:model="description" placeholder="Description de l'article"></textarea>
        </div>
        
        <div class="form-group">
            <label for="photoInput">Téléverser jusqu'à 4 photos</label>
            <!--input type="file" id="photoInput"  accept="image/*" multiple-->
            <input type="file" class="form-control" style="padding: 3px; font-size: 12px;" wire:model="images" multiple />
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
    
        <div id="photo-previews" style="display: block;">
           
        </div>
    
        <button class="primary-btn order-submit" >Enregistrer l'article</button>
    </form>
</div>

@push('scripts')
    <script>
        $('#description').summernote({
            placeholder: 'Enter description',
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('description', contents);
                }
            }
        });

        
    </script>
    
@endpush


    
   
    
    
    
    
    
    
    
    
    
    
   
    
    
    