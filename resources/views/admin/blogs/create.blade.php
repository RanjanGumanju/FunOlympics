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
                                    {{-- <textarea id="editor" name="editor"></textarea> --}}

                                    {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control'  , 'id' => 'editor']) !!}


                                    {{-- {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control']) !!} --}}

                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Category:</strong>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value="">sleect</option>

                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                            
                                        @endforeach
                                
                                    </select>

                                </div>
                            </div>
                 

                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('blogs.index') }}" class="btn btn-default">Back</a>
                        </form>

                        
           

                    </div>
                </div>
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
    </div>
@endsection
