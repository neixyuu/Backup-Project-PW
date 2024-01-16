@extends('layout.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Model edit </h4>

                <form class="forms-sample" method="POST" action="{{ route('typemodel.update', $typemodel->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="model">Type Model</label>
                        <input type="text" class="form-control" name="model" placeholder="Type Model"
                            value="{{ $typemodel->model }}">
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
