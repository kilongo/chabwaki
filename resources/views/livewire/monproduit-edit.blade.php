<div>
    <!-- LE CODE -->
    @include('layouts.partials._header')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Ma Boutique edit</h3>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->
    <!--CODE FORM-->
    <div>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between;">
                                <h3 class="card-title" style="float: left;">Modification </h3>
                                <a href="{{ route('MesProduits') }}" class="primary-btn order-submit" style="float: right;">Mes produits</a>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success text-center">{{ session('message') }}</div>
                            @endif
                            <form wire:submit.prevent="updateProduct">
                                <div class="form-group">
                                    <label for="">Nom du produit</label>
                                    <input class="input" type="text" wire:model="nom" placeholder="Entrez le nom">
                                </div>
                                <div class="form-group">
                                    <label for="">Marque du produit</label>
                                    <input class="input" type="text" wire:model="marque" placeholder="Entrez la marque">
                                </div>
                                <div class="form-group">
                                    <label for="">Prix du produit</label>
                                    <input class="input" type="text" wire:model="prix" placeholder="Entrez le prix">
                                </div>
                                <div class="form-group">
                                    <label for="">Couleur du produit</label>
                                    <input class="input" type="text" wire:model="couleur" placeholder="Entrez la couleur">
                                </div>
                                <div class="form-group">
                                    <label for="">Poids du produit</label>
                                    <input class="input" type="text" wire:model="poids" placeholder="Entrez le poids">
                                </div>
                                <div class="form-group">
                                    <label for="">Quantité du produit</label>
                                    <input class="input" type="text" wire:model="quantite" placeholder="Entrez la quantite">
                                </div>
                                <div class="form-group">
                                    <label for="">Taille du produit</label>
                                    <input class="input" type="text" wire:model="taille" placeholder="Entrez la taille">
                                </div>
                                <div class="form-group">
                                    <label for="">Description du produit</label>
                                    <textarea class="input" wire:model="description" placeholder="Description de l'article"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Modifier les images</label>
                                    <input type="file" class="form-control" style="padding: 3px; font-size: 12px;" wire:model="images" multiple />
                                    @error('images')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <br>

                                    @foreach ($productImages as $pimage)
                                        <img src="{{ asset('uploads/all') }}/{{ $pimage->image }}" height="70px" width="70px" alt="">
                                        <a href="#" wire:click.prevent='deleteImage({{ $pimage->id }})'><i class="fa fa-times text-danger mr-2"></i></a>
                                    @endforeach
                                </div>
                                
                                <button class="primary-btn order-submit" >Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWSLETTER -->
    @include('layouts.partials.newsletter')
    @include('layouts.partials._footer')
    <!-- FIN CODE -->
</div>
<!--CODE FORM-->
