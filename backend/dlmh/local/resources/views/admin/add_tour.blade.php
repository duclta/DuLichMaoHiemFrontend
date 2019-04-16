@extends('admin.layout.master')
@section('title','Add tour')
@section('main')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Thêm tour</h1>
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
                                <input required class="form-control" name="name" id="inputName" type="text" placeholder="Nhập tên tour">
                            </div>
                            <div class="form-group">
                                <label for="inputOverview">Giới thiệu</label>
                                <textarea required class="form-control" name="introduction" id="inputOverview" rows="6" placeholder="Giới thiệu về tour"></textarea>
                            </div>
                            <fieldset class="form-group">
                                <a href="javascript:void(0)" onclick="$('#pro_image').click()">Chọn ảnh</a>
                                <input type="file" id="pro_image" name="pictour[]" style="display: none;"
                                    class="form-control" accept="image/*" multiple="multiple">
                            </fieldset>
                            <div class="preview-images-zone">
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-1">
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputSize">Số lượng</label>
                                    <input required class="form-control" name="quantity" id="inputSize" type="number" min="1">
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputPrice">Giá</label>
                                    <input required class="form-control" name="price" id="inputPrice" type="number" min ="1">
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label for="selectKind">Thể loại</label>
                                <select name="cate" required class="form-control" id="selectKind">
                                    @foreach ($catelist as $cate)
                                        <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputStartDate">Ngày bắt đầu</label>
                                    <input required name="departure_date" class="form-control datepicker" id="inputStartDate" type="date">
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputEndDate">Ngày kết thúc</label>
                                    <input required name="return_date" class="form-control datepicker" id="inputEndDate" type="date">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 10px;">
                            <h3>Lịch trình</h3>
                            <div class="list-lich-trinh">
                                <div class="row lich-trinh pb-3">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label class="control-label" for="inputNgay1">Ngày</label>
                                                        <input required class="form-control" name="day1" id="inputNgay1" type="number" min="1" value="1">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputTitle1">Tiêu đề</label>
                                                    <input required class="form-control" name="title1" id="inputTitle1" type="text"
                                                        placeholder="Nhập tiêu đề">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn ảnh</label>
                                                    <input required class="form-control" type="file" name="img1" id="img1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="inputOverview1">Nội dung</label>
                                            <textarea required class="form-control" id="inputOverview1" rows="5"
                                                placeholder="Giới thiệu về lịch trình" name="content1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-left">
                                        <button class="btn btn-danger btn-xoa-lich-trinh" type="button"
                                            onclick=xoaLichTrinh()>Xóa lịch trình</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button class="btn btn-info" id="addLichTrinh" type="button" onclick=themLichTrinh()>Thêm lịch trình</button>
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
@endsection
@section('scriptjs')
    <!--Upload image && Them va Xoa lich trinh-->
<script type="text/javascript">
    var i = 1;
    
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
            $(this).parent().parent().parent().parent().parent().remove();
        });
    }

    $(document).ready(xoaLichTrinh())

    //upload img
    $(document).ready(function () {
        document.getElementById('pro_image').addEventListener('change', readImage, false);

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
            // let temp = $("#pro_image").files;
            // console.log(temp);
            // var names = [];
            // for (var i = 0; i < $("#pro_image").get(0).files.length; ++i) {
            //     names.push($("#pro_image").get(0).files[i].name);
            // }
            // console.log(names);
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