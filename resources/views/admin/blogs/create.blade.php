@extends('layouts.master')

@section('content')
    {{-- @include('layouts.partials.messages') --}}
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        {{-- <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div> --}}
                        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    {!! Form::file('image', null, ['placeholder' => 'image', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control']) !!}

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('blogs.index') }}" class="btn btn-default">Back</a>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
