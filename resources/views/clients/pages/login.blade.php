@extends('layouts.client')

@section('title', 'Đăng nhập')

@section('breadcrumb', 'Đăng nhập')

@section('content')
    <!-- KHU VỰC ĐĂNG NHẬP BẮT ĐẦU -->
    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Đăng nhập <br>vào tài khoản của bạn</h1>
                        <p>Chào mừng bạn quay trở lại! Vui lòng nhập email và mật khẩu để tiếp tục.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Form đăng nhập -->
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form action="{{ route('login') }}" method="POST" class="ltn__form-box contact-form-box">
                            @csrf
                            <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}"
                                autocomplete="email" autofocus>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="password" name="password" placeholder="Mật khẩu*" autocomplete="current-password">
                            <div class="btn-wrapper mt-0">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <button class="theme-btn-1 btn btn-block" type="submit">ĐĂNG NHẬP</button>
                            </div>
                            <div class="go-to-btn mt-20">
                                <a href=""><small>Quên mật khẩu?</small></a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Khối tạo tài khoản -->
                <div class="col-lg-6">
                    <div class="account-create text-center pt-50">
                        <h4>Chưa có tài khoản?</h4>
                        <p>
                            Đăng ký ngay để thêm sản phẩm vào danh sách yêu thích, nhận gợi ý phù hợp,
                            thanh toán nhanh hơn và theo dõi đơn hàng của bạn.
                        </p>
                        <div class="btn-wrapper">
                            <a href="{{ route('register') }}" class="theme-btn-1 btn black-btn">TẠO TÀI KHOẢN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- KHU VỰC ĐĂNG NHẬP KẾT THÚC -->
@stop
