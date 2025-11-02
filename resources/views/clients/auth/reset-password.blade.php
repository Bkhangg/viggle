@extends('layouts.client')

@section('title', 'Đặt lại mật khẩu')

@section('breadcrumb', 'Đặt lại mật khẩu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                {{-- Thông báo thành công --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Lỗi chung --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Vui lòng kiểm tra lại thông tin bên dưới.
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}" id="reset-password-form">
                            @csrf
                            {{-- nhận value token --}}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required autofocus placeholder="example@gmail.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" required autofocus placeholder="Nhập mật khẩu mới">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <label for="passwordConfirm" class="form-label">Nhập lại Mật khẩu</label>
                                <input type="password" name="password_confirmation" class="form-control" required autofocus
                                    placeholder="Nhập mật khẩu mới">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="theme-btn-1 black-btn text-uppercase">
                                    Cập nhật mật khẩu mới
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}">Quay lại đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
