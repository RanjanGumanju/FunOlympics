@extends('layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="mt-2">
                {{-- @include('layouts.partials.messages') --}}
            </div>
            <a href="{{ route('highlights.create') }}" class="btn btn-primary btn-sm float-right">Add Highlight</a>
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" width="1%">#</th>
                            <th scope="col" width="5%">Title</th>
                            <th scope="col" width="10%">Video URL</th>
                            {{-- <th scope="col" width="10%">Username</th> --}}
                            <th scope="col" width="10%">Image</th>

                            <th scope="col" width="10%">Description</th>
                            <th scope="col" width="1%" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($highlights as $i => $highlight)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $highlight->title }}</td>
                                <td>{{ $highlight->video_url }}</td>
                                <td> <img src="{{asset('assets/uploads/'.$highlight->image)}}" width="50%;" height="20%;" alt="image">
                                              
                                </td>
                                <td>{{ $highlight->description_excerpt }}</td>

                                <td>
                                    <a class="btn btn-info" href="{{ route('highlights.show', $highlight->id) }}">Show</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('highlights.edit', $highlight->id) }}">Edit</a>
                                </td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['highlights.destroy', $highlight->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                
            </div>
            
        </div>
        {{-- <div class="d-flex"> --}}
            {{-- {!! $highlights->links() !!} --}}
            {{-- </div> --}}
    </div>
@endsection
