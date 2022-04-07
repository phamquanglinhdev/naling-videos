@extends('layouts.client')
@section("content")
    <!-- Start Main Content -->
    <div class="main-content">
        <!-- Start Login Section -->
        <section class="login">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Chào mừng trở lại</h2>
                        <p class="text-max-800">Đăng nhập để xem video dạy Private của các khóa học chuyên biệt</p>
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Start Form -->
                        <form class="col-md-12 p-t-10" role="form" method="POST"
                              action="{{ route('backpack.auth.login') }}">
                            {!! csrf_field() !!}
                            <div class="error-container"></div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">Username</label>
                                <input type="text" class="form-control" name="email" required="required">
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">Password</label>
                                <input type="password" class="form-control" name="password" required="required">
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline mb-3"><input type="checkbox" name="remember" required="required"> Save
                                    Password</label>
                                <button type="submit" class="btn btn-block hvr-sweep-to-right btn-primary btn-lg">
                                    Login
                                </button>
                            </div>
{{--                            <a href="reset-password.html">Lost your Password?</a>--}}
                        </form>
                        <!-- Form End -->
                        <div class="row d-flex align-items-center mb-4  ">
                            <div class="col-md-6">
                                <a href="{{ route('facebook.login') }}" class="btn facebook-color d-block hvr-sweep-to-right mb-3"
                                   tabindex="0"><i class="icofont-facebook mr-2" aria-hidden="true"></i>Facebook</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-md-6">
                                <a href="watch-movie.html" class="btn twitter-color d-block hvr-sweep-to-right mb-3"
                                   tabindex="0"><i class="icofont-twitter mr-2" aria-hidden="true"></i>Twitter</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
{{--                        <p class="text-center">Don't have an account? <a href="sign-up.html">Sign up here!</a></p>--}}
                    </div>
                    <!-- Col End -->
                    <div class="col-lg-6">
                        <img class="img-fluid" src="{{asset("images/login.png")}}" alt="">
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </section>
        <!-- Login Section End -->
    </div>
    <!-- Main Content End -->
@endsection
{{--@section('contents')--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-12 col-md-8 col-lg-4">--}}
{{--            <h3 class="text-center mb-4">{{ trans('backpack::base.login') }}</h3>--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <form class="col-md-12 p-t-10" role="form" method="POST"--}}
{{--                          action="{{ route('backpack.auth.login') }}">--}}
{{--                        {!! csrf_field() !!}--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="control-label"--}}
{{--                                   for="{{ $username }}">{{ config('backpack.base.authentication_column_name') }}</label>--}}

{{--                            <div>--}}
{{--                                <input type="text"--}}
{{--                                       class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }}"--}}
{{--                                       name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="control-label" for="password">{{ trans('backpack::base.password') }}</label>--}}

{{--                            <div>--}}
{{--                                <input type="password"--}}
{{--                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
{{--                                       name="password" id="password">--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="invalid-feedback">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div>--}}
{{--                                <div class="checkbox">--}}
{{--                                    <label>--}}
{{--                                        <input type="checkbox"--}}
{{--                                               name="remember"> {{ trans('backpack::base.remember_me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div>--}}
{{--                                <button type="submit" class="btn btn-block btn-primary">--}}
{{--                                    {{ trans('backpack::base.login') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @if (backpack_users_have_email() && config('backpack.base.setup_password_recovery_routes', true))--}}
{{--                <div class="text-center"><a--}}
{{--                        href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @if (config('backpack.base.registration_open'))--}}
{{--                <div class="text-center"><a--}}
{{--                        href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
