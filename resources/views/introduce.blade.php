@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Giới thiệu Đồ án cuối kỳ</h2>
          <div class="clr"></div>
          
           <!--Text trong content-->
            <p><b style="font-size: 20px">Website gồm các chức năng chính sau:</b></p>
			<ul>
				<li><b style="color: blue">Đối với nhóm người dùng Khách viếng thăm (Guest):</b>
					<ul>
						<li>Đăng ký tài khoản đọc giả của hệ thống (thông tin đăng ký ít nhất là 6 thông tin).</li>
						<li>Xem thông tin các hãng xe.</li>
						<li>Xem thông tin san phẩm chi tiết trong từng hãng</li>
						<li>Tìm kiếm cơ bản: Tìm theo hãng, tìm kiếm xe theo tên.</li>
						<li>Tìm kiếm nâng cao: Tìm sản phẩm theo tên, giá cả, chủng loại, thông tin.</li>
					</ul>
				</li>
				<li><b style="color: blue">Đối với nhóm người dùng khách hàng (Customer):</b>
					<ul>
						<li>Đăng nhập hệ thống Site khách hàng</li>
						<li>Cập nhật thông tin cá nhân của tài khoản</li>
						<li>Từ chối tham gia hệ thống</li>
						<li>Đặt hàng siêu thị và thanh toán</li>
						<li>Xem thông tin lịch sử quá trình mua hàng qua các hóa đơn và tình trạng hóa đơn mới.</li>
					</ul>
				</li>
				<li><b style="color: blue">Đối với nhóm người dùng quản trị (Admin):</b>
					<ul>
						<li>Đăng nhập hệ thống Site quản lý</li>
						<li>Cập nhật thông tin cá nhân của tài khoản</li>
						<li>Quản lý các tài khỏan của người dùng (Thêm, Xóa, Cập nhật). Lưu ý không xóa tài khoản Admin hiện đang sử dụng.</li>
						<li>Quản lý hệ thống gian hàng (Thêm, Xóa, Cập nhật)</li>
						<li>Quản lý sản phẩm trên gian hàng. (Thêm, Xóa, Cập nhật)</li>
						<li>Quản lý đơn đặt hàng (đã giao, chưa giao, đang giao)</li>
					</ul>
				</li>	
			</ul>
          
          <div class="clr"></div>
        </div>
      </div>
      @include('includes.sidebarright')
      <div class="clr"></div>
    </div>
  </div>
  @stop

