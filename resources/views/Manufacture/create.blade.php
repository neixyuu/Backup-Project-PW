@extends('layout.main')
@section('content')
    <h2>Add New Data</h2>

    {{-- <div class="row"> --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Manufacturer</h4>

                    <form class="forms-sample" method="POST" action="{{ route('manufacture.store') }}"> @csrf
                        <div class="form-group">
                            <label for="brand">Manufacturer Name</label>
                            <input type="text" class="form-control" name="brand" placeholder="Brand">
                            @error('brand')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('manufacture') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection
