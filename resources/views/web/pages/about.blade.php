@extends('web.layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/web/banner.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 mb-5 text-center">
                    <h2 class="mb-0 bread font-weight-bold">About Us</h2>
                </div>
            </div>
        </div>
    </section>

	@include('web.partials.services')

	@include('web.partials.about')

	@include('web.partials.categories')

	{{-- @include('web.partials.products') --}}

	{{-- @include('web.partials.testimonials') --}}
		
	{{-- @include('web.partials.recent_blogs') --}}
@endsection