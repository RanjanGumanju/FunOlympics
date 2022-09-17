@extends('front.master')

@section('banner')
    @include('front.layouts.partials.banner')
@endsection

@section('content')
@include('layouts.partials.messages')

    @include('front.news-list')
    @include('front.games-list-video')
    @include('front.games-list')

@endsection
