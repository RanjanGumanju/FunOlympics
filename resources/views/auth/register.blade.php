@extends('front.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 d-none d-lg-block">

<<<<<<< HEAD
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">

                                <img style="display: block;" src="{{ asset('assets/img/brand_logo.svg') }}" width="433"
                                    height="350">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">FunOlympics Games 2022</h1>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                                placeholder="Name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">

                                            <select class="form-control @error('country') is-invalid @enderror" name="country" required >
                                                <option value="0">Select country:</option>
                                                @foreach (country_list() as $key => $item)
                                                <option value="{{ $key }}">{{ $item }}</option>
                                                @endforeach
                                              </select>

                                           @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Confirm password">

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Register') }}
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="">Sign In!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
=======
                {{-- <img style="display: block;" src="{{ asset('assets/img/brand_logo.svg') }}" width="433"
                    height="350"> --}}
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Fun Olympics Games 2022</h1>
>>>>>>> 60173c8c37d7865f9fba02eb41a5f4cc12df3ed0
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="Full Name:"> Full Name:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for=""> Email:</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for=""> Select Gender:</label>

                            <select class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                <option value="">Select gender:</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for=""> Date of Birth:</label>

                            <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth"
                            placeholder="Date of Birth">

                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for=""> Select Country:</label>

                            <select class="form-control @error('country') is-invalid @enderror" name="country" required>
                                <option value="0">Select country:</option>
                                @foreach (country_list() as $key => $item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>

                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for=""> Password:</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for=""> Confirm Password:</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Confirm password">

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block" style="margin-left: 200px">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <hr>
                        <div class="text-center">
                            <a class="thicker text-white" href="">Login In!</a>
                        </div>
                    </form>
                    <hr>

                </div>
            </div>
        </div>
    </div>
@endsection
