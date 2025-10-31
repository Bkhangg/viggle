@extends('layouts.client')

@section('title', 'Dịch vụ')

@section('breadcrumb', 'Dịch vụ')

@section('content')
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-us-img-wrap ltn__img-shape-left about-img-left">
                        <img src="{{ asset('assets/clients/img/service/11.jpg') }}" alt="Hình minh họa dịch vụ">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// DỊCH VỤ UY TÍN</h6>
                            <h1 class="section-title">Chúng tôi chuyên nghiệp &amp; đạt chuẩn<span>.</span></h1>
                            <p>Cam kết chất lượng từ khâu chọn nguyên liệu đến giao hàng, mang lại trải nghiệm mua sắm
                                an toàn và tiện lợi cho bạn.</p>
                        </div>
                        <div class="about-us-info-wrap-inner about-us-info-devide">
                            <p>Với đội ngũ giàu kinh nghiệm và quy trình kiểm soát nghiêm ngặt, chúng tôi cung cấp
                                sản phẩm tươi ngon, nguồn gốc rõ ràng. Mỗi đơn hàng đều được xử lý nhanh chóng,
                                đóng gói cẩn thận và giao tận nơi để bạn yên tâm sử dụng mỗi ngày.</p>

                            <div class="list-item-with-icon">
                                <ul>
                                    <li><a href="contact.html">Giao hàng tận nhà 24/7</a></li>
                                    <li><a href="team.html">Đội ngũ chuyên gia tận tâm</a></li>
                                    <li><a href="service-details.html">Trang thiết bị đạt chuẩn</a></li>
                                    <li><a href="shop.html">Kho sản phẩm phong phú</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT US AREA END -->

    <!-- SERVICE AREA START (Service 1) -->
    <!-- KHU VỰC DỊCH VỤ BẮT ĐẦU -->
    <div class="ltn__service-area section-bg-1 pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Dịch Vụ Của Chúng Tôi</h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/clients/img/service/1.jpg') }}" alt="Rau củ hữu cơ">
                            </a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Rau Củ Hữu Cơ</a></h3>
                            <p>Cung cấp rau củ tươi sạch, trồng tự nhiên, không sử dụng thuốc trừ sâu hay hóa chất độc hại.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/clients/img/service/2.jpg') }}" alt="Trái cây sạch">
                            </a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Trái Cây Tươi Sạch</a></h3>
                            <p>Tận hưởng hương vị tự nhiên từ những loại trái cây được tuyển chọn kỹ càng từ nông trại hữu
                                cơ.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/clients/img/service/3.jpg') }}" alt="Thực phẩm tươi sống">
                            </a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Thực Phẩm Tươi Sống</a></h3>
                            <p>Chúng tôi mang đến các sản phẩm tươi ngon mỗi ngày, đảm bảo an toàn và chất lượng cho mọi bữa
                                ăn.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/clients/img/service/3.jpg') }}" alt="Đặc sản vùng miền">
                            </a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Đặc Sản Vùng Miền</a></h3>
                            <p>Giới thiệu đến bạn các sản phẩm đặc sản địa phương, thuần túy và mang đậm hương vị truyền
                                thống Việt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/clients/img/service/1.jpg') }}" alt="Dịch vụ giao hàng">
                            </a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Giao Hàng Nhanh</a></h3>
                            <p>Dịch vụ giao hàng tận nhà nhanh chóng, đảm bảo sản phẩm luôn tươi mới khi đến tay khách hàng.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/clients/img/service/2.jpg') }}" alt="Tư vấn dinh dưỡng">
                            </a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Tư Vấn Dinh Dưỡng</a></h3>
                            <p>Đội ngũ chuyên gia hỗ trợ tư vấn giúp bạn lựa chọn thực phẩm phù hợp cho sức khỏe của cả gia
                                đình.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICE AREA END -->

    <!-- OUR JOURNEY AREA START -->
    <!-- KHU VỰC HÀNH TRÌNH PHÁT TRIỂN BẮT ĐẦU -->
    <div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9"
        data-bg="{{ asset('assets/clients/img/bg/8.jpg') }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__our-journey-wrap">
                        <ul>
                            <li>
                                <span class="ltn__journey-icon">1900</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Bắt đầu hành trình">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Khởi đầu hành trình</h3>
                                                <p>Chúng tôi bắt đầu từ một cửa hàng nhỏ chuyên cung cấp nông sản sạch cho
                                                    người dân địa phương,
                                                    với khát vọng mang đến thực phẩm an toàn cho mọi gia đình.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="active">
                                <span class="ltn__journey-icon">1950</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Giành được giải thưởng">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Nhận được giải thưởng đầu tiên</h3>
                                                <p>Với nỗ lực không ngừng, thương hiệu của chúng tôi được công nhận là nhà
                                                    cung cấp nông sản
                                                    chất lượng hàng đầu tại khu vực.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <span class="ltn__journey-icon">1994</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Thành tựu lớn">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Thành công vượt bậc</h3>
                                                <p>Chúng tôi mở rộng quy mô và hợp tác cùng nhiều nông trại hữu cơ, mang sản
                                                    phẩm Việt vươn ra thị trường quốc tế.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <span class="ltn__journey-icon">2010</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Phát triển thương hiệu">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Phát triển thương hiệu toàn quốc</h3>
                                                <p>Ra mắt hệ thống cửa hàng và kênh bán hàng trực tuyến, giúp khách hàng dễ
                                                    dàng tiếp cận sản phẩm sạch mỗi ngày.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <span class="ltn__journey-icon">2020</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Mở rộng toàn cầu">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Vươn tầm quốc tế</h3>
                                                <p>Thương hiệu chính thức phân phối sản phẩm hữu cơ ra nhiều quốc gia,
                                                    khẳng định vị thế hàng đầu trong lĩnh vực thực phẩm sạch.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KHU VỰC HÀNH TRÌNH PHÁT TRIỂN KẾT THÚC -->

    <!-- OUR JOURNEY AREA END -->
@stop
