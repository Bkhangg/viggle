@extends('layouts.client')

@section('title', 'Đăng ký')

@section('breadcrumb', 'Đăng ký')

@section('content')
    <!-- KHU VỰC ĐĂNG KÝ TÀI KHOẢN BẮT ĐẦU -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Đăng ký <br>Tài khoản của bạn</h1>
                        <p>Hãy tạo tài khoản để bắt đầu trải nghiệm mua sắm của bạn.<br>
                            Nhanh chóng – An toàn – Tiện lợi.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form action="{{ route('post-register') }}" method="POST" class="ltn__form-box contact-form-box"
                            id="register-form">
                            @csrf
                            <input type="text" name="name" placeholder="Họ và tên" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" name="password" placeholder="Mật khẩu*">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" name="confirmPassword" placeholder="Xác nhận mật khẩu*">
                            @error('confirmPassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label class="checkbox-inline">
                                <input type="checkbox" value="" name="checkbox1">
                                Tôi đồng ý để Herboil xử lý dữ liệu cá nhân của tôi nhằm gửi thông tin quảng cáo cá nhân hóa
                                theo mẫu chấp thuận và chính sách bảo mật.
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" value="" name="checkbox2">
                                Bằng việc nhấn "Tạo tài khoản", tôi đồng ý với chính sách bảo mật.
                            </label>
                            @error('checkbox1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('checkbox2')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">TẠO TÀI
                                    KHOẢN</button>
                            </div>
                        </form>

                        <div class="by-agree text-center">
                            <p>Khi tạo tài khoản, bạn đồng ý với:</p>
                            <p>
                                <a href="#">ĐIỀU KHOẢN SỬ DỤNG &nbsp; &nbsp; | &nbsp; &nbsp; CHÍNH SÁCH BẢO MẬT</a>
                            </p>
                            <div class="go-to-btn mt-50">
                                <a href="{{ route('login') }}">ĐÃ CÓ TÀI KHOẢN? ĐĂNG NHẬP TẠI ĐÂY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KHU VỰC ĐĂNG KÝ TÀI KHOẢN KẾT THÚC -->

@stop
