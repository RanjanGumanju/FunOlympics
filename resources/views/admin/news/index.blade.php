@extends('layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="mt-2">
                {{-- @include('layouts.partials.messages') --}}
            </div>
            <a href="{{ route('news.create') }}" class="btn btn-primary btn-sm float-right">Add News</a>
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" width="1%">#</th>
                            <th scope="col" width="5%">Title</th>
                            {{-- <th scope="col" width="10%">Username</th> --}}
                            <th scope="col" width="10%">Image</th>
                            <th cope="col" width="10%">Created By</th>

                            {{-- <th scope="col" width="10%">Description</th> --}}
                            <th scope="col" width="1%" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $i => $new)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $new->title }}</td>
                                <td> <img src="{{asset('assets/uploads/'.$new->image)}}" width="30%;" height="20%;" alt="image">
                                              
                                </td>
                                <td>{{ $new->user->name }}</td>
                                {{-- <td>{{ $new->description }}</td> --}}

                                <td>
                                    <a class="btn btn-info" href="{{ route('news.show', $new->id) }}">Show</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('news.edit', $new->id) }}">Edit</a>
                                </td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['news.destroy', $new->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
