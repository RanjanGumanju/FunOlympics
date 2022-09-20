@extends('front.master')

@section('content')
<section class="similar">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center py-5" style="color: white">
            <h1 class="text-white">Blogs List</h1>
        </div>
        <div class="row  gy-5">

            @foreach ($blog as $value)
                @php
                    $route = '#';
                    if (Auth::check()) {
                        $route = route('front.live.match.detail', $value->id);
                    }
                @endphp

                <div class="row">
                    <div class="col-md-6" style="padding: 7px 73px;">
                        <a href="{{ $route }}">
                            <div class="img">
                                <img src="{{ asset('assets/uploads/' . $value->image) }}" alt=""
                                    class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        
                            <h6 class="val">{{ $value->title }}</h6>
                            <span class="location text-white"> {!! $value->description_excerpt !!}</span> <br>


                            <div class="price d-flex justify-content-between" style="background: black;width: 88px;max-width: 88px;border-radius: 15%;">
                                <a class="property-price d-flex" href="{{ $route }}">
                                    <h5>Watch</h5>
                                </a>
                            </div>
                        
                    </div>
                </div>
             
            @endforeach


        </div>

    </div>
</section>
@endsection


@section('css')
    <style>
        .property-box .background {
            width: 100%;
            vertical-align: top;
            opacity: 0.9;
            -webkit-filter: blur(5px);
            filter: blur(5px);
            -webkit-transform: scale(1.8);
            transform: scale(2.8);
        }
    </style>
@endsection

{{-- 

<div class=" col-sm-6 col-lg-4 ">

    <div class="property-box" style="background: rgb(15 15 16);">
       
        <a href="{{ $route }}">
            <div class="img">
                <img src="{{ asset('assets/uploads/' . $value->image) }}" alt=""
                    class="img-fluid">
            </div>
        </a>
        <div class="new">
            live
        </div>
        <div class="caption pt-3">
            <h6 class="pt-2">{{ $value->title }}</h6>
            <span class="location text-white"> {!! $value->description_excerpt !!}</span> <br>


            <div class="price d-flex justify-content-between">
                <a class="property-price d-flex" href="{{ $route }}">
                    <h5>Watch</h5>
                </a>
            </div>
        </div>
    </div>
</div> --}}