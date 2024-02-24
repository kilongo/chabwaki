@extends('layouts.global-layouts')
@section('content')
		{{-- @livewire('tout-produit') --}}
        <!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">connexion</h3>
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
								{{-- <h3 class="titler">Les informations de l'article</h3> --}}
							</div>
							<livewire:user-login />
						</div>
						<!-- /Billing Details -->

					</div>

					
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- /SECTION -->

		@include('layouts.partials.newsletter')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		
		



@endsection
