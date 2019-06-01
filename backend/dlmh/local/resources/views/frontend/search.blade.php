@extends('frontend.layout.master')
@section('add_css_and_script')
<link rel="stylesheet" type="text/css" media="screen" href="css/search.css">
@endsection
@section('header-slideshow')
<div class="header-slideshow">
    <div class="header-image">
        <img class="image-background"
            src="http://image.laodong.com.vn/uploaded/ctvkhampha/2016_11_14/anh201xekl_vptw.jpg" alt="">
    </div>
    <div class="search-form">
        <h2 class="search-form-title">Kết quả tìm kiếm</h2>
        <form action="{{asset('search/')}}" role="search" method="GET" class="form-search">
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
                            <select name="cate" id="theLoai" class="select-menu">
                                <option value="-1">Tất cả</option>
                                @foreach ($catelist as $cate)
                                    <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-item search-option-2 col-lg-4">
                    <div class="content-show content-show-big">
                        <div class="icon"><i class="fas fa-clock"></i></div>
                        <div class="content">
                            <label>Thời lượng</label>
                            <select name="time" id="thoiLuong" class="select-menu">
                                <option value="-1">Tất cả</option>
                                <option value="1-2">1 - 2 ngày</option>
                                <option value="3-5">3 - 5 ngày</option>
                                <option value="5-7">5 - 7 ngày</option>
                                <option value=">7">Trên 1 tuần</option>
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

        <div class="tours-result-top">
            <h2 class="title">Tìm thấy {{count($tours_search)}} tour</h2>
            <div class="top-filter">
                <div class="filter-left">
                    <h5 class="title">Lọc theo</h5>
                    <select name="price" id="idPrice">
                        <option value="0">Giá</option>
                        <option value="1">Dưới 5 triệu</option>
                        <option value="2">Từ 5 - 10 triệu</option>
                        <option value="3">Từ 10 - 15 triệu</option>
                        <option value="4">Từ 15 - 20 triệu</option>
                        <option value="5">Trên 20 triệu</option>
                    </select>
                    <select name="score" id="idScore">
                        <option value="0">Đánh giá</option>
                        <option value="5">5 star</option>
                        <option value="4">4 star</option>
                        <option value="3">3 star</option>
                        <option value="2">2 star</option>
                        <option value="1">1 star</option>
                    </select>
                    <button id="btn-filter" class="btn btn-dark bg-dark">Lọc</button>
                </div>
                <div class="filter-right">
                    <!-- <select name="sort" id="idSort">
                        <option value="0">Sắp xếp theo</option>
                        <option value="1">Giá từ thấp đến cao</option>
                        <option value="2">Giá từ cao đến thấp</option>
                        <option value="3">Đánh giá từ thấp đến cao</option>
                        <option value="4">Đánh giá từ cao đến thấp</option>
                    </select> -->
                </div>
            </div>
        </div>

        <div class="tours-result-content">
            <div class="tours-result-wrapper">
                @foreach ($tours_search as $item)
                    <div class="tour-item">
                        <div class="tour-item-wrapper ani-box-shawdow">
                            <div class="tour-header">
                                <a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}">
                                    <img width="273px;" height="217px;" class="ani-img-zoom" src="{{asset('local/storage/app/images/tour/poster/'.$item->tour_poster)}}" alt="ảnh tour">
                                </a>
                                <div class="tour-tag">{{$item->cate_name}}</div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-title">
                                    <h5><a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}">{{$item->tour_name}}</a></h5>
                                </div>
                                <div class="tour-rate">
                                    <span class="tour-star">
                                        @if ($item->cmt_avg_score !== NULL)
                                        @for ($i = 0; $i < $item->cmt_avg_score; $i++)
                                            <i class="fas fa-star yellow"></i>
                                        @endfor
                                        @endif
                                    </span>
                                    <span class="tour-review">{{$item->cmt_count}} reviews</span>
                                </div>
                                <div class="tour-info">
                                    <div class="tour-price">Giá từ <span class="price">{{number_format($item->tour_price,0,',','.')}}</span> VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
        <ul class="page-nav pagination justify-content-end"></ul>
    </div>
    <!--tours sugesstion-->
    <div class="tours tours-sugesstion">
        <a href="">
            <h2 class="title">Có thể bạn sẽ thích</h2>
        </a>
        <div class="tours-wrapper">
            @foreach ($tours_new as $item)
                <div class="tour-item">
                    <div class="tour-item-wrapper ani-box-shawdow">
                        <div class="tour-header">
                            <a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}">
                                <img width="273px;" height="217px;" class="ani-img-zoom" src="{{asset('local/storage/app/images/tour/poster/'.$item->tour_poster)}}" alt="ảnh tour">
                            </a>
                            <div class="tour-tag">{{$item->cate_name}}</div>
                        </div>
                        <div class="tour-content">
                            <div class="tour-title">
                                <h5><a href="{{asset('/detail/'.$item->tour_id.'/'.$item->tour_slug.'.html')}}">{{$item->tour_name}}</a></h5>
                            </div>
                            <div class="tour-rate">
                                <span class="tour-star">
                                    @if ($item->cmt_avg_score !== NULL)
                                    @for ($i = 0; $i < $item->cmt_avg_score; $i++)
                                        <i class="fas fa-star yellow"></i>
                                    @endfor
                                    @endif
                                </span>
                                <span class="tour-review">{{$item->cmt_count}} reviews</span>
                            </div>
                            <div class="tour-info">
                                <div class="tour-price">Giá từ <span class="price">{{number_format($item->tour_price,0,',','.')}}</span> VNĐ</div>
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
    <!--tours sugesstion end-->

    <!--mailchimp-->
    @include('frontend.layout.mailchimp')
    <!--mailchimp end-->
</div>
@endsection
@section('scriptjs')
<script>
    //Split page
    $(document).ready(function () {

        function ThemNavPage() {
            var pageNav = $('.page-nav');
            var str = '<li class="page-item page-pre"><a class="page-link">Trước</a></li>';

            for (var i = 1; i <= pageCount; i++) {
                str += '<li class="page-item page-btn"><a class="page-link">' + i + '</a></li>';
            }
            str += '<li class="page-item page-next"><a class="page-link">Sau</a></li>';
            pageNav.html(str);
        }

        function ChuyenTrang() {
            if (index == 0)
                $('.page-pre').addClass('disabled');
            else
                $('.page-pre').removeClass('disabled');

            if (index == parseInt(pageCount - 1))
                $('.page-next').addClass('disabled');
            else
                $('.page-next').removeClass('disabled');

            for (var i = 0; i < pageCount; i++) {
                if (i == index) {
                    tourPage[i].forEach(function (element) {
                        element.removeClass('d-none')
                    });
                } else {
                    tourPage[i].forEach(function (element) {
                        element.addClass('d-none')
                    });
                }
            }
        }

        function SplitPage() {
            index = 0;
            count = tourInput.length;
            pageCount = parseInt(count / ITEM_ON_ONE_PAGE);
            tourPage = [];

            if (count % ITEM_ON_ONE_PAGE != 0)
                pageCount++;

            j = 0;
            var arr = [];
            for (var i = 0; i < count; i++) {
                arr.push(tourInput.eq(i));
                if ((i + 1) % ITEM_ON_ONE_PAGE == 0 || i == count - 1) {
                    tourPage.push(arr);
                    arr = [];
                    j++;
                }
            }
            tourItems.addClass('d-none');
            tourInput.removeClass('d-none');

            for (var i = 1; i < pageCount; i++) {
                tourPage[i].forEach(function (element) {
                    element.addClass('d-none');
                });
            }
            
            if(count == 0){
                if(!$(".tours-result-wrapper h5").hasClass('filter-result'))
                    $(".tours-result-wrapper").append("<h5 class='filter-result'>Không có kết quả</h5>");
            }else{
                $(".filter-result").remove();
            }
            console.log(index + " " + count + " " + pageCount);
        }

        function SetTourObiject() {
            tourObjects = [];
            for (var i = 0; i < count; i++) {
                var pri = parseInt(tourInput.eq(i).find('.price').text().replace('.', ''));
                var sco = parseInt(tourInput.eq(i).find('.tour-star').find('.yellow').length);
                var tour = {
                    price: pri,
                    score: sco
                }
                tourObjects.push(tour);
            }
        }

        function SetOnCLick() {
            var pageBtn = $('.page-btn');
            pageBtn.eq(index).addClass('active');
            $('.page-pre').addClass('disabled');
            if (index >= parseInt(pageCount - 1))
                $('.page-next').addClass('disabled');
            pageBtn.click(function () {
                pageBtn.eq(index).removeClass('active');
                index = $(this).index() - 1;
                pageBtn.eq(index).addClass('active');
                ChuyenTrang();
            });

            $('.page-pre').click(function () {
                if ($(this).hasClass('disabled'))
                    return;
                pageBtn.eq(index).removeClass('active');
                index--;
                pageBtn.eq(index).addClass('active');

                ChuyenTrang();
            });

            $('.page-next').click(function () {
                if ($(this).hasClass('disabled'))
                    return;
                pageBtn.eq(index).removeClass('active');
                index++;
                pageBtn.eq(index).addClass('active');

                ChuyenTrang();
            });
        }

        function Loc(price1, price2, score) {
            tourInput.removeClass("isSplit");
            tourItems.removeClass('d-none');
            for (var i = 0; i < tourItems.length; i++) {
                if (price2 == null) {
                    if (score == 0) {
                        if (price1 <= tourObjects[i].price)
                            tourItems.eq(i).addClass("isSplit");
                    } else {
                        if (price1 <= tourObjects[i].price && tourObjects[i].score == score)
                            tourItems.eq(i).addClass("isSplit");
                    }
                }
                else {
                    if (score == 0) {
                        if (price1 <= tourObjects[i].price && tourObjects[i].price <= price2)
                            tourItems.eq(i).addClass("isSplit");
                    } else {
                        if (price1 <= tourObjects[i].price && tourObjects[i].price <= price2 && tourObjects[i].score == score)
                            tourItems.eq(i).addClass("isSplit");
                    }
                }
            }
            tourInput = $(".isSplit");
            SplitPage();
            ThemNavPage();
            SetOnCLick();
        }

        const ITEM_ON_ONE_PAGE = 8;
        var index;
        var tourItems = $(".tours-result-content .tour-item");
        var count;
        var pageCount;
        var tourObjects = [];
        var tourPage = [];
        var tourInput = tourItems;

        SplitPage();
        SetTourObiject();
        ThemNavPage();
        SetOnCLick();

        $('#btn-filter').click(function () {
            var valPrice = $('#idPrice').val();
            var valScore = $('#idScore').val();

            if (valPrice == 0) {
                Loc(0, null, valScore);
            }
            if (valPrice == 1) {
                Loc(0, 4999, valScore);
            }
            if (valPrice == 2) {
                Loc(5000, 9999, valScore);
            }
            if (valPrice == 3) {
                Loc(10000, 14999, valScore);
            }
            if (valPrice == 4) {
                Loc(15000, 19999, valScore);
            }
            if (valPrice == 5) {
                Loc(20000, null, valScore);
            }
        });
    
        $('#idSort').change(function(){
            var value = $('#idSort').val();
            SoSanhGia();
        });
        
    });
</script>
@endsection