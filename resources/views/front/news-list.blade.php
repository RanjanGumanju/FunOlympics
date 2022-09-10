<section class="tranding mt-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between py-5">
            <h1>News</h1>
        </div>
        <div class="row gy-4">
            @foreach ($news as $new)
                <div class="col-sm-12 col-lg-6">

                    <div class="property-box  property-box-1 d-flex ">
                        <div class="img-box" style="overflow: hidden;">
                            <a href="property.html">
                                <img src="{{ asset('assets/uploads/' . $new->image) }}" alt="" class="img-fluid"
                                    style="flex-basis:20% ;">
                            </a>
                        </div>
                        <div class="caption pt-3">
                            <h6 class="pt-2">{{ $new->title }}</h6>
                            <span class="location"> <img src="./assets/img/Iconly-Bulk-Location.svg" alt=""
                                    class="svg-img-color"> {!! $new->description !!}</span> <br>

                            <div class="price d-flex justify-content-between">
                                <button class="property-price d-flex">

                                    <h5> Read More..</h5>
                                </button>

                            </div>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>
    </div>
</section>