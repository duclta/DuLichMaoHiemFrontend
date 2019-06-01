@extends('admin.layout.master')
@section('title','List tours')
@section('main')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Danh sách tours</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên tour</th>
                <th>Thể loại</th>
                <th>Số lượng</th>
                <th>Đã đặt</th>
                <th>Số lượng ngày</th>
                <th>Số lượng đêm</th>
                <th>Mới</th>
                <th>Nổi Bật</th>
                <th>Công cụ</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tourlist as $item)
              <tr>
                  <td>{{$item->tour_id}}</td>
                  <td>{{$item->tour_name}}</td>
                  <td>{{$item->cate_name}}</td>
                  <td>{{$item->tour_quantity}}</td>
                  <td>{{$item->tour_quantity_purchased}}</td>
                  <td>{{$item->tour_number_day}}</td>
                  <td>{{$item->tour_number_night}}</td>
                  <td>@if ($item->tour_new == true)
                        <i class="fa fa-check fa-lg">
                      @endif
                  </td>
                  <td>@if ($item->tour_featured == true)
                        <i class="fa fa-check fa-lg">
                      @endif
                  </td>
                  <td class="p-1 text-center">
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{asset('admin/tour/edit/'.$item->tour_id)}}"><i class="fa fa-lg fa-edit"></i>Sửa</a>
                      <a class="btn btn-danger" href="{{asset('admin/tour/delete/'.$item->tour_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-lg fa-trash"></i>Xóa</a>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
@include('admin.layout.datatablejs')
@endsection