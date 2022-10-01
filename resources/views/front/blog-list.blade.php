@extends('front.master')

@section('content')


<section class="tranding">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center py-5">
            <h1 class="text-white">Recent Blogs</h1>
        </div>
        <div class="row gy-4">
            @foreach ($blog as $new)
                <div class="col-sm-6 col-lg-6">

                    <div class="property-box  property-box-1 d-flex bg-dark">
                        <div class="img-box" style="overflow: hidden;">
                            <a href="{{ route('front.news.detail',$new->id) }}">
                                <img src="{{ asset('assets/uploads/' . $new->image) }}" alt="" class="img-fluid"
                                    style="flex-basis:20% ;">
                            </a>
                        </div>
                        <div class="caption pt-3">
                            <h6 class="pt-2">{{ $new->title }}</h6>
                            <span class="location text-white" style="font-weight:200px"> {!! $new->description_excerpt !!}</span> <br>

                            <!-- <div class="price d-flex justify-content-between">
                                <a class="property-price d-flex" href="{{ route('front.news.detail',$new->id) }}">

                                    <h5> Read More..</h5>
                                </a>

                            </div> -->
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

