@extends('frontend.layout.master')
@section('add_css_and_script')
<link rel="stylesheet" type="text/css" media="screen" href="css/complete.css">
@endsection
@section('header-slideshow')
<div class="header-slideshow">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="https://lonelyplanetimages.imgix.net/copilot/images/interest/adventure-travel.jpg"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="http://kenhthoitiet.vn/wp-content/uploads/2018/08/hang-dong.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="http://vn.lienhiepthanhresort.com/upload/images/kitesurfing1453343448.jpg"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
            data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
            data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="search-form">
        <h2 class="search-form-title">Mạo hiểm cùng chúng tôi</h2>
        <form action="#" method="GET" class="form-search">
            <div class="row">
                <div class="search-item search-option-1 col-lg-3">
                    <div class="content-show content-show-big">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="content">
                            <label>Điểm đến</label>
                            <select id="diemDen" class="select-menu">
                                <option>Động phong nha</option>
                                <option>Núi Phú Sỹ</option>
                                <option>Biển Đà Nẵng</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-item search-option-1 col-lg-3">
                    <div class="content-show content-show-big">
                        <div class="icon"><i class="fas fa-hiking"></i></div>
                        <div class="content">
                            <label>Thể loại</label>
                            <select id="theLoai" class="select-menu">
                                <option>Leo núi</option>
                                <option>Lặn</option>
                                <option>Lướt sóng</option>
                                <option>Nhảy dù</option>
                                <option>Cưỡi voi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-item search-option-2 col-lg-4">
                    <div class="content-show content-show-big">
                        <div class="icon"><i class="fas fa-clock"></i></div>
                        <div class="content">
                            <label>Thời lượng</label>
                            <select id="thoiLuong" class="select-menu">
                                <option>1 - 2 ngày</option>
                                <option>3 - 5 ngày</option>
                                <option>5 - 7 ngày</option>
                                <option>Trên 1 tuần</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-button search-option-3 col-lg-2">
                    <button type="submit" class="btn btn-primary"><i
                            class="fas fa-search-location"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('main')
<div class="container">
    <div class="content-wrapper">

        <!--introdution-->
        <div class="introdution">
            <div class="row">
                <div class="col-lg-4">
                    <div class="intro-item">
                        <div class="intro-img">
                            <img src="https://saigon-travel.com/wp-content/uploads/2019/02/09-support.png"
                                alt="Dịch vụ tiêu chuẩn">
                        </div>
                        <div class="intro-content">
                            <h5>Dịch vụ tiêu chuẩn</h4>
                                <div class="desc">Dịch Vụ Tiêu chuẩn, đảm bảo theo đúng thông tin yêu cầu</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="intro-item">
                        <div class="intro-img">
                            <img src="https://saigon-travel.com/wp-content/uploads/2019/02/12-customer-service.png"
                                alt="Hậu đãi tuyệt vời">
                        </div>
                        <div class="intro-content">
                            <h5>Hậu đãi tuyệt vời</h4>
                                <div class="desc">Chính sách chăm sóc khách hàng tuyệt vời</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="intro-item">
                        <div class="intro-img">
                            <img src="https://saigon-travel.com/wp-content/uploads/2019/02/19-like.png"
                                alt="Dịch vụ tiêu chuẩn">
                        </div>
                        <div class="intro-content">
                            <h5>Dịch vụ tiêu chuẩn</h5>
                            <div class="desc">Dịch Vụ Tiêu chuẩn, đảm bảo theo đúng thông tin yêu cầu</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--introdution end-->
        <!--complete checkout-->
        <div id="complete">
            <p class="info">Quý khách đã đặt vé thành công!</p>
            <p>• Quý khách vui lòng kiểm tra lại thông đặt vé trong email!</p>
            <p>• Nhân viên sẽ liên hệ với Quý khách qua Số Điện thoại để xác nhận lại thông tin đặt vé</p>
            <p>• Thông tin của Quý khách sẽ được chuyển đến phần Thông tin Khách hàng của chúng Tôi, Quý Khách vui lòng kiểm tra email thường xuyên để nhận thêm thông tin về chuyến đi</p>
            <p>• Để biết thêm thông tin chi tiết Quý Khách vui lòng liên hệ đến hotline: (+84) 968 775 364</p>
            <p>• Trụ sở chính: Sông Ray - Cẩm Mỹ - Đồng Nai</p>
            <p>Cám ơn Quý khách đã sử dụng dịch vụ của Công ty chúng Tôi!</p>
        </div>
        <p class="text-right return"><a href="{{asset('/')}}">Quay lại trang chủ</a></p>

        <!--mailchimp-->
        @include('frontend.layout.mailchimp')
        <!--mailchimp end-->
    </div>
</div>
@endsection