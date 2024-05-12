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
                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @foreach ($settings as $key => $value)
                        <div class="position-relative row form-group">
                            {{-- Hidden input to submit the key --}}
                            <input type="hidden" name="settings[{{$key}}]{{$value}}" value="{{ $key }}">

                            {{-- Display the key (optional) --}}
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{ $key }}" disabled>
                            </div>

                            {{-- Input to submit the value --}}
                            <div class="col-sm-10">
                                <input type="text" name="settings[{{$key}}]{{$value}}" class="form-control" value="{{ $value }}">
                            </div>
                        </div>
                    @endforeach
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
