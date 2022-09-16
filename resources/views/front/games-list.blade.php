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

<section class="similar">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center py-5" style="color: white">
            <h1 class="text-white">Live Match</h1>
        </div>
        <div class="row  gy-5">

            @foreach ($games as $game)
                @php
                    $route = '#';
                    if (Auth::check()) {
                        $route = route('front.live.match.detail', $game->id);
                    }
                @endphp
                <div class=" col-sm-6 col-lg-4 ">

                    <div class="property-box" style="background: rgb(15 15 16);">
                        {{-- <img src="{{ asset('assets/uploads/' . $game->image) }}" alt="profile-sample1"
                            class="background" /> --}}
                        <a href="{{ $route }}">
                            <div class="img">
                                <img src="{{ asset('assets/uploads/' . $game->image) }}" alt=""
                                    class="img-fluid">
                            </div>
                        </a>
                        <div class="new">
                            live
                        </div>
                        <div class="caption pt-3">
                            <h6 class="pt-2">{{ $game->title }}</h6>
                            <span class="location text-white"> {!! $game->description_excerpt !!}</span> <br>


                            <div class="price d-flex justify-content-between">
                                <a class="property-price d-flex" href="{{ $route }}">
                                    <h5>Watch</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</section>
