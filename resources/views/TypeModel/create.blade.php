@extends('layout.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Model Type</h4>

                <form class="forms-sample" method="POST" action="{{ route('typemodel.store') }}"> @csrf
                    <div class="form-group">
                        <label for="model">Model Type</label>
                        <input type="text" class="form-control" name="model" placeholder="Model">
                        @error('model')
                            <label class="text-danger"> {{ $message }}</label>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ url('typemodel') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
