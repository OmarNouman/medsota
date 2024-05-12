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

        @include('frontend.partials.shared.breadcrump', ['title' => 'All Products'])
        @include('frontend.partials.products.list.products')
        @include('frontend.partials.home.brands')
        @include('frontend.partials.shared.instagram')

    </main>
    @include('frontend.partials.shared.footer')
@endsection
