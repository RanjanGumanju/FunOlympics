@extends('layouts.master')


@section('content')
    <div class="row d-flex justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gender:</strong>
                                {!! Form::select('gender', ['1' => 'Male', '2' => 'Female', '3' => 'Others'], $user->gender, [
                                    'class' => 'form-control',
                                ]) !!}

                            </div>
                            @if ($errors->has('gender'))
                                <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Country:</strong>
                                {!! Form::select('country', country_list(), $user->country, ['class' => 'form-control']) !!}

                            </div>
                            @if ($errors->has('country'))
                                <span class="text-danger text-left">{{ $errors->first('country') }}</span>
                            @endif
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date of Birth:</strong>
                                {!! Form::date('date_of_birth', '', [], ['class' => 'form-control']) !!}

                            </div>
                            @if ($errors->has('date_of_birth'))
                                <span class="text-danger text-left">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Password:</strong>
                                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Confirm Password:</strong>
                                {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                            </div>
                        </div> --}}
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role:</strong>
                                {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!}
                            </div>
                        </div> --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
