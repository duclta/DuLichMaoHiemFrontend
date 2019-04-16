@extends('frontend.layout.master')
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

        <!--popular activity-->
        <div class="popular-activity">
            <a href="">
                <h2 class="title">Hoạt động phổ biến</h2>
            </a>
            <div class="activity-wrapper">
                <div class="row">
                    @foreach ($cates_featured as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="activity-item ani-box-shawdow">
                                <a href="#">
                                    <div class="activity-img">
                                        <img class="ani-img-zoom" src="{{asset('local/storage/app/images/category/poster/'.$item->cate_poster)}}" alt="Lặn">
                                    </div>
                                    <div class="activity-content">
                                        <h4 class="title">{{$item->cate_name}}</h4>
                                        <button class="btn btn-primary">{{$item->cate_count}} tours</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--popular activity end-->

        <!--tours hot-->
        <div class="tours tours-hot">
            <h2 class="title">Tour du lịch HOT</h2>
            <div class="tours-wrapper">
                @foreach ($tours_new as $item)
                <div class="tour-item">
                    <div class="tour-item-wrapper ani-box-shawdow">
                        <div class="tour-header">
                            <a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}"><img width="273px;" height="217px;" class="ani-img-zoom" src="{{asset('local/storage/app/images/tour/poster/'.$item->tour_poster)}}" alt="ảnh tour"></a>
                            <div class="tour-tag">{{$item->cate_name}}</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title">
                                <h5><a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}">{{$item->tour_name}}</a></h5>
                            </div>
                            <div class="tour-rate">
                                @if ($item->cmt_avg_score !== NULL)
                                @for ($i = 0; $i < $item->cmt_avg_score; $i++)
                                    <i class="fas fa-star yellow"></i>
                                @endfor
                                @endif
                                <span class="tour-review">{{$item->cmt_count}} reviews</span>
                            </div>
                            <div class="tour-info">
                                <div class="tour-price">Giá từ {{number_format($item->tour_price,0,',','.')}} VNĐ</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="btn-for-slide">
                    <div class="btn-pre-slide">
                        <i class="fas fa-chevron-circle-left"></i>
                    </div>
                    <div class="btn-next-slide">
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--tours hot end-->

        <!--tours populer-->
        <div class="tours tours-popular">
            <h2 class="title">Tour du lịch phổ biến</h2>
            <div class="tours-wrapper">
                    @foreach ($tours_featured as $item)
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}"><img width="273px;" height="217px;" class="ani-img-zoom" src="{{asset('local/storage/app/images/tour/poster/'.$item->tour_poster)}}" alt="ảnh tour"></a>
                                <div class="tour-tag">{{$item->cate_name}}</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}">{{$item->tour_name}}</a></h5>
                                </div>
                                <div class="tour-rate">
                                    @if ($item->cmt_avg_score !== NULL)
                                    @for ($i = 0; $i < $item->cmt_avg_score; $i++)
                                        <i class="fas fa-star yellow"></i>
                                    @endfor
                                    @endif
                                    <span class="tour-review">{{$item->cmt_count}} reviews</span>
                                </div>
                                <div class="tour-info">
                                    <div class="tour-price">Giá từ {{number_format($item->tour_price,0,',','.')}} VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                <div class="btn-for-slide">
                    <div class="btn-pre-slide">
                        <i class="fas fa-chevron-circle-left"></i>
                    </div>
                    <div class="btn-next-slide">
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--tours popular end-->

        <!--mailchimp-->
        @include('frontend.layout.mailchimp')
        <!--mailchimp end-->
    </div>
</div>
@endsection