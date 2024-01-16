@extends('layout.main')
@section('title', 'Edit Cars')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit cars</h4>
                    <p class="card-description">
                        Formulir Edit Data Cars
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('car.update', $car->$id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        {{-- Brand --}}
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <select name="manufactures_id" class="form-control">
                                <option value="">Select</option>
                                @foreach ($manufacture as $item)
                                    <option value="{{ $item->id }}"> {{ $item->brand }}</option>
                                @endforeach
                            </select>
                            @error('brand')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- Brand --}}
                        <div class="form-group">
                            <label for="model">Model Type</label>
                            <select name="typemodels_id" class="form-control">
                                <option value="">Select</option>
                                @foreach ($typemodel as $item)
                                    <option value="{{ $item->id }}"> {{ $item->model }}</option>
                                @endforeach
                            </select>
                            @error('model')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- Cars --}}
                        <div class="form-group">
                            <label for="name">Cars</label>
                            <input type="text" class="form-control" name="name" placeholder="Cars Name">
                            @error('name')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- horsepower --}}
                        <div class="form-group">
                            <label for="horsepower">Horsepower</label>
                            <input type="text" class="form-control" name="horsepower" placeholder="Total Horsepower">
                            @error('horsepower')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- Gas type --}}
                        <div class="form-group">
                            <label for="gasoline">Gas type</label>
                            <select class="form-control" name="gasoline">
                                <option value="">Choose Gas type</option>
                                <option value="petrol">Petrol</option>
                                <option value="battery">Battery</option>
                                <option value="diesel">Diesel</option>
                            </select>
                            @error('gasoline')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- Year released --}}
                        <div class="form-group">
                            <label for="year">year</label>
                            <input type="text" class="form-control" name="year" placeholder="Year build">
                            @error('year')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- mileage --}}
                        <div class="form-group">
                            <label for="odometer">Mileage</label>
                            <input type="text" class="form-control" name="odometer" placeholder="Total Mileage">
                            @error('odometer')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- cylinder --}}
                        <div class="form-group">
                            <label for="cylinder">Cylinder</label>
                            <input type="text" class="form-control" name="cylinder"
                                placeholder="Total Cylinder Capacity">
                            @error('cylinder')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- transmission --}}
                        <div class="form-group">
                            <label for="transmission">Transmission type</label>
                            <select class="form-control" name="transmission">
                                <option value="">Choose Transmission Type</option>
                                <option value="AT">Automatic</option>
                                <option value="MT">Manual</option>
                            </select>
                            @error('transmission')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        {{-- price --}}
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" placeholder="Total Price">
                            @error('price')
                                <label class="text-danger"> {{ $message }}</label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="{{ url('mahasiswa') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
