<section class="similar">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between py-5">
            <h1>Live Match</h1>
        </div>
        <div class="row  gy-5">
            @foreach ($games as $game)
                <div class=" col-sm-6 col-lg-4 ">
                    <div class="property-box">
                        <a href="{{ route('front.live.match.detail',$game->id) }}">
                            <div class="img">
                                @auth
                                {!! $game->video_html !!}
                                @else
                                 <img src="{{ asset('assets/uploads/' . $game->image) }}" alt=""
                                    class="img-fluid">
                                @endauth

                               
                            </div>
                        </a>
                        <div class="new">
                            live
                        </div>
                        <div class="caption pt-3">
                            <h6 class="pt-2">{{ $game->title }}</h6>
                            <span class="location"> <img src="./assets/img/Iconly-Bulk-Location.svg" alt=""
                                    class="svg-img-color"> {!! $game->description !!}</span> <br>

                            <div class="price d-flex justify-content-between">
                                <button class="property-price d-flex">
                                    <h5>Watch</h5>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</section>