<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!--h5 class="card-title" style="float: left;">Tous mes produits</h5-->
                        <a href="{{ route('NouveauProduit') }}" class="primary-btn order-submit" style="float: right;margin-bottom:20px">Ajout
                            du produit</a>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if (session()->has('message'))
                                    <div class="alert alert-success text-center">{{ session('message') }}</div>
                                @endif
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">ID</th>
                                    <th styles="width: 40%;">Nom</th>
                                    <th styles="width: 40%;">Prix</th>
                                    <th styles="width: 40%;">Marque</th>
                                    <th stylss="width: 40%;">Taille</th>
                                    <th styles="width: 40%;">Couleur</th>
                                    <th styles="width: 40%;">Poids</th>
                                    <th style="text-align: center;">Images</th>
                                    <th style="text-align: center;">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php $counter = 1 @endphp
                                @if ($articles->count() > 0)
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td style="text-align: center;">{{ $counter }}</td>
                                            <td>{{ $article->nom }}</td>
                                            <td>{{ $article->prix }}</td>
                                            <td>{{ $article->marque }}</td>
                                            <td>{{ $article->taille }}</td>
                                            <td>{{ $article->couleur }}</td>
                                            <td>{{ $article->poids }}</td>
                                            <td style="text-align: center;">
                                                @php
                                                    $images = App\Models\Product_image::where('product_id', $article->id)->get();
                                                @endphp

                                                @foreach ($images as $item)
                                                    <img src="{{ asset('uploads/all') }}/{{ $item->image }}" style="height: 50px; width: 50px;" alt="">
                                                @endforeach
                                            </td>
                                            <td style="text-align: center;">
                                                <a href="{{route('editProducts', ['id'=>$article->id])}}" class="btn btn-sm btn-secondary" style="padding: 1px 8px;">Edit</a>

                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" style="padding: 1px 8px;" wire:click.prevent="deleteProduct({{ $article->id }})">Delete</a>
                                            </td>
                                        </tr>
                                        @php $counter++ @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" style="text-align: center;">Aucun produit trouvé!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

