@extends('layouts.master')


@section('content')
    @include('layouts.partials.messages')

    <div class="card">
        <div class="card-body">
            {!! Form::model($blog, ['method' => 'PATCH','enctype'=>'multipart/form-data' ,'route' => ['blogs.update', $blog->id]]) !!}
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Title:</strong>
                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" >
                    <img src="{{asset('assets/uploads/'.$blog->image)}}" width="70px;" height="70px;" alt="pic">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}

                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('news.index') }}" class="btn btn-default">Back</a>
            
            {!! Form::close() !!}

        </div>
    </div>

@endsection
