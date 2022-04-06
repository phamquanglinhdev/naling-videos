@extends("layouts.client")
@section("slider")
    <style>
        .slick-bg.bg-1 {
            background-image: url(https://wallpapercave.com/wp/dMzhWUU.jpg);
        }

        .slick-bg.bg-2 {
            background-image: url(https://th.bing.com/th/id/R.bc228e4a26b306916a0bbd22b18485c1?rik=MmQPV7CA5uqlXQ&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fAWLQo7T.jpg&ehk=3nWW7Mz%2fniZol19%2fBoBILwvmAjEQI%2bNxQBRtBwZs9R0%3d&risl=&pid=ImgRaw&r=0);
        }

        .slick-bg.bg-3 {
            background-image: url(https://wallpapercave.com/wp/pDgmtuY.jpg);
        }

        @if(isset($features))
            @foreach($features as $index => $feature)
                @if($index < 3)
                  .slick-bg.bg-{{$index+1}}    {
            background-image: url({{$feature->poster}});
        }
        @endif
        @endforeach
        @endif
    </style>
    <div class="main-slider" id="main-slider">
        <div class="slider big-slider slider-wrap">
            @if(isset($features))
                @foreach($features as $index => $feature)
                    @if($index < 3)
                        <div class="slide slick-bg bg-{{$index+1}}">
                            <div class="container-fluid position-relative h-100">
                                <div class="slider-content h-100">
                                    <div class="row align-items-center h-100">
                                        <div class="col-xl-6 col-lg-12 col-md-12">
                                            <h3 data-animation-in="fadeInUp" data-delay-in="1"><span
                                                    class="badge bg-danger text-dark">HOT</span></h3>
                                            <h1 data-animation-in="fadeInUp" data-delay-in="1">{{$feature->name}}</h1>
                                            <div class="slide-info" data-animation-in="fadeInUp" data-delay-in="1">
                                                <span>{{$feature->starter}}</span> <span
                                                    class="radius">{{$feature->coach}}</span>
                                            </div>
                                            <p data-animation-in="fadeInUp"
                                               data-delay-in="1">{{$feature->description}}</p>
                                            <div class="slider-buttons d-flex align-items-center"
                                                 data-animation-in="fadeInUp"
                                                 data-delay-in="1">
                                                <a class="btn hvr-sweep-to-right" href="watch-movie.html"
                                                   tabindex="0"><i
                                                        aria-hidden="true" class="fa fa-check mr-2"></i>Đăng ký ngay</a>
                                            </div>
                                        </div>
                                        <!-- Col End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Slider Content End -->
                            </div>
                            <!-- Container End -->
                        </div>
                    @endif
                @endforeach
            @endif

        </div>
        <!-- Slide Wrap End -->
    </div>
@endsection
@section("content")
    <div class="main-content">
        <!-- Start Main Tabs Section -->
    {{--        <section class="main-tabs">--}}
    {{--            <div class="container-fluid">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-12">--}}
    {{--                        <div class="season-tabs">--}}
    {{--                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">--}}
    {{--                                <li class="nav-item" role="presentation">--}}
    {{--                                    <a class="nav-link active" data-toggle="pill" href="#pills-additions" role="tab"--}}
    {{--                                       aria-selected="true">Featured</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="nav-item" role="presentation">--}}
    {{--                                    <a class="nav-link" data-toggle="pill" href="#pills-movies" role="tab"--}}
    {{--                                       aria-selected="false">Movies</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="nav-item" role="presentation">--}}
    {{--                                    <a class="nav-link" data-toggle="pill" href="#pills-shows" role="tab"--}}
    {{--                                       aria-selected="false">Shows</a>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <!-- Season Tabs End -->--}}
    {{--                        <div class="tab-content" id="pills-tabContent">--}}
    {{--                            <div id="pills-additions" class="tab-pane animated fadeInRight show active">--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-aditions/01.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">Iron door</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-aditions/02.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">The Earth</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-aditions/03.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">City dreams</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-aditions/04.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">Divine hand</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-aditions/05.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">Deceived</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-aditions/06.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">Heaven is now</a>--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- Row End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Tap Pane 1 End -->--}}
    {{--                            <div id="pills-movies" class="tab-pane animated fadeInRight">--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-movies/01.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">A dam wind</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-movies/02.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">the message</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-movies/03.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">Verbal messages</a>--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-movies/04.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">hard life</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-movies/05.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">Destiny</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-movies/06.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="movie-single.html">Paper hero</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span--}}
    {{--                                                        class="video-age">+18</span> <span--}}
    {{--                                                        class="video-type">Action</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- Row End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Tap Pane 2 End -->--}}
    {{--                            <div id="pills-shows" class="tab-pane animated fadeInRight">--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-shows/01.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">the border</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-shows/02.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">life or death</a>--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-shows/03.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">Out of life</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-shows/04.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The Month</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-shows/05.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The Journey</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/latest-shows/06.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">Sheets gone</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- Row End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Tap Pane 3 End -->--}}
    {{--                        </div>--}}
    {{--                        <!-- Tab Content End -->--}}
    {{--                    </div>--}}
    {{--                    <!-- Col End -->--}}
    {{--                </div>--}}
    {{--                <!-- Row End -->--}}
    {{--            </div>--}}
    {{--            <!-- Container End -->--}}
    {{--        </section>--}}
    <!-- Main Tabs Section End -->
        <!-- Start Pupular Section -->
        <section class="pupular">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="block-title">Khóa học đang phổ biến</h2>
                        <!-- Start Pupular Slider -->
                        <div class="owl-carousel owl-theme" id="pupular-slider">
                            @foreach($populars as $movie)
                                <div class="item">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="{{($movie->thumbnail)}}"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="{{route("movie",$movie->slug)}}"><i
                                                                class="fas fa-info"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route("play",['slug'=>$movie->slug])}}"><i
                                                                class="fas fa-play"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a
                                                    href="{{route("movie",$movie->slug)}}">{{$movie->name}}</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">{{$movie->starter}}</span>
                                                <span class="video-type">{{$movie->coach}}</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                            @endforeach
                        </div>
                        <!-- Pupular Slider End -->
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </section>
        <!-- Pupular Section End -->
        <!-- Start Office Box Section -->
        <section class="office-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="block-title">TOP 10 KHOÁ HỌC TỐT NHẤT</h2>
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Swiper Slider -->
                        <div class="swiper-container loading pt-0">
                            <div class="swiper-wrapper">
                                @foreach($populars as $popular)
                                    <div class="swiper-slide swiper-bg"
                                         style="background-image:url({{$popular->poster}})">
                                        <img alt="" class="entity-img" src="images/movies/01.jpg">
                                        <div class="top-badge">

                                        </div>
                                        <div class="content">
                                            <p class="title" data-swiper-parallax="-30%"
                                               data-swiper-parallax-scale=".7">
                                                {{$popular->name}}</p><span class="caption mb-4"
                                                                            data-swiper-parallax="-20%">
                                                {{$popular->description}}
                                                </span>
                                            <div class="slider-buttons d-flex align-items-center"
                                                 data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                                                <a class="btn hvr-sweep-to-right" href="watch-movie.html"
                                                   tabindex="0"><i
                                                        aria-hidden="true" class="fa fa-check mr-2"></i>Đăng ký ngay</a>
                                                <a
                                                    class="btn hvr-sweep-to-right ml-3" href="#" tabindex="0"><i
                                                        class="fas fa-box mr-2"></i>Liên hệ tư vấn</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Swiper Wrapper End -->
                            <div class="swiper-button-prev swiper-button-white"></div>
                            <div class="swiper-button-next swiper-button-white"></div>
                            <!-- Navigation Buttons End -->
                        </div>
                        <!-- End Swiper Slider -->
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </section>
        <!-- Office Box Section End -->
        <!-- Start Trending Section -->
    {{--        <section class="trending">--}}
    {{--            <div class="container-fluid">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-lg-12">--}}
    {{--                        <h2 class="block-title">Trending Now</h2>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                <div class="video-block">--}}
    {{--                                    <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                        <a href="#"><img alt="" class="img-fluid" src="images/trending/01.jpg"></a>--}}
    {{--                                        <div class="box-content">--}}
    {{--                                            <ul class="icon">--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- Box Content End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Video Thumb End -->--}}
    {{--                                    <div class="video-content">--}}
    {{--                                        <h2 class="video-title"><a href="movie-single.html">Freedom</a></h2>--}}
    {{--                                        <div class="video-info d-flex align-items-center">--}}
    {{--                                            <span class="video-year">2021</span> <span class="video-age">+18</span>--}}
    {{--                                            <span class="video-type">Action</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- video Content End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- video Block End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Col End -->--}}
    {{--                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                <div class="video-block">--}}
    {{--                                    <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                        <a href="#"><img alt="" class="img-fluid" src="images/trending/02.jpg"></a>--}}
    {{--                                        <div class="box-content">--}}
    {{--                                            <ul class="icon">--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- Box Content End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Video Thumb End -->--}}
    {{--                                    <div class="video-content">--}}
    {{--                                        <h2 class="video-title"><a href="movie-single.html">the world</a></h2>--}}
    {{--                                        <div class="video-info d-flex align-items-center">--}}
    {{--                                            <span class="video-year">2021</span> <span class="video-age">+18</span>--}}
    {{--                                            <span class="video-type">Action</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- video Content End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- video Block End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Col End -->--}}
    {{--                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                <div class="video-block">--}}
    {{--                                    <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                        <a href="#"><img alt="" class="img-fluid" src="images/trending/03.jpg"></a>--}}
    {{--                                        <div class="box-content">--}}
    {{--                                            <ul class="icon">--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- Box Content End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Video Thumb End -->--}}
    {{--                                    <div class="video-content">--}}
    {{--                                        <h2 class="video-title"><a href="movie-single.html">The gang</a></h2>--}}
    {{--                                        <div class="video-info d-flex align-items-center">--}}
    {{--                                            <span class="video-year">2021</span> <span class="video-age">+18</span>--}}
    {{--                                            <span class="video-type">Action</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- video Content End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- video Block End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Col End -->--}}
    {{--                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                <div class="video-block">--}}
    {{--                                    <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                        <a href="#"><img alt="" class="img-fluid" src="images/trending/04.jpg"></a>--}}
    {{--                                        <div class="box-content">--}}
    {{--                                            <ul class="icon">--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- Box Content End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Video Thumb End -->--}}
    {{--                                    <div class="video-content">--}}
    {{--                                        <h2 class="video-title"><a href="movie-single.html">World of war</a></h2>--}}
    {{--                                        <div class="video-info d-flex align-items-center">--}}
    {{--                                            <span class="video-year">2021</span> <span class="video-age">+18</span>--}}
    {{--                                            <span class="video-type">Action</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- video Content End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- video Block End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Col End -->--}}
    {{--                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                <div class="video-block">--}}
    {{--                                    <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                        <a href="#"><img alt="" class="img-fluid" src="images/trending/05.jpg"></a>--}}
    {{--                                        <div class="box-content">--}}
    {{--                                            <ul class="icon">--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- Box Content End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Video Thumb End -->--}}
    {{--                                    <div class="video-content">--}}
    {{--                                        <h2 class="video-title"><a href="movie-single.html">Happy holiday</a></h2>--}}
    {{--                                        <div class="video-info d-flex align-items-center">--}}
    {{--                                            <span class="video-year">2021</span> <span class="video-age">+18</span>--}}
    {{--                                            <span class="video-type">Action</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- video Content End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- video Block End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Col End -->--}}
    {{--                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                <div class="video-block">--}}
    {{--                                    <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                        <a href="#"><img alt="" class="img-fluid" src="images/trending/06.jpg"></a>--}}
    {{--                                        <div class="box-content">--}}
    {{--                                            <ul class="icon">--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="watch-movie.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                                <li>--}}
    {{--                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- Box Content End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Video Thumb End -->--}}
    {{--                                    <div class="video-content">--}}
    {{--                                        <h2 class="video-title"><a href="movie-single.html">weekend</a></h2>--}}
    {{--                                        <div class="video-info d-flex align-items-center">--}}
    {{--                                            <span class="video-year">2021</span> <span class="video-age">+18</span>--}}
    {{--                                            <span class="video-type">Action</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- video Content End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- video Block End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Col End -->--}}
    {{--                        </div>--}}
    {{--                        <!-- Row End -->--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- Row End -->--}}
    {{--            </div>--}}
    {{--            <!-- Container End -->--}}
    {{--        </section>--}}
    <!-- Trending Section End -->
        <!-- Start Last Seasons Section -->
    {{--        <section class="last-seasons pb-0">--}}
    {{--            <div class="last-season"--}}
    {{--                 style="background-image: linear-gradient(to top, #202020, rgb(2 2 2 / 90%)), url(images/parallax/best-series.jpg);">--}}
    {{--                <div class="container-fluid">--}}
    {{--                    <div class="season-header text-center">--}}
    {{--                        <h5 class="mb-4">featured</h5>--}}
    {{--                        <h2 class="mb-4">Best Series</h2>--}}
    {{--                        <p class="mb-4">News Season 5 Just flown in Watch and debate.</p>--}}
    {{--                    </div>--}}
    {{--                    <!-- Season Header End -->--}}
    {{--                    <div class="season-tabs">--}}
    {{--                        <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons"--}}
    {{--                            role="tablist">--}}
    {{--                            <li class="nav-item" role="presentation">--}}
    {{--                                <a class="nav-link active" data-toggle="pill" href="#pills-drama" role="tab"--}}
    {{--                                   aria-selected="true">Drama</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item" role="presentation">--}}
    {{--                                <a class="nav-link" data-toggle="pill" href="#pills-action" role="tab"--}}
    {{--                                   aria-selected="false">Action</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item" role="presentation">--}}
    {{--                                <a class="nav-link" data-toggle="pill" href="#pills-romance" role="tab"--}}
    {{--                                   aria-selected="false">Romance</a>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                        <div class="tab-content" id="pills-tab-Content">--}}
    {{--                            <div id="pills-drama" class="tab-pane animated fadeInRight show active">--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-drama/01.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">A happy life</a>--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-drama/02.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">A mirage</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-drama/03.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">Box</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-drama/04.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The price</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-drama/05.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">Sand</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-drama/06.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The sky</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- Row End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Tab Pane 1 End -->--}}
    {{--                            <div id="pills-action" class="tab-pane animated fadeInRight">--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-action/01.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The End</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-action/02.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">the beginning</a>--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-action/03.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The Search</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-action/04.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The Treasures</a>--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-action/05.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">Problems</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-action/06.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">life is--}}
    {{--                                                        Beautiful</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- Row End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Tab Pane 2 End -->--}}
    {{--                            <div id="pills-romance" class="tab-pane animated fadeInRight">--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-romance/01.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">End of Sorrows</a>--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-romance/02.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">the thief</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-romance/03.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">Millionaire</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-romance/04.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The Dreams</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-romance/05.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">Black Color</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">--}}
    {{--                                        <div class="video-block">--}}
    {{--                                            <div class="video-thumb position-relative thumb-overlay">--}}
    {{--                                                <a href="#"><img alt="" class="img-fluid"--}}
    {{--                                                                 src="images/best-romance/06.jpg"></a>--}}
    {{--                                                <div class="box-content">--}}
    {{--                                                    <ul class="icon">--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="watch-show.html"><i class="fas fa-play"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="#"><i class="fas fa-plus"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                        <li>--}}
    {{--                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- Box Content End -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Video Thumb End -->--}}
    {{--                                            <div class="video-content">--}}
    {{--                                                <h2 class="video-title"><a href="shows-single.html">The Ocean</a></h2>--}}
    {{--                                                <div class="video-info d-flex align-items-center">--}}
    {{--                                                    <span class="video-year">2021</span> <span class="video-seasons">4 Season</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- video Content End -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- video Block End -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- Col End -->--}}
    {{--                                </div>--}}
    {{--                                <!-- Row End -->--}}
    {{--                            </div>--}}
    {{--                            <!-- Tab Pane 3 End -->--}}
    {{--                        </div>--}}
    {{--                        <!-- Tab Content End -->--}}
    {{--                    </div>--}}
    {{--                    <!-- Season tabs End -->--}}
    {{--                </div>--}}
    {{--                <!-- Container End -->--}}
    {{--            </div>--}}
    {{--            <!-- Last Season End -->--}}
    {{--        </section>--}}
    <!-- Last Seasons Section End -->
        <!-- Start Suggested Section -->
        @if($owns!=null)
            <section class="suggested pt-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Xem video khoá học đã đăng ký</h2>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->

                    <div class="row">
                        @foreach($owns as $own)
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                <div class="video-block">
                                    <div class="video-thumb position-relative thumb-overlay">
                                        <a href="#"><img alt="" class="img-fluid" src="{{$own->thumbnail}}"></a>
                                        <div class="box-content">
                                            <ul class="icon">
                                                <li>
                                                    <a href={{route("play",$own->slug)}}><i class="fas fa-play"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{route("movie",$own->slug)}}"><i class="fas fa-info"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Box Content End -->
                                    </div>
                                    <!-- Video Thumb End -->
                                    <div class="video-content">
                                        <h2 class="video-title"><a
                                                href="{{route("movie",$own->slug)}}">{{$own->name}}</a></h2>
                                        <div class="video-info d-flex align-items-center">
                                            <span class="video-year">{{$own->starter}}</span> <span
                                                class="video-age">{{$own->coach}}</span> <span
                                                class="video-type">{{$own->Videos()->count()}} video</span>
                                        </div>
                                    </div>
                                    <!-- video Content End -->
                                </div>
                                <!-- video Block End -->
                            </div>
                    @endforeach
                    <!-- Col End -->
                    </div>
                @endif
                <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Suggested Section End -->
    </div>
@endsection
