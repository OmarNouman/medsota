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
                        <h5 class="card-title"><strong>Sliders</strong></h5>
                    </div>
                    <div class="col-lg-1 align-self-center">
                        <a class="btn btn-primary align-middle" href="{{ route('sliders.create') }}">Add Slider</a>
                    </div>
                </div>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Order</th>
                            <th>Actions</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $index => $slider)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>
                                    <img src="{{ Storage::url($slider->images->first()->url) }}" alt=""
                                        width="300px" height="300px">
                                </td>
                                <td>
                                    <form action="{{ route('sliders.up', $slider->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <button class="btn btn-info pe-7s-angle-up slider-order">
                                        </button>
                                    </form>
                                    <form action="{{ route('sliders.down', $slider->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <button class="btn btn-info pe-7s-angle-down slider-order">
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <div class="row">
                                        {{-- <a href="{{ route() }}" class="btn btn-info pe-7s-pen m-1"> --}}
                                        </a>
                                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST"
                                            class="delete-form">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger pe-7s-trash m-1 delete-button"></button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <form action="">
                                        <input type="checkbox" name="" id="">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $sliders->links('pagination::bootstrap-4') }}
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
