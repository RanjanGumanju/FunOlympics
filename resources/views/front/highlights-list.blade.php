<section class="similar">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center py-5" style="color: white;">
            <h1 class="text-white">High-lights</h1>
        </div>

        <div class="row">

            @foreach ($highlights as $item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <a href="{{ route('high-lights.detail', $item->id) }}">
                            <div class="picture">
                                <img class="img-fluid" src="{{ asset('assets/uploads/' . $item->image) }}">
                            </div>
                        </a>

                        <div class="team-content">
                            <a href="{{ route('high-lights.detail', $item->id) }}">
                                <h3 class="name text-primary">{{ $item->title }}</h3>
                            </a>
                            <h4 class="title">{{ $item->description_excerpt }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>