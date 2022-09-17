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
        /* body {
                    font-family: tahoma;
                    height: 100vh;
                    background-image: url(https://picsum.photos/g/3000/2000);
                    background-size: cover;
                    background-position: center;
                    display: flex;
                    align-items: center;
                } */


        
    </style>
@endsection

@section('content')
    @include('front.highlights-list')
@endsection

@section('scripts')
@endsection
