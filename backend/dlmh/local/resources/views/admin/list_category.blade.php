@extends('admin.layout.master')
@section('title','List thể loại')
@section('main')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Danh sách thể loại</h1>
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
                <th>Tên thể loại</th>
                <th>Poster</th>
                <th>Nổi bật</th>
                <th>Công cụ</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($catelist as $item)
              <tr>
                  <td>{{$item->cate_id}}</td>
                  <td>{{$item->cate_name}}</td>
                  <td>
                      <img height="150px" src="{{asset('local/storage/app/images/category/poster/'.$item->cate_poster)}}" class="thumbnail" alt="Không tìm thấy hình ảnh">
                  </td>
                  <td>
                      @if ($item->cate_featured == true)
                          Có
                      @else
                          Không
                      @endif
                  </td>
                  <td class="p-1 text-center">
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{asset('admin/category/edit/'.$item->cate_id)}}"><span class="fa fa-lg fa-edit"></span>Sửa</a>
                      <a class="btn btn-danger" href="{{asset('admin/category/delete/'.$item->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><span class="fa fa-lg fa-trash"></span>Xóa</a>
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