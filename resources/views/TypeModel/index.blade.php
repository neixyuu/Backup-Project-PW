@extends('layout.main')
@section('content')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Model Name</h4>
                    <p class="card-description">
                        All Model On Nightrunners
                    </p>

                    {{-- @if (Auth::user()->role == 'A')

                @endif --}}
                    <a href="{{ route('typemodel.create') }}" class="btn btn-primary btn-rounded btn-fw">Add</a>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    @foreach ($typemodel as $item)
                                </tr>
                                <td>
                                    {{ $item['model'] }}
                                </td>
                                <td>
                                    <form method="post" action="{{ route('typemodel.destroy',$item->id)}}">
                                        @method('delete')
                                        @csrf
                                      <a href="{{ route('typemodel.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                      <button type="submit" class="btn btn-danger btn-sm show_confirm"
                                              data-toggle="tooltip" title='Delete'
                                              data-nama='{{ $item->model}}'>Delete</button>
                                    </form>
                                </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
