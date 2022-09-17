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


<section>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center py-5" style="color: white">
            <h1 class="text-white">Live Match Video</h1>
        </div>
        <div class="row">

            @foreach ($games->take(2) as $game)
                <div class="col-md-6 mb-2 h-50">
                    <div class="card profile-card-1">
                        {{-- <img src="{{ asset('assets/uploads/' . $item->image) }}" alt="profile-image"
                        class="profile" /> --}}
                        {!! $game->video_front_html !!}

                        <div class="card-content" style="color: #131313">
                           
                            {{-- <h2>{{ $item->title }}</h3> --}}
                        </div>
                    </div>
                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
                </div>
            @endforeach
        </div>
    </div>
</section>


