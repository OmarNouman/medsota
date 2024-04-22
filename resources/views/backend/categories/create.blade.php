@php
    $route = isset($category) ? 'subjects.categories.update' : 'subjects.categories.store';
    $method = isset($category) ? 'PUT' : 'POST';
@endphp
@extends('back.main')
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
                <form action="{{ route($route, isset($category) ? [$subject->id, $category->id] : $subject->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @method($method)
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="ar_name" class="col-sm-2 col-form-label">Category name (arabic)</label>
                        <div class="col-sm-10">
                            <input name="ar_name" id="ar_name" placeholder="Enter category name in arabic" type="text"
                                class="form-control" required autofocus
                                value="{{ isset($category) ? $category->ar_name : null }}">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="en_name" class="col-sm-2 col-form-label">Category name (english)</label>
                        <div class="col-sm-10">
                            <input name="en_name" id="en_name" placeholder="Enter category name in english" type="text"
                                class="form-control" required autofocus
                                value="{{ isset($category) ? $category->en_name : null }}">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="ar_description" class="col-sm-2 col-form-label">
                            Category description (arabic)
                        </label>
                        <div class="col-sm-10">
                            <textarea name="ar_description" id="ar_description" class="form-control"
                                placeholder="Write the descrtipion of the category in arabic" required>{{ isset($category) ? $category->ar_description : null }}</textarea>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="en_description" class="col-sm-2 col-form-label">
                            Category description (english)
                        </label>
                        <div class="col-sm-10">
                            <textarea name="en_description" id="en_description" class="form-control"
                                placeholder="Write the descrtipion of the category in english" required>{{ isset($category) ? $category->en_description : null }}</textarea>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="min_age" class="col-sm-2 col-form-label">Minimum age</label>
                        <div class="col-sm-10">
                            <input name="min_age" id="min_age" placeholder="Enter minimum age" type="number"
                                class="form-control" value="{{ isset($category) ? $category->min_age : null }}" required>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="max_age" class="col-sm-2 col-form-label">Maximum age</label>
                        <div class="col-sm-10">
                            <input name="max_age" id="max_age" placeholder="Enter maximum age" type="number"
                                class="form-control" value="{{ isset($category) ? $category->max_age : null }}" required>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="category_order_id" class="col-sm-2 col-form-label">Category order</label>
                        <div class="col-sm-10">
                            <select name="category_order_id" id="category_order_id" class="form-control select2" required>
                                <option value="" selected disabled>select a category order</option>
                                @foreach ($categoryOrder as $order)
                                    <option
                                        {{ isset($category) && $category->category_order_id == $order->id ? 'selected' : null }}
                                        value="{{ $order->order }}">
                                        {{ $order->order . ' - ' . $order->name }}</option>
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
            $('#order').select2();
        });
    </script>
@endpush
