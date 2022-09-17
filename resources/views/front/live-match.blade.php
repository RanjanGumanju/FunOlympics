@extends('front.master')
@section('css')
    <style>
        body {
            /* font-family: tahoma;https://picsum.photos/g/3000/2000
            height: 100vh; */
            background-image: url('../../../assets/img/3.jpg');
            background-size: cover;
            background-position: center;
            /* display: flex; */
            /* align-items: center; */
        }
    </style>

@endsection

@section('content')
        @include('front.games-list')
@endsection