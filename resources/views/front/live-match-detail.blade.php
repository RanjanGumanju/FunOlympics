@extends('front.master')
@section('css')
    <style>
        body {
            font: 15px arial, sans-serif;
            background-color: #d9d9d9;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        #bodybox {
            margin: auto;
            max-width: 550px;
            font: 15px arial, sans-serif;
            background-color: white;
            border-style: solid;
            border-width: 1px;
            padding-top: 20px;
            padding-bottom: 25px;
            padding-right: 25px;
            padding-left: 25px;
            box-shadow: 5px 5px 5px grey;
            border-radius: 15px;
        }

        #chatborder {
            border-style: solid;
            background-color: #f6f9f6;
            border-width: 3px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
            padding-top: 10px;
            padding-bottom: 15px;
            padding-right: 20px;
            padding-left: 15px;
            border-radius: 15px;
        }

        .chatlog {
            font: 15px arial, sans-serif;
        }

        #chatbox {
            font: 17px arial, sans-serif;
            height: 22px;
            width: 100%;
        }

        h1 {
            margin: auto;
        }

        pre {
            background-color: #f0f0f0;
            margin-left: 20px;
        }
    </style>
@endsection

@section('content')
    <section class="property mt-5 ">
        <div class="container">
            <div class="row gx-5 gy-5">
                <div class="d-flex justify-content-between owner-detail my-3">
                    <div class="title">
                        <h2>{{ $game->title }}</h2>
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

                    <div class="property-detail mt-5 bg-white">
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-sm-3">
                                    <h5 class="text-dark">description</h5>
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

                <div class=" col-lg-4 display-hide-mobile1  pb-cmnt-container">

                    <div class="row">
                        <div class=" col-md-6  col-lg-12">
                            <form class="form-detail bg-dark">
                                <h3 class="pb-3">Comment</h3>
                                <p>Hello world</p>
                               
                                <div class="mb-4">
                                    <div class="user-input">

                                        <input type="textarea" class="form-control text-field login-num"
                                            id="exampleInputPassword1">
                                        <label for="" class="place num-label"> <img src="./assets/img/34.svg"
                                                alt="" class="me-1"> Phone</label>
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn email_agent">
                                    <h6 class="d-flex align-items-center "> Submit</h6>
                                </button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
@endsection
