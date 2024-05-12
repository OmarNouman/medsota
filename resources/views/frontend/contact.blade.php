@extends('frontend.includes.main')
@section('title')
    Contact Us
@endsection
@section('body')
    <header>
        {{-- @include('frontend.partials.shared.header') --}}
        @include('frontend.partials.shared.navbar')
    </header>

    <main>
        @include('frontend.partials.shared.breadcrump', ['title'=>'Contact'])
        @include('frontend.partials.contact.contact-details')
        @include('frontend.partials.contact.map')
        @include('frontend.partials.contact.contact-form')
        @include('frontend.partials.shared.instagram')
    </main>

    @include('frontend.partials.shared.footer')
@endsection
