@extends('layouts.client')

@section('title', 'Tài khoản')

@section('breadcrumb', 'Tài khoản')

@section('content')
    <!-- KHU VỰC DANH SÁCH ƯA THÍCH BẮT ĐẦU -->
    <div class="liton__wishlist-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- KHU VỰC TAB SẢN PHẨM BẮT ĐẦU -->
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_dashboard">Bảng
                                                điều
                                                khiển <i class="fas fa-home"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_orders">Đơn hàng <i
                                                    class="fas fa-file-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_address">Địa chỉ <i
                                                    class="fas fa-map-marker-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_account">Chi tiết tài khoản <i
                                                    class="fas fa-user"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_password">Đổi mật khẩu <i
                                                    class="fas fa-user"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_dashboard">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Xin chào <strong>{{ $user->email }}</strong> (không phải
                                                    <strong>{{ $user->email }}</strong>?
                                                    <small><a href="{{ route('logout') }}">Đăng xuất</a></small> )
                                                </p>
                                                <p>Từ bảng điều khiển tài khoản của bạn, bạn có thể xem <span>đơn hàng gần
                                                        đây</span>, quản lý <span>địa chỉ giao hàng và thanh toán</span>, và
                                                    <span>chỉnh sửa mật khẩu cùng thông tin tài khoản</span>.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_orders">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Đơn hàng</th>
                                                                <th>Ngày đặt</th>
                                                                <th>Trạng thái</th>
                                                                <th>Tổng cộng</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>22 Tháng 6, 2019</td>
                                                                <td>Đang chờ</td>
                                                                <td>$3000</td>
                                                                <td>View
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_address">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Các địa chỉ sau đây sẽ được sử dụng mặc định trên trang thanh toán.</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Đơn hàng</th>
                                                                <th>Ngày đặt</th>
                                                                <th>Trạng thái</th>
                                                                <th>Tổng cộng</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>22 Tháng 6, 2019</td>
                                                                <td>Đang chờ</td>
                                                                <td>$3000</td>
                                                                <td><a type="submit" class="btn btn-sm btn-danger"
                                                                        onclick="return confirm('Bạn có chắc muốn xóa địa chỉ này không?')">Xóa</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="btn-wrapper">
                                                        <button type="submit"
                                                            class="btn theme-btn-1 btn-effect-1 text-uppercase">Thêm
                                                            địa chỉ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_account">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="ltn__form-box">
                                                    <form action="#" method="POST" enctype="multipart/form-data">
                                                        @method('PUT')

                                                        <div class="col-md-12 text-center mb-3">
                                                            <div class="profile-pic-container">
                                                                <img src="{{ $user->avatar }}" alt="Avatar"
                                                                    id="preview-image" class="profile-pic">
                                                                <input type="file" name="avatar" id="avatar"
                                                                    accept="image/*" class="d-none">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-50">
                                                            <div class="col-md-6">
                                                                <label for="ltn__name">Họ và Tên</label>
                                                                <input type="text" name="ltn__name" id="ltn__name"
                                                                    value="{{ $user->name }}" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="ltn__phone_number">Số điện thoại</label>
                                                                <input type="number" name="ltn__phone_number"
                                                                    id="ltn__phone_number" value="{{ $user->phone_number }}"
                                                                    required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Email* (Email không được thay đổi):</label>
                                                                <input type="text" name="ltn__email_number"
                                                                    id="ltn__email_number" value="{{ $user->email }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Địa chỉ</label>
                                                                <input type="text" name="ltn__address_number"
                                                                    id="ltn__address_number" value="{{ $user->address }}"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <div class="btn-wrapper">
                                                            <button type="submit"
                                                                class="btn theme-btn-1 btn-effect-1 text-uppercase">Lưu thay
                                                                đổi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_password">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="ltn__form-box">
                                                    <form action="#" method="POST" id="change-password-form">
                                                        <fieldset>
                                                            <legend>Đổi mật khẩu</legend>
                                                            <div class="ltn__form-box">
                                                                <form action="#" method="POST"
                                                                    id="change-password-form">
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label>Mật khẩu hiện tại:</label>
                                                                                <input type="password"
                                                                                    name="current_password" required>

                                                                                <label>Mật khẩu mới:</label>
                                                                                <input type="password" name="new_password"
                                                                                    required>

                                                                                <label>Nhập lại mật khẩu mới:</label>
                                                                                <input type="password"
                                                                                    name="confirm_new_password"
                                                                                    autocomplete="new-password" required>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>

                                                                    <div class="btn-wrapper">
                                                                        <button type="submit"
                                                                            class="btn theme-btn-1 btn-effect-1 text-uppercase">
                                                                            Đổi mật khẩu
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </fieldset>
                                                        <div class="btn-wrapper">
                                                            <button type="submit"
                                                                class="btn theme-btn-1 btn-effect-1 text-uppercase">Lưu
                                                                thay
                                                                đổi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- KHU VỰC TAB SẢN PHẨM KẾT THÚC -->
                </div>
            </div>
        </div>
    </div>
    <!-- KHU VỰC DANH SÁCH ƯA THÍCH KẾT THÚC -->

    <!-- KHU VỰC TÍNH NĂNG BẮT ĐẦU -->
    <div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/11.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Sản phẩm được chọn lọc</h4>
                                        <p>Cung cấp các sản phẩm được chọn lọc cho mọi đơn hàng trên $100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/12.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Thủ công</h4>
                                        <p>Chúng tôi đảm bảo chất lượng sản phẩm là mục tiêu chính</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/13.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Thực phẩm tự nhiên</h4>
                                        <p>Hoàn trả sản phẩm trong vòng 3 ngày cho mọi sản phẩm bạn mua</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/14.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Giao hàng miễn phí tận nhà</h4>
                                        <p>Chúng tôi đảm bảo chất lượng sản phẩm mà bạn có thể tin tưởng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KHU VỰC TÍNH NĂNG KẾT THÚC -->

@stop
