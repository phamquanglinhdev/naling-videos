@extends('layouts.client')

@php
  $error_number = 404;
@endphp

@section('content')
    <div class="main-content">
        <section class="404">
            <div class="container">
                <div class="row">
                    <div class="content error-page text-center col">
                        <div class="error-code">
                            <h2>BLOCKED</h2>
                        </div>
                        <!-- Error Code end -->
                        <div class="error-message">
                            <h3>Có vẻ tài khoản không có quyền xem video này</h3>
                        </div>
                        <!-- Error Message end -->
                        <div class="error-body">
                            <p>
                               Hãy thử đăng nhập tài khoản phù hợp rồi quay lại nhé !
                            </p>
                            <a href="{{route("backpack.auth.logout")}}" class="btn hvr-sweep-to-right">Đăng xuất</a>
                            <a href="{{route("index")}}" class="btn hvr-sweep-to-right">Về trang chủ</a>
                        </div>
                        <!-- Error Body end -->
                    </div>
                    <!-- Content end -->
                </div>
                <!-- Row end -->
            </div>
            <!-- Container end -->
        </section>
        <!-- 404 Section end -->
    </div>
    <!-- Main Content End -->
@endsection
