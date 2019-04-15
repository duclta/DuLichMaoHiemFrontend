@extends('admin.layout.master')
@section('title','Edit ticket')
@section('main')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Chỉnh sửa vé</h1>
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
                            <div class="form-group">
                                <label for="inputName">Tên khách hàng</label>
                                <input class="form-control" id="inputName" type="text"
                                    placeholder="Nhập tên khách hàng">
                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Số điện thoại</label>
                                <input class="form-control" id="inputPhone" type="text"
                                    placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input class="form-control" id="inputEmail" type="text" placeholder="Nhập email">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <fieldset>
                                        <label class="control-label" for="inputSizeNL">Số lượng người lớn</label>
                                        <input class="form-control" id="inputSizeNL" type="text"
                                            placeholder="Nhập số lượng người lớn">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <label class="control-label" for="inputSizeTE">Số lượng trẻ em</label>
                                        <input class="form-control" id="inputSizeTE" type="text"
                                            placeholder="Nhập số lượng trẻ em">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <label class="control-label" for="inputIDTour">ID tour</label>
                                        <input class="form-control" id="inputIDTour" type="text"
                                            placeholder="ID tour" readonly="">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <label class="control-label" for="inputNameTour">Tên tour</label>
                                        <input class="form-control" id="inputNameTour" type="text"
                                            placeholder="Tên tour" readonly="">
                                    </fieldset>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tile-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection