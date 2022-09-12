<section class="similar" >
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
                    <div class="property-box">
                        <a href="{{ $route }}">
                            <div class="img">

                                <img src="{{ asset('assets/uploads/' . $game->image) }}" alt="" class="img-fluid">

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
