@extends('admin.layout.master')
@section('title','List tickets')
@section('main')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Danh sách vé</h1>
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
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>SL người lớn</th>
                                    <th>SL trẻ em</th>
                                    <th>Tên tour</th>
                                    <th>Tình Trạng</th>
                                    <th>Công cụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ticketlist as $item)
                                <tr>
                                    <td>{{$item->ticket_id}}</td>
                                    <td>{{$item->ticket_cus_name}}</td>
                                    <td>{{$item->ticket_cus_phone}}</td>
                                    <td>{{$item->ticket_cus_email}}</td>
                                    <td>{{$item->ticket_number_of_adults}}</td>
                                    <td>{{$item->ticket_number_of_children}}</td>
                                    <td><a href="{{asset('admin/tour/edit/'.$item->tour_id)}}">{{$item->tour_name}}</a></td>
                                    <th>
                                        @if ($item->ticket_status == 0)
                                            Chưa xác nhận
                                        @elseif($item->ticket_status == 1)
                                            Chưa thanh toán
                                        @elseif($item->ticket_status == 2)
                                            Đã thanh toán
                                        @else
                                            Quá hạn
                                        @endif
                                    </th>
                                    <td class="p-1 text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{asset('admin/ticket/edit'.$item->ticket_id)}}"><i class="fa fa-lg fa-edit"></i>Sửa</a>
                                            <a class="btn btn-danger" href="{{asset('admin/ticket/delete'.$item->ticket_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-lg fa-trash"></i>Xóa</a>
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