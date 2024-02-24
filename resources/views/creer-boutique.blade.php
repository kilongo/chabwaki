@extends('layouts.global-layouts')
@section('content')
		<!-- NAVIGATION -->
		
		<!-- /NAVIGATION -->

		<!-- SECTION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Nouvelle boutique</h3>
						<!--ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul-->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="titler">Les informations de la Boutique</h3>
							</div>
							<form method="POST" action="{{route('enregistrer-boutique')}}">
							@csrf
							<div class="form-group">
								<input class="input" type="text" name="nom_boutique" placeholder="Nom de la boutique">
							</div>
							<div class="form-group">
								<select class="input" name="categorie_boutique">
									<option value="" disabled selected hidden>Sélectionnez votre secteur</option>
									<option value="Appareil">Objets personnels</option>
									<option value="Appareil">Appareils électroniques</option>
									<option value="option2">Pièce de rechange</option>
									<option value="option3">Habillement et autres</option>
									<option value="option3">Pièce de rechange</option>
									<option value="option3">Menuiserie</option>
									<option value="option3">Matériel de construction</option>
									<option value="option3">Divers</option>
									<option value="option3">Toutes sortes</option>
									<option value="option3">Autre</option>
								</select>
							</div>
							<div class="form-group">
								<select class="input" name="province">
									<option value="" disabled selected hidden>Sélectionnez votre province</option>
									<option value="Kinshasa">Kinshasa</option>
									<option value="Nord-Kivu">Nord-Kivu</option>
									<option value="Sud-Kivu">Sud-Kivu</option>
									<option value="Maniema">Maniema</option>
									<option value="Ituri">Ituri</option>
									<option value="Haut-Uélé">Haut-Uélé</option>
									<option value="Bas-Uélé">Bas-Uélé</option>
									<option value="Tshopo">Tshopo</option>
									<option value="Équateur">Équateur</option>
									<option value="Tshuapa">Tshuapa</option>
									<option value="Mongala">Mongala</option>
									<option value="Nord-Ubangi">Nord-Ubangi</option>
									<option value="Sud-Ubangi">Sud-Ubangi</option>
									<option value="Kinshasa">Kinshasa</option>
									<option value="Kasaï">Kasaï</option>
									<option value="Kasaï-Central">Kasaï-Central</option>
									<option value="Kasaï-Oriental">Kasaï-Oriental</option>
									<option value="Lomami">Lomami</option>
									<option value="Sankuru">Sankuru</option>
									<option value="Kwango">Kwango</option>
									<option value="Kwilu">Kwilu</option>
									<option value="Mai-Ndombe">Mai-Ndombe</option>
									<option value="Tanganyika">Tanganyika</option>
									<option value="Haut-Lomami">Haut-Lomami</option>
									<option value="Lualaba">Lualaba</option>
									<option value="Haut-Katanga">Haut-Katanga</option>
								</select>
								
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="ville" placeholder="Ville/Territoire">
							</div>						
							<div class="form-group">
								<input class="input" type="tel" name="telephone" placeholder="Telephone">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<textarea class="input" name="adresse" placeholder="Adresse de la boutique"></textarea>
							</div>	
							<div class="section-title">
								<h3 class="titler">Les informations du propriétaire</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="nom_proprietaire" placeholder="Nom du propriétaire">
								<!--input class="hidden" type="text" name="type" value="vendeur"-->
							</div>
							<div class="form-group">
								<input class="input" type="text" name="prenom_proprietaire" placeholder="Prenom du propriétaire">
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="password" placeholder="Mot de passe">
							</div>
							<!--div class="form-group">
								<input class="input" type="confirm-password" name="confirm-password" placeholder="Confirmez le mot de passe">
							</div-->
							
							<button  class="primary-btn order-submit">Creer la boutique</button>
							
						</div>
					</form>
						<!-- /Billing Details -->

					</div>

					<!-- Order Details -->
					<!--div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$2940.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		@include('layouts.partials.newsletter')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		
		
@endsection
