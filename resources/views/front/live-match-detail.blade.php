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

        /* //test */
        body {
            background-color: #f7f6f6
        }

        .card {

            border: none;
            box-shadow: 5px 6px 6px 2px #e9ecef;
            border-radius: 4px;
        }


        .dots {

            height: 4px;
            width: 4px;
            margin-bottom: 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .badge {

            padding: 7px;
            padding-right: 9px;
            padding-left: 16px;
            box-shadow: 5px 6px 6px 2px #e9ecef;
        }

        .user-img {

            margin-top: 4px;
        }

        .check-icon {

            font-size: 17px;
            color: #c3bfbf;
            top: 1px;
            position: relative;
            margin-left: 3px;
        }

        .form-check-input {
            margin-top: 6px;
            margin-left: -24px !important;
            cursor: pointer;
        }


        .form-check-input:focus {
            box-shadow: none;
        }


        .icons i {

            margin-left: 8px;
        }

        .reply {

            margin-left: 12px;
        }

        .reply small {

            color: #b7b4b4;

        }


        .reply small:hover {

            color: green;
            cursor: pointer;

        }
    </style>
@endsection

@section('content')
    <section class="property mt-5 ">
        <div class="container">
            <div class="row gx-5 gy-5">
                <div class="d-flex justify-content-between owner-detail my-3">
                    <div class="title">
                        <h2>{{ $game->title }}</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-3">
                        <div class="media">
                            <div class="media-body">
                                {!! $game->video_html !!}
                            </div>
                        </div>

                    </div>

                    <div class="property-detail mt-5 bg-white">
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-sm-3">
                                    <h5 class="text-dark">description</h5>
                                </div>
                                <div class="col-sm-9 ">
                                    <p class="description">
                                        {!! $game->description !!}
                                    </p>
                                    {{-- <a href="" class="see">see more</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="d-flex flex-column col-lg-4 display-hide-mobile1  pb-cmnt-container">

                    <div class="card bg-dark">

                        <h5 class="card-header">
                            <div class="card-title">
                                Chat Box <span
                                    class="comment-count float-right btn btn-info text-white">{{ count($game->comments) }}</span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{-- Total View: <span class="comment-count float-right btn btn-info text-white">1</span> --}}
                            </div>
                        </h5>

                        <div class="card-body">
                            <div class="comments scroll">
                                @if (count($game->comments) > 0)
                                    @foreach ($game->comments as $comment)
                                        <blockquote class="user d-flex flex-row blockquote">
                                            <small class="font-weight-bold text-primary">{{ $comment->user->name }}</small>&nbsp;
                                            <small class="mb-0">{{ $comment->description }}</small>
                                        </blockquote>
                                        <hr />
                                    @endforeach
                                @else
                                    <p class="no-comments">No Comments Yet</p>
                                @endif
                            </div>
                            {{-- Add Comment --}}
                            <div class="add-comment mb-3">
                                @csrf
                                <textarea class="form-control comment" placeholder="Enter Comment"></textarea>
                                <input type="hidden" name="game_id" id="game_id" value="{{ $game->id }}">

                                <button data-post="{{ $game->id }}"
                                    class="btn btn-primary btn-sm mt-2 save-comment">Submit</button>
                            </div>
                            <hr />
                            {{-- List Start --}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        $(".save-comment").on('click', function(e) {
            e.preventDefault();
            var comment = $(".comment").val();
            var game = $("#game_id").val();

            // var game_id = $(this).data('post');
            var vm = $(this);
            // Run Ajax
            $.ajax({
                url: "{{ route('game.comment') }}",
                type: "post",
                dataType: 'json',
                data: {
                    comment: comment,
                    game: game,
                    _token: "{{ csrf_token() }}"
                },
                beforeSend: function() {
                    vm.text('Saving...').addClass('disabled');
                },
                success: function(res) {
                    console.log(res);
                    var _html = '<blockquote class="user d-flex flex-row blockquote">\
                        <small class="font-weight-bold text-primary">james_olesenn</small>\
                                                                        <small class="mb-0">' + comment + '</small>\
                                                                        </blockquote><hr/>';
                    if (res.bool == true) {
                        $(".comments").append(_html);
                        $(".comment").val('');
                        $(".comment-count").text($('blockquote').length);
                        $(".no-comments").hide();
                    }
                    vm.text('Save').removeClass('disabled');
                }
            });
        });
    </script>
@endsection
