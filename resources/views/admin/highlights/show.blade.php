@extends('layouts.master')

@section('content')
    <div class="mt-4">
        <a href="{{ route('highlights.edit', $highlight->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('highlights.index') }}" class="btn btn-default">Back</a>
    </div>
    <hr>
    <div class="row">

        <!-- Border Left Utilities -->
        <div class="col-lg-12">

            <div class="card mb-4 py-3 border-left-primary">
                <div class="card-body">
                    <div class="container mt-4">
                        <div>
                            Name: {{ $highlight->title }}
                        </div>
                        <div class="row">
                        <div col="col-md-8">
                            <div class="media">
                                <div class="media-body">
                                    <iframe src="{{ url('https://www.youtube.com/embed/5Peo-ivmupE') }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div col="col-md-4" style="margin-left: 33px;">
                            <img src="{{asset('assets/img/'.$highlight->image)}}" alt="" style="width: 488px;max-width: 488px;">
                        </div>
                        </div>
                        <div>
                            Decription: {{ $highlight->description }}
                        </div>
                    
                        <div>
                            {{-- Decription: {{ $highlight->image }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
