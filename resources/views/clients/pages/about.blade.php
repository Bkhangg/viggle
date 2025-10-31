@extends('layouts.client')

@section('title', 'Về chúng tôi')

@section('breadcrumb', 'Về chúng tôi')

@section('content')
    <!-- KHU VỰC GIỚI THIỆU BẮT ĐẦU -->
    <div class="ltn__about-us-area pt-120--- pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset('assets/clients/img/others/6.png') }}" alt="Ảnh giới thiệu">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Tìm hiểu thêm về cửa hàng</h6>
                            <h1 class="section-title">Cửa hàng thực phẩm hữu cơ<br class="d-none d-md-block"> đáng tin cậy
                            </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore</p>
                        </div>
                        <p>Chúng tôi là những người bán hàng mong muốn mang lại điều tốt, làm điều tốt và lan tỏa điều tốt
                            đẹp.
                            Một thị trường dân chủ, tự vận hành, hai chiều – được xây dựng trên niềm tin, cộng đồng và nội
                            dung chất lượng.</p>
                        <div class="about-author-info d-flex">
                            <div class="author-name-designation  align-self-center">
                                <h4 class="mb-0">Jerry Henson</h4>
                                <small>/ Giám đốc cửa hàng</small>
                            </div>
                            <div class="author-sign">
                                <img src="{{ asset('assets/clients/img/icons/icon-img/author-sign.png') }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KHU VỰC GIỚI THIỆU KẾT THÚC -->

    <!-- KHU VỰC TÍNH NĂNG BẮT ĐẦU -->
    <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// Tính năng //</h6>
                        <h1 class="section-title">Tại sao chọn chúng tôi<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('assets/clients/img/icons/icon-img/21.png') }}"
                                        alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Đa dạng thương hiệu</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('assets/clients/img/icons/icon-img/22.png') }}"
                                        alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Sản phẩm được chọn lọc</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('assets/clients/img/icons/icon-img/23.png') }}"
                                        alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Hàng hóa không thuốc trừ sâu</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KHU VỰC TÍNH NĂNG KẾT THÚC -->

    <!-- KHU VỰC ĐỘI NGŨ BẮT ĐẦU -->
    <div class="ltn__team-area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title">Thành viên đội ngũ</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ([1, 2, 3, 4] as $num)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="ltn__team-item">
                            <div class="team-img">
                                <img src="{{ asset('assets/clients/img/team/' . $num . '.jpg') }}" alt="Thành viên">
                            </div>
                            <div class="team-info">
                                <h6 class="ltn__secondary-color">// Người sáng lập //</h6>
                                <h4><a href="team-details.html">Rosalina D. William</a></h4>
                                <div class="ltn__social-media">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- KHU VỰC ĐỘI NGŨ KẾT THÚC -->

    <!-- KHU VỰC CÂU HỎI THƯỜNG GẶP -->
    <div class="ltn__faq-area pt-115 pb-120">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-title">Một số câu hỏi thường gặp</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div id="accordion_2" class="ltn__faq-inner ltn__faq-inner-2">
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1">
                                Làm sao để mua sản phẩm?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Bạn có thể duyệt sản phẩm, thêm vào giỏ hàng và thanh toán trực tuyến dễ dàng. Chúng
                                        tôi hỗ trợ nhiều phương thức thanh toán an toàn.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2">
                                Làm thế nào để hoàn tiền?
                            </h6>
                            <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                <div class="card-body">
                                    <div class="ltn__video-img alignleft">
                                        <img src="{{ asset('assets/clients/img/bg/17.jpg') }}" alt="video popup bg image">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-small"
                                            href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&showinfo=0"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <p>Bạn có thể gửi yêu cầu hoàn tiền qua tài khoản cá nhân hoặc liên hệ đội ngũ hỗ trợ
                                        khách hàng của chúng tôi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-3">
                                Tôi là người dùng mới, bắt đầu như thế nào?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Hãy tạo tài khoản, xác minh email, sau đó bạn có thể bắt đầu mua sắm ngay. Nếu cần,
                                        hãy xem hướng dẫn trong phần “Trợ giúp”.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-4">
                                Chính sách đổi trả & hoàn tiền
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi chấp nhận đổi trả sản phẩm trong vòng 7 ngày kể từ ngày nhận hàng nếu sản
                                        phẩm bị lỗi hoặc không đúng mô tả.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-5">
                                Thông tin cá nhân của tôi có được bảo mật không?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi tuân thủ các quy định về bảo mật dữ liệu và sử dụng công nghệ mã hóa để bảo
                                        vệ thông tin cá nhân của bạn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <aside class="sidebar-area ltn__right-sidebar mt-60">
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="{{ asset('assets/clients/img/bg/12.png') }}"
                                    alt="Banner"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- KHU VỰC CÂU HỎI THƯỜNG GẶP KẾT THÚC -->

    <!-- KHU VỰC ĐĂNG KÝ NHẬN TIN BẮT ĐẦU -->
    <div class="ltn__newsletter-area section-bg-1 bg-overlay-black-90 pt-110 pb-90 bg-image" data-bg="img/bg/2.jpg">
        <div class="container text-center">
            <h1 class="white-color">Chúng tôi mang đến cho bạn hộp thư tốt hơn</h1>
            <p class="white-color">Đăng ký nhận bản tin để nhận mẹo mua sắm, cảm hứng phong cách,<br> và ưu đãi độc quyền
                sớm nhất.</p>
            <form action="#" class="ltn__form-box">
                <input type="email" name="email" placeholder="Email*">
                <div class="btn-wrapper">
                    <button class="theme-btn-1 btn btn-effect-1 text-uppercase" type="submit">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
    <!-- KHU VỰC ĐĂNG KÝ NHẬN TIN KẾT THÚC -->
@stop
