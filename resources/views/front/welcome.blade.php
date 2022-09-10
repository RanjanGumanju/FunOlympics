@extends('front.master')

@section('banner')
    @include('front.layouts.partials.banner')
@endsection

@section('content')
    @include('front.news-list')
    @include('front.games-list')
@endsection
