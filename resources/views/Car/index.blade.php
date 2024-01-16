@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cars List</h4>
                    <p class="card-description">
                        All Cars On Nightrunners
                    </p>

                    {{-- @if (Auth::user()->role == 'A')

                @endif --}}
                    <a href="{{ route('car.create') }}" class="btn btn-primary btn-rounded btn-fw">Add</a>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Manufacture</th>
                                <th>Type Model</th>
                                <th>Cars</th>
                                <th>Horsepower</th>
                                <th>Gasoline Type</th>
                                <th>Year Production</th>
                                <th>Odometer</th>
                                <th>Cylinder Capacity</th>
                                <th>Transmission</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($car as $item)
                                </tr>
                                <td>
                                    {{ $item['manufacture']['brand'] }}
                                </td>
                                <td>
                                    {{ $item['typemodels']['model'] }}
                                </td>
                                <td>
                                    {{ $item['name'] }}
                                </td>
                                <td>
                                    {{ $item['horsepower'] }} HP
                                </td>
                                <td>
                                    {{ $item['gasoline'] }}
                                </td>
                                <td>
                                    {{ $item['year'] }}
                                </td>
                                <td>
                                    {{ $item['odometer'] }} KM
                                </td>
                                <td>
                                    {{ $item['cylinder'] }} CC
                                </td>
                                <td>
                                    {{ $item['transmission'] }}
                                </td>
                                <td>
                                    {{ $item['price'] }} 万円
                                </td>
                                <td>
                                    <form method="post" action="{{ route('car.destroy',$item->id)}}">
                                        @method('delete')
                                        @csrf
                                      <a href="{{ route('car.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                      <button type="submit" class="btn btn-danger btn-sm show_confirm"
                                              data-toggle="tooltip" title='Delete'
                                              data-nama='{{ $item->name}}'>Delete</button>
                                    </form>
                                </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
