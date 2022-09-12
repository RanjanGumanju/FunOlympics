@extends('layouts.master')


@section('content')
    
    <div class="card">
        <div class="card-body">
            {!! Form::model($highlight, ['method' => 'PATCH','enctype'=>'multipart/form-data' ,'route' => ['highlights.update', $highlight->id]]) !!}
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Title:</strong>
                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Video URL:</strong>
                        {!! Form::text('video_url', null, array('placeholder' => 'Video Url','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" >
                    <img src="{{asset('assets/uploads/'.$highlight->image)}}" width="70px;" height="70px;" alt="pic">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}

                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('highlights.index') }}" class="btn btn-default">Back</a>
            
            {!! Form::close() !!}

        </div>
    </div>

@endsection
