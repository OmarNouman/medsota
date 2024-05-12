@php
    $route = isset($category) ? 'categories.update' : 'categories.store';
    $method = isset($category) ? 'PUT' : 'POST';
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
                <form action="{{ route($route, isset($category) ? $category->id : null) }}" method="POST"
                    enctype="multipart/form-data">
                    @method($method)
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="name" class="col-sm-2 col-form-label">Category name</label>
                        <div class="col-sm-10">
                            <input name="name" id="name" placeholder="Enter category name in arabic" type="text"
                                class="form-control" required autofocus
                                value="{{ isset($category) ? $category->name : null }}">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="parent_id" class="col-sm-2 col-form-label">Category Parent</label>
                        <div class="col-sm-10">
                            <select name="parent_id" id="parent-id" class="form-control select2">
                                <option value="" disabled>Select a category parent</option>
                                <option value=""></option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}"
                                        {{ isset($category) && $category->parent_id == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('#parent-id').select2({
                placeholder: "Please select a category parent"
            });
        });
    </script>
@endpush
