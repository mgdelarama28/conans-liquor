@extends('web.layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/web/shopping_cart_banner.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <h2 class="mb-0 bread">My Shopping Cart</h2>
                </div>
            </div>
        </div>
    </section>

    <shopping-cart></shopping-cart>
@endsection