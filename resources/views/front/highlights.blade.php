@extends('front.master')
@section('css')
    {{-- <style>
        .card {
            /* position: relative; */
            box-shadow: 5px 5px 10px 5px lightblue;
        }

        .card p {
            position: absolute;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            left: 0;
            right: 0;
            margin: 0 auto;
            top: 50%;
        }

        .cardtext_border {
            position: absolute;
            color: #fff;
            left: 0;
            right: 0;
            top: 60%;
            margin: 0 auto;
            border-bottom: 5px solid;
            width: 50px;
        }
    </style> --}}
    <style>
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
        @import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');

        body {
            font-family: 'Open Sans', sans-serif;
        }

        *:hover {
            -webkit-transition: all 1s ease;
            transition: all 1s ease;
        }

        section {
            float: left;
            width: 100%;
            /* background: #fff; */
            /* fallback for old browsers */
            padding: 30px 0;
        }

        h1 {
            float: left;
            width: 100%;
            color: #232323;
            margin-bottom: 30px;
            font-size: 14px;
        }

        h1 span {
            font-family: 'Libre Baskerville', serif;
            display: block;
            font-size: 45px;
            text-transform: none;
            margin-bottom: 20px;
            margin-top: 30px;
            font-weight: 700
        }

        h1 a {
            color: #131313;
            font-weight: bold;
        }

        /*Profile Card 1*/
        .profile-card-1 {
            font-family: 'Open Sans', Arial, sans-serif;
            position: relative;
            float: left;
            overflow: hidden;
            width: 100%;
            color: #ffffff;
            text-align: center;
            height: 368px;
            border: none;
        }

        .profile-card-1 .background {
            width: 100%;
            vertical-align: top;
            opacity: 0.9;
            -webkit-filter: blur(5px);
            filter: blur(5px);
            -webkit-transform: scale(1.8);
            transform: scale(2.8);
        }

        .profile-card-1 .card-content {
            width: 100%;
            padding: 15px 25px;
            position: absolute;
            left: 0;
            top: 50%;
        }

        .profile-card-1 .profile {
            border-radius: 50%;
            position: absolute;
            bottom: 50%;
            left: 50%;
            max-width: 100px;
            opacity: 1;
            box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
            border: 2px solid rgba(255, 255, 255, 1);
            -webkit-transform: translate(-50%, 0%);
            transform: translate(-50%, 0%);
        }

        .profile-card-1 h2 {
            margin: 0 0 5px;
            font-weight: 600;
            font-size: 25px;
        }

        .profile-card-1 h2 small {
            display: block;
            font-size: 15px;
            margin-top: 10px;
        }

        .profile-card-1 i {
            display: inline-block;
            font-size: 16px;
            color: #ffffff;
            text-align: center;
            border: 1px solid #fff;
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .profile-card-1 .icon-block {
            float: left;
            width: 100%;
            margin-top: 15px;
        }

        .profile-card-1 .icon-block a {
            text-decoration: none;
        }

        .profile-card-1 i:hover {
            background-color: #fff;
            color: #2E3434;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">

                @foreach ($highlights as $item)
                    <div class="col-md-4 mb-2">
                        <div class="card profile-card-1">
                            <img src="{{ asset('assets/uploads/' . $item->image) }}" alt="profile-sample1"
                                class="background" />
                            <img src="{{ asset('assets/uploads/' . $item->image) }}" alt="profile-image" class="profile" />
                            <div class="card-content" style="color: #131313">
                                <h2>{{ $item->title }}</h3>
                            </div>
                        </div>
                        {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('scripts')
@endsection
