<div id="top-header">
    <div class="container">
        <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
        </ul>
        <ul class="header-links pull-right">
            <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
            <li><a href="#"><i class="fa fa-user-o"></i> Mon Compte</a></li>
            {{-- <li><a href="{{route('client.creer_boutique')}}"><i class="fa fa-user-o"></i> Créer Boutique</a></li> --}}
        </ul>
    </div>
</div>
<div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <!--img src="{{ asset('vitrine/img/logo.png') }}" alt=""-->
                                <span style="font-size: 40px; font-weight: bold;color: white;">Chabwaki</span>
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">Catégories</option>
                                    <option value="1">Catégorie 01</option>
                                    <option value="1">Catégorie 02</option>
                                </select>
                                <input class="input" placeholder="Rechercher ici">
                                <button class="search-btn">Rechercher</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Votre list</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Votre Panier</span>
                                    <div class="qty">3</div>
                                </a>
                                <div class="cart-dropdown">
                                    <!-- ... (le reste du code) -->
                                </div>
                            </div>
                            <!-- /Cart -->

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
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        {{-- <li class="active"><a href="{{route('client.index')}}">Accueil</a></li>
                        <li><a href="{{route('client.boutique')}}">Boutique</a></li> --}}
                        <li><a href="#">Catégories</a></li>
                        <li><a href="#">Assistance</a></li>
                        <li><a href="#">Mon Compte</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">À Propos</a></li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>