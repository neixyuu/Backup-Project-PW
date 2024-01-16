@extends('layout.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manufacture edit </h4>

                <form class="forms-sample" method="POST" action="{{ route('manufacture.update', $manufacture->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="brand">Manufacturer</label>
                        <input type="text" class="form-control" name="brand" placeholder="Manufacturer"
                            value="{{ $manufacture->brand }}">
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
@endsection
