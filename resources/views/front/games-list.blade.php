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

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <a href="{{ $route }}">
                            <div class="picture">
                                <img class="img-fluid" src="{{ asset('assets/uploads/' . $game->image) }}">
                            </div>
                        </a>

                        <div class="team-content">
                            <a href="{{ $route }}">
                                <h3 class="name text-primary">{{ $game->title }}</h3>
                            </a>
                        </div>
                    </div>
                </div>


               
            @endforeach


        </div>

    </div>
</section>
