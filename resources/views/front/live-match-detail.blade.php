@extends('front.master')

@section('content')
    <section class="property mt-5 ">
        <div class="container">
            <div class="row gx-5 gy-5">
                <div class="d-flex justify-content-between owner-detail my-3">
                    <div class="title">
                        <h2>{{ $game->title }}</h2>
                    </div>

                    <div class="owner">
                        <div>
                            <p class="pb-2">posted by <span class="owner-post"></span></p>
                            <button class="btn-price btn d-flex align-items-center justify-content-center ">
                                <h6>{{ $game->user->name }}</h6>
                            </button>
                            {{-- <p class="mt-2"> <img src="./assets/img/Icon awesome-clock.svg" alt=""> 10hrs ago</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-3">
                        <div class="media">
                            <div class="media-body">
                                {!! $game->video_html !!}
                                {{-- convertYoutube --}}
                                {{-- <iframe src="http://www.youtube.com/embed/{{ $game->video_url }}" width="660" height="415"
                                    frameborder="0" allowfullscreen="" sandbox="allow-scripts"></iframe> --}}
                                    {{-- <iframe src="{{ convertYoutube($game->video_url) }}" width="660" height="415"
                                        frameborder="0" allowfullscreen="" sandbox="allow-scripts"></iframe> --}}
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
                                        {!! $game->description !!}
                                    </p>
                                    {{-- <a href="" class="see">see more</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

                <div class=" col-lg-4 display-hide-mobile">
                    <div class="row">
                        <div class=" col-md-6  col-lg-12">
                            <form class="form-detail">
                                <h3 class="pb-3">Chat Section</h3>
                                <div class="mb-4">
                                    <div class="user-input">

                                        <input type="textarea" class="form-control text-field plogin-name"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                </div>

                                <button type="submit" class="btn email_agent">
                                    <h6 class="d-flex align-items-center ">Chat</h6>
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
