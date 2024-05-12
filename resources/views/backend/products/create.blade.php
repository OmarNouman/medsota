@php
    $route = isset($product) ? 'products.update' : 'products.store';
    $method = isset($product) ? 'PUT' : 'POST';
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
                <form action="{{ route($route, isset($product) ? $product->id : null) }}" method="POST"
                    enctype="multipart/form-data">
                    @method($method)
                    @csrf
                    {{-- product name --}}
                    <div class="position-relative row form-group">
                        <label for="name" class="col-sm-2 col-form-label">Product name</label>
                        <div class="col-sm-10">
                            <input name="name" id="name" placeholder="Enter product name" type="text"
                                class="form-control" required autofocus
                                value="{{ isset($product) ? $product->name : null }}">
                        </div>
                    </div>

                    {{-- product description --}}
                    <div class="position-relative row form-group">
                        <label for="description" class="col-sm-2 col-form-label">
                            Product description
                        </label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" class="form-control"
                                placeholder="Write the descrtipion of the product" required>{{ isset($product) ? $product->description : null }}</textarea>
                        </div>
                    </div>

                    {{-- product quantity --}}
                    <div class="position-relative row form-group">
                        <label for="quantity" class="col-sm-2 col-form-label">Product Quantity</label>
                        <div class="col-sm-10">
                            <input name="quantity" id="quantity"
                                placeholder="Enter product quantity" type="number" class="form-control"
                            required value="{{ isset($product) ? $product->quantity : null }}">
                        </div>
                    </div>

                    {{-- product cateogry --}}
                    <div class="position-relative row form-group">
                        <label for="category_id" class="col-sm-2 col-form-label">Product Category</label>
                        <div class="col-sm-10">
                            <select name="category_id" id="category-id" class="form-control select2" required>
                                <option value="" disabled></option>
                                <option value=""></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    {{-- product images --}}
                    <div class="position-relative row form-group">
                        <label for="image_url" class="col-sm-2 col-form-label">
                            Product image 
                        </label>
                        <div class="col-sm-10">
                            <input name="image_url[]" id="image_url" type="file" class="form-control-file"
                                accept="image/*" required multiple>
                            <small class="form-text text-muted">please select the image of the product</small>
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
            $('#category-id').select2({
                placeholder: "Please select product category"
            });
        });
    </script>
@endpush
