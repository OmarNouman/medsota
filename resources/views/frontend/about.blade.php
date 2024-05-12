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

        @include('frontend.partials.shared.breadcrump', ['title'=>'About'])
        @include('frontend.partials.about.about')
        @include('frontend.partials.about.counter')
        @include('frontend.partials.about.features')
        @include('frontend.partials.about.team')
        @include('frontend.partials.about.cta')
        @include('frontend.partials.about.testimony')
        @include('frontend.partials.home.brands', ['class' => 'pt-100'])
        @include('frontend.partials.shared.instagram')

    </main>

    @include('frontend.partials.shared.footer')
@endsection
