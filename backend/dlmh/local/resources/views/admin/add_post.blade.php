@extends('admin.layout.master')
@section('title','Add post')
@section('main')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Thêm bài đăng</h1>
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
                        <form>
                            <div class="form-group">
                                <fieldset>
                                    <label class="control-label" for="inputID">ID</label>
                                    <input class="form-control" id="inputID" type="text" readonly="" value="154721">
                                </fieldset>
                            </div>
                            <fieldset class="form-group">
                                <a href="javascript:void(0)" onclick="$('#pro-image').click()">Chọn ảnh</a>
                                <input type="file" id="pro-image" name="pro-image" style="display: none;"
                                    class="form-control" multiple>
                            </fieldset>
                            <div class="preview-images-zone">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <label for="inputName">Tên bài đăng</label>
                                <input class="form-control" id="inputName" type="text"
                                    placeholder="Nhập tên bài đăng">
                            </div>
                            <div class="form-group">
                                <label for="inputContent">Nội dung</label>

                                <textarea class="form-control" id="inputContent" rows="10"
                                    aria-describedby="contentHelp" placeholder="Nhập nội dung"></textarea>
                                <small class="form-text text-muted" id="contentHelp">*Nhập (img) để chèn hình ảnh
                                    vào
                                    nội dung</small>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection