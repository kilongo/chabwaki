@extends('layouts.global-layouts')
@section('content')
		
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Ma Boutique</h3>
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

		<livewire:view-produit :id="$id"/>

		<!-- NEWSLETTER -->
		@include('layouts.partials.newsletter')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->				
@endsection
