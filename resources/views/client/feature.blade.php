@php
    $title = "Khoá học ".$feature->name;
@endphp
@extends("layouts.client")
@section("slider")
    <style>
        .custom-bg {
            background-image: url("{{$feature->thumbnail}}");
        }
    </style>
    <div class="banner-single banner-wrap banner-bg custom-bg">
        <div class="container-fluid">
            <div class="banner-content">
                <div class="transparent-block">
                    <div class="banner-caption">
                        <div class="position-relative mb-4">
                            {{--                            <a href="{{route('play',['slug'=>$feature->slug,'episode'=>1])}}" class="d-flex align-items-center">--}}
                            {{--                                <div class="play-icon">--}}
                            {{--                                    <div class="circle pulse"></div>--}}
                            {{--                                    <div class="circle">--}}
                            {{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">--}}
                            {{--                                            <polygon points="40,30 65,50 40,70"></polygon>--}}
                            {{--                                        </svg>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <h2 class="banner-name text-white font-weight-700">Play {{$feature->name}}</h2>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                </div>
                <!-- Transparent Block End -->
            </div>
            <!-- Banner Content End -->
        </div>
        <!-- Container End -->
    </div>
@endsection
@section("content")
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
                                    <img class="img-fluid" src="{{$feature->thumbnail}}" alt="">
                                    <div class="top-badge">
                                        <div class="video-badge">
                                            <img class="img-fluid" src="{{asset("images/top-movies.png")}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Play Thumb End -->
                            {{--                                <div class="thumb-details text-center">--}}
                            {{--                                    <span> 1080p</span>--}}
                            {{--                                    <span>24p</span>--}}
                            {{--                                    <span><img class="img-fluid" src="images/dts-logo.png" alt=""></span>--}}
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
                                <h2 class="play-title">{{$feature->name}}</h2>
                            </div>
                            <!-- Title Block -->
                            <div class="details-info mb-4">
                                {{--                                <span><i class="icofont-user mr-2" aria-hidden="true"></i> 18+</span>--}}
                                <span><i class="icofont-clock-time mr-2"
                                         aria-hidden="true"></i> {{$feature->starter}}</span>
                                {{--                                <span><i class="icofont-simple-smile mr-2" aria-hidden="true"></i> 2021</span>--}}
                                {{--                                <span><i class="icofont-movie mr-2" aria-hidden="true"></i> Action</span>--}}
                                {{--                                <span><i class="icofont-world mr-2" aria-hidden="true"></i> United States</span>--}}
                            </div>
                            <!-- Details Info -->
                            <div class="details-desc">
                                <p>{{$feature->description}}</p>
                            </div>
                            <!-- Details Desc -->
                            <div class="movie-persons mb-4">
                                <div class="person-block">
                                    <h5 class="title">Giảng Viên</h5>
                                    <p class="name">{{$feature->coach}}</p>
                                </div>
                                <!-- Person Block -->
                            {{--                                <div class="person-block">--}}
                            {{--                                    <h5 class="title">Cast</h5>--}}
                            {{--                                    <p>Christian Bale, Michael Cain, Gary Oldman, Anne Hathway, Tom Hardy, Marion Cotillard</p>--}}
                            {{--                                </div>--}}
                            <!-- Person Block -->
                            </div>
                            <!-- Movie Persons -->
                            <div class="details-buttons">
                                <div class="row d-flex align-items-center">
{{--                                    <div class="col-6 col-xl mb-xl-0 mb-3">--}}
{{--                                        <a href="{{route('play',['slug'=>$feature->slug,'episode'=>1])}}"--}}
{{--                                           class="btn d-block hvr-sweep-to-right"--}}
{{--                                           tabindex="0"><i class="icofont-ui-play mr-2" aria-hidden="true"></i>Xem</a>--}}
{{--                                    </div>--}}
                                    <!-- Col End -->
                                    <div class="col-6 col-xl mb-xl-0 mb-3">
                                        <a href="https://fb.me/linhcuenini"
                                           class="btn d-block hvr-sweep-to-right" tabindex="0"><i
                                                class="icofont-check mr-2" aria-hidden="true"></i>Yêu cầu tư vấn</a>
                                    </div>
                                    <!-- Col End -->
                                    <div class="col-6 col-xl mb-xl-0 mb-3">
                                        <a id="trailer" class="btn d-block hvr-sweep-to-right" tabindex="0"
                                           data-toggle="modal" data-target="#trailer-modal" aria-hidden="true"><i
                                                class="icofont-ui-movie mr-2" aria-hidden="true"></i>Video mẫu</a>
                                        <!-- Modal Trailer -->
                                        <div class="modal fade" id="trailer-modal" tabindex="0" role="dialog"
                                             aria-labelledby="trailer-modal" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document" id="trailerModal">
                                                <!-- Modal Content -->
                                                <div class="modal-content">
                                                    <!-- modal header -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Video mẫu</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <video class="video d-block" controls="" loop="">
                                                            <source src="{{asset("video/01-video.mp4")}}"
                                                                    type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <!-- Modal Body -->
                                                </div>
                                                <!-- Modal Content -->
                                            </div>
                                            <!-- Modal Dialog -->
                                        </div>
                                        <!-- Modal Trailer -->
                                    </div>
                                    <!-- Col End -->
                                    <div class="col-6 col-xl mb-xl-0">
                                        <a id="share" class="btn hvr-sweep-to-right d-block" tabindex="0"
                                           data-toggle="modal" data-target="#share-modal">
                                            <i class="icofont-share mr-2" aria-hidden="true"></i>Chia sẻ</a>
                                        <!-- Modal Share -->
                                        <div class="modal fade" id="share-modal" tabindex="0" role="dialog"
                                             aria-labelledby="share-modal" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document" id="sharemodal">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Chia sẻ</h5>
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
        <!-- Start Related Movies Section -->
        <section class="related-movies">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="block-title">Khóa liên quan</h2>
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
                <div class="row">
                    @foreach($list as $single)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="{{$single->thumbnail}}" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="{{route('play',['slug'=>$feature->slug,'episode'=>1])}}"><i
                                                        class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="{{route("movie",$single->slug)}}"><i
                                                        class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a
                                            href="{{route('play',['slug'=>$feature->slug,'episode'=>1])}}">{{$single->name}}</a>
                                    </h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">{{$single->coach}}</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                    @endforeach
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </section>
        <!-- Related Movies Section End -->
    </div>
    <!-- Main Content End -->
@endsection
