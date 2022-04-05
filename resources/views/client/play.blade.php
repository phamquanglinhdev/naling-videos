@extends("layouts.client")
@section("content")
    <!-- Start Video Player -->
    <div class="video-container">
        <video id="player" class="video d-block" controls="" loop="">
            <source src="{{$video->source}}" type="video/mp4">
        </video>
    </div>
    <!-- Video Player End -->
    <!-- Start Main Content -->
    <div class="main-content">
        <!-- Start Play Details Section -->
        <section class="play-details">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="play-thumb mb-4">
                                    <img class="img-fluid" src="{{$video->Category()->first()->thumbnail}}" alt="">
                                    <div class="top-badge">
                                        <div class="video-badge">
                                            <img class="img-fluid" src="{{asset('images/top-series.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Play Thumb End -->
{{--                                <div class="thumb-details text-center">--}}
{{--                                    <span> 1080p</span>--}}
{{--                                    <span>24p</span>--}}
{{--                                    <span><img class="img-fluid" src="{{asset("images/dts-logo.png")}}" alt=""></span>--}}
{{--                                    <span>7.1</span>--}}
{{--                                </div>--}}
                                <!-- Thumb Details End -->
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-md-9">
                        <div class="play-details-content">
                            <div class="title-block d-flex align-items-center justify-content-between">
                                <h2 class="play-title">{{$video->name}}</h2>
                            </div>
                            <!-- Title Block -->
                            <div class="details-info mb-4">
                                {{--                                <span><i class="icofont-user mr-2" aria-hidden="true"></i> 18+</span>--}}
                                <span><i class="icofont-terminal mr-2" aria-hidden="true"></i>Buổi số : {{$video->episode}}</span>
                                <span><i class="icofont-clock-time mr-2"
                                         aria-hidden="true"></i>{{$video->updated_at}}</span>
                                                                <span><i class="icofont-movie mr-2" aria-hidden="true"></i> {{$video->Category()->first()->name}}</span>
                                {{--                                <span><i class="icofont-world mr-2" aria-hidden="true"></i> United States</span>--}}
                            </div>
                            <!-- Details Info -->
                            <div class="details-desc">
                                <p>{{$video->Category()->first()->description}}</p>
                            </div>
                            <!-- Details Desc -->
                            <div class="movie-persons mb-4">
                                <div class="person-block">
                                    <h5 class="title">Giảng viên</h5>
                                    <p class="name">{{$video->Category()->first()->coach}}</p>
                                </div>
                                <!-- Person Block -->
                                <div class="person-block">
                                    <h5 class="title">Danh mục</h5>
                                    <a href="{{route('movie',$video->Category()->first()->slug)}}">{{$video->Category()->first()->name}}</a>
                                </div>
                                <!-- Person Block -->
                            </div>
                            <!-- Movie Persons -->
                            <div class="details-buttons">
                                <div class="row d-flex align-items-center">
                                {{--                                    <div class="col-6 col-xl mb-xl-0 mb-3">--}}
                                {{--                                        <a href="watch-show.html" class="btn d-block hvr-sweep-to-right" tabindex="0"><i--}}
                                {{--                                                class="icofont-ui-play mr-2" aria-hidden="true"></i>Play</a>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- Col End -->--}}
                                {{--                                    <div class="col-6 col-xl mb-xl-0 mb-3">--}}
                                {{--                                        <a href="watch-show.html" class="btn d-block hvr-sweep-to-right" tabindex="0"><i--}}
                                {{--                                                class="icofont-plus mr-2" aria-hidden="true"></i>MY List</a>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- Col End -->--}}
                                {{--                                    <div class="col-6 col-xl mb-xl-0 mb-3">--}}
                                {{--                                        <a id="trailer" class="btn d-block hvr-sweep-to-right" tabindex="0"--}}
                                {{--                                           data-toggle="modal" data-target="#trailer-modal" aria-hidden="true"><i--}}
                                {{--                                                class="icofont-ui-movie mr-2" aria-hidden="true"></i>Trailer</a>--}}
                                {{--                                        <!-- Modal Trailer -->--}}
                                {{--                                        <div class="modal fade" id="trailer-modal" tabindex="0" role="dialog"--}}
                                {{--                                             aria-labelledby="trailer-modal" aria-hidden="true">--}}
                                {{--                                            <div class="modal-dialog modal-lg" role="document" id="trailerModal">--}}
                                {{--                                                <!-- Modal Content -->--}}
                                {{--                                                <div class="modal-content">--}}
                                {{--                                                    <!-- modal header -->--}}
                                {{--                                                    <div class="modal-header">--}}
                                {{--                                                        <h5 class="modal-title">Trailer</h5>--}}
                                {{--                                                        <button type="button" class="close" data-dismiss="modal"--}}
                                {{--                                                                aria-label="Close">--}}
                                {{--                                                            <span aria-hidden="true"><i class="fas fa-times"></i></span>--}}
                                {{--                                                        </button>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <!-- Modal Body -->--}}
                                {{--                                                    <div class="modal-body">--}}
                                {{--                                                        <video class="video d-block" controls="" loop="">--}}
                                {{--                                                            <source src="video/02-video.mp4" type="video/mp4">--}}
                                {{--                                                        </video>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <!-- Modal Body -->--}}
                                {{--                                                </div>--}}
                                {{--                                                <!-- Modal Content -->--}}
                                {{--                                            </div>--}}
                                {{--                                            <!-- Modal Dialog -->--}}
                                {{--                                        </div>--}}
                                {{--                                        <!-- Modal Trailer -->--}}
                                {{--                                    </div>--}}
                                <!-- Col End -->
                                    <div class="col-6 col-xl mb-xl-0">
                                        <a id="share" class="btn hvr-sweep-to-right d-block" tabindex="0"
                                           data-toggle="modal" data-target="#share-modal">
                                            <i class="icofont-share mr-2" aria-hidden="true"></i>Share</a>
                                        <!-- Modal Share -->
                                        <div class="modal fade" id="share-modal" tabindex="0" role="dialog"
                                             aria-labelledby="share-modal" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document" id="sharemodal">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Share</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                                        </button>
                                                    </div>
                                                    <!-- modal header End -->
                                                    <div class="modal-body">
                                                        <div class="icon-container d-flex">
                                                            <div class="icon-block"><i
                                                                    class="social-icon fab fa-twitter fa-2x"></i>
                                                                <p>Twitter</p>
                                                            </div>
                                                            <div class="icon-block"><i
                                                                    class="social-icon fab fa-facebook fa-2x"></i>
                                                                <p>Facebook</p>
                                                            </div>
                                                            <div class="icon-block"><i
                                                                    class="social-icon fab fa-instagram fa-2x"></i>
                                                                <p>Instagram</p>
                                                            </div>
                                                            <div class="icon-block"><i
                                                                    class="social-icon fab fa-telegram fa-2x"></i>
                                                                <p>Telegram</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal Body End -->
                                                </div>
                                                <!-- Modal Content End -->
                                            </div>
                                            <!-- Modal Dialog End -->
                                        </div>
                                        <!-- Modal Share End -->
                                    </div>
                                    <!-- Col End -->
                                </div>
                                <!-- Row End -->
                            </div>
                            <!-- Details Buttons End -->
                        </div>
                        <!-- Details Content End -->
                    </div>
                    <!-- Col End -->
                </div>
                <!-- row End -->
            </div>
            <!-- Container End -->
        </section>
        <!-- Play Details Section End -->
        <!-- Start Latest Episodes Section -->
        <section class="latest-episodes">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="block-title">Danh sách video của khóa</h2>
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
                <div class="row">
                @foreach($list as $single)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                            <div class="episode-block">
                                <div class="episode-img position-relative">
                                    <img src="{{$single->thumbnail}}" class="img-fluid img-zoom" alt="">
                                    <div class="episode-number">{{$single->episode}}</div>
                                    <div class="episode-play-info">
                                        <div class="episode-play">
                                            <a href="{{route("play",['slug'=>$single->Category()->first()->slug,'episode'=>$single->episode])}}">
                                                <i class="far fa-play-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Episode Img End -->
                                <div class="episode-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-white">{{$single->updated_at}}</span>
                                        <span class="text-primary">2h00m</span>
                                    </div>
                                    <a href="{{route("play",['slug'=>$single->slug,'episode'=>$single->episode])}}">
                                        <h6 class="episode-name text-white mb-0">{{$single->name}}
                                        </h6>
                                    </a>
                                </div>
                                <!-- Episode Description End -->
                            </div>
                            <!-- Episode Block End -->
                        </div>
                @endforeach

                <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </section>
        <!-- Latest Episodes Section End -->
    </div>
    <!-- Main Content End -->
@endsection
