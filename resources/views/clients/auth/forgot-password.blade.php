@extends('layouts.client')

@section('title', 'Quên mật khẩu')
@section('breadcrumb', 'Quên mật khẩu')

@section('content')
    <div class="container py-4">
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
                        <form method="POST" action="">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email đăng ký</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    autofocus placeholder="example@gmail.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="theme-btn-1 black-btn text-uppercase">
                                    Gửi liên kết đặt lại mật khẩu
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
