@extends('layouts.master')

@section('content')
    <div class="mb-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
        @role('admin')
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
        @endrole
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-md-6">

            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/img/user.png') }}"
                            alt="User profile picture" style="max-width: 30%;">
                    </div>
                    <h3 class="profile-username text-center">{{ $user->name }}</h3>
                    <p class="text-muted text-center">{{ $user->email }}</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Date of Birth</b> <a class="float-right">{{ $user->date_of_birth }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Gender</b> <a class="float-right">{{ $user->gender?check_gender()[$user->gender]:'' }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Country</b> <a class="float-right">{{ $user->country?country_list()[$user->country]:'' }}</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>


    </div>
@endsection
