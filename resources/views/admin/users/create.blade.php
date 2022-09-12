@extends('layouts.master')

@section('content')
@include('layouts.partials.messages')
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        {{-- <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div> --}}
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Gender:</strong>
                                    {!! Form::select('gender', ['1'=>'Male','2'=>'Female','3'=>'Others'],[], array('class' => 'form-control')) !!}

                                </div>
                                @if ($errors->has('gender'))
                                    <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Country:</strong>
                                    {!! Form::select('country', country_list(),[], array('class' => 'form-control')) !!}

                                </div>
                                @if ($errors->has('country'))
                                    <span class="text-danger text-left">{{ $errors->first('country') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Date of Birth:</strong>
                                    {!! Form::date('date_of_birth','',[], array('class' => 'form-control')) !!}

                                </div>
                                @if ($errors->has('date_of_birth'))
                                    <span class="text-danger text-left">{{ $errors->first('date_of_birth') }}</span>
                                @endif
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Password:</strong>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <div class="form-group">
                                    <strong>Confirm Password:</strong>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Role:</strong>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input value="{{ old('username') }}" type="text" class="form-control" name="username"
                                    placeholder="Username" required>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
