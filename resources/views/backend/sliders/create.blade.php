@php
    $route = isset($slider) ? 'sliders.update' : 'sliders.store';
    $method = isset($slider) ? 'PUT' : 'POST';
@endphp
@extends('backend.main')
@section('content')
    <div class="col-lg-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route($route, isset($slider) ? $slider->id : null) }}" method="POST"
                    enctype="multipart/form-data">
                    @method($method)
                    @csrf
                    {{-- product images --}}
                    <div class="position-relative row form-group">
                        <label for="image_url" class="col-sm-2 col-form-label">
                            Product image
                        </label>
                        <div class="col-sm-10">
                            <input name="image_url" id="image_url" type="file" class="form-control-file"
                                accept="image/*" required multiple>
                            <small class="form-text text-muted">please select the image</small>
                        </div>
                    </div>

                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
