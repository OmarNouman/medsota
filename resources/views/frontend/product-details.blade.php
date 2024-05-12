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
        @include('frontend.partials.products.details.details')
        @include('frontend.partials.products.details.description')
        @include('frontend.partials.products.details.similar')
    </main>

    @include('frontend.partials.shared.footer')
@endsection
