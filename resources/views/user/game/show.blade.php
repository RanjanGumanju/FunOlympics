@extends('layouts.master')

@section('content')
    <div class="card border-left-primary mb-2">
        <div class="card-body">
            <div class="mt-4 ">
                <h2 class="mb-4" style="text-align: center">
                    {{ $game->title }}
                </h2>
                <div class="row">
                    <div col="col-lg-6">
                        <div class="media">
                            <div class="media-body">
                                <iframe src="https://www.youtube.com/embed/5Peo-ivmupE" width="660" height="415"
                                    frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                        <div class="d-flex flex-column comment-section">
                            <div class="bg-white p-2">
                                <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                        src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                    <div class="d-flex flex-column justify-content-start ml-2"><span
                                            class="d-block font-weight-bold name">Marry Andrews</span></div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text">Lorem ipsum dolor sit amet, </p>
                                </div>
                            </div>
                            <div class="bg-light p-2">
                                <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                                        src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                                </div>
                                <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none"
                                        type="button">Post comment</button><button
                                        class="btn btn-outline-primary btn-sm ml-1 shadow-none"
                                        type="button">Cancel</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-left-info">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <p> <b>Description:</b>
                        {!! $game->description !!}
                    </p>
                </div>
                <div class="col-lg-12">
                    <hr>
                    <h2 style="text-align: center">Score Board</h2>

                    <table class="table table-sm table-light">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
