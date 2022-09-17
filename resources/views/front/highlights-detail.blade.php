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
    <section class="adverties-banner mt-5 banner-top">
        <div class="container banner">
            <div class="row gx-0 gy-5">
                <div class="col-lg-5">
                    <div class="adverties-content">
                        <div class="advertise-title py-3">
                            <h1 class="text-dark"> {!! $highlight->title !!}</h1>
                            <div class="text-dark">
                                <p>
                                    {!! $highlight->description !!}
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="adberties-img">
                        {!! $highlight->video_html !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
