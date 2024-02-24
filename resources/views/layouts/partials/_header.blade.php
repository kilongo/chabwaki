<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('UserRedirect') }}"><i class="fa fa-user-o"></i>Se connecter</a></li>     
                @endif
                @auth
                    <li><a href="{{-- route('logout') --}}"><i class="fa fa-sign-out"></i>{{auth()->user()->nom_proprietaire}}</a></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>Se deconnecter</a></li>
                @endauth
                
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <!--div class="header-logo">
                        <a href="#" class="logo">
                            <img src="./img/logo.png" alt="">
                        </a>
                        <span href="#" class="logo" style="color: white; text-decoration: none;">CHABWAKI</span>
                    </div-->
                    <div class="header-logo" style="text-align: center;">
                        <a href="#" class="logo" style="color: white; text-decoration: none; font-size: 24px; display: block;margin-top:10px">CHABWAKI@</a>
                    </div>
                    
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">Catégorie</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
                            </select>
                            <input class="input" placeholder="Chercher  ici">
                            <button class="search-btn">Rechercher</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        @if (Auth::guest())
                        <div>
                            <a href="{{route("NouveauProduit")}}">
                            <!--a href="{{--route('form.render') --}}" wire:navigate-->
                                <i class="fa fa-user-plus"></i>
                                
                                <span>Créer compte</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        @endif
                        @auth
                        @php
                                // Récupérer l'utilisateur connecté
                                $user = auth()->user();

                                // Récupérer l'id de la boutique associée à l'utilisateur
                                $idBoutique = $user->id_boutique;
                               
                                // Vérifier si l'utilisateur a une boutique associée
                                if ($idBoutique) {
                                    // Si oui, obtenir le nom de la boutique
                                    $boutique = App\Models\Boutique::find($idBoutique);

                                    // Vérifier si la boutique existe
                                    if ($boutique) {
                                        $nomBoutique = $boutique->nom_boutique;
                                        $nomBoutique = preg_replace('/\s+/', ' ', substr($nomBoutique, 0, 16));; // Assurez-vous que "nom" est le nom de la colonne contenant le nom de la boutique dans la table "boutique"
                                    } else {
                                        // Gérer le cas où la boutique n'existe pas
                                        $nomBoutique = "Boutique introuvable";
                                    }
                                } else {
                                    // Gérer le cas où l'utilisateur n'a pas de boutique associée
                                    $nomBoutique = "Aucune boutique";
                                }
                            @endphp
                        <div>
                            <a href="{{route("NouveauProduit")}}">
                            <!--a href="{{--route('form.render') --}}" wire:navigate-->
                                <i class="fa fa-user"></i>
                                <span>Mon compte</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{route("NouveauProduit")}}">
                            
                                <i class="fa fa-user"></i>
                                <span >{{$nomBoutique}}</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        @endauth                        
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        {{-- <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Mon panier</span>
                                <div class="qty">3</div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product02.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart --> --}}

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Accueil</a></li>
                <li><a href="{{route("Nos-produits.index")}}">Nos produits</a></li>
    
                <li><a href="{{route("CreerBoutique")}}">Créer Boutique</a></li>
                @auth
                <li><a href="{{route("MesProduits")}}">Ma boutique</a></li>
                <li><a href="#">Mon compte</a></li>
                <li><a href="{{route("NouveauProduit")}}">Ajout produit</a></li>
                @endauth
                <li><a href="{{route("UserRedirect")}}">Connexion</a></li>
                {{-- <li><a href="{{route("ViewProduct")}}">À propos de nous</a></li> --}}
                <!--li><a href="#">Accessories</a></li-->
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>