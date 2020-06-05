@extends('web.layouts.app')

@section('content')    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 mb-5 text-center">
                    <h2 class="mb-0 bread">{{ $product->name }}</h2>
                </div>
            </div>
        </div>
    </section>

    <product :product="{{ $product }}"></product>
@endsection

@section('scripts')
  <script>
		$(document).ready(function(){
			var quantitiy = 0;
		
			$('.quantity-right-plus').click(function(e){
		        e.preventDefault();
		        
				var quantity = parseInt($('#quantity').val());
				$('#quantity').val(quantity + 1);
		    });

			$('.quantity-left-minus').click(function(e){
				e.preventDefault();
				
				var quantity = parseInt($('#quantity').val());
				
				if (quantity > 0){
					$('#quantity').val(quantity - 1);
				}
		    });
		});
    </script>
@endsection