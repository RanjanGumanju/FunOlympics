@extends('front.master')

@section('content')
    <section class="property mt-5 ">
        <div class="container">
            <div class="row gx-5 gy-5">
                <div class="d-flex justify-content-between owner-detail my-3">
                    <div class="title">
                        <h2>{{ $new->title }}</h2>
                    </div>

                    <div class="owner">
                        <div>
                            <p class="pb-2">posted by <span class="owner-post"></span></p>
                            <button class="btn-price btn d-flex align-items-center justify-content-center ">
                                {{-- <h6>{{ $new->user->name }}</h6> --}}
                            </button>
                            {{-- <p class="mt-2"> <img src="./assets/img/Icon awesome-clock.svg" alt=""> 10hrs ago</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-3">
                       
                        <div class="media">
                            <img src="{{ asset('assets/uploads/' . $new->image) }}" alt="" class=""
                            style="">
                            <div class="media-body">
                               
                            </div>
                        </div>

                    </div>

                    <div class="property-detail mt-5">
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-sm-3">
                                    <h5>description</h5>
                                </div>
                                <div class="col-sm-9 ">
                                    <p class="description">
                                        {!! $new->description !!}
                                    </p>
                                    {{-- <a href="" class="see">see more</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>
@endsection
