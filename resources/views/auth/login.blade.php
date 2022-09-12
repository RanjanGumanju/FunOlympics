@extends('front.master')

@section('content')
    <div class="container" style=" opacity: 1;">
        <div class="row justify-content-center">
            <div class="col-xl-6">
            </div>
            <div class="col-xl-6 col-lg-8 col-md-9">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Fun Olympics Games 2022</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-2">
                            <label for=""> Email:</label>

                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Password:</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"
                                required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group ml-4">

                        <button type="submit" class="btn btn-primary btn-lg btn-user btn-block" style="margin-left: 200px">
                            {{ __('Login') }}
                        </button>
                        </div>
                        <hr>
                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="thicker text-white" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            {{-- <a class="small" href="forgot-password.html">Forgot Password?</a> --}}
                        </div>
                        <div class="text-center text-white">
                            <a class="thicker text-white" href="{{ route('register') }}">Create an Account!</a>
                        </div>
                    </form>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
