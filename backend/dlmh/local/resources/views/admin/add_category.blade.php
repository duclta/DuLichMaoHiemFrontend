@extends('admin.layout.master')
@section('title','Add Category')
@section('main')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Thêm thể loại</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        @include('errors.note')
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Tên thể loại</label>
                                <input required class="form-control" id="name" name="name" type="text" placeholder="Nhập tên thể loại mới">
                            </div>
                            <div class="form-group" >
                                <label>Ảnh bìa</label>
                                <input required id="poster" type="file" name="poster" class="form-control hidden" onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" height="300px" src="img/new_seo-10-512.png">
                            </div>
                            <div class="form-group" >
                                <label>Thể loại nổi bật</label><br>
                                Có: <input type="radio" name="featured" value="1">
                                Không: <input type="radio" checked name="featured" value="0">
                            </div>
                            <div class="tile-footer">
                                <button class="btn btn-primary" name="submit" type="submit">Thêm mới</button>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection