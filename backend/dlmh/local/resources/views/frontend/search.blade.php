@extends('frontend.layout.master')
@section('header-slideshow')
<div class="header-slideshow">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://lonelyplanetimages.imgix.net/copilot/images/interest/adventure-travel.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="http://kenhthoitiet.vn/wp-content/uploads/2018/08/hang-dong.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="http://vn.lienhiepthanhresort.com/upload/images/kitesurfing1453343448.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="search-form">
            <h2 class="search-form-title">Mạo hiểm cùng chúng tôi</h2>
            <form action="#" method="GET" class="form-search dropdown">
                <div class="row">  
                    <div class="search-item search-option-1 col-lg-3">
                        <div class="content-show content-show-big" id="dropdown-destination" data-toggle="dropdown" aria-expanded="false">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <label>Điểm đến</label>
                                <div class="render">Bạn muốn đến đâu?</div>
                            </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdown-destination">
                            <a class="dropdown-item" href="#">Leo núi</a>
                            <a class="dropdown-item" href="#">Lặn</a>
                            <a class="dropdown-item" href="#">Lướt sóng</a>
                            <a class="dropdown-item" href="#">Nhảy dù</a>
                            <a class="dropdown-item" href="#">Cưỡi voi</a>
                        </div>
                    </div>
                    <div class="search-item search-option-1 col-lg-3">
                        <div class="content-show content-show-big" id="dropdown-while" data-toggle="dropdown" aria-expanded="false">
                            <div class="icon"><i class="fas fa-hiking"></i></div>
                            <div class="content">
                                <label>Thể loại</label>
                                <div class="render">Mạo hiểm theo cách nào?</div>
                            </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdown-while">
                            <a class="dropdown-item" href="#">Leo núi</a>
                            <a class="dropdown-item" href="#">Lặn</a>
                            <a class="dropdown-item" href="#">Lướt sóng</a>
                            <a class="dropdown-item" href="#">Nhảy dù</a>
                            <a class="dropdown-item" href="#">Cưỡi voi</a>
                        </div>
                    </div>
                    <div class="search-item search-option-2 col-lg-4">
                        <div class="content-show content-show-big" id="dropdown-advenced" data-toggle="dropdown" aria-expanded="false">
                            <div class="icon"><i class="fas fa-clock"></i></div>
                            <div class="content">
                                <label>Thời lượng</label>
                                <div class="render">Chuyến đi dài bao lâu?</div>
                            </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdown-advenced">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="search-button search-option-3 col-lg-2">
                        <button class="btn btn-primary"><i class="fas fa-search-location"></i></button>
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
                                <img src="https://saigon-travel.com/wp-content/uploads/2019/02/09-support.png" alt="Dịch vụ tiêu chuẩn">
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
                                <img src="https://saigon-travel.com/wp-content/uploads/2019/02/12-customer-service.png" alt="Hậu đãi tuyệt vời">
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
                                <img src="https://saigon-travel.com/wp-content/uploads/2019/02/19-like.png" alt="Dịch vụ tiêu chuẩn">
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
                <a href=""><h2 class="title">Hoạt động phổ biến</h2></a>
                <div class="activity-wrapper">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="activity-item ani-box-shawdow">
                                <a href="">
                                    <div class="activity-img">
                                        <img class="ani-img-zoom" src="http://quocviet.net/uploads/nts/thumb/leo-nui.jpg" alt="Leo núi">
                                    </div>
                                    <div class="activity-content">
                                        <h4 class="title">Leo núi</h4>
                                        <button class="btn btn-primary">15 tours</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="activity-item ani-box-shawdow">
                                <a href="" >
                                    <div class="activity-img">
                                        <img class="ani-img-zoom" src="http://sanhoviet.vn/wp-content/uploads/2015/10/tour-lan-bien-ngam-san-ho-nha-trang1.jpg" alt="Lặn">
                                    </div>
                                    <div class="activity-content">
                                        <h4 class="title">Lặn</h4>
                                        <button class="btn btn-primary">12 tours</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="activity-item ani-box-shawdow">
                                <a href="" >
                                    <div class="activity-img">
                                        <img class="ani-img-zoom" src="http://image.sggp.org.vn/w1200/Uploaded/2019/chuwobj/2018_07_13/dlcv_wsbc.jpg" alt="Cưỡi voi">
                                    </div>
                                    <div class="activity-content">
                                        <h4 class="title">Cưỡi voi</h4>
                                        <button class="btn btn-primary">9 tours</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="activity-item ani-box-shawdow">
                                <a href="" >
                                    <div class="activity-img">
                                        <img class="ani-img-zoom" src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/sbka9x12nnekphoyworz/Nh%E1%BA%A3yD%C3%B9Skydive-GreatOceanRoadSummer19.jpg" alt="Nhảy dù">
                                    </div>
                                    <div class="activity-content">
                                        <h4 class="title">Nhảy dù</h4>
                                        <button class="btn btn-primary">5 tours</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="activity-item ani-box-shawdow">
                                <a href="" >
                                    <div class="activity-img">
                                        <img class="ani-img-zoom" src="https://www.transfertohoian.com/wp-content/uploads/2017/07/Transfer-Hue-To-Phong-Nha-By-Private-Car.jpg" alt="Khám phá hang động">
                                    </div>
                                    <div class="activity-content">
                                        <h4 class="title">Khám phá hang động</h4>
                                        <button class="btn btn-primary">20 tours</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--popular activity end-->

            <!--tours hot-->
            <div class="tours tours-hot">
                <a href=""><h2 class="title">Tour du lịch HOT</h2></a>
                <div class="tours-wrapper">
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
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
            <!--tours hot end-->

            <!--tours populer-->
            <div class="tours tours-popular">
                <a href=""><h2 class="title">Tour du lịch phổ biến</h2></a>
                <div class="tours-wrapper">
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-item ani-box-shawdow">
                        <div class="tour-header">
                            <a href=""><img class="ani-img-zoom" src="https://saigon-travel.com/wp-content/uploads/2019/01/ali-nuredini-1133841-unsplash-680x500.jpg" alt=""></a>
                            <div class="tour-tag">Leo núi</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title"><h5><a href="">Leo nóc nhà Liên Xô đầy thử thách</a></h5></div>
                            <div class="tour-rate">
                                <span class="tour-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <span class="tour-review">2 reviews</span>
                            </div>
                            <div class="tour-info">
            
                                <div class="tour-price">Giá từ 3.500.000 VNĐ</div>
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
            <!--tours popular end-->

            <!--mailchimp-->
            <div class="mailchimp-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media-left">
                            <div class="media-img">
                                <img src="https://saigon-travel.com/wp-content/themes/traveler/v2/images/svg/ico_email_subscribe.svg" alt="Mail chimp">
                            </div>
                            <div class="media-body">
                                <h4 class="media-title">Get Updates & More</h4>
                                <p>Thoughtful thoughts to your inbox</p>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form class="media-form">    
                            <input type="email" placeholder="Nhập địa chỉ email của bạn" class="form-control">
                            <input type="submit" value="Subscribe" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
            <!--mailchimp end-->
        </div>
    </div>
@endsection