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

        .scroll {
            width: auto;
            max-height: 200px;
            overflow-y: auto;
        }
    </style>
@endsection

@section('content')
    <section class="property mt-5 ">
        <div class="container">
            <div class="row gx-5 gy-5">
                <div class="d-flex justify-content-between owner-detail my-3">
                    <div class="title">
                        <h2>{{ $highlight->title }}</h2>
                    </div>
                </div>
                <div class="col-lg-12  ">
                    <div class="media d-flex justify-content-center">
                        <!-- <img src="{{ asset('assets/uploads/' . $highlight->image) }}" alt="" class=""
                        style="width:50%;"> -->
                        <div class="media-body">
                        {!! $highlight->video_html !!}
                        </div>
                    </div>


                    <div class="property-detail mt-5 bg-white">
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-sm-3">
                                    <h5 class="text-dark">Description</h5>
                                </div>
                                <div class="col-sm-9 ">
                                    <p class="description">
                                        {!! $highlight->description !!}
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

