@extends('frontend.includes.main')
@section('title')
    Homepage
@endsection
@section('body')
    <header>
        {{-- @include('frontend.partials.shared.header') --}}
        @include('frontend.partials.shared.navbar')
    </header>

    <main>
        @include('frontend.partials.home.slider')
        @include('frontend.partials.home.product-showcase')
        @include('frontend.partials.home.featured-products')
        @include('frontend.partials.home.deal')
        @include('frontend.partials.home.deal-products')
        @include('frontend.partials.home.products')
        @include('frontend.partials.home.testimony')
        @include('frontend.partials.home.blog')
        @include('frontend.partials.home.brands')
        @include('frontend.partials.home.features')
        @include('frontend.partials.shared.instagram')
    </main>

    @include('frontend.partials.shared.footer')
@endsection
