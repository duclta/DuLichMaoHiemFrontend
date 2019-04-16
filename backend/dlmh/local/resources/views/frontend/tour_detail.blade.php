@extends('frontend.layout.master')
@section('main')
<link rel="stylesheet" type="text/css" media="screen" href="css/tour_detail.css">
<script src="js/tour_detail.js"></script>
<!--tour header-->
<div class="single-tour-header">
        <img class="single-tour-img"
            src="{{asset('local/storage/app/images/tour/poster/'.$tour->tour_poster)}}" alt="">
        <div class="single-tour-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>{{$tour->tour_name}}</h1>
                        <div class="single-tour-meta-left">
                            <div class="single-tour-rate">
                                <span class="single-tour-star">
                                    @for ($i = 0; $i < $average; $i++)
                                        <i class="fas fa-star yellow"></i>
                                    @endfor
                                </span>
                                <span class="single-tour-review">{{count($comment_list)}} reviews</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-tour-meta-right">
                            <!--tour info box-->
                            <div class="tour-info-box">
                                <div class="tour-info-box-item item-odd">
                                    <div class="icon"><i class="far fa-calendar-alt"></i></div>
                                    <div class="info">
                                        <div class="title">Thời gian</div>
                                        <div class="des">{{$days}} ngày</div>
                                    </div>
                                </div>
                                <div class="tour-info-box-item item-even">
                                    <div class="icon"><i class="fas fa-shoe-prints"></i></div>
                                    <div class="info">
                                        <div class="title">Thể loại</div>
                                        <div class="des">{{$cate->cate_name}}</div>
                                    </div>
                                </div>
                                <div class="tour-info-box-item item-odd">
                                    <div class="icon"><i class="fas fa-user-friends"></i></div>
                                    <div class="info">
                                        <div class="title">Group Size</div>
                                        <div class="des"><span class="hien-co">{{$tour->tour_quantity_purchased}}</span>/<span
                                                class="group-size">{{$tour->tour_quantity}}</span> peoples</div>
                                    </div>
                                </div>
                                <div class="tour-info-box-item item-even">
                                    <div class="icon"><i class="fas fa-money-bill-alt"></i></div>
                                    <div class="info">
                                        <div class="title">Giá</div>
                                        <div class="des">{{number_format($tour->tour_price,0,',','.')}} VNĐ</div>
                                    </div>
                                </div>
                            </div>
                            <!--tour info box end-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--tour header end-->
    <!--tour nav tab-->
    <div class="single-tour-tab">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tong-quan">TỔNG QUAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-tham-gia" data-toggle="tab" href="#dang-ky">THAM GIA NGAY</a>
                </li>
            </ul>
        </div>
    </div>
    <!--tour nav tab end-->
    <!--main content-->
    <div class="container">
        <div class="content-wrapper">
            <!--tour body-->
            <div class="single-tour-body">
                <div class="row">
                    <!-- tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tong-quan">
                            <!--tour overview-->
                            <div class="tour-overview">
                                <h2 class="title">Giới thiệu</h2>
                                <div class="description">
                                    <p>
                                        <i>
                                            {{$tour->tour_introduction}}
                                        </i>
                                    </p>
                                    <div class="p-gradient"></div>
                                </div>
                                <button class="btn btn-info btn-more-des">More</button>
                            </div>
                            <!--tour overview end-->
                            <!--tour itinerary-->
                            <div class="tour-itinerary">
                                <h2 class="title">Lịch trình</h2>
                                <div class="timeline">
                                    <div class="timeline-nav">
                                        @if (count($schedule_list) > 1)
                                            <a class="timeline-nav-item active">Ngày 1</a>
                                            @for ($i = 1; $i < count($schedule_list); $i++)
                                            <a class="timeline-nav-item">Ngày {{$i+1}}</a>
                                            @endfor
                                        @endif
                                    </div>
                                </div>
                                <div class="list-item">
                                    @if (count($schedule_list) > 1)
                                        <div class="item">
                                            <div class="header">
                                                <h5>NGÀY {{$schedule_list[0]->schedule_day}} : {{$schedule_list[0]->schedule_title}}</h5>
                                            </div>
                                            <div class="body">
                                                <div class="row">
                                                    <div class="col-lg-4 wrapper">
                                                        <img src="{{asset('local/storage/app/images/tour/schedule/'.$schedule_list[0]->schedule_image)}}"
                                                            alt="">
                                                    </div>
                                                    <div class="col-lg-8 wrapper">
                                                        <p>
                                                            {{$schedule_list[0]->schedule_content}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @for ($i = 1; $i < count($schedule_list); $i++)
                                            <div class="item d-none">
                                                <div class="header">
                                                    <h5>NGÀY {{$schedule_list[$i]->schedule_day}} : {{$schedule_list[$i]->schedule_title}}</h5>
                                                </div>
                                                <div class="body">
                                                    <div class="row">
                                                        <div class="col-lg-4 wrapper">
                                                            <img src="{{asset('local/storage/app/images/tour/schedule/'.$schedule_list[$i]->schedule_image)}}"
                                                                alt="">
                                                        </div>
                                                        <div class="col-lg-8 wrapper">
                                                            <p>
                                                                {{$schedule_list[$i]->schedule_content}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    @endif
                                </div>
                            </div>
                            <!--tour itinerary end-->
                            <!--image demo-->
                            <div class="img-demo">
                                <h2 class="title">Hình ảnh</h2>
                                <div class="img-wrapper">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="img-slideshow">
                                                @if (count($pictour_list) > 1)
                                                    <img src="{{asset('local/storage/app/images/tour/'.$pictour_list[0]->pic_name)}}"
                                                    alt="">
                                                    @for ($i = 1; $i < count($pictour_list); $i++)
                                                    <img class="d-none"
                                                    src="{{asset('local/storage/app/images/tour/'.$pictour_list[$i]->pic_name)}}"
                                                    alt="">
                                                    @endfor
                                                @endif
                                                <div class="btn-for-slide">
                                                    <div class="btn-pre-img">
                                                        <i class="fas fa-chevron-circle-left"></i>
                                                    </div>
                                                    <div class="btn-next-img">
                                                        <i class="fas fa-chevron-circle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="img-info">
                                                @if (count($pictour_list) > 1)
                                                <div class="item active">
                                                    <img height="80px;" width="120px;" src="{{asset('local/storage/app/images/tour/'.$pictour_list[0]->pic_name)}}"
                                                        alt="">
                                                    <div class="img-title">Cầu Sài Gòn</div>
                                                </div>
                                                @for ($i = 1; $i < count($pictour_list); $i++)
                                                <div class="item">
                                                    <img height="80px;" width="120px;" src="{{asset('local/storage/app/images/tour/'.$pictour_list[$i]->pic_name)}}"
                                                        alt="">
                                                    <div class="img-title">Cầu Sài Gòn</div>
                                                </div>
                                                @endfor
                                                @endif
                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--image demo end-->
                            <!--reviews-->
                            <div class="tour-reviews">
                                <h2 class="title">Reviews</h2>
                                <div class="reviews-box">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="review-box-score">
                                                <div class="review-score">4.9<span class="per-total">/5</span>
                                                </div>
                                                <div class="review-score-text">Tuyệt vời</div>
                                                <div class="review-score-base">Based on 1 review</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="review-sumary">
                                                <div class="item">
                                                    <div class="label">Tuyệt vời</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="label">Good</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="label">Trung bình</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="label">Tệ</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="label">Khủng khiếp</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-list">
                                    <div class="comment-item">
                                        <div class="comment-item-head">
                                            <div class="media-left">
                                                <i class="fas fa-user-circle"></i>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Anh Đức</h4>
                                                <div class="date">23/11/2018</div>
                                            </div>
                                            <div class="media-right">
                                                <div class="review-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-item-body">
                                            <div class="content">
                                                Chuyến đi rất fine, Cám ơn Saigon Travel nhé
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-item-head">
                                            <div class="media-left">
                                                <i class="fas fa-user-circle"></i>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Anh Đức</h4>
                                                <div class="date">23/11/2018</div>
                                            </div>
                                            <div class="media-right">
                                                <div class="review-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-item-body">
                                            <div class="content">
                                                Chuyến đi rất fine, Cám ơn Saigon Travel nhé
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-item-head">
                                            <div class="media-left">
                                                <i class="fas fa-user-circle"></i>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Anh Đức</h4>
                                                <div class="date">23/11/2018</div>
                                            </div>
                                            <div class="media-right">
                                                <div class="review-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-item-body">
                                            <div class="content">
                                                Chuyến đi rất fine, Cám ơn Saigon Travel nhé
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="write-review">
                                    <h5 class="heading">Thêm nhận xét</h5>
                                    <form action="" class="form-group">
                                        <div class="form-comment-wrapper">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <input type="text" name="comment-name" class="form-control"
                                                        placeholder="Nhập tên của bạn">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <input type="email" name="comment-emali" class="form-control"
                                                        placeholder="Nhập email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span>Chọn số sao </span>
                                                <span class="review-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="comment-content" class="form-control" rows="3"
                                                    placeholder="Nội dung"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--reviews end-->
                        </div>
                        <div class="tab-pane fade" id="dang-ky">
                            <!--tour booking-->
                            <div class="single-tour-booking">
                                <h2 class="title">Đặt vé ngay</h2>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="book-name">
                                                    <label for="name">Tên</label>
                                                    <input class="form-control" type="text" id="name" name="name"
                                                        placeholder="Tên">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="book-email">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" type="email" id="book-email"
                                                        name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="book-phone">
                                                    <label for="phone">Điện thoại</label>
                                                    <input class="form-control" type="text" id="book-phone"
                                                        name="phone" placeholder="Điện thoại">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="adult-number">Người lớn (Age 18+)</label>
                                                <div class="select-wrapper">
                                                    <span class="btn-select minus"><i
                                                            class="fas fa-minus"></i></span>
                                                    <input type="text" name="adult-number" value="1" readonly
                                                        class="form-control">
                                                    <span class="btn-select plus"><i class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="child-number">Trẻ em (Age 6 - 17)</label>
                                                <div class="select-wrapper">
                                                    <span class="btn-select minus"><i
                                                            class="fas fa-minus"></i></span>
                                                    <input type="text" name="child-number" value="1" readonly
                                                        class="form-control">
                                                    <span class="btn-select plus"><i class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="ĐẶT TOUR" class="btn btn-danger w-100">
                                </form>
                            </div>
                            <!--tour booking end-->
                        </div>
                    </div>
                    <!--tab panes end-->
                </div>
            </div>
            <!--tour body end-->
            <!--tours sugesstion-->
            <div class="tours tours-sugesstion">
                <a href="">
                    <h2 class="title">Có thể bạn sẽ thích</h2>
                </a>
                <div class="tours-wrapper">
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href=""><img class="ani-img-zoom"
                                        src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg"
                                        alt=""></a>
                                <div class="tour-tag">Leo núi</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5>
                                </div>
                                <div class="tour-rate">
                                    <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="tour-review">2 reviews</span>
                                </div>
                                <div class="tour-info">
                                    <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href=""><img class="ani-img-zoom"
                                        src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg"
                                        alt=""></a>
                                <div class="tour-tag">Leo núi</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5>
                                </div>
                                <div class="tour-rate">
                                    <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="tour-review">2 reviews</span>
                                </div>
                                <div class="tour-info">

                                    <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href=""><img class="ani-img-zoom"
                                        src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg"
                                        alt=""></a>
                                <div class="tour-tag">Leo núi</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5>
                                </div>
                                <div class="tour-rate">
                                    <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="tour-review">2 reviews</span>
                                </div>
                                <div class="tour-info">

                                    <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href=""><img class="ani-img-zoom"
                                        src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg"
                                        alt=""></a>
                                <div class="tour-tag">Leo núi</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5>
                                </div>
                                <div class="tour-rate">
                                    <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="tour-review">2 reviews</span>
                                </div>
                                <div class="tour-info">

                                    <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href=""><img class="ani-img-zoom"
                                        src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg"
                                        alt=""></a>
                                <div class="tour-tag">Leo núi</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5>
                                </div>
                                <div class="tour-rate">
                                    <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="tour-review">2 reviews</span>
                                </div>
                                <div class="tour-info">

                                    <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href=""><img class="ani-img-zoom"
                                        src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg"
                                        alt=""></a>
                                <div class="tour-tag">Leo núi</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5>
                                </div>
                                <div class="tour-rate">
                                    <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="tour-review">2 reviews</span>
                                </div>
                                <div class="tour-info">

                                    <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <!--tours sugesstion end-->
            <!--mailchimp-->
            @include('frontend.layout.mailchimp')
            <!--mailchimp end-->
        </div>
    </div>
@endsection