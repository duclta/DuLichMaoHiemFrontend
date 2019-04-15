@extends('admin.layout.master')
@section('title','List comments')
@section('main')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Danh sách comment</h1>
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
                                <th>Tên người đăng</th>
                                <th>Nội dung</th>
                                <th>Score</th>
                                <th>Trạng thái</th>
                                <th>Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($commentlist as $item)
                            <tr>
                                    <td>{{$item->cmt_id}}</td>
                                    <td>{{$item->cmt_name}}</td>
                                    <td>{{$item->cmt_content}}</td>
                                    <td>{{$item->cmt_score}}</td>
                                    <td>@if ($item->cmt_status == 1)
                                        Đã xem
                                    @else
                                        Chưa xem
                                    @endif</td>
                                    <td class="p-1 text-center">
                                        <div class="btn-group"><a class="btn btn-danger" href="{{asset('comment/delete/'.$item->cmt_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-lg fa-trash"></i> Xóa</a></div>
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