@extends('layouts.master')


@section('content')
    {{-- @include('layouts.partials.messages') --}}

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
                    <img src="{{$blog->image}}" width="70px;" height="70px;" alt="pic">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control'  , 'id' => 'editor']) !!}


                        {{-- {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!} --}}

                    </div>
                </div>

                
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Category:</strong>
                        <select class="form-control" name="category_id">
                            <option value="">sleect</option>

                            @foreach ($categories as $category)

                            <option value="{{$category->id}}">{{$category->name}}</option>
                                
                            @endforeach
                    
                        </select>

                    </div>
                </div>
     
               
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('news.index') }}" class="btn btn-default">Back</a>
            
            {!! Form::close() !!}

        </div>
    </div>

    <div class="col-md-5">
        <form method="POST" action="{{ route('blogs.category') }}" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <div class="form-group">
                    <strong>Model:</strong>
                    {!! Form::text('name', null, ['placeholder' => 'Model', 'class' => 'form-control']) !!}
                </div>
            </div>
            {!! Form::hidden('model', 'blog') !!}
            {!! Form::hidden('code', 0) !!}



            {{-- Str::slug($request->name) --}}
            <button type="submit" class="btn btn-primary">Save</button>
          
        </form>
    </div>

@endsection
