@extends('admin.layout.master')
@section('title','Edit tour')
@section('main')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Sửa tour</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                @include('errors.note')
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inputName">Tên tour</label>
                                <input required class="form-control" name="name" id="inputName" type="text" value="{{$tour->tour_name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputOverview">Giới thiệu</label>
                                <textarea required class="form-control" name="introduction" id="inputOverview" rows="6" >{{$tour->tour_introduction}}</textarea>
                            </div>
                            <div class="form-group" >
                                <label>Ảnh bìa</label>
                                <input required id="poster" type="file" name="poster" class="form-control hidden" onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" height="200px" src="{{asset('local/storage/app/images/tour/poster/'.$tour->tour_poster)}}">
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-1">
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputSize">Số lượng</label>
                                    <input required class="form-control" name="number" id="inputSize" type="number" min="1" value="{{$tour->tour_number}}">
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputPrice">Giá</label>
                                    <input required class="form-control" name="price" id="inputPrice" type="number" min ="1" value="{{$tour->tour_price}}">
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label for="selectKind">Thể loại</label>
                                <select name="cate" required class="form-control" id="selectKind">
                                    @foreach ($catelist as $cate)
                                        @if ($cate->cate_id == $tour->tour_cate)
                                            <option value="{{$cate->cate_id}}" selected>{{$cate->cate_name}}</option>
                                        @else
                                            <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputStartDate">Ngày bắt đầu</label>
                                    <input required name="departure_date" class="form-control datepicker" id="inputStartDate" type="date" value="{{$tour->tour_departure_date}}">
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputEndDate">Ngày kết thúc</label>
                                    <input required name="return_date" class="form-control datepicker" id="inputEndDate" type="date" value="{{$tour->tour_return_date}}">
                                </fieldset>
                            </div>
                            <div class="form-group" >
                            <label>Tour mới</label><br>
                                Có: <input type="radio" name="new" value="1" @if ($tour->tour_new == true) checked @endif>
                                Không: <input type="radio" name="new" value="0"  @if ($tour->tour_new == false) checked @endif>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3>Lịch trình</h3>
                        <div class="list-lich-trinh">
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($schedulelist as $item)
                            <div class="row lich-trinh pb-3">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label class="control-label" for="inputNgay{{$index}}">Ngày</label>
                                                        <input required class="form-control" name="day{{$index}}" id="inputNgay{{$index}}" type="number" min="1" value="{{$item->schedule_day}}">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputTitle{{$index}}">Tiêu đề</label>
                                                    <input required class="form-control" name="title{{$index}}" id="inputTitle{{$index}}" type="text"
                                                        placeholder="Nhập tiêu đề" value="{{$item->schedule_title}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn ảnh</label>
                                                    <input required class="form-control" type="file" name="img{{$index}}" id="img{{$index}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="inputOverview{{$index}}">Nội dung</label>
                                            <textarea required class="form-control" id="inputOverview{{$index}}" rows="5"
                                                placeholder="Giới thiệu về lịch trình" name="content{{$index}}">{{$item->schedule_content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-left">
                                        <button class="btn btn-danger btn-xoa-lich-trinh" type="button"
                                            onclick=xoaLichTrinh()>Xóa lịch trình</button>
                                    </div>
                                </div>
                                @php
                                    $index++;
                                @endphp
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <button class="btn btn-info" id="addLichTrinh" type="button" onclick=themLichTrinh()>Thêm lịch trình</button>
                                <input hidden id="countSchedule" type="number" value="{{$index}}">
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" name="submit" value="Thêm" type="submit">Thêm</button>
                        <a href="{{asset('admin/tour/')}}" class="btn btn-danger">Hủy bỏ</a>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</main>
<!--Upload image && Them va Xoa lich trinh-->

<script type='text/javascript'>
    var x = document.getElementById("countSchedule").getAttribute("value");
    //console.log(x);
    let i = x;

    
    function themLichTrinh() {
        i++;
        let schedule =
        `<div class="row lich-trinh pb-3">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <fieldset>
                                <label class="control-label" for="inputNgay${i}">Ngày</label>
                                <input required class="form-control" name="day${i}" id="inputNgay${i}" type="number" min="1" value="${i}">
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputTitle${i}">Tiêu đề</label>
                            <input required class="form-control" name="title${i}" id="inputTitle${i}" type="text"
                                placeholder="Nhập tiêu đề">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Chọn ảnh</label>
                            <input required class="form-control" type="file" name="img${i}" id="img${i}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputOverview${i}">Nội dung</label>
                    <textarea required class="form-control" id="inputOverview${i}" rows="5"
                        placeholder="Giới thiệu về lịch trình" name="content${i}"></textarea>
                </div>
            </div>
            <div class="col-lg-12 text-left">
                <button class="btn btn-danger btn-xoa-lich-trinh" type="button"
                    onclick=xoaLichTrinh()>Xóa lịch trình</button>
            </div>
        </div>`

        $(".list-lich-trinh").append(schedule);
        xoaLichTrinh();
    }

    function xoaLichTrinh() {
        var btn = $(".btn-xoa-lich-trinh")
        btn.eq(btn.length -1).click(function(){
            $(this).parent().parent().remove();
        });
    }

    $(document).ready(xoaLichTrinh())

    //upload img
    $(document).ready(function () {
        document.getElementById('pro-image').addEventListener('change', readImage, false);

        $(".preview-images-zone").sortable();

        $(document).on('click', '.image-cancel', function () {
            let no = $(this).data('no');
            $(".preview-image.preview-show-" + no).remove();
        });
    });

    var num = 4;
    function readImage() {
        if (window.File && window.FileList && window.FileReader) {
            var files = event.target.files; //FileList object
            var output = $(".preview-images-zone");

            for (let i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image')) continue;

                var picReader = new FileReader();

                picReader.addEventListener('load', function (event) {
                    var picFile = event.target;
                    var html = '<div class="preview-image preview-show-' + num + '">' +
                        '<div class="image-cancel" data-no="' + num + '">x</div>' +
                        '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                        '</div>';

                    output.append(html);
                    num = num + 1;
                });

                picReader.readAsDataURL(file);
            }
            $("#pro-image").val('');
        } else {
            console.log('Browser not support');
        }
    }

    $(document).ready(function () {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            
            if (dd < 10) {
                dd = '0' + dd
            }

            if (mm < 10) {
                mm = '0' + mm
            }
            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("inputStartDate").value = today;
            document.getElementById("inputEndDate").value = today;
    });
</script>
@endsection