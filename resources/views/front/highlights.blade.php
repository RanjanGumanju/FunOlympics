@extends('front.master')
@section('css')
    {{-- <style>
        .card {
            /* position: relative; */
            box-shadow: 5px 5px 10px 5px lightblue;
        }

        .card p {
            position: absolute;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            left: 0;
            right: 0;
            margin: 0 auto;
            top: 50%;
        }

        .cardtext_border {
            position: absolute;
            color: #fff;
            left: 0;
            right: 0;
            top: 60%;
            margin: 0 auto;
            border-bottom: 5px solid;
            width: 50px;
        }
    </style> --}}
    <style>
        .img-fluid {
            /* height: 300px !important; */
        }
    </style>
@endsection

@section('content')
    <section class="similar">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center py-5" style="color: white">
                <h1 class="text-white">Live Match</h1>
            </div>

            <div class="row">
                <div class="col-4 mb-2">
                    <div class="card bg-dark text-white h-100">
                        <img class="card-img" src="{{ asset('assets/img/news.jpg') }}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-2">
                    <div class="card bg-dark text-white h-100">
                        <img class="card-img" src="{{ asset('assets/img/news.jpg') }}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-2">
                    <div class="card bg-dark text-white h-100">
                        <img class="card-img" src="{{ asset('assets/img/news.jpg') }}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                // margin: 10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                margin: 95,
                navText: [
                    "<i class='fa-solid fa-circle-chevron-left'></i>",
                    "<i class='fa-solid fa-circle-chevron-right'></i>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        })
    </script>
@endsection
