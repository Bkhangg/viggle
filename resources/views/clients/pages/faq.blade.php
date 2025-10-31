@extends('layouts.client')

@section('title', 'Câu hỏi thường gặp')

@section('breadcrumb', 'FAQ')

@section('content')
    <!-- FAQ AREA START -->
    <div class="ltn__faq-area mb-100">
        <div class="container">
            <div class="row">
                <!-- Cột nội dung FAQ -->
                <div class="col-lg-8">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="accordion_2">
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1"
                                    aria-expanded="false">
                                    Làm sao để mua sản phẩm?
                                </h6>
                                <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Bạn hãy duyệt sản phẩm, thêm vào giỏ hàng và tiến hành thanh toán. Chúng tôi hỗ
                                            trợ nhiều phương thức thanh toán an toàn và xác nhận đơn hàng qua email/SMS.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                    aria-expanded="true">
                                    Làm sao để yêu cầu hoàn tiền trên website?
                                </h6>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <div class="ltn__video-img alignleft">
                                            <img src="{{ asset('assets/clients/img/bg/17.jpg') }}"
                                                alt="Hướng dẫn hoàn tiền">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                                href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                                data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <p>Truy cập tài khoản &gt; Đơn hàng &gt; Chọn đơn cần hỗ trợ &gt; Gửi yêu cầu hoàn
                                            tiền/đổi trả. Đội ngũ CSKH sẽ phản hồi trong thời gian sớm nhất theo chính sách
                                            hiện hành.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-3" aria-expanded="false">
                                    Tôi là người dùng mới, bắt đầu như thế nào?
                                </h6>
                                <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Tạo tài khoản bằng email/số điện thoại, xác minh thông tin, cập nhật địa chỉ nhận
                                            hàng và phương thức thanh toán. Sau đó, bạn có thể mua sắm ngay.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-4" aria-expanded="false">
                                    Chính sách đổi trả & hoàn tiền
                                </h6>
                                <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Chúng tôi hỗ trợ đổi trả trong vòng 7 ngày kể từ khi nhận hàng đối với sản phẩm
                                            lỗi, hư hỏng, hoặc không đúng mô tả. Hoàn tiền theo phương thức đã thanh toán
                                            ban đầu.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-5" aria-expanded="false">
                                    Thông tin cá nhân của tôi có được bảo mật không?
                                </h6>
                                <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Chúng tôi áp dụng mã hóa và tuân thủ quy định bảo vệ dữ liệu. Thông tin của bạn
                                            chỉ được sử dụng cho mục đích xử lý đơn hàng và chăm sóc khách hàng.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-6" aria-expanded="false">
                                    Mã giảm giá không sử dụng được
                                </h6>
                                <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Vui lòng kiểm tra điều kiện áp dụng (thời hạn, giá trị đơn tối thiểu, danh mục
                                            hàng). Nếu vẫn không dùng được, liên hệ CSKH để được hỗ trợ thêm.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-7" aria-expanded="false">
                                    Tôi thanh toán bằng thẻ tín dụng như thế nào?
                                </h6>
                                <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Chọn “Thẻ tín dụng/ghi nợ” ở bước thanh toán và nhập thông tin thẻ. Hệ thống sẽ
                                            xử lý qua cổng thanh toán bảo mật. Chúng tôi không lưu thông tin thẻ của bạn.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="need-support text-center mt-100">
                            <h2>Vẫn cần trợ giúp? Liên hệ hỗ trợ 24/7:</h2>
                            <div class="btn-wrapper mb-30">
                                <a href="contact.html" class="theme-btn-1 btn">Liên hệ chúng tôi</a>
                            </div>
                            <h3><i class="fas fa-phone"></i> +0123-456-789</h3>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="sidebar-area ltn__right-sidebar">
                        <!-- Newsletter Widget -->
                        <div class="widget ltn__search-widget ltn__newsletter-widget">
                            <h6 class="ltn__widget-sub-title">// đăng ký</h6>
                            <h4 class="ltn__widget-title">Nhận bản tin</h4>
                            <form action="#">
                                <input type="email" name="email" placeholder="Nhập email của bạn">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                            <div class="ltn__newsletter-bg-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                        </div>

                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html">
                                <img src="{{ asset('assets/clients/img/banner/banner-3.jpg') }}" alt="Banner khuyến mãi">
                            </a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ AREA END -->

    <!-- COUNTER UP AREA START -->
    <div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70"
        data-bg="{{ asset('assets/clients/img/bg/5.jpg') }}">
        <div class="container">
            <div class="row">
                <!-- 1 -->
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/2.png') }}" alt="Khách hàng">
                        </div>
                        <h1><span class="counter">733</span><span class="counterUp-icon">+</span></h1>
                        <h6>Khách hàng đang hoạt động</h6>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/3.png') }}" alt="Cà phê">
                        </div>
                        <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                                class="counterUp-icon">+</span></h1>
                        <h6>Tách cà phê đã pha</h6>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/4.png') }}" alt="Giải thưởng">
                        </div>
                        <h1><span class="counter">100</span><span class="counterUp-icon">+</span></h1>
                        <h6>Giải thưởng đạt được</h6>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/5.png') }}" alt="Quốc gia">
                        </div>
                        <h1><span class="counter">21</span><span class="counterUp-icon">+</span></h1>
                        <h6>Quốc gia phục vụ</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COUNTER UP AREA END -->
@stop
