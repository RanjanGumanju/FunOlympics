@extends('front.master')


@section('banner')
    @include('front.layouts.partials.banner')
@endsection

@section('content')
    @include('layouts.partials.messages')

    @include('front.news-list')
    @include('front.highlights-list')
    @include('front.games-list-video')
@endsection

@section('scripts')
    <script>
        var user = "{{ Auth::user() ? true : false }}";
        if(user){
           $('#myVideoOverlay').hide(); 
        }
        $(function() {
            $('#myVideoOverlay').click(function(e) {
                e.preventDefault();
                if (!user) {
                    alert('You have to  login first!');
                    return false;
                }
                return true;
            });
        });
    </script>
@endsection
