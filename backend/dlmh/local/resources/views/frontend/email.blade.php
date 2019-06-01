<font face="Arial">
<div>
	<div>
		<div></div>
		<h3><font color="#FF9600">Thông tin khách hàng</font></h3>
		<p>
			<strong class="info">Khách hàng: </strong>
			{{$info['name']}}
		</p>
		<p>
			<strong class="info">Email: </strong>
			{{$info['email']}}
		</p>
		<p>
			<strong class="info">Điện thoại: </strong>
			{{$info['phone']}}
		</p>
		<p>
			<strong class="info">Địa chỉ: </strong>
			{{$info['add']}}
		</p>
	</div>						
	<div id="hoa-don">
		<h3><font color="#FF9600">Hóa đơn mua hàng</font></h3>							
		<table border="1" cellspacing="0">
			<tr>
				<td width="30%"><strong>Tên sản phẩm</strong></td>
				<td width="25%"><strong>Giá</strong></td>
				<td width="20%"><strong>Số lượng</strong></td>
				<td width="15%"><strong>Thành tiền</strong></td>
			</tr>
			@foreach ($cart as $item)
			<tr>
				<td>{{$item->name}}</td>
				<td>{{number_format($item->price,0,',','.')}} VNĐ</td>
				<td>{{$item->quantity}}</td>
				<td>{{number_format($item->price*$item->quantity,0,',','.')}} VNĐ</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="3" align="right">Tổng tiền:</td>
				<td class="total-price">{{number_format($total,0,',','.')}} VNĐ</td>
			</tr>
		</table>
	</div>
	<div id="xac-nhan">
		<br>
		<p align="justify">
			<h3><font color="#FF9600">Quý khách đã đặt hàng thành công!</font></h3><br />
			<p>• Hóa đơn mua hàng của quý khách đã được chuyển đến địa chỉ Email có trong phần Thông tin khách hàng của chúng Tôi.</p><br />
			<p>• Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p><br />
			<p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.</p><br />
			<b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
		</p>
	</div>
</div>
</font>				
