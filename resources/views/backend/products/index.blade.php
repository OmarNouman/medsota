@extends('backend.main')
@section('content')
    <div class="col-lg-12">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row pb-3">
                    <div class="col-lg-11 align-self-center pt-2">
                        <h5 class="card-title"><strong>Products</strong></h5>
                    </div>
                    <div class="col-lg-1 align-self-center">
                        <a class="btn btn-primary align-middle" href="{{ route('products.create') }}">Add Product</a>
                    </div>
                </div>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-info pe-7s-pen m-1">
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            class="delete-form">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger pe-7s-trash m-1 delete-button"></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
@endsection
@push('scripts')
    <script>
        $('.delete-button').click(function() {
            const form = $(this).closest('delete-form')
            swalDelete(form, 'Are you sure?',
                'Once this Subject is deleted it cannot be retrieved.')
        });
    </script>
@endpush
