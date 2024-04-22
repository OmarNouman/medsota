
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
                        <h5 class="card-title"><strong>Categories</strong></h5>
                    </div>
                    <div class="col-lg-1 align-self-center">
                        <a class="btn btn-primary align-middle" href="{{ route('categories.create') }}">Add Category</a>
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
                        @foreach ($categories as $index => $category)
                            <tr>
                                <th scope="row">{{ $index }}</th>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('subjects.categories.edit', [$subject->id, $category->id]) }}"
                                            class="btn btn-info pe-7s-pen m-1">
                                            <a href="{{ route('categories.levels.index', $category->id) }}"
                                                class="btn btn-warning pe-7s-config m-1">

                                            </a>
                                            <form
                                                action="{{ route('subjects.categories.destroy', [$subject->id, $category->id]) }}"
                                                method="POST" class="delete-form">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger pe-7s-trash m-1 delete-button"></button>
                                            </form>
                                    </div>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $categories->links('pagination::bootstrap-4') }}
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
